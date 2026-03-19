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
        max-width: 500px;
        margin: 0 auto;
        text-align: center;
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    .success-message {
        background: rgba(255, 248, 220, 0.3);
        color: var(--nut-brown);
        border: 2px solid rgba(210, 105, 30, 0.2);
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
        font-size: 1.3rem;
        font-weight: 600;
    }

    .success-icon {
        font-size: 3rem;
        color: var(--nut-light);
        margin-bottom: 1rem;
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

    @media (max-width: 768px) {
        .container {
            padding: 2rem;
            margin: 1rem;
        }
        
        .success-message {
            padding: 1.5rem;
            font-size: 1.1rem;
        }
        
        .success-icon {
            font-size: 2.5rem;
        }
        
        .btn-nut {
            padding: 0.9rem 2rem;
            font-size: 1rem;
            margin: 0.3rem;
            display: block;
            width: 100%;
            margin-bottom: 0.5rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 1.5rem;
        }
        
        .success-message {
            padding: 1rem;
            font-size: 1rem;
        }
        
        .success-icon {
            font-size: 2rem;
        }
    }
</style>

<div class="container">
    <div class="success-message">
        <div class="success-icon">✅</div>
        Продукт успішно видалено
    </div>
    
    <a href="/nuts/index" class="btn-nut">До каталогу</a>
    <a href="/" class="btn-nut btn-outline">На головну</a>
</div>