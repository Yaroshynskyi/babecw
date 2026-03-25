<?php
namespace controllers;

use core\Controller;
use core\Cart;
use models\Games;

class CartController extends Controller
{
    public function actionAdd()
    {
        if ($this->isPost) {
            $game_id = $this->post->get('game_id');
            $game = Games::getGameById($game_id);
            
            if ($game) {
                Cart::addProduct($game);
                \core\Core::get()->session->set('flash_success', 'Гру "' . $game['title'] . '" успішно додано до кошика!');
            }
        }
        return $this->redirect('/boardgames/games/index');
    }

    public function actionIndex()
    {
        $this->template->setParam('cart', Cart::getProducts());
        $this->template->setParam('total', Cart::getTotal());

        $result = $this->render();
        $result['Title'] = 'Мій кошик';
        return $result;
    }

    public function actionRemove()
    {
        if ($this->isPost) {
            $index = $this->post->get('index');
            Cart::removeProduct($index);
            \core\Core::get()->session->set('flash_success', 'Товар видалено з кошика');
        }
        return $this->redirect('/boardgames/cart/index');
    }

    public function actionClear()
    {
        Cart::clearCart();
        return $this->redirect('/boardgames/cart/index');
    }
}