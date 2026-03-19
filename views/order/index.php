<?php

/** @var array $rows */

use models\Users;
use models\Order;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'])) {
    $orderId = htmlspecialchars($_POST['order_id']);
}

$rows = Order::getAllOrders();

function renderOrderTable($rows)
{
    $values = array_values($rows);
    ob_start();
?>
<style>
    :root {
        --nut-brown: #8B4513;
        --nut-light: #D2691E;
        --nut-cream: #FFF8DC;
        --nut-dark: #5D4037;
    }

    body {
        background: linear-gradient(135deg, #f9f3e9 0%, #f5ebd8 100%);
        color: var(--nut-dark);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 2rem 1rem;
    }

    .container {
        padding: 2.5rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(139, 69, 19, 0.1);
        max-width: 1200px;
        margin: 0 auto;
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    h2 {
        color: var(--nut-brown);
        font-size: 2rem;
        margin-bottom: 1.5rem;
        text-align: center;
        font-weight: 700;
    }

    .table-wrapper {
        background: rgba(255, 248, 220, 0.3);
        border-radius: 15px;
        padding: 1rem;
        border: 1px solid rgba(210, 105, 30, 0.2);
        overflow-x: auto;
        margin-bottom: 2rem;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        min-width: 800px;
    }

    .table th {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        border: none;
    }

    .table td {
        padding: 1rem;
        border-bottom: 1px solid rgba(210, 105, 30, 0.1);
        color: var(--nut-dark);
    }

    .table tr:nth-child(even) {
        background: rgba(255, 248, 220, 0.1);
    }

    .table tr:hover {
        background: rgba(255, 248, 220, 0.5);
    }

    .btn-nut {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        border: none;
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
        text-decoration: none;
        margin-top: 0.5rem;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), #5D4037);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
    }

    .search-form {
        background: rgba(255, 248, 220, 0.3);
        padding: 1.5rem;
        border-radius: 15px;
        border: 1px solid rgba(210, 105, 30, 0.2);
        margin-top: 2rem;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        color: var(--nut-brown);
        font-weight: 600;
        display: block;
        margin-bottom: 0.5rem;
        font-size: 1rem;
    }

    .form-control {
        background: #fff;
        color: var(--nut-dark);
        border: 2px solid rgba(210, 105, 30, 0.3);
        border-radius: 10px;
        padding: 0.8rem 1rem;
        width: 100%;
        max-width: 300px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--nut-light);
        outline: none;
        box-shadow: 0 0 0 3px rgba(210, 105, 30, 0.1);
    }

    .no-orders {
        text-align: center;
        padding: 3rem;
        color: var(--nut-light);
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .container {
            padding: 1.5rem;
            margin: 1rem;
        }
        
        h2 {
            font-size: 1.6rem;
        }
        
        .table {
            min-width: 600px;
        }
        
        .form-control {
            max-width: 100%;
        }
        
        .btn-nut {
            width: 100%;
            padding: 0.9rem;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 1rem;
        }
        
        h2 {
            font-size: 1.4rem;
        }
        
        .table-wrapper {
            padding: 0.5rem;
        }
        
        .table th,
        .table td {
            padding: 0.7rem;
            font-size: 0.9rem;
        }
    }
</style>

<div class="container mt-4">
    <h2>Список замовлень</h2>
    
    <?php if (!empty($values)) : ?>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ім'я</th>
                    <th>Email</th>
                    <th>Адреса</th>
                    <th>Телефон</th>
                    <th>Дата</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($values as $order) : ?>
                    <tr>
                        <td><strong>#<?= htmlspecialchars($order['id']) ?></strong></td>
                        <td><?= htmlspecialchars($order['name']) ?></td>
                        <td><?= htmlspecialchars($order['email']) ?></td>
                        <td><?= htmlspecialchars($order['address']) ?></td>
                        <td><?= htmlspecialchars($order['phone']) ?></td>
                        <td><?= date('d.m.Y', strtotime($order['created_at'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php else : ?>
        <div class="no-orders">
            <p>Замовлень не знайдено</p>
        </div>
    <?php endif; ?>
    
    <div class="search-form">
        <form method="POST" action="/order/showorder">
            <div class="form-group">
                <label for="order_id">Пошук за номером замовлення</label>
                <input type="text" id="order_id" name="order_id" class="form-control" 
                       placeholder="Введіть ID замовлення">
            </div>
            <button type="submit" class="btn-nut">Знайти замовлення</button>
        </form>
    </div>
</div>
<?php
    return ob_get_clean();
}
?>
<div id="orders-container">
    <?= renderOrderTable($rows) ?>
</div>