<div class="container mt-5">
    <div class="jumbotron">
        <div class="about-row">
            <div class="about-image">
                <img src="https://freshmart.com.ua/storage/web/source/1/Gorihy.png" alt="Натуральні горіхи та насіння" />
                <div class="image-caption">
                    <i class="bi bi-tree-fill me-2"></i>Наші преміум горіхи з еко-ферм
                </div>
            </div>
            <div class="about-text">
                <div class="section-header">
                    <span class="section-badge">Про нас</span>
                    <h1 class="display-4">Nuts<span class="brand-highlight">Delight</span> – смак природи у кожному горішку</h1>
                </div>
                
                <p class="lead">Ми віримо, що найкращі горіхи – це ті, що зберегли всю силу природи та корисні властивості.</p>
                
                <div class="nut-separator">
                    <span class="nut-icon">🥜</span>
                    <span class="nut-icon">🌰</span>
                    <span class="nut-icon">🫘</span>
                </div>
                
                <div class="about-content">
                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p><strong>NutsDelight</strong> — сімейний бізнес із 15-річним досвідом у галузі здорового харчування. Наша родинна традиція почалася з невеликої ферми, а сьогодні ми постачаємо найкращі горіхи по всій Україні.</p>
                    </div>
                    
                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Ми працюємо безпосередньо з фермерами, обираючи лише відбірні, калібровані горіхи без добавок та консервантів. Кожна партія проходить суворий контроль якості.</p>
                    </div>
                    
                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Наша філософія проста: якісні горіхи — це основа здорового харчування. Ми пропонуємо широкий асортимент: від класичних волоських горіхів до екзотичних макадамії та пекану.</p>
                    </div>
                    
                    <div class="stats-row">
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">років досвіду</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">видів горіхів</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">натуральність</div>
                        </div>
                    </div>
                </div>
                
                <div class="cta-section">
                    <p class="cta-text">Приєднуйтесь до тисяч задоволених клієнтів, які обирають якість разом з нами!</p>
                    <a class="btn btn-nut btn-lg" href="/information/contacts" role="button">
                        <i class="bi bi-chat-dots-fill me-2"></i>Зв'язатися з нами
                    </a>
                    <a class="btn btn-nut-outline btn-lg" href="/nuts/index" role="button">
                        <i class="bi bi-basket me-2"></i>Переглянути асортимент
                    </a>
                </div>
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
        min-height: 100vh;
    }

    .container {
        max-width: 1400px;
        padding: 2rem;
        margin: 0 auto;
    }

    .jumbotron {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        padding: 4rem;
        border-radius: 30px;
        box-shadow: 
            0 15px 40px rgba(139, 69, 19, 0.12),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 50px rgba(255, 248, 220, 0.3);
        border: 1px solid rgba(218, 165, 32, 0.2);
        position: relative;
        overflow: hidden;
    }

    .jumbotron::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold), var(--nut-light));
    }

    .about-row {
        display: flex;
        gap: 60px;
        align-items: flex-start;
        justify-content: center;
        flex-wrap: wrap;
    }

    .about-image {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 
            0 10px 30px rgba(139, 69, 19, 0.2),
            0 0 0 3px rgba(218, 165, 32, 0.1);
    }

    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
        transition: transform 0.5s ease;
    }

    .about-image:hover img {
        transform: scale(1.03);
    }

    .image-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(139, 69, 19, 0.9));
        color: var(--nut-cream);
        padding: 1.5rem;
        text-align: center;
        font-weight: 600;
        font-size: 1.1rem;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .about-text {
        flex: 1;
        min-width: 300px;
        max-width: 700px;
    }

    .section-header {
        margin-bottom: 2.5rem;
    }

    .section-badge {
        display: inline-block;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 1rem;
        letter-spacing: 1px;
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.2);
    }

    .section-header h1 {
        font-size: 3rem;
        color: var(--nut-brown);
        font-weight: 800;
        line-height: 1.2;
        margin: 0.5rem 0;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
    }

    .brand-highlight {
        color: var(--nut-light);
        background: linear-gradient(45deg, var(--nut-light), var(--nut-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-style: italic;
    }

    .lead {
        font-size: 1.5rem;
        color: var(--nut-light);
        margin-bottom: 2.5rem;
        line-height: 1.6;
        font-weight: 500;
    }

    .nut-separator {
        text-align: center;
        margin: 2.5rem 0;
    }

    .nut-icon {
        font-size: 2.5rem;
        margin: 0 15px;
        display: inline-block;
        animation: bounce 2s ease-in-out infinite;
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .nut-icon:nth-child(1) { animation-delay: 0s; }
    .nut-icon:nth-child(2) { animation-delay: 0.3s; }
    .nut-icon:nth-child(3) { animation-delay: 0.6s; }

    .about-content {
        margin-bottom: 3rem;
    }

    .about-point {
        display: flex;
        gap: 20px;
        margin-bottom: 1.8rem;
        align-items: flex-start;
    }

    .about-point i {
        color: var(--nut-gold);
        font-size: 1.5rem;
        margin-top: 5px;
        flex-shrink: 0;
    }

    .about-point p {
        color: var(--nut-dark);
        font-size: 1.1rem;
        line-height: 1.7;
        margin: 0;
    }

    .stats-row {
        display: flex;
        justify-content: space-around;
        margin: 3rem 0;
        padding: 2rem;
        background: linear-gradient(135deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 15px;
        border: 1px solid rgba(218, 165, 32, 0.2);
    }

    .stat-item {
        text-align: center;
        padding: 0 1.5rem;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--nut-brown);
        margin-bottom: 0.5rem;
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .stat-label {
        color: var(--nut-light);
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .cta-section {
        background: linear-gradient(135deg, rgba(255, 248, 220, 0.8), rgba(255, 253, 245, 0.8));
        padding: 2.5rem;
        border-radius: 20px;
        text-align: center;
        border: 2px solid rgba(218, 165, 32, 0.3);
        box-shadow: inset 0 0 20px rgba(255, 248, 220, 0.5);
    }

    .cta-text {
        font-size: 1.3rem;
        color: var(--nut-dark);
        margin-bottom: 2rem;
        font-weight: 600;
    }

    .btn-nut, .btn-nut-outline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 16px 35px;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.4s ease;
        margin: 0 10px 10px;
        border: none;
        cursor: pointer;
    }

    .btn-nut {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.3),
            0 0 0 3px rgba(255, 248, 220, 0.8);
    }

    .btn-nut-outline {
        background: transparent;
        color: var(--nut-brown);
        border: 2px solid var(--nut-light);
        box-shadow: 0 4px 15px rgba(139, 69, 19, 0.1);
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
        transform: translateY(-3px) scale(1.05);
        box-shadow: 
            0 12px 30px rgba(139, 69, 19, 0.4),
            0 0 0 3px rgba(218, 165, 32, 0.9);
        color: white;
    }

    .btn-nut-outline:hover {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        transform: translateY(-3px) scale(1.05);
        border-color: transparent;
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.3);
    }

    @media (max-width: 992px) {
        .jumbotron {
            padding: 2.5rem;
        }
        
        .section-header h1 {
            font-size: 2.5rem;
        }
        
        .about-row {
            gap: 40px;
        }
        
        .stats-row {
            flex-direction: column;
            gap: 2rem;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        
        .jumbotron {
            padding: 2rem;
        }
        
        .section-header h1 {
            font-size: 2rem;
        }
        
        .lead {
            font-size: 1.3rem;
        }
        
        .cta-section {
            padding: 1.5rem;
        }
        
        .btn-nut, .btn-nut-outline {
            padding: 14px 25px;
            font-size: 1rem;
            margin: 5px;
            width: 100%;
            max-width: 300px;
        }
    }
</style>