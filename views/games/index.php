<?php
/** @var array $games */
/** @var string $title */
?>
<style>
    .game-img {
        height: 200px; 
        object-fit: cover; 
        background: #eee;
    }
    .action-form {
        margin: 0;
    }
</style>

<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-funnel text-primary me-2"></i>Фільтри</h5>
                    
                    <form method="get" action="/boardgames/games/index">
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">Ціна (грн)</label>
                            <div class="d-flex gap-2">
                                <input type="number" name="min_price" class="form-control form-control-sm bg-light" placeholder="Від" value="<?= htmlspecialchars($current_filters['min_price'] ?? '') ?>">
                                <input type="number" name="max_price" class="form-control form-control-sm bg-light" placeholder="До" value="<?= htmlspecialchars($current_filters['max_price'] ?? '') ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">Категорія</label>
                            <select name="category_id" class="form-select form-select-sm bg-light">
                                <option value="">Усі категорії</option>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?= $cat['id'] ?>" <?= ($current_filters['category_id'] == $cat['id']) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($cat['name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">Виробник</label>
                            <select name="manufacturer" class="form-select form-select-sm bg-light">
                                <option value="">Усі виробники</option>
                                <?php foreach ($manufacturers as $man): ?>
                                    <option value="<?= htmlspecialchars($man) ?>" <?= ($current_filters['manufacturer'] == $man) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($man) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold small text-muted">Мова</label>
                            <select name="language" class="form-select form-select-sm bg-light">
                                <option value="">Будь-яка</option>
                                <?php foreach ($languages as $lang): ?>
                                    <option value="<?= htmlspecialchars($lang) ?>" <?= ($current_filters['language'] == $lang) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($lang) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-2 rounded-pill shadow-sm">Застосувати</button>
                        <a href="/boardgames/games/index" class="btn btn-outline-secondary w-100 rounded-pill">Скинути все</a>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <?php if (!empty($games)): ?>
                    <?php foreach ($games as $game): ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                                <img src="<?= !empty($game['image']) ? htmlspecialchars($game['image']) : '/boardgames/assets/images/default-game.jpg' ?>" class="card-img-top game-img" alt="Game">
                                
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold"><?= htmlspecialchars($game['title']) ?></h5>
                                    
                                    <div class="mb-2">
                                        <?php if(!empty($game['language'])): ?><span class="badge bg-info text-dark me-1"><?= htmlspecialchars($game['language']) ?></span><?php endif; ?>
                                        <?php if(!empty($game['age'])): ?><span class="badge bg-secondary"><?= $game['age'] ?>+</span><?php endif; ?>
                                    </div>
                                    
                                    <p class="card-text text-muted mb-3 fs-6">
                                        <i class="bi bi-people-fill me-1"></i> <?= $game['min_players'] ?> - <?= $game['max_players'] ?> гравців<br>
                                        <i class="bi bi-clock-fill me-1"></i> <?= !empty($game['playtime']) ? htmlspecialchars($game['playtime']) : 'Не вказано' ?><br>
                                        <strong class="text-success fs-5"><?= $game['price'] ?> грн</strong>
                                    </p>
                                    
                                    <div class="mt-auto">
                                        <a href="/boardgames/games/view?id=<?= $game['id'] ?>" class="btn btn-primary w-100 mb-2 rounded-pill">Детальніше</a>
                                        
                                        <?php if (\models\Users::IsUserAdmin()): ?>
                                            <div class="d-flex justify-content-between mt-3 pt-3 border-top">
                                                <form method="post" action="/boardgames/games/update" class="action-form w-50 pe-1">
                                                    <input type="hidden" name="game_id" value="<?= $game['id'] ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-warning w-100 rounded-pill">✏️ Редаг.</button>
                                                </form>
                                                <div class="w-50 ps-1">
                                                    <button type="button" class="btn btn-sm btn-outline-danger w-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $game['id'] ?>">🗑 Видал.</button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (\models\Users::IsUserAdmin()): ?>
                            <div class="modal fade" id="deleteModal<?= $game['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $game['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h5 class="modal-title">Підтвердження видалення</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрити"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <p>Ви дійсно бажаєте видалити гру <strong><?= htmlspecialchars($game['title']) ?></strong> з каталогу?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Скасувати</button>
                                            <form method="post" action="/boardgames/games/delete" class="action-form">
                                                <input type="hidden" name="game_id" value="<?= $game['id'] ?>">
                                                <button type="submit" class="btn btn-danger">🗑 Видалити</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="alert alert-light text-center p-5 shadow-sm rounded-3">
                            <i class="bi bi-search fs-1 text-muted"></i>
                            <h4 class="mt-3 text-muted">За вашими критеріями ігор не знайдено</h4>
                            <a href="/boardgames/games/index" class="btn btn-outline-primary mt-2 rounded-pill">Скинути фільтри</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>