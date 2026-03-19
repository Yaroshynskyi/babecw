<div class="container mt-5">
    <div class="section-header">
        <span class="section-badge">Контакти</span>
        <h2 class="text-center mb-4">Зв'яжіться з <span class="brand-highlight">NutsDelight</span></h2>
        <p class="section-subtitle">Ми завжди раді допомогти вам з вибором найкращих горіхів!</p>
    </div>
    
    <div class="row contact-row">
        <div class="col-md-6">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-content">
                    <h4>Наша адреса:</h4>
                    <p>вул. Горіхова, 12, м. Київ, Україна</p>
                    <p class="contact-note"><i class="bi bi-clock me-1"></i>Пн-Пт: 9:00-20:00, Сб-Нд: 10:00-18:00</p>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-content">
                    <h4>Телефони:</h4>
                    <p>+38 (044) 234-56-78</p>
                    <p>+38 (050) 123-45-67 (Viber, Telegram)</p>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="contact-content">
                    <h4>Email та соціальні мережі:</h4>
                    <p>info@nutsdelight.com.ua</p>
                    <p>orders@nutsdelight.com.ua</p>
                    <div class="social-links mt-3">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-telegram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-card highlight">
                <div class="contact-icon">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="contact-content">
                    <h4>Доставка:</h4>
                    <p>Безкоштовна доставка при замовленні від 500 грн</p>
                    <p>Доставка по Києву - до 24 годин</p>
                    <p>По Україні - 1-3 дні</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="map-container">
                <div class="map-header">
                    <i class="bi bi-map me-2"></i>Ми на карті
                </div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.373280142652!2d30.523734376399607!3d50.450398971592846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce57071dcbdf%3A0xa1b508c20d4c481c!2z0LLRg9C70LjRhtGPINCc0L7RgdGC0L7QstCwLCAxMiwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1701234567890!5m2!1suk!2sua" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="map-footer">
                    <i class="bi bi-info-circle me-2"></i>Наш магазин знаходиться у центрі міста, поруч із станцією метро
                </div>
            </div>
            
            <div class="contact-form-prompt mt-4">
                <p>Маєте питання або хочете замовити індивідуальний набір?</p>
                <a href="/" class="btn btn-nut">
                    <i class="bi bi-chat-left-text me-2"></i>Написати нам
                </a>
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

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    .section-header {
        text-align: center;
        margin-bottom: 3.5rem;
    }

    .section-badge {
        display: inline-block;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        padding: 8px 25px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 1px;
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.2);
        margin-bottom: 1.5rem;
    }

    .section-header h2 {
        font-size: 2.8rem;
        color: var(--nut-brown);
        font-weight: 800;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
    }

    .brand-highlight {
        color: var(--nut-light);
        background: linear-gradient(45deg, var(--nut-light), var(--nut-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-style: italic;
    }

    .section-subtitle {
        color: var(--nut-light);
        font-size: 1.3rem;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .contact-row {
        gap: 3rem;
        margin-bottom: 3rem;
    }

    @media (min-width: 768px) {
        .contact-row {
            display: flex;
        }
    }

    .contact-card {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        padding: 2rem;
        border-radius: 20px;
        margin-bottom: 1.5rem;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
        display: flex;
        gap: 1.5rem;
        align-items: flex-start;
        transition: all 0.4s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 
            0 15px 35px rgba(139, 69, 19, 0.15),
            0 0 0 2px rgba(218, 165, 32, 0.2);
    }

    .contact-card.highlight {
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.9), rgba(255, 253, 245, 0.9));
        border: 2px solid rgba(218, 165, 32, 0.3);
        position: relative;
        overflow: hidden;
    }

    .contact-card.highlight::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(to bottom, var(--nut-light), var(--nut-gold));
    }

    .contact-icon {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.2);
    }

    .contact-content {
        flex: 1;
    }

    .contact-content h4 {
        color: var(--nut-brown);
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .contact-content p {
        color: var(--nut-light);
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 0.5rem;
    }

    .contact-note {
        color: var(--nut-gold);
        font-size: 1rem;
        font-style: italic;
        margin-top: 0.5rem;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 1rem;
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        border-radius: 50%;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-link:hover {
        transform: translateY(-3px) scale(1.1);
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
        box-shadow: 0 6px 15px rgba(139, 69, 19, 0.3);
    }

    .map-container {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 
            0 10px 30px rgba(139, 69, 19, 0.15),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
        height: 100%;
    }

    .map-header {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        padding: 1.2rem 2rem;
        font-size: 1.3rem;
        font-weight: 600;
        display: flex;
        align-items: center;
    }

    iframe {
        display: block;
        border: none;
        height: 400px;
        width: 100%;
    }

    .map-footer {
        background: rgba(255, 248, 220, 0.8);
        padding: 1rem 2rem;
        color: var(--nut-light);
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        border-top: 1px solid rgba(218, 165, 32, 0.2);
    }

    .contact-form-prompt {
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.8), rgba(255, 253, 245, 0.8));
        padding: 2rem;
        border-radius: 20px;
        text-align: center;
        border: 2px solid rgba(218, 165, 32, 0.3);
        box-shadow: inset 0 0 20px rgba(255, 248, 220, 0.5);
    }

    .contact-form-prompt p {
        color: var(--nut-dark);
        font-size: 1.2rem;
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
        .container {
            padding: 1rem;
        }
        
        .section-header h2 {
            font-size: 2.2rem;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
        }
        
        .contact-card {
            padding: 1.5rem;
            flex-direction: column;
            text-align: center;
        }
        
        .contact-icon {
            margin: 0 auto;
        }
        
        .social-links {
            justify-content: center;
        }
        
        iframe {
            height: 300px;
        }
        
        .contact-form-prompt {
            padding: 1.5rem;
        }
    }
</style>