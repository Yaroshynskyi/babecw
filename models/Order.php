<?php
namespace models;

use core\Model;
use core\Core;

class Order extends Model
{
    public static $tableName = 'orders';

    public static function createOrder($user_id, $cart_items, $name, $phone, $address)
    {
        $order = new Order();
        $order->user_id = $user_id;
        $order->status = 'Нове';
        $order->customer_name = $name;
        $order->phone = $phone;
        $order->address = $address;
        $order->save();
        
        $order_id = Core::get()->db->pdo->lastInsertId();

        $sql = "INSERT INTO order_items (order_id, game_id, quantity, price) VALUES (:order_id, :game_id, :quantity, :price)";
        $stmt = Core::get()->db->pdo->prepare($sql);

        foreach ($cart_items as $item) {
            $stmt->execute([
                ':order_id' => $order_id,
                ':game_id'  => $item['id'],
                ':quantity' => 1,
                ':price'    => $item['price']
            ]);
        }
        
        return $order_id;
    }

    public static function getOrdersByUserId($user_id)
    {
        $sql = "SELECT * FROM " . self::$tableName . " WHERE user_id = :user_id ORDER BY id DESC";
        $stmt = Core::get()->db->pdo->prepare($sql);
        $stmt->execute([':user_id' => $user_id]);
        return $stmt->fetchAll();
    }

    public static function getAllOrders()
    {
        $sql = "SELECT * FROM " . self::$tableName . " ORDER BY id DESC";
        $stmt = Core::get()->db->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public static function updateOrderStatus($id, $status)
    {
        Core::get()->db->update(self::$tableName, ['status' => $status], ['id' => $id]);
    }
}