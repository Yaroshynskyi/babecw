<div class="main-container mt-5">
    <section class="intro-section text-center p-5">
        <h1 class="display-4">Вітаємо у <span class="gamer-highlight">Світі Настілок</span>!</h1>
        <p class="lead">Найкращі настільні ігри для незабутніх вечорів з друзями, родиною чи справжніх гік-баталій.</p>
        <a class="btn btn-game btn-lg" href="/boardgames/games/index" role="button">
            <i class="bi bi-dice-6-fill me-2"></i>Перейти до каталогу
        </a>
    </section>

    <div class="row product-row">
        <div class="col-md-4">
            <div class="product-block">
                <div class="game-icon">♟️</div>
                <h5 class="block-title">Стратегії</h5>
                <p>Складні економічні та військові ігри для тих, хто любить подумати на кілька кроків вперед.</p>
                <a href="/boardgames/games/index?category_id=1" class="btn btn-game">
                    <i class="bi bi-search me-2"></i>Шукати стратегії
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-block">
                <div class="game-icon">🎉</div>
                <h5 class="block-title">Для вечірок</h5>
                <p>Швидкі, веселі та галасливі ігри для великих компаній. Мінімум правил, максимум сміху!</p>
                <a href="/boardgames/games/index?category_id=2" class="btn btn-game">
                    <i class="bi bi-people-fill me-2"></i>Обрати для паті
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-block">
                <div class="game-icon">🧩</div>
                <h5 class="block-title">Сімейні</h5>
                <p>Добрі та захоплюючі ігри, в які буде цікаво грати як дітям, так і їхнім батькам.</p>
                <a href="/boardgames/games/index?category_id=3" class="btn btn-game">
                    <i class="bi bi-house-heart-fill me-2"></i>Для всієї родини
                </a>
            </div>
        </div>
    </div>

    <div class="info-block mt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h5 class="block-title"><i class="bi bi-box-seam me-2"></i>Швидка доставка по всій Україні</h5>
                <p>Ми ретельно пакуємо кожну гру, щоб коробка приїхала до вас в ідеальному стані. Відправляємо Новою Поштою щодня, щоб ви могли зіграти вже на найближчих вихідних!</p>
                <a href="/boardgames/games/index" class="btn btn-game">
                    <i class="bi bi-cart-plus me-2"></i>Зробити замовлення
                </a>
            </div>
            <div class="col-md-4 text-center">
                <div class="delivery-icon">📦</div>
            </div>
        </div>
    </div>

    <div class="game-benefits mt-5 mb-5">
        <h3 class="text-center mb-4"><i class="bi bi-star-fill text-warning me-2"></i>Чому обирають нас?</h3>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="benefit-icon">🏆</div>
                <h6>Світові хіти</h6>
                <small>Тільки найкращі ігри з ТОП BGG</small>
            </div>
            <div class="col-md-3 text-center">
                <div class="benefit-icon">🇺🇦</div>
                <h6>Українська локалізація</h6>
                <small>Підтримуємо рідну мову</small>
            </div>
            <div class="col-md-3 text-center">
                <div class="benefit-icon">⚡</div>
                <h6>Наявність</h6>
                <small>Усе, що на сайті — є на складі</small>
            </div>
            <div class="col-md-3 text-center">
                <div class="benefit-icon">🛡️</div>
                <h6>Гарантія якості</h6>
                <small>Оригінальні видання ігор</small>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --game-primary: #2C3E50; 
        --game-accent: #E74C3C;  
        --game-accent-hover: #C0392B;
        --game-light: #ECF0F1;
        --game-dark: #2C3E50;
        --game-bg: #F8F9FA;
        --game-info: #3498DB;
    }

    body {
        background: var(--game-bg);
        color: var(--game-dark);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .main-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    .intro-section {
        background: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
        color: white;
        border-radius: 25px;
        margin-bottom: 4rem;
        box-shadow: 0 10px 30px rgba(44, 62, 80, 0.2);
        position: relative;
        overflow: hidden;
    }

    .intro-section::before {
        content: '🎲';
        position: absolute;
        top: -20px;
        left: 20px;
        font-size: 8rem;
        opacity: 0.1;
        transform: rotate(-15deg);
    }

    .intro-section::after {
        content: '🃏';
        position: absolute;
        bottom: -20px;
        right: 20px;
        font-size: 8rem;
        opacity: 0.1;
        transform: rotate(15deg);
    }

    .intro-section h1 {
        color: white;
        font-weight: 800;
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 2;
    }

    .gamer-highlight {
        background: linear-gradient(45deg, #E74C3C, #3498DB);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 900;
        text-shadow: 0 0 15px rgba(52, 152, 219, 0.3);
    }

    .intro-section .lead {
        color: var(--game-light);
        font-size: 1.4rem;
        margin-bottom: 2.5rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 2;
    }

    .product-row {
        display: flex;
        justify-content: space-around;
        margin-bottom: 4rem;
        gap: 2rem;
    }

    .product-block {
        background: white;
        padding: 2.5rem 2rem;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        text-align: center;
        width: 100%;
        transition: all 0.4s ease;
        border: 1px solid rgba(44, 62, 80, 0.1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-block:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(44, 62, 80, 0.15);
        border-color: var(--game-accent);
    }

    .game-icon {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .product-block:hover .game-icon {
        transform: scale(1.2) rotate(5deg);
    }

    .block-title {
        color: var(--game-primary);
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
        position: relative;
        padding-bottom: 10px;
    }

    .block-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: var(--game-accent);
        border-radius: 2px;
    }

    .product-block p {
        color: #7f8c8d;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        flex-grow: 1;
    }

    .info-block {
        background: white;
        padding: 3rem;
        border-radius: 25px;
        margin-bottom: 4rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(44, 62, 80, 0.1);
        transition: all 0.4s ease;
    }

    .info-block:hover {
        box-shadow: 0 12px 30px rgba(44, 62, 80, 0.1);
    }

    .delivery-icon {
        font-size: 6rem;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    .btn-game {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 32px;
        background: var(--game-accent);
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-game:hover {
        background: var(--game-accent-hover);
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(231, 76, 60, 0.3);
    }

    .game-benefits {
        background: white;
        padding: 3rem;
        border-radius: 25px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(44, 62, 80, 0.1);
    }

    .game-benefits h3 {
        color: var(--game-primary);
        font-weight: 700;
        margin-bottom: 3rem;
    }

    .game-benefits h6 {
        color: var(--game-dark);
        font-weight: 700;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
    }

    .game-benefits small {
        color: #7f8c8d;
        font-size: 0.95rem;
    }

    .benefit-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .benefit-icon:hover {
        transform: scale(1.2);
    }

    @media (max-width: 768px) {
        .product-row {
            flex-direction: column;
        }
    }
</style>