<?php
namespace models;

use core\Model;
use core\Core;

class Games extends Model
{
    public static $tableName = 'games';

    public static function getGames()
    {
        $rows = self::getAll(self::$tableName);
        if (!empty($rows)) {
            return $rows;
        } else {
            return []; // Повертаємо порожній масив, щоб не ламався foreach у дизайні
        }
    }

    public static function FindByCategory($category_id = null, $sort_price = null, $players = null, $search_title = null)
    {
        $order_by = '';
        if ($sort_price === 'asc') {
            $order_by = ' ORDER BY price ASC';
        } elseif ($sort_price === 'desc') {
            $order_by = ' ORDER BY price DESC';
        }

        $sql = "SELECT * FROM " . static::$tableName;
        $conditions = [];
        $params = [];

        if (!empty($category_id)) {
            $conditions[] = "category_id = :category_id";
            $params[':category_id'] = $category_id;
        }

        // Адаптований фільтр: шукаємо ігри, де кількість гравців підходить
        if (!empty($players)) {
            $conditions[] = "min_players <= :players AND max_players >= :players";
            $params[':players'] = $players;
        }

        if (!empty($search_title)) {
            $conditions[] = "title LIKE :search_title";
            $params[':search_title'] = '%' . $search_title . '%';
        }

        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }

        $sql .= $order_by;

        $sth = Core::get()->db->pdo->prepare($sql);
        foreach ($params as $key => $value) {
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->fetchAll();
    }

    public function deleteGameById($id)
    {
        $this->db->delete('games', ['id' => $id]);
    }

    public function updateGameById($id, $newData)
    {
        $this->db->update('games', $newData, ['id' => $id]);
    }

    public static function addGame($title, $description, $price, $min_players, $max_players, $image, $category_id)
    {
        $game = new Games();
        $game->title = $title;
        $game->description = $description;
        $game->price = $price;
        $game->min_players = $min_players;
        $game->max_players = $max_players;
        $game->image = $image;
        $game->category_id = $category_id;
        $game->save();
    }

    public static function getGameById($id)
    {
        $rows = self::findByCondition(['id' => $id]);
        if (!empty($rows)) {
            return $rows[0];
        }
        return null;
    }
}