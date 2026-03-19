<div class="main-container mt-5">
    <section class="intro-section text-center p-5">
        <h1 class="display-4">Вітаємо у <span class="brand-highlight">NutsDelight</span>!</h1>
        <p class="lead">Найсмачніші та найкорисніші горішки для вашої родини.</p>
        <a class="btn btn-nut btn-lg" href="/information/about" role="button">
            <i class="bi bi-info-circle me-2"></i>Дізнатись про нас
        </a>
    </section>

    <div class="row product-row">
        <div class="col-md-4">
            <div class="product-block">
                <div class="nut-icon">🥜</div>
                <h5 class="block-title">Наші Горішки</h5>
                <p>Преміум якість: волоські, мигдаль, кеш'ю, фундук та екзотичні сорти.</p>
                <a href="/nuts/index" class="btn btn-nut">
                    <i class="bi bi-basket me-2"></i>Дивитись асортимент
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-block">
                <div class="nut-icon">🌟</div>
                <h5 class="block-title">Спеціальні Пропозиції</h5>
                <p>Знижки на набори, акційні позиції та подарункові упаковки.</p>
                <a href="/information/services" class="btn btn-nut">
                    <i class="bi bi-percent me-2"></i>Акції та знижки
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-block">
                <div class="nut-icon">🎁</div>
                <h5 class="block-title">Подарункові Набори</h5>
                <p>Елегантні набори для подарунків на будь-яку нагоду.</p>
                <a href="/information/services" class="btn btn-nut">
                    <i class="bi bi-gift me-2"></i>Подарункові набори
                </a>
            </div>
        </div>
    </div>

    <div class="info-block mt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h5 class="block-title"><i class="bi bi-geo-alt me-2"></i>Контакти та Доставка</h5>
                <p>Замовляйте горішки з доставкою по місту або завітайте до нашого магазину. Безкоштовна доставка при замовленні від 500 грн.</p>
                <a href="/information/contacts" class="btn btn-nut">
                    <i class="bi bi-telephone me-2"></i>Зв'язатися з нами
                </a>
            </div>
            <div class="col-md-4 text-center">
                <div class="delivery-icon">🚚</div>
            </div>
        </div>
    </div>

    <div class="info-block mt-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <div class="about-icon">🌳</div>
            </div>
            <div class="col-md-8">
                <h5 class="block-title"><i class="bi bi-tree me-2"></i>Про нас</h5>
                <p><strong>NutsDelight</strong> — сімейний бізнес із 15-річним досвідом. Ми обираємо лише найкращі горіхи від перевірених постачальників. Наша місія — приносити здоров'я та задоволення через якісні натуральні продукти.</p>
                <a href="/information/about" class="btn btn-nut">
                    <i class="bi bi-book me-2"></i>Читати більше
                </a>
            </div>
        </div>
    </div>

    <div class="nut-benefits mt-5">
        <h3 class="text-center mb-4"><i class="bi bi-heart-fill me-2"></i>Чому обирають наші горішки?</h3>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="benefit-icon">✅</div>
                <h6>100% Натуральні</h6>
                <small>Без консервантів та добавок</small>
            </div>
            <div class="col-md-3 text-center">
                <div class="benefit-icon">🏆</div>
                <h6>Преміум Якість</h6>
                <small>Відбірні калібровані горіхи</small>
            </div>
            <div class="col-md-3 text-center">
                <div class="benefit-icon">⚡</div>
                <h6>Швидка Доставка</h6>
                <small>До 24 годин у межах міста</small>
            </div>
            <div class="col-md-3 text-center">
                <div class="benefit-icon">💚</div>
                <h6>Екологічно</h6>
                <small>Еко-упаковка та сортування</small>
            </div>
        </div>
    </div>
</div>

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
    }

    .main-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    .intro-section {
        background: linear-gradient(135deg, rgba(255, 248, 220, 0.9) 0%, rgba(255, 253, 245, 0.9) 100%);
        color: var(--nut-dark);
        border-radius: 25px;
        margin-bottom: 4rem;
        box-shadow: 
            0 10px 30px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
        position: relative;
        overflow: hidden;
    }

    .intro-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold), var(--nut-light));
    }

    .intro-section h1 {
        color: var(--nut-brown);
        font-weight: 800;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
    }

    .brand-highlight {
        color: var(--nut-light);
        font-style: italic;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 900;
    }

    .intro-section .lead {
        color: var(--nut-light);
        font-size: 1.4rem;
        margin-bottom: 2.5rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .product-row {
        display: flex;
        justify-content: space-around;
        margin-bottom: 4rem;
        gap: 2rem;
    }

    @media (max-width: 768px) {
        .product-row {
            flex-direction: column;
            gap: 2rem;
        }
    }

    .product-block {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        padding: 2.5rem 2rem;
        border-radius: 20px;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        text-align: center;
        width: 100%;
        transition: all 0.4s ease;
        border: 1px solid rgba(218, 165, 32, 0.2);
        position: relative;
        overflow: hidden;
    }

    .product-block:hover {
        transform: translateY(-10px);
        box-shadow: 
            0 15px 35px rgba(139, 69, 19, 0.2),
            0 0 0 2px rgba(218, 165, 32, 0.3);
    }

    .nut-icon {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        display: inline-block;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .product-block:nth-child(1) .nut-icon {
        animation-delay: 0s;
    }

    .product-block:nth-child(2) .nut-icon {
        animation-delay: 0.5s;
    }

    .product-block:nth-child(3) .nut-icon {
        animation-delay: 1s;
    }

    .block-title {
        color: var(--nut-brown);
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
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        border-radius: 2px;
    }

    .product-block p {
        color: var(--nut-light);
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        min-height: 80px;
    }

    .info-block {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        padding: 3rem;
        border-radius: 25px;
        margin-bottom: 4rem;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
        transition: all 0.4s ease;
    }

    .info-block:hover {
        box-shadow: 
            0 12px 30px rgba(139, 69, 19, 0.15),
            0 0 0 2px rgba(218, 165, 32, 0.25);
    }

    .delivery-icon, .about-icon {
        font-size: 5rem;
        opacity: 0.8;
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
    }

    .btn-nut {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 32px;
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
        color: #ffffff;
        transform: translateY(-3px) scale(1.05);
        box-shadow: 
            0 10px 25px rgba(139, 69, 19, 0.3),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-nut:hover::before {
        left: 100%;
    }

    .btn-nut.btn-lg {
        padding: 18px 45px;
        font-size: 1.3rem;
    }

    .btn-nut i {
        font-size: 1.2rem;
    }

    .nut-benefits {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        padding: 3rem;
        border-radius: 25px;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
    }

    .nut-benefits h3 {
        color: var(--nut-brown);
        font-weight: 700;
        margin-bottom: 3rem;
    }

    .nut-benefits h6 {
        color: var(--nut-dark);
        font-weight: 600;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
    }

    .nut-benefits small {
        color: var(--nut-light);
        font-size: 0.9rem;
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
        .main-container {
            padding: 1rem;
        }
        
        .intro-section {
            padding: 2rem 1rem;
        }
        
        .intro-section h1 {
            font-size: 2.5rem;
        }
        
        .product-block, .info-block {
            padding: 2rem 1.5rem;
        }
        
        .delivery-icon, .about-icon {
            font-size: 3.5rem;
            margin-top: 2rem;
        }
    }
</style>