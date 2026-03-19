<?php

/** @var string $error_message Повідомлення про помилку*/

use core\Core;

$this->Title = 'Реєстрація нового користувача';
?>
<style>
    :root {
        --nut-brown: #8B4513;
        --nut-light: #D2691E;
        --nut-gold: #DAA520;
        --nut-cream: #FFF8DC;
        --nut-dark: #5D4037;
        --nut-bg: #f9f3e9;
        --nut-green: #556B2F;
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
        padding: 3rem 2.5rem;
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 25px;
        box-shadow: 
            0 20px 50px rgba(139, 69, 19, 0.15),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 40px rgba(255, 248, 220, 0.5);
        border: 2px solid rgba(218, 165, 32, 0.2);
        position: relative;
        overflow: hidden;
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold), var(--nut-light));
    }

    .container::after {
        content: '🥜';
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 2rem;
        opacity: 0.1;
    }

    h1 {
        color: var(--nut-brown);
        text-align: center;
        margin-bottom: 2.5rem;
        font-weight: 800;
        font-size: 2.5rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        position: relative;
        padding-bottom: 15px;
    }

    h1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        border-radius: 2px;
    }

    .form-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-icon {
        font-size: 3rem;
        color: var(--nut-light);
        margin-bottom: 1rem;
        display: inline-block;
        animation: bounce 3s ease-in-out infinite;
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .alert {
        background: linear-gradient(45deg, #f8d7da, #f5c6cb);
        color: #721c24;
        border-radius: 15px;
        padding: 1.2rem 1.5rem;
        margin-bottom: 2rem;
        border-left: 4px solid #f5c6cb;
        box-shadow: 0 4px 12px rgba(139, 69, 19, 0.1);
        display: flex;
        align-items: center;
        gap: 12px;
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert i {
        font-size: 1.3rem;
        color: #721c24;
        flex-shrink: 0;
    }

    .form-row {
        display: flex;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .form-row .mb-3 {
        flex: 1;
        margin-bottom: 0;
    }

    .mb-3 {
        margin-bottom: 1.8rem;
        position: relative;
    }

    .form-label {
        color: var(--nut-brown);
        font-weight: 600;
        margin-bottom: 0.8rem;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.1rem;
    }

    .form-label i {
        color: var(--nut-light);
        font-size: 1.2rem;
    }

    .form-control {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        color: var(--nut-dark);
        border: 2px solid rgba(210, 105, 30, 0.3);
        border-radius: 15px;
        padding: 1rem 1.5rem;
        width: 100%;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: inset 0 2px 4px rgba(139, 69, 19, 0.1);
    }

    .form-control:focus {
        border-color: var(--nut-light);
        box-shadow: 
            0 0 0 0.25rem rgba(210, 105, 30, 0.25),
            inset 0 2px 4px rgba(139, 69, 19, 0.1);
        outline: none;
        background: white;
    }

    .form-control:hover {
        border-color: var(--nut-light);
    }

    .form-control:focus + .form-icon-inside {
        color: var(--nut-light);
        transform: scale(1.1);
    }

    .form-text {
        color: var(--nut-light);
        font-size: 0.9rem;
        margin-top: 0.5rem;
        font-style: italic;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .form-text i {
        color: var(--nut-gold);
        font-size: 0.9rem;
    }

    .password-strength {
        margin-top: 0.5rem;
        height: 6px;
        background: rgba(139, 69, 19, 0.1);
        border-radius: 3px;
        overflow: hidden;
    }

    .password-strength-bar {
        height: 100%;
        width: 0;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-green));
        border-radius: 3px;
        transition: width 0.3s ease;
    }

    .btn-nut {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1.1rem 3rem;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
        border: none;
        cursor: pointer;
        width: 100%;
        margin-top: 1rem;
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
        transform: translateY(-3px) scale(1.02);
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
        font-size: 1.3rem;
        margin-right: 12px;
    }

    .login-link {
        margin-top: 2rem;
        color: var(--nut-light);
        font-size: 1rem;
        text-align: center;
        padding-top: 1.5rem;
        border-top: 2px dashed rgba(210, 105, 30, 0.3);
    }

    .login-link a {
        color: var(--nut-brown);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 2px solid transparent;
        padding-bottom: 2px;
    }

    .login-link a:hover {
        color: var(--nut-light);
        border-bottom: 2px solid var(--nut-light);
    }

    .nut-decoration {
        text-align: center;
        margin: 1.5rem 0 2.5rem;
    }

    .nut-decoration span {
        font-size: 2rem;
        margin: 0 8px;
        opacity: 0.3;
        display: inline-block;
        animation: spin 8s linear infinite;
    }

    .nut-decoration span:nth-child(2) {
        animation-delay: -2s;
    }

    .nut-decoration span:nth-child(3) {
        animation-delay: -4s;
    }

    @keyframes spin {
        0% { transform: rotateY(0deg); }
        100% { transform: rotateY(360deg); }
    }

    @media (max-width: 768px) {
        .container {
            margin: 1rem;
            padding: 2rem 1.5rem;
        }
        
        h1 {
            font-size: 2rem;
        }
        
        .form-row {
            flex-direction: column;
            gap: 1rem;
        }
        
        .form-icon {
            font-size: 2.5rem;
        }
        
        .btn-nut {
            padding: 1rem 2rem;
            font-size: 1.1rem;
        }
        
        .nut-decoration span {
            font-size: 1.5rem;
            margin: 0 5px;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 1.5rem 1rem;
        }
        
        h1 {
            font-size: 1.8rem;
        }
        
        .form-label {
            font-size: 1rem;
        }
        
        .form-control {
            padding: 0.8rem 1rem;
        }
    }
</style>

<div class="container mt-5">
    <div class="form-header">
        <div class="form-icon">👤</div>
        <h1>Створення акаунта в NutsDelight</h1>
    </div>
    
    <div class="nut-decoration">
        <span>🥜</span>
        <span>🌰</span>
        <span>🫘</span>
    </div>
    
    <form method="post" action="" id="registrationForm">
        <?php if (!empty($error_message)) : ?>
            <div class="alert" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <?php echo htmlspecialchars($error_message) ?>
            </div>
        <?php endif ?>
        
        <div class="mb-3">
            <label for="inputEmail" class="form-label">
                <i class="bi bi-person-badge-fill"></i>Логін
            </label>
            <input name="login" type="text" class="form-control" id="inputEmail" 
                   aria-describedby="emailHelp" placeholder="Введіть ваш логін" required>
            <div id="emailHelp" class="form-text">
                <i class="bi bi-info-circle"></i>Логін має бути унікальним для вашого акаунта
            </div>
        </div>
        
        <div class="form-row">
            <div class="mb-3">
                <label for="inputPassword" class="form-label">
                    <i class="bi bi-key-fill"></i>Пароль
                </label>
                <input name="password" type="password" class="form-control" id="inputPassword" 
                       placeholder="Введіть пароль" required>
                <div class="password-strength">
                    <div class="password-strength-bar" id="passwordStrengthBar"></div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="inputPassword2" class="form-label">
                    <i class="bi bi-key"></i>Підтвердження паролю
                </label>
                <input name="password2" type="password" class="form-control" id="inputPassword2" 
                       placeholder="Повторіть пароль" required>
                <div id="passwordMatch" class="form-text"></div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="mb-3">
                <label for="inputLastName" class="form-label">
                    <i class="bi bi-person-vcard"></i>Прізвище
                </label>
                <input name="lastname" type="text" class="form-control" id="inputLastName" 
                       placeholder="Ваше прізвище" required>
            </div>
            
            <div class="mb-3">
                <label for="inputFirstName" class="form-label">
                    <i class="bi bi-person"></i>Ім'я
                </label>
                <input name="firstname" type="text" class="form-control" id="inputFirstName" 
                       placeholder="Ваше ім'я" required>
            </div>
        </div>
        
        <button type="submit" class="btn-nut">
            <i class="bi bi-person-plus-fill"></i>Зареєструватися
        </button>
        
        <div class="login-link">
            Вже маєте акаунт? <a href="/users/login">Увійти</a>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('inputPassword');
    const passwordConfirmInput = document.getElementById('inputPassword2');
    const strengthBar = document.getElementById('passwordStrengthBar');
    const passwordMatchText = document.getElementById('passwordMatch');
    
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        
        if (password.length >= 8) strength += 25;
        if (/[A-Z]/.test(password)) strength += 25;
        if (/[0-9]/.test(password)) strength += 25;
        if (/[^A-Za-z0-9]/.test(password)) strength += 25;
        
        strengthBar.style.width = strength + '%';
        
        if (strength < 50) {
            strengthBar.style.background = 'linear-gradient(90deg, #ff6b6b, #ff8e8e)';
        } else if (strength < 75) {
            strengthBar.style.background = 'linear-gradient(90deg, #ffa726, #ffb74d)';
        } else {
            strengthBar.style.background = 'linear-gradient(90deg, var(--nut-light), var(--nut-green))';
        }
    });
    
    passwordConfirmInput.addEventListener('input', function() {
        const password = passwordInput.value;
        const confirmPassword = this.value;
        
        if (confirmPassword === '') {
            passwordMatchText.innerHTML = '<i class="bi bi-dash-circle"></i>Введіть пароль для підтвердження';
            passwordMatchText.style.color = 'var(--nut-light)';
        } else if (password === confirmPassword) {
            passwordMatchText.innerHTML = '<i class="bi bi-check-circle-fill"></i>Паролі збігаються';
            passwordMatchText.style.color = 'var(--nut-green)';
        } else {
            passwordMatchText.innerHTML = '<i class="bi bi-x-circle-fill"></i>Паролі не збігаються';
            passwordMatchText.style.color = '#ff6b6b';
        }
    });
});
</script>