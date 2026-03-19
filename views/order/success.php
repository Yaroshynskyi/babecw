<?php

/** @var string $Title */
/** @var string $Content */

$Title = "Замовлення успішно оформлено";
$Content = "<p>Дякуємо за ваше замовлення! Ми зв'яжемося з вами найближчим часом.</p>";
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
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        padding: 3rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(139, 69, 19, 0.1);
        max-width: 600px;
        width: 100%;
        text-align: center;
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    h1 {
        color: var(--nut-brown);
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
    }

    p {
        color: var(--nut-dark);
        font-size: 1.1rem;
        margin-bottom: 2rem;
        line-height: 1.5;
    }

    .success-icon {
        font-size: 4rem;
        color: var(--nut-light);
        margin-bottom: 1.5rem;
        display: block;
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
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        margin: 0 0.5rem;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), #5D4037);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
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

    .order-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-top: 1.5rem;
    }

    @media (max-width: 768px) {
        .container {
            padding: 2rem;
            margin: 1rem;
        }
        
        h1 {
            font-size: 1.6rem;
        }
        
        p {
            font-size: 1rem;
        }
        
        .success-icon {
            font-size: 3rem;
        }
        
        .order-actions {
            flex-direction: column;
            gap: 0.8rem;
        }
        
        .btn-nut {
            width: 100%;
            margin: 0;
            padding: 0.9rem;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 1.5rem;
        }
        
        h1 {
            font-size: 1.4rem;
        }
        
        .success-icon {
            font-size: 2.5rem;
        }
    }
</style>
<div class="container">
    <div class="success-icon">✅</div>
    <h1><?= htmlspecialchars($Title) ?></h1>
    <p><?= $Content ?></p>
    
    <div class="order-actions">
        <a href="/" class="btn-nut">На головну</a>
        <a href="/nuts/index" class="btn-nut btn-outline">Продовжити покупки</a>
    </div>
</div>