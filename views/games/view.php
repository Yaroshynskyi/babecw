<?php
/** @var array $game */
?>
<div class="container mt-5 mb-5">
    <div class="card shadow-sm" style="border-radius: 15px; overflow: hidden; border: none;">
        <div class="row g-0">
            <div class="col-md-5 bg-light d-flex align-items-center justify-content-center" style="min-height: 400px;">
                <img src="<?= !empty($game['image']) ? htmlspecialchars($game['image']) : '/assets/images/default-game.jpg' ?>" 
                     class="img-fluid" 
                     alt="<?= htmlspecialchars($game['title']) ?>"
                     style="max-height: 500px; object-fit: contain; padding: 20px;">
            </div>
            
            <div class="col-md-7">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-secondary fs-6 px-3 py-2">Код товару: <?= $game['id'] ?></span>
                        <a href="/boardgames/games/index" class="text-decoration-none text-muted"><i class="bi bi-arrow-left me-1"></i>Назад до каталогу</a>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4"><?= htmlspecialchars($game['title']) ?></h1>
                    
                    <h2 class="text-success fw-bold mb-4"><?= number_format($game['price'], 2, '.', ' ') ?> ₴</h2>
                    <form method="post" action="/boardgames/cart/add">
                        <input type="hidden" name="game_id" value="<?= $game['id'] ?>">
                        <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow-sm fs-4 py-3">
                            <i class="bi bi-cart-plus me-2"></i>Додати в кошик
                        </button>
                    </form>
                    
                    <ul class="list-group list-group-flush mb-4 fs-5">
                        <li class="list-group-item bg-transparent px-0 border-bottom">
                            <i class="bi bi-people-fill text-primary me-2"></i><strong>Кількість гравців:</strong> <?= $game['min_players'] ?> - <?= $game['max_players'] ?>
                        </li>
                        
                        <?php if (!empty($game['playtime'])): ?>
                        <li class="list-group-item bg-transparent px-0 border-bottom">
                            <i class="bi bi-clock-fill text-warning me-2"></i><strong>Час партії:</strong> <?= htmlspecialchars($game['playtime']) ?>
                        </li>
                        <?php endif; ?>
                        
                        <?php if (!empty($game['age'])): ?>
                        <li class="list-group-item bg-transparent px-0 border-bottom">
                            <i class="bi bi-person-badge text-success me-2"></i><strong>Вік:</strong> від <?= htmlspecialchars($game['age']) ?> років
                        </li>
                        <?php endif; ?>
                        
                        <?php if (!empty($game['language'])): ?>
                        <li class="list-group-item bg-transparent px-0 border-bottom">
                            <i class="bi bi-translate text-info me-2"></i><strong>Мова:</strong> <?= htmlspecialchars($game['language']) ?>
                        </li>
                        <?php endif; ?>
                        
                        <?php if (!empty($game['manufacturer'])): ?>
                        <li class="list-group-item bg-transparent px-0 border-bottom">
                            <i class="bi bi-building text-secondary me-2"></i><strong>Виробник:</strong> <?= htmlspecialchars($game['manufacturer']) ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                    
                    <h5 class="fw-bold mb-3">Опис гри:</h5>
                    <p class="text-muted fs-6 mb-5" style="line-height: 1.8;">
                        <?= nl2br(htmlspecialchars($game['description'])) ?>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>