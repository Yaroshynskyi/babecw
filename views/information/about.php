<div class="container mt-5">
    <div class="jumbotron">
        <div class="about-row">
           
            <div class="about-text">
                <div class="section-header">
                    <span class="section-badge">Про нас</span>
                    <h1 class="display-4">Світ<span class="brand-highlight">Настілок</span> – ігри, що об'єднують</h1>
                </div>
                
                <p class="lead">Ми віримо, що найкращі емоції народжуються не за екранами смартфонів, а за одним столом у колі друзів.</p>
                
                <div class="about-content">
                    <div class="about-point">
                        <i class="bi bi-controller"></i>
                        <p><strong>СвітНастілок</strong> — це проєкт справжніх гіків, створений для таких самих фанатів. Ми починали з невеличкої колекції у шафі, а сьогодні пропонуємо вам сотні найкращих ігор з усього світу.</p>
                    </div>
                    
                    <div class="about-point">
                        <i class="bi bi-globe"></i>
                        <p>Ми ретельно відбираємо кожну гру для каталогу. Слідкуємо за світовими рейтингами BGG, новинками Kickstarter та підтримуємо українських локалізаторів.</p>
                    </div>
                    
                    <div class="about-point">
                        <i class="bi bi-heart-fill"></i>
                        <p>Наша місія — допомогти кожному знайти "свою" гру. Неважливо, чи ви шукаєте просту паті-гру на 15 хвилин, чи хардкорну стратегію на 4 години — ми підкажемо найкращий варіант.</p>
                    </div>
                    
                    <div class="stats-row">
                        <div class="stat-item">
                            <div class="stat-number">5+</div>
                            <div class="stat-label">років досвіду</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">ігор у каталозі</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10k+</div>
                            <div class="stat-label">зіграних партій</div>
                        </div>
                    </div>
                </div>
                
                <div class="cta-section">
                    <p class="cta-text">Готові кинути кубики та почати свою пригоду?</p>
                    <a class="btn btn-game btn-lg" href="/boardgames/games/index" role="button">
                        <i class="bi bi-search me-2"></i>Переглянути каталог
                    </a>
                </div>
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
        --game-dark: #1a252f;
        --game-bg: #F8F9FA;
    }

    body {
        background: var(--game-bg);
        color: var(--game-primary);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 1400px;
        padding: 2rem;
        margin: 0 auto;
    }

    .jumbotron {
        background: white;
        padding: 4rem;
        border-radius: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border: 1px solid rgba(44, 62, 80, 0.1);
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
        background: linear-gradient(90deg, var(--game-primary), var(--game-accent));
    }

    .about-row {
        display: flex;
        gap: 60px;
        align-items: flex-start;
        justify-content: center;
        flex-wrap: wrap;
    }

    .about-image {
        flex: 1 1 400px; 
        width: 100%;
        max-width: 500px;
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        margin: 0 auto;
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
        background: linear-gradient(transparent, var(--game-dark));
        color: white;
        padding: 1.5rem;
        text-align: center;
        font-weight: 600;
        font-size: 1.1rem;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .about-text {
        flex: 1 1 500px;
        min-width: 300px;
        width: 100%;
        max-width: 700px;
    }

    .section-header {
        margin-bottom: 2.5rem;
    }

    .section-badge {
        display: inline-block;
        background: var(--game-accent);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 1rem;
        letter-spacing: 1px;
    }

    .section-header h1 {
        font-size: 3rem;
        color: var(--game-primary);
        font-weight: 800;
        line-height: 1.2;
        margin: 0.5rem 0;
    }

    .brand-highlight {
        color: var(--game-accent);
    }

    .lead {
        font-size: 1.3rem;
        color: #7f8c8d;
        margin-bottom: 2.5rem;
        line-height: 1.6;
    }

    .game-separator {
        text-align: center;
        margin: 2.5rem 0;
    }

    .game-icon-small {
        font-size: 2.5rem;
        margin: 0 15px;
        display: inline-block;
        animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .game-icon-small:nth-child(1) { animation-delay: 0s; }
    .game-icon-small:nth-child(2) { animation-delay: 0.3s; }
    .game-icon-small:nth-child(3) { animation-delay: 0.6s; }

    .about-point {
        display: flex;
        gap: 20px;
        margin-bottom: 1.8rem;
        align-items: flex-start;
    }

    .about-point i {
        color: var(--game-accent);
        font-size: 1.5rem;
        margin-top: 5px;
        flex-shrink: 0;
    }

    .about-point p {
        color: var(--game-primary);
        font-size: 1.1rem;
        line-height: 1.7;
        margin: 0;
    }

    .stats-row {
        display: flex;
        justify-content: space-around;
        margin: 3rem 0;
        padding: 2rem;
        background: var(--game-bg);
        border-radius: 15px;
        border: 1px solid rgba(44, 62, 80, 0.05);
    }

    .stat-item {
        text-align: center;
        padding: 0 1.5rem;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--game-accent);
        margin-bottom: 0.5rem;
    }

    .stat-label {
        color: #7f8c8d;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .cta-section {
        background: var(--game-bg);
        padding: 2.5rem;
        border-radius: 20px;
        text-align: center;
        border: 1px solid rgba(44, 62, 80, 0.05);
    }

    .cta-text {
        font-size: 1.3rem;
        color: var(--game-primary);
        margin-bottom: 1.5rem;
        font-weight: 600;
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

   @media (max-width: 992px) {
        .jumbotron {
            padding: 2rem;
        }
        .about-row { 
            gap: 30px;
        }
        .stats-row { 
            flex-direction: column; 
            gap: 1.5rem; 
            padding: 1.5rem;
        }
        
        .about-image,
        .about-text {
            flex: 1 1 100%;
            max-width: 100%;
        }
        
        .section-header h1 {
            font-size: 2.2rem; 
        }
    }
</style>