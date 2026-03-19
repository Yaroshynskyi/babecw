<div class="myContainer">
    <h1>404 - Горішок загубився 🥜</h1>
    <p class="subtitle">На жаль, ми не змогли знайти сторінку, яку ви шукаєте. Можливо, вона сховалася між горішками!</p>
    
    <div class="nut-animation">
        <div class="nut">🥜</div>
        <div class="nut">🌰</div>
        <div class="nut">🫘</div>
    </div>
    
    <p class="suggestion">Спробуйте повернутися на головну сторінку або скористатися навігацією вище</p>
    <a href="/" class="myBtn">
        <i class="bi bi-house-door me-2"></i>Повернутися на головну
    </a>
</div>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #f9f3e9 0%, #f5ebd8 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .myContainer {
        max-width: 800px;
        margin: 2rem auto;
        text-align: center;
        padding: 60px 40px;
        border-radius: 25px;
        background: linear-gradient(145deg, #ffffff, #f5f5f0);
        color: #5D4037;
        box-shadow: 
            0 10px 30px rgba(139, 69, 19, 0.15),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 30px rgba(255, 248, 220, 0.5);
        position: relative;
        overflow: hidden;
    }

    .myContainer::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(218, 165, 32, 0.05) 0%, transparent 70%);
        z-index: 0;
    }

    .myContainer h1 {
        color: #8B4513;
        font-size: 3.5rem;
        margin-bottom: 20px;
        font-weight: 800;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        position: relative;
        z-index: 1;
        background: linear-gradient(45deg, #8B4513, #D2691E);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .subtitle {
        color: #A0522D;
        font-size: 1.4rem;
        margin-bottom: 40px;
        line-height: 1.6;
        position: relative;
        z-index: 1;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .suggestion {
        color: #795548;
        font-size: 1.1rem;
        margin: 30px 0;
        font-style: italic;
        position: relative;
        z-index: 1;
    }

    .nut-animation {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin: 40px 0;
        position: relative;
        z-index: 1;
    }

    .nut {
        font-size: 4rem;
        animation: bounce 3s infinite ease-in-out;
        filter: drop-shadow(2px 2px 4px rgba(139, 69, 19, 0.2));
    }

    .nut:nth-child(1) {
        animation-delay: 0s;
    }

    .nut:nth-child(2) {
        animation-delay: 0.5s;
    }

    .nut:nth-child(3) {
        animation-delay: 1s;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(10deg);
        }
    }

    .myBtn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 18px 40px;
        background: linear-gradient(45deg, #D2691E, #8B4513);
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1.3rem;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 
            0 6px 20px rgba(139, 69, 19, 0.3),
            0 0 0 3px rgba(255, 248, 220, 0.8),
            inset 0 2px 0 rgba(255, 255, 255, 0.3);
        position: relative;
        z-index: 1;
        overflow: hidden;
        letter-spacing: 0.5px;
    }

    .myBtn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .myBtn:hover {
        background: linear-gradient(45deg, #8B4513, #A0522D);
        transform: translateY(-5px) scale(1.05);
        box-shadow: 
            0 10px 25px rgba(139, 69, 19, 0.4),
            0 0 0 3px rgba(218, 165, 32, 0.9),
            inset 0 2px 0 rgba(255, 255, 255, 0.3);
    }

    .myBtn:hover::before {
        left: 100%;
    }

    .myBtn:active {
        transform: translateY(-2px) scale(1.02);
    }

    .myBtn i {
        font-size: 1.4rem;
    }

    .myContainer::after {
        content: '404';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 25rem;
        font-weight: 900;
        color: rgba(139, 69, 19, 0.03);
        z-index: 0;
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .myContainer {
            margin: 1rem;
            padding: 40px 20px;
        }
        
        .myContainer h1 {
            font-size: 2.5rem;
        }
        
        .subtitle {
            font-size: 1.2rem;
        }
        
        .nut-animation {
            gap: 20px;
        }
        
        .nut {
            font-size: 3rem;
        }
        
        .myContainer::after {
            font-size: 15rem;
        }
    }
</style>