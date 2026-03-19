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

    .service-section {
        padding: 60px 30px;
        background: linear-gradient(135deg, rgba(255, 248, 220, 0.9) 0%, rgba(255, 253, 245, 0.9) 100%);
        border-radius: 25px;
        box-shadow: 
            0 15px 40px rgba(139, 69, 19, 0.12),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 30px rgba(255, 248, 220, 0.5);
        border: 1px solid rgba(218, 165, 32, 0.2);
        margin: 3rem 0;
        position: relative;
        overflow: hidden;
    }

    .service-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold), var(--nut-light));
    }

    .service-section h2 {
        color: var(--nut-brown);
        font-weight: 800;
        margin-bottom: 3rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        text-align: center;
        font-size: 2.8rem;
        position: relative;
        padding-bottom: 20px;
    }

    .service-section h2::after {
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

    .service-card {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        color: var(--nut-dark);
        border-radius: 20px;
        padding: 2.5rem 2rem;
        margin-bottom: 2rem;
        text-align: center;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        transform: scaleX(0);
        transition: transform 0.4s ease;
        transform-origin: left;
    }

    .service-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 15px 35px rgba(139, 69, 19, 0.2),
            0 0 0 2px rgba(218, 165, 32, 0.3);
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-card h5 {
        color: var(--nut-brown);
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 15px;
    }

    .service-card h5::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        border-radius: 2px;
    }

    .service-card p {
        color: var(--nut-light);
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .service-card-icon {
        font-size: 4rem;
        color: var(--nut-light);
        margin-bottom: 1.5rem;
        display: inline-block;
        transition: all 0.3s ease;
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .service-card:hover .service-card-icon {
        transform: scale(1.1) rotate(5deg);
        color: var(--nut-gold);
    }

    .service-benefit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 1rem;
        color: var(--nut-green);
        font-size: 0.9rem;
        font-weight: 600;
    }

    .service-benefit i {
        color: var(--nut-green);
    }

    .service-cta {
        text-align: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px dashed rgba(210, 105, 30, 0.3);
    }

    .service-cta p {
        color: var(--nut-dark);
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        font-weight: 600;
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
        cursor: pointer;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
        transform: translateY(-3px) scale(1.05);
        box-shadow: 
            0 10px 25px rgba(139, 69, 19, 0.3),
            0 0 0 3px rgba(218, 165, 32, 0.9);
        color: white;
    }

    @media (max-width: 768px) {
        .service-section {
            padding: 40px 20px;
            margin: 2rem 0;
        }
        
        .service-section h2 {
            font-size: 2.2rem;
        }
        
        .service-card {
            padding: 2rem 1.5rem;
        }
        
        .service-card-icon {
            font-size: 3rem;
        }
        
        .service-card h5 {
            font-size: 1.4rem;
        }
        
        .service-card p {
            font-size: 1rem;
        }
    }
</style>

<div class="service-section">
    <h2>Наші послуги та пропозиції</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-card-icon">
                    🥜
                </div>
                <h5>Продаж преміум горіхів</h5>
                <p>Широкий асортимент якісних горіхів: волоські, мигдаль, кеш'ю, фундук, пекан, макадамія та інші екзотичні сорти.</p>
                <div class="service-benefit">
                    <i class="bi bi-check-circle"></i>
                    <span>Відбірна якість</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-card-icon">
                    🎁
                </div>
                <h5>Подарункові набори</h5>
                <p>Елегантні подарункові набори для будь-якої нагоди: корпоративні подарунки, свята, ділові зустрічі.</p>
                <div class="service-benefit">
                    <i class="bi bi-check-circle"></i>
                    <span>Індивідуальне пакування</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-card-icon">
                    🚚
                </div>
                <h5>Швидка доставка</h5>
                <p>Доставка по Києву протягом 24 годин. Безкоштовна доставка при замовленні від 500 грн. Доставка по Україні 1-3 дні.</p>
                <div class="service-benefit">
                    <i class="bi bi-check-circle"></i>
                    <span>Безкоштовна від 500 грн</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-card-icon">
                    🏢
                </div>
                <h5>Корпоративні замовлення</h5>
                <p>Спеціальні умови для бізнес-клієнтів: великі партії, постійні знижки, індивідуальний підхід.</p>
                <div class="service-benefit">
                    <i class="bi bi-check-circle"></i>
                    <span>Оптові ціни</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-card-icon">
                    💡
                </div>
                <h5>Консультації</h5>
                <p>Професійні консультації щодо вибору горіхів, їх зберігання та використання в кулінарії та здоровому харчуванні.</p>
                <div class="service-benefit">
                    <i class="bi bi-check-circle"></i>
                    <span>Експертна підтримка</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-card-icon">
                    🌱
                </div>
                <h5>Еко-продукти</h5>
                <p>Горіхи з еко-сертифікацією, органічні продукти та екологічно чиста упаковка для турботливих споживачів.</p>
                <div class="service-benefit">
                    <i class="bi bi-check-circle"></i>
                    <span>Екологічно чисто</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="service-cta">
        <p>Потрібна індивідуальна пропозиція або маєте питання?</p>
        <a href="/information/contacts" class="btn-nut">
            <i class="bi bi-chat-left-text me-2"></i>Зв'язатися з менеджером
        </a>
    </div>
</div>