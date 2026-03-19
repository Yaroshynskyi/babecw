<?php

/** @var array $rows */
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

    .order-details {
        background: rgba(255, 248, 220, 0.2);
        padding: 1.5rem;
        border-radius: 10px;
        border: 1px solid rgba(210, 105, 30, 0.1);
        margin-bottom: 1.5rem;
    }

    .detail-item {
        margin-bottom: 0.8rem;
        padding-bottom: 0.8rem;
        border-bottom: 1px solid rgba(210, 105, 30, 0.1);
    }

    .detail-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .detail-label {
        color: var(--nut-brown);
        font-weight: 600;
        display: block;
        margin-bottom: 0.3rem;
        font-size: 0.95rem;
    }

    .detail-value {
        color: var(--nut-dark);
        font-size: 1.05rem;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn-nut {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        border: none;
        color: white;
        padding: 1rem 2rem;
        border-radius: 25px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        flex: 1;
        transition: all 0.3s ease;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), #5D4037);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
    }

    .btn-danger {
        background: linear-gradient(45deg, #dc3545, #c82333);
    }

    .btn-danger:hover {
        background: linear-gradient(45deg, #c82333, #bd2130);
    }

    .btn-outline {
        background: transparent;
        color: var(--nut-brown);
        border: 2px solid var(--nut-light);
    }

    .btn-outline:hover {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        border-color: transparent;
    }

    .no-order {
        text-align: center;
        padding: 2rem;
        color: var(--nut-light);
        font-size: 1.2rem;
    }

    .no-order p {
        margin-bottom: 1rem;
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
            padding: 0.9rem 1.5rem;
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
        
        .order-details {
            padding: 1rem;
        }
    }
</style>

<?php if (!empty($rows) && isset($rows[0]['id'], $rows[0]['name'], $rows[0]['email'], $rows[0]['address'], $rows[0]['phone'], $rows[0]['created_at'])) : ?>
    <div class="container mt-4">
        <div class="order-header">
            <h2>Деталі замовлення</h2>
            <div class="order-id">Номер: #<?= htmlspecialchars($rows[0]['id']) ?></div>
        </div>
        
        <div class="order-details">
            <div class="detail-item">
                <span class="detail-label">Ім'я та прізвище</span>
                <span class="detail-value"><?= htmlspecialchars($rows[0]['name']) ?></span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">Email</span>
                <span class="detail-value"><?= htmlspecialchars($rows[0]['email']) ?></span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">Адреса доставки</span>
                <span class="detail-value"><?= htmlspecialchars($rows[0]['address']) ?></span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">Номер телефону</span>
                <span class="detail-value"><?= htmlspecialchars($rows[0]['phone']) ?></span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">Дата створення</span>
                <span class="detail-value"><?= date('d.m.Y H:i', strtotime($rows[0]['created_at'])) ?></span>
            </div>
        </div>

        <form method="POST" action="/order/formtoupdate">
            <input type="hidden" name="id" value="<?= htmlspecialchars($rows[0]['id']) ?>">
            <input type="hidden" name="name" value="<?= htmlspecialchars($rows[0]['name']) ?>">
            <input type="hidden" name="email" value="<?= htmlspecialchars($rows[0]['email']) ?>">
            <input type="hidden" name="address" value="<?= htmlspecialchars($rows[0]['address']) ?>">
            <input type="hidden" name="phone" value="<?= htmlspecialchars($rows[0]['phone']) ?>">
            <input type="hidden" name="created_at" value="<?= htmlspecialchars($rows[0]['created_at']) ?>">
            
            <div class="form-actions">
                <button type="submit" class="btn-nut">Редагувати</button>
                <a href="/order/index" class="btn-nut btn-outline">Назад</a>
            </div>
        </form>

        <form method="POST" action="/order/delete">
            <input type="hidden" name="id" value="<?= htmlspecialchars($rows[0]['id']) ?>">
            <div class="form-actions">
                <button type="submit" class="btn-nut btn-danger">Видалити</button>
            </div>
        </form>
    </div>
<?php else : ?>
    <?php if (isset($_POST['order_id'])) : ?>
        <div class="container">
            <div class="no-order">
                <p>Замовлення #<?= htmlspecialchars($_POST['order_id']) ?> не знайдено</p>
                <a href="/order/index" class="btn-nut btn-outline">Повернутися до списку</a>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>