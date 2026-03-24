<?php

namespace controllers;

use core\Controller;
use models\Games;

class GamesController extends Controller
{
    public function actionIndex()
    {
        // 1. Збираємо параметри фільтру з URL (якщо вони є)
        $filters = [
            'category_id' => $this->get->get('category_id'),
            'min_price' => $this->get->get('min_price'),
            'max_price' => $this->get->get('max_price'),
            'manufacturer' => $this->get->get('manufacturer'),
            'language' => $this->get->get('language'),
            'age' => $this->get->get('age')
        ];

        // 2. Отримуємо ігри з урахуванням фільтрів
        $games = \models\Games::filterGames($filters);

        // 3. Отримуємо дані для випадаючих списків у формі фільтру
        $categories = \models\Categories::getAllCategories();
        $manufacturers = \models\Games::getUniqueValues('manufacturer');
        $languages = \models\Games::getUniqueValues('language');

        // 4. Передаємо все це у файл дизайну
        $this->template->setParam('games', $games);
        $this->template->setParam('categories', $categories);
        $this->template->setParam('manufacturers', $manufacturers);
        $this->template->setParam('languages', $languages);
        $this->template->setParam('current_filters', $filters); // Щоб зберегти вибір у формі
        
        $result = $this->render();
        $result['Title'] = 'Каталог настільних ігор';
        
        return $result;
    }

    public function actionAdd()
    {
        if (!\models\Users::isUserAdmin()) return $this->redirect('/boardgames/');

        if ($this->isPost) {
            $title = $this->post->get('title');
            $price = $this->post->get('price');
            $min_players = $this->post->get('min_players');
            $max_players = $this->post->get('max_players');
            $description = $this->post->get('description');
            $image = $this->post->get('image');
            $category_id = $this->post->get('category_id');
            $manufacturer = $this->post->get('manufacturer');
            $language = $this->post->get('language');
            $playtime = $this->post->get('playtime');
            $age = $this->post->get('age');

            if (empty($title)) $this->addErrorMessage('Назва не вказана');
            if (!is_numeric($price) || $price < 0) $this->addErrorMessage('Некоректна ціна');
            if (empty($min_players) || empty($max_players)) $this->addErrorMessage('Вкажіть кількість гравців');
            if (empty($description)) $this->addErrorMessage('Опис не вказано');
            if (empty($category_id)) $this->addErrorMessage('Категорію не обрано');

            if (!$this->isErrorMessageExists()) {
                \models\Games::addGame($title, $description, $price, $min_players, $max_players, $image, $category_id, $manufacturer, $language, $playtime, $age);
                \core\Core::get()->session->set('flash_success', 'Гру успішно додано до каталогу!');
                return $this->redirect("/boardgames/games/index"); 
            }
        }
        
        $this->template->setParam('categories', \models\Categories::getAllCategories());
        
        $result = $this->render();
        $result['Title'] = 'Додавання нової гри';
        return $result;
    }

    public function actionDelete()
    {
        if (!\models\Users::isUserAdmin()) return $this->redirect('/boardgames/');

        if ($this->isPost) {
            $game_id = $this->post->get('game_id');
            if (!empty($game_id)) {
                $gameModel = new \models\Games();
                $gameModel->deleteGameById($game_id);
                
                // ЗАПИСУЄМО FLASH-ПОВІДОМЛЕННЯ
                \core\Core::get()->session->set('flash_success', 'Гру успішно видалено з бази.');
            }
        }
        return $this->redirect('/boardgames/games/index');
    }

    public function actionUpdate()
    {
        if (!\models\Users::isUserAdmin()) return $this->redirect('/boardgames/');

        $game_id = $this->post->get('game_id');
        if (empty($game_id)) return $this->redirect('/boardgames/games/index');

        $game = \models\Games::getGameById($game_id);

         if ($this->isPost && !empty($this->post->get('title'))) {
            $newData = [
                'title' => $this->post->get('title'),
                'price' => $this->post->get('price'),
                'min_players' => $this->post->get('min_players'),
                'max_players' => $this->post->get('max_players'),
                'description' => $this->post->get('description'),
                'image' => $this->post->get('image'),
                'category_id' => $this->post->get('category_id'),
                'manufacturer' => $this->post->get('manufacturer'),
                'language' => $this->post->get('language'),
                'playtime' => $this->post->get('playtime'),
                'age' => $this->post->get('age')
            ];
            
            $gameModel = new \models\Games();
            $gameModel->updateGameById($game_id, $newData);
            
            \core\Core::get()->session->set('flash_success', 'Зміни успішно збережено!');
            return $this->redirect('/boardgames/games/index');
        }

        $this->template->setParam('game', $game);
        // Передаємо список категорій з БД у форму
        $this->template->setParam('categories', \models\Categories::getAllCategories());
        
        $result = $this->render();
        $result['Title'] = 'Редагування гри';
        return $result;
    }

    public function actionView()
    {
        // 1. Отримуємо ID гри з URL (наприклад, ?id=5)
        $id = $this->get->get('id');
        
        // Якщо ID немає або він порожній — повертаємо в каталог
        if (empty($id)) {
            return $this->redirect('/boardgames/games/index');
        }

        // 2. Шукаємо гру в базі даних за цим ID
        $game = \models\Games::getGameById($id);
        
        // Якщо такої гри не існує — теж повертаємо в каталог
        if (empty($game)) {
            \core\Core::get()->session->set('flash_error', 'Гру не знайдено!');
            return $this->redirect('/boardgames/games/index');
        }

        // 3. Передаємо дані гри у файл дизайну
        $this->template->setParam('game', $game);
        
        $result = $this->render();
        // Встановлюємо назву гри як заголовок сторінки
        $result['Title'] = $game['title'];
        return $result;
    }
    
}