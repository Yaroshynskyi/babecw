

<div class="d-flex flex-column justify-content-center align-items-center text-center py-5" style="min-height: 60vh; position: relative;">
    
    <div class="fw-bolder" style="font-size: 15rem; color: rgba(231, 76, 60, 0.05); position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); z-index: 0; pointer-events: none; line-height: 1;">
        404
    </div>
    
    <div style="position: relative; z-index: 1;">
        <h1 class="display-4 fw-bold mb-3" style="color: #2C3E50;">Це не ті ігри, що ви шукаєте... 🎲</h1>
        <p class="lead text-muted mx-auto mb-4" style="max-width: 600px;">
            Схоже, сторінка, яку ви шукаєте, закотилася кудись під стіл разом із кубиками, або такої гри просто не існує.
        </p>
        
        <div class="d-flex justify-content-center gap-4 my-5" style="font-size: 4rem;">
            <div class="game-bounce" style="animation-delay: 0s;">♟️</div>
            <div class="game-bounce" style="animation-delay: 0.2s;">🃏</div>
            <div class="game-bounce" style="animation-delay: 0.4s;">🧩</div>
        </div>
        
        <p class="fs-5 fw-semibold mb-4" style="color: #2C3E50;">Давайте повернемося на старт і почнемо нову партію!</p>
        <a href="/boardgames/" class="btn btn-danger btn-lg rounded-pill px-5 shadow-sm">
            <i class="bi bi-house-door me-2"></i>На головну
        </a>
    </div>
</div>

<style>
    .game-bounce {
        animation: float-game 2.5s infinite ease-in-out;
        filter: drop-shadow(0 10px 10px rgba(0,0,0,0.1));
    }
    @keyframes float-game {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(10deg); }
    }
</style>