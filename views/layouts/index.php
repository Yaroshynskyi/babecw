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
    <title>Світ Настілок - Магазин настільних ігор</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/808/808439.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --game-primary: #2C3E50; /* Глибокий синій */
            --game-accent: #E74C3C;  /* Яскравий червоний */
            --game-accent-hover: #C0392B;
            --game-light: #ECF0F1;
            --game-dark: #1a252f;
            --game-bg: #F8F9FA;
            --game-info: #3498DB;
        }

        body {
            background: var(--game-bg);
            color: var(--game-primary);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        /* Оновлена шапка сайту */
        .navbar {
            background: linear-gradient(to right, var(--game-dark), var(--game-primary));
            padding: 1rem 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-bottom: 3px solid var(--game-accent);
        }

        .navbar-brand {
            color: white !important;
            font-weight: 800;
            font-size: 1.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.02);
        }

        .brand-highlight {
            color: var(--game-accent);
        }

        .nav-link {
            color: var(--game-light) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: white !important;
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
            background: var(--game-accent);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 70%;
        }

        .dropdown-menu {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }

        .dropdown-item {
            color: var(--game-primary);
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: var(--game-bg);
            color: var(--game-accent);
            transform: translateX(5px);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border: 2px solid var(--game-accent);
            transition: all 0.3s ease;
            background: white;
        }

        .user-avatar:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(231, 76, 60, 0.4);
        }

        .container-content {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(44, 62, 80, 0.1);
        }

        h1 {
            color: var(--game-primary);
            font-weight: 800;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--game-accent);
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        /* Оновлений футер */
        footer {
            background: var(--game-dark);
            color: var(--game-light);
            padding: 3rem 0;
            margin-top: auto;
            border-top: 4px solid var(--game-accent);
        }

        footer p {
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }

        footer .nav-link {
            color: var(--game-light) !important;
            opacity: 0.7;
        }

        footer .nav-link:hover {
            color: white !important;
            opacity: 1;
        }

        footer small {
            color: var(--game-accent);
            font-weight: 600;
            letter-spacing: 1px;
        }

        .footer-icon {
            color: var(--game-accent);
            margin: 0 10px;
            font-size: 1.2rem;
        }

        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }
    </style>
</head>

<body>
    <div class="main-content">
        <?php 
        $flashMessage = \core\Core::get()->session->get('flash_success');
        if (!empty($flashMessage)): 
            \core\Core::get()->session->remove('flash_success');
        ?>
            <div id="flash-msg" class="alert alert-success position-fixed top-0 start-50 translate-middle-x mt-4" style="z-index: 1050; box-shadow: 0 4px 15px rgba(0,0,0,0.2); min-width: 300px; text-align: center;">
                <i class="bi bi-check-circle-fill me-2"></i><?= htmlspecialchars($flashMessage) ?>
            </div>
            <script>
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
                <a href="/boardgames/" class="navbar-brand">
                    <i class="bi bi-dice-6-fill me-2 text-danger"></i>Світ<span class="brand-highlight">Настілок</span>
                </a>
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-3">
                    <li class="nav-item"><a href="/boardgames/" class="nav-link"><i class="bi bi-house-door me-1"></i>Головна</a></li>
                    <li class="nav-item"><a href="/boardgames/games/index" class="nav-link"><i class="bi bi-controller me-1"></i>Каталог ігор</a></li>
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
                            <li><a class="dropdown-item" href="/boardgames/users/logout"><i class="bi bi-box-arrow-right me-2 text-danger"></i>Вийти</a></li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="text-end">
                        <a href="/boardgames/users/login" class="btn btn-outline-light me-2 rounded-pill px-4">Увійти</a>
                        <a href="/boardgames/users/register" class="btn btn-danger rounded-pill px-4">Зареєструватися</a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

        <div class="container container-content">
            <?php if (!empty($Title) && $Title !== 'Каталог настільних ігор' && $Title !== 'Вхід в систему' && $Title !== 'Реєстрація' && $Title !== 'Успішна реєстрація'): ?>
                <div class="text-center">
                    <h1><?= $Title ?></h1>
                </div>
            <?php endif; ?>
            <?= $Content ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="text-center mb-4">
                <i class="bi bi-dice-3-fill footer-icon"></i>
                © 2026 Світ Настілок - Найкращі ігри для вашої компанії
                <i class="bi bi-dice-5-fill footer-icon"></i>
            </p>
            <ul class="nav justify-content-center flex-wrap">
                <li class="nav-item"><a href="/boardgames/site/index" class="nav-link px-3">Головна</a></li>
                <li class="nav-item"><a href="/boardgames/games/index" class="nav-link px-3">Каталог</a></li>
                <li class="nav-item"><a href="/boardgames/information/contacts" class="nav-link px-3">Контакти</a></li>
                <li class="nav-item"><a href="/boardgames/information/services" class="nav-link px-3">Для бізнесу</a></li>
                <li class="nav-item"><a href="/boardgames/information/about" class="nav-link px-3">Про нас</a></li>
            </ul>
            <div class="text-center mt-4">
                <small>🎲 ГРАЙТЕ З ЗАДОВОЛЕННЯМ 🎲</small>
            </div>
        </div>
    </footer>
</body>
</html>