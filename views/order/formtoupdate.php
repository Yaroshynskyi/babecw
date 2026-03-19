<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'created_at' => $_POST['created_at']
    ];
}
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
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        padding: 2.5rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(139, 69, 19, 0.1);
        max-width: 700px;
        width: 100%;
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    h2 {
        color: var(--nut-brown);
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        text-align: center;
        font-weight: 700;
    }

    .order-header {
        background: rgba(255, 248, 220, 0.3);
        padding: 1rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(210, 105, 30, 0.2);
        text-align: center;
    }

    .order-id {
        color: var(--nut-light);
        font-weight: 600;
        font-size: 1.1rem;
    }

    .form-group {
        margin-bottom: 1.2rem;
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
        font-size: 1rem;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: var(--nut-light);
        outline: none;
        box-shadow: 0 0 0 3px rgba(210, 105, 30, 0.1);
    }

    .form-control[readonly] {
        background: rgba(255, 248, 220, 0.3);
        cursor: not-allowed;
    }

    .btn-nut {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        border: none;
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 25px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        display: block;
        width: 100%;
        margin-top: 1.5rem;
        transition: all 0.3s ease;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), #5D4037);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .btn-outline {
        background: transparent;
        color: var(--nut-brown);
        border: 2px solid var(--nut-light);
    }

    .btn-outline:hover {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
    }

    @media (max-width: 768px) {
        .container {
            padding: 2rem 1.5rem;
            margin: 1rem;
        }
        
        h2 {
            font-size: 1.6rem;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn-nut {
            width: 100%;
            padding: 0.9rem 2rem;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        body {
            padding: 1rem;
        }
        
        .container {
            padding: 1.5rem 1rem;
        }
        
        h2 {
            font-size: 1.4rem;
        }
        
        .form-control {
            padding: 0.7rem 0.9rem;
        }
    }
</style>

<div class="container">
    <div class="order-header">
        <h2>Редагування замовлення</h2>
        <div class="order-id">Замовлення #<?= htmlspecialchars($order['id']) ?></div>
    </div>
    
    <form method="POST" action="/order/update">
        <input type="hidden" name="id" value="<?= htmlspecialchars($order['id']) ?>">
        
        <div class="form-group">
            <label for="name">Ім'я та прізвище</label>
            <input type="text" class="form-control" id="name" name="name" 
                   value="<?= htmlspecialchars($order['name']) ?>" 
                   placeholder="Введіть ім'я" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" 
                   value="<?= htmlspecialchars($order['email']) ?>" 
                   placeholder="your@email.com" required>
        </div>
        
        <div class="form-group">
            <label for="address">Адреса доставки</label>
            <input type="text" class="form-control" id="address" name="address" 
                   value="<?= htmlspecialchars($order['address']) ?>" 
                   placeholder="Введіть адресу" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Номер телефону</label>
            <input type="text" class="form-control" id="phone" name="phone" 
                   value="<?= htmlspecialchars($order['phone']) ?>" 
                   placeholder="+38 (0XX) XXX-XX-XX" required>
        </div>
        
        <div class="form-group">
            <label for="created_at">Дата створення</label>
            <input type="text" class="form-control" id="created_at" name="created_at" 
                   value="<?= htmlspecialchars($order['created_at']) ?>" readonly>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn-nut">Зберегти зміни</button>
            <a href="/order/index" class="btn-nut btn-outline">Скасувати</a>
        </div>
    </form>
</div>