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
        max-width: 600px;
        width: 100%;
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    .container h1 {
        color: var(--nut-brown);
        margin-bottom: 1.5rem;
        font-size: 2rem;
        text-align: center;
        font-weight: 700;
    }

    .form-label {
        color: var(--nut-brown);
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        font-size: 1rem;
    }

    .form-control {
        background: #fff;
        color: var(--nut-dark);
        border: 2px solid rgba(210, 105, 30, 0.3);
        border-radius: 10px;
        padding: 0.8rem 1rem;
        margin-bottom: 1.2rem;
        width: 100%;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--nut-light);
        outline: none;
        box-shadow: 0 0 0 3px rgba(210, 105, 30, 0.1);
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
        margin: 1.5rem auto 0;
        width: 100%;
        transition: all 0.3s ease;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), #5D4037);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
    }

    textarea.form-control {
        height: 100px;
        resize: vertical;
    }

    .order-summary {
        background: rgba(255, 248, 220, 0.3);
        padding: 1.5rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    .order-summary h3 {
        color: var(--nut-brown);
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .order-summary p {
        color: var(--nut-dark);
        margin: 0.5rem 0;
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .container {
            padding: 2rem 1.5rem;
            margin: 1rem;
        }
        
        .container h1 {
            font-size: 1.8rem;
        }
        
        .btn-nut {
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
        
        .container h1 {
            font-size: 1.6rem;
        }
        
        .form-control {
            padding: 0.7rem 0.9rem;
        }
    }
</style>

<div class="container">
    <h1>Оформлення замовлення</h1>
    
    <?php if (isset($total) && $total > 0) : ?>
    <div class="order-summary">
        <h3>Деталі замовлення</h3>
        <p><strong>Сума замовлення:</strong> <?php echo number_format($total, 2); ?> грн</p>
        <p><strong>Кількість товарів:</strong> <?php echo count($cart); ?> шт.</p>
    </div>
    <?php endif; ?>
    
    <form action="/order/checkout" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Ім'я та прізвище</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введіть ваше ім'я" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Адреса доставки</label>
            <textarea class="form-control" id="address" name="address" placeholder="Введіть повну адресу доставки" required></textarea>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Номер телефону</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+38 (0XX) XXX-XX-XX" required>
        </div>
        <button type="submit" class="btn-nut">Підтвердити замовлення</button>
    </form>
</div>