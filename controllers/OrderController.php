<?php
namespace controllers;

use core\Controller;
use core\Cart;
use models\Order;

class OrderController extends Controller
{
    public function actionCheckout()
    {
        $cart = Cart::getProducts();
        
        if (empty($cart)) {
            return $this->redirect('/boardgames/games/index');
        }

        if ($this->isPost) {
            $user = \core\Core::get()->session->get('user');
            $user_id = $user ? $user['id'] : null;

            $name = $this->post->get('customer_name');
            $phone = $this->post->get('phone');
            $address = $this->post->get('address');

            if (empty($name) || empty($phone) || empty($address)) {
                $this->addErrorMessage('Будь ласка, заповніть усі поля!');
            }

            if (!$this->isErrorMessageExists()) {
                Order::createOrder($user_id, $cart, $name, $phone, $address);

                Cart::clearCart();

                \core\Core::get()->session->set('flash_success', '🎉 Ваше замовлення успішно оформлено! Ми зв\'яжемося з вами найближчим часом.');

                return $this->redirect('/boardgames/games/index');
            }
        }

        $this->template->setParam('total', Cart::getTotal());
        $result = $this->render();
        $result['Title'] = 'Оформлення замовлення';
        return $result;
    }

    public function actionIndex()
    {
        if (!\models\Users::IsUserAdmin()) {
            return $this->redirect('/boardgames/');
        }

        $orders = Order::getAllOrders();
        $this->template->setParam('orders', $orders);

        $result = $this->render();
        $result['Title'] = 'Управління замовленнями';
        return $result;
    }

    public function actionChangestatus()
    {
        if (!\models\Users::IsUserAdmin()) {
            return $this->redirect('/boardgames/');
        }

        if ($this->isPost) {
            $order_id = $this->post->get('order_id');
            $status = $this->post->get('status');
            
            if (!empty($order_id) && !empty($status)) {
                Order::updateOrderStatus($order_id, $status);
                \core\Core::get()->session->set('flash_success', 'Статус замовлення #' . $order_id . ' успішно оновлено!');
            }
        }
        
        return $this->redirect('/boardgames/order/index');
    }
}