<?php

/** @var string $Title */
/** @var string $Content */

use models\Users;
use core\Cart;

if (empty($Title)) {
    $Title = "";
}
if (empty($Content)) {
    $Content = "";
}
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NutsDelight - Преміум горішки</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/2917/2917633.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --nut-brown: #8B4513;
            --nut-light: #D2691E;
            --nut-gold: #DAA520;
            --nut-cream: #FFF8DC;
            --nut-dark: #5D4037;
            --nut-green: #556B2F;
        }

        body {
            background: linear-gradient(135deg, var(--nut-cream) 0%, #f5f5dc 100%);
            color: var(--nut-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        .navbar {
            background: linear-gradient(to right, var(--nut-brown), var(--nut-light));
            padding: 1rem 0;
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.2);
            border-bottom: 3px solid var(--nut-gold);
        }

        .navbar-brand {
            color: var(--nut-cream) !important;
            font-weight: 700;
            font-size: 1.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--nut-gold) !important;
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--nut-cream) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--nut-gold) !important;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--nut-gold);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 70%;
        }

        .dropdown-menu {
            background: var(--nut-cream);
            border: 2px solid var(--nut-light);
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(139, 69, 19, 0.15);
        }

        .dropdown-item {
            color: var(--nut-dark);
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(to right, var(--nut-light), var(--nut-gold));
            color: white;
            transform: translateX(5px);
        }

        .cart-icon {
            position: relative;
            transition: all 0.3s ease;
        }

        .cart-icon:hover {
            transform: scale(1.1) rotate(-5deg);
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: linear-gradient(45deg, var(--nut-green), var(--nut-light));
            color: white;
            font-size: 0.7rem;
            min-width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--nut-cream);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border: 2px solid var(--nut-gold);
            transition: all 0.3s ease;
        }

        .user-avatar:hover {
            transform: scale(1.1);
            border-color: var(--nut-light);
            box-shadow: 0 0 10px rgba(218, 165, 32, 0.5);
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2.5rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(139, 69, 19, 0.1);
            border: 1px solid rgba(210, 105, 30, 0.2);
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--nut-brown);
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        h1 {
            background: linear-gradient(45deg, var(--nut-brown), var(--nut-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--nut-gold);
        }
        
        footer {
            background: linear-gradient(135deg, #f9f3e9 0%, #f5ebd8 100%);
            color: var(--nut-dark);
            padding: 3rem 0;
            margin-top: auto;
            border-top: 3px solid var(--nut-gold);
            box-shadow: 0 -4px 12px rgba(139, 69, 19, 0.1);
        }

        footer p {
            color: var(--nut-dark);
            font-weight: 600;
            font-size: 1.2rem;
        }

        footer .nav-link {
            color: var(--nut-dark) !important;
            font-weight: 500;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        footer .nav-link:hover {
            color: var(--nut-brown) !important;
            opacity: 1;
            transform: translateY(-2px);
        }

        footer small {
            color: var(--nut-light);
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(139, 69, 19, 0.2);
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(139, 69, 19, 0.3);
        }

        .card {
            background: var(--nut-cream);
            border: 2px solid var(--nut-light);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(139, 69, 19, 0.15);
            border-color: var(--nut-gold);
        }

        .nut-decoration {
            position: relative;
            padding: 20px;
        }

        .nut-decoration::before {
            content: "🥜";
            position: absolute;
            top: -15px;
            left: -15px;
            font-size: 2rem;
            opacity: 0.3;
        }

        .nut-decoration::after {
            content: "🌰";
            position: absolute;
            bottom: -15px;
            right: -15px;
            font-size: 2rem;
            opacity: 0.3;
        }

        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .brand-highlight {
            color: var(--nut-gold);
            font-style: italic;
        }
        
        .footer-nut {
            color: var(--nut-light);
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <div class="main-content">
        <?php 
        $flashMessage = \core\Core::get()->session->get('flash_success');
        if (!empty($flashMessage)): 
            // Одразу видаляємо його з сесії, щоб не показалось після оновлення сторінки
            \core\Core::get()->session->remove('flash_success');
        ?>
            <div id="flash-msg" class="alert alert-success position-fixed top-0 start-50 translate-middle-x mt-4" style="z-index: 1050; box-shadow: 0 4px 15px rgba(0,0,0,0.2); min-width: 300px; text-align: center;">
                <i class="bi bi-check-circle-fill me-2"></i><?= htmlspecialchars($flashMessage) ?>
            </div>
            
            <script>
                // Скрипт, який плавно приховає повідомлення через 3 секунди
                setTimeout(function() {
                    let flashMsg = document.getElementById('flash-msg');
                    if (flashMsg) {
                        flashMsg.style.transition = 'opacity 0.5s ease';
                        flashMsg.style.opacity = '0';
                        setTimeout(() => flashMsg.remove(), 500);
                    }
                }, 3000);
            </script>
        <?php endif; ?>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="navbar-container container-fluid d-flex justify-content-between align-items-center">
                <a href="/" class="navbar-brand">
                    <i class="bi bi-tree-fill me-2"></i>Nuts<span class="brand-highlight">Delight</span>
                </a>
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-3">
                    <li class="nav-item"><a href="/boardgames/" class="nav-link"><i class="bi bi-house-door me-1"></i>Головна</a></li>
                    <li class="nav-item"><a href="/boardgames/games/index" class="nav-link"><i class="bi bi-basket me-1"></i>Каталог ігор</a></li>
                    <li class="nav-item"><a href="/boardgames/cart/index" class="nav-link"><i class="bi bi-cart3 me-1"></i>Кошик</a></li>
                </ul>
                <?php if (\models\Users::IsUserLogged()) : ?>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png" alt="Користувач" width="40" height="40" class="rounded-circle user-avatar">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="/boardgames/users/profile"><i class="bi bi-person-circle me-2"></i>Профіль</a></li>
                            <?php if (\models\Users::isUserAdmin()) : ?>
                                 <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/boardgames/order/index"><i class="bi bi-clipboard-check me-1"></i>Упр. замовленнями</a></li>
                                <li><a class="dropdown-item" href="/boardgames/games/add"><i class="bi bi-plus-circle me-2"></i>Додати нову гру</a></li>
                            <?php endif; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/boardgames/users/logout"><i class="bi bi-box-arrow-right me-2"></i>Вийти</a></li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="text-end">
                        <a href="/boardgames/users/login" class="btn btn-outline-light me-2">Увійти</a>
                        <a href="/boardgames/users/register" class="btn btn-warning">Зареєструватися</a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

        <div class="container nut-decoration my-5">
            <h1 class="text-center mb-4"><?= $Title ?></h1>
            <?= $Content ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="text-center fs-4 mb-4">
                <span class="footer-nut">🥜</span>
                © 2025 NutsDelight - Преміум горішки для вашої родини
                <span class="footer-nut">🌰</span>
            </p>
            <ul class="nav justify-content-center flex-wrap">
                <li class="nav-item"><a href="/site/index" class="nav-link px-3">Головна</a></li>
                <li class="nav-item"><a href="/nuts/index" class="nav-link px-3">Горішки</a></li>
                <li class="nav-item"><a href="/information/contacts" class="nav-link px-3">Контакти</a></li>
                <li class="nav-item"><a href="/information/services" class="nav-link px-3">Послуги</a></li>
                <li class="nav-item"><a href="/information/about" class="nav-link px-3">Про нас</a></li>
                <li class="nav-item"><a href="/information/delivery" class="nav-link px-3">Доставка</a></li>
                <li class="nav-item"><a href="/information/quality" class="nav-link px-3">Якість</a></li>
            </ul>
            <div class="text-center mt-4">
                <small>🍃 Натуральні горіхи з любов'ю до природи 🍃</small>
            </div>
        </div>
    </footer>
</body>

</html>