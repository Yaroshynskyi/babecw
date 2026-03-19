<style>
    :root {
        --nut-brown: #8B4513;
        --nut-light: #D2691E;
        --nut-gold: #DAA520;
        --nut-cream: #FFF8DC;
        --nut-dark: #5D4037;
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
        max-width: 500px;
        padding: 3rem;
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 25px;
        box-shadow: 
            0 15px 40px rgba(139, 69, 19, 0.15),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 30px rgba(255, 248, 220, 0.5);
        border: 1px solid rgba(218, 165, 32, 0.2);
        text-align: center;
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

    h1 {
        color: var(--nut-brown);
        font-weight: 800;
        margin-bottom: 2rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
    }

    h1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        border-radius: 2px;
    }

    .form-header {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        margin-bottom: 2rem;
    }

    .form-icon {
        font-size: 2.5rem;
        color: var(--nut-light);
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .alert {
        background: linear-gradient(45deg, #f8d7da, #f5c6cb);
        color: #721c24;
        border-radius: 15px;
        padding: 1.2rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid #f5c6cb;
        box-shadow: 0 4px 12px rgba(139, 69, 19, 0.1);
        text-align: left;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .alert i {
        font-size: 1.2rem;
        color: #721c24;
    }

    .mb-3 {
        margin-bottom: 1.8rem;
        text-align: left;
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

    .form-text {
        color: var(--nut-light);
        font-size: 0.9rem;
        margin-top: 0.5rem;
        font-style: italic;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .form-text i {
        color: var(--nut-gold);
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
            0 6px 20px rgba(139, 69, 19, 0.2),
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
            0 10px 25px rgba(139, 69, 19, 0.3),
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

    .register-link {
        margin-top: 2rem;
        color: var(--nut-light);
        font-size: 1rem;
    }

    .register-link a {
        color: var(--nut-brown);
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
        border-bottom: 2px solid transparent;
    }

    .register-link a:hover {
        color: var(--nut-light);
        border-bottom: 2px solid var(--nut-light);
    }

    .nut-decoration {
        text-align: center;
        margin: 1.5rem 0;
    }

    .nut-decoration span {
        font-size: 1.5rem;
        margin: 0 5px;
        opacity: 0.5;
        animation: spin 4s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @media (max-width: 768px) {
        .container {
            margin: 1rem;
            padding: 2rem;
        }
        
        h1 {
            font-size: 2rem;
        }
        
        .form-icon {
            font-size: 2rem;
        }
        
        .btn-nut {
            padding: 0.9rem 2rem;
            font-size: 1rem;
        }
    }
</style>

<div class="container my-5">
    <div class="form-header">
        <div class="form-icon">🔐</div>
        <h1>Вхід до NutsDelight</h1>
    </div>
    
    <div class="nut-decoration">
        <span>🥜</span>
        <span>🌰</span>
        <span>🫘</span>
    </div>
    
    <form method="post" action="">
        <?php if (!empty($error_message)) : ?>
            <div class="alert" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <?php echo htmlspecialchars($error_message) ?>
            </div>
        <?php endif ?>
        
        <div class="mb-3">
            <label for="inputEmail" class="form-label">
                <i class="bi bi-person-fill"></i>Логін
            </label>
            <input name="login" type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Введіть ваш логін">
            <div id="emailHelp" class="form-text">
                <i class="bi bi-shield-check"></i>Ваші дані захищені та конфіденційні
            </div>
        </div>
        
        <div class="mb-3">
            <label for="inputPassword" class="form-label">
                <i class="bi bi-key-fill"></i>Пароль
            </label>
            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Введіть ваш пароль">
        </div>
        
        <button type="submit" class="btn-nut">
            <i class="bi bi-box-arrow-in-right"></i>Увійти до акаунту
        </button>
        
        <div class="register-link">
            Не маєте акаунту? <a href="/users/register">Зареєструватися</a>
        </div>
    </form>
</div>