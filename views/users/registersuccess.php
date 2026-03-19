<?php

/** @var string $error_message Повідомлення про помилку*/

use core\Core;

$this->Title = 'Успішна реєстрація';
?>

<style>
    :root {
        --nut-brown: #8B4513;
        --nut-light: #D2691E;
        --nut-gold: #DAA520;
        --nut-cream: #FFF8DC;
        --nut-dark: #5D4037;
        --nut-green: #556B2F;
        --nut-bg: #f9f3e9;
    }

    body {
        background: linear-gradient(135deg, var(--nut-bg) 0%, #f5ebd8 100%);
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
        max-width: 600px;
        padding: 4rem 3rem;
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 30px;
        box-shadow: 
            0 25px 60px rgba(139, 69, 19, 0.18),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 50px rgba(255, 248, 220, 0.6);
        border: 2px solid rgba(218, 165, 32, 0.3);
        margin: 0 auto;
        text-align: center;
        position: relative;
        overflow: hidden;
        animation: containerAppear 0.8s ease-out;
    }

    @keyframes containerAppear {
        from {
            opacity: 0;
            transform: translateY(30px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold), var(--nut-light));
    }

    .success-icon {
        font-size: 5rem;
        color: var(--nut-green);
        margin-bottom: 2rem;
        animation: 
            successBounce 1s ease-out,
            successFloat 3s ease-in-out 1s infinite;
        filter: drop-shadow(0 4px 8px rgba(85, 107, 47, 0.3));
        display: inline-block;
    }

    @keyframes successBounce {
        0% {
            opacity: 0;
            transform: scale(0.3) rotate(-180deg);
        }
        50% {
            opacity: 0.7;
            transform: scale(1.2) rotate(10deg);
        }
        70% {
            transform: scale(0.9) rotate(-5deg);
        }
        100% {
            opacity: 1;
            transform: scale(1) rotate(0deg);
        }
    }

    @keyframes successFloat {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-10px) rotate(5deg);
        }
    }

    .success-message {
        background: linear-gradient(45deg, rgba(85, 107, 47, 0.1), rgba(85, 107, 47, 0.05));
        color: var(--nut-green);
        border-radius: 20px;
        border: 2px solid rgba(85, 107, 47, 0.3);
        padding: 2rem 2.5rem;
        box-shadow: 
            0 10px 25px rgba(85, 107, 47, 0.15),
            inset 0 0 20px rgba(255, 255, 255, 0.5);
        margin-bottom: 2.5rem;
        position: relative;
        overflow: hidden;
        animation: messageAppear 0.6s ease-out 0.3s both;
    }

    @keyframes messageAppear {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .success-message::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(to bottom, var(--nut-green), #8bc34a);
    }

    .success-title {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 1rem;
        color: var(--nut-brown);
        text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.1);
    }

    .success-text {
        font-size: 1.2rem;
        color: var(--nut-light);
        line-height: 1.6;
        margin-bottom: 0;
    }

    .welcome-note {
        color: var(--nut-dark);
        font-size: 1.1rem;
        margin: 2rem 0;
        padding: 1.5rem;
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 15px;
        border: 1px dashed rgba(210, 105, 30, 0.3);
        animation: welcomeAppear 0.6s ease-out 0.6s both;
    }

    @keyframes welcomeAppear {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 2.5rem;
        animation: buttonsAppear 0.6s ease-out 0.9s both;
    }

    @keyframes buttonsAppear {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-nut {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 2.5rem;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .btn-nut::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
        transform: translateY(-3px) scale(1.05);
        box-shadow: 
            0 12px 30px rgba(139, 69, 19, 0.35),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-nut:hover::before {
        left: 100%;
    }

    .btn-nut:active {
        transform: translateY(-1px);
    }

    .btn-nut i {
        font-size: 1.2rem;
        margin-right: 10px;
    }

    .btn-nut-outline {
        background: transparent;
        color: var(--nut-brown);
        border: 2px solid var(--nut-light);
        box-shadow: 0 4px 15px rgba(139, 69, 19, 0.1);
    }

    .btn-nut-outline:hover {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        border-color: transparent;
    }

    .nut-celebration {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 2rem 0;
        animation: nutsCelebrate 1s ease-out 0.5s both;
    }

    @keyframes nutsCelebrate {
        0% {
            opacity: 0;
            transform: translateY(30px) scale(0);
        }
        60% {
            transform: translateY(-10px) scale(1.1);
        }
        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .nut-celebration span {
        font-size: 2.5rem;
        animation: nutSpin 4s linear infinite;
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
    }

    @keyframes nutSpin {
        0% {
            transform: rotate(0deg) scale(1);
        }
        25% {
            transform: rotate(90deg) scale(1.1);
        }
        50% {
            transform: rotate(180deg) scale(1);
        }
        75% {
            transform: rotate(270deg) scale(0.9);
        }
        100% {
            transform: rotate(360deg) scale(1);
        }
    }

    .nut-celebration span:nth-child(1) {
        color: var(--nut-light);
        animation-delay: 0s;
    }

    .nut-celebration span:nth-child(2) {
        color: var(--nut-brown);
        animation-delay: -1s;
    }

    .nut-celebration span:nth-child(3) {
        color: var(--nut-gold);
        animation-delay: -2s;
    }

    .nut-celebration span:nth-child(4) {
        color: var(--nut-green);
        animation-delay: -3s;
    }

    .success-details {
        text-align: left;
        margin-top: 2.5rem;
        padding: 1.5rem;
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.3), rgba(255, 253, 245, 0.3));
        border-radius: 15px;
        border: 1px solid rgba(218, 165, 32, 0.2);
        animation: detailsAppear 0.6s ease-out 1.2s both;
    }

    @keyframes detailsAppear {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .success-details h4 {
        color: var(--nut-brown);
        font-size: 1.3rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .success-details ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .success-details li {
        color: var(--nut-light);
        margin-bottom: 0.8rem;
        padding-left: 2rem;
        position: relative;
        font-size: 1rem;
    }

    .success-details li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--nut-green);
        font-weight: bold;
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .container {
            margin: 1rem;
            padding: 2.5rem 1.5rem;
        }
        
        .success-title {
            font-size: 1.8rem;
        }
        
        .success-text {
            font-size: 1.1rem;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 1rem;
        }
        
        .btn-nut {
            width: 100%;
            justify-content: center;
        }
        
        .nut-celebration span {
            font-size: 2rem;
        }
        
        .success-icon {
            font-size: 4rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 2rem 1rem;
        }
        
        .success-title {
            font-size: 1.6rem;
        }
        
        .success-message {
            padding: 1.5rem;
        }
        
        .nut-celebration {
            gap: 10px;
        }
        
        .nut-celebration span {
            font-size: 1.8rem;
        }
    }
</style>

<div class="container mt-5">
    <div class="success-icon">
        <i class="bi bi-check-circle-fill"></i>
    </div>
    
    <div class="success-message">
        <h2 class="success-title">Вітаємо з успішною реєстрацією!</h2>
        <p class="success-text">Ваш обліковий запис успішно створено у магазині NutsDelight</p>
    </div>
    
    <div class="nut-celebration">
        <span>🥜</span>
        <span>🌰</span>
        <span>🫘</span>
        <span>✅</span>
    </div>
    
    <div class="welcome-note">
        <p>Дякуємо, що обрали наш магазин! Тепер ви можете користуватися всіма перевагами зареєстрованого користувача.</p>
    </div>
    
    <div class="action-buttons">
        <a href="/users/login" class="btn-nut">
            <i class="bi bi-box-arrow-in-right"></i>Увійти в акаунт
        </a>
        <a href="/" class="btn-nut btn-nut-outline">
            <i class="bi bi-house-door"></i>На головну
        </a>
    </div>
    
    <div class="success-details">
        <h4><i class="bi bi-gift-fill"></i> Ваші нові можливості:</h4>
        <ul>
            <li>Швидке оформлення замовлень</li>
            <li>Історія покупок та статус замовлень</li>
            <li>Особисті знижки та акції</li>
            <li>Збереження адреси доставки</li>
            <li>Перегляд та редагування профілю</li>
        </ul>
    </div>
</div>