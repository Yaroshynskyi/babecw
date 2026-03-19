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

<div class="container mt-4">
    <h2><?= $title ?></h2>
    
    <div class="row">
        <?php if (!empty($games)): ?>
            <?php foreach ($games as $game): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= !empty($game['image']) ? htmlspecialchars($game['image']) : '/assets/images/default-game.jpg' ?>" class="card-img-top game-img" alt="Game">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($game['title']) ?></h5>
                            <p class="card-text text-muted">
                                <strong>Кількість гравців:</strong> <?= $game['min_players'] ?> - <?= $game['max_players'] ?><br>
                                <strong>Ціна:</strong> <?= $game['price'] ?> грн
                            </p>
                            <a href="/boardgames/games/view?id=<?= $game['id'] ?>" class="btn btn-primary w-100 mb-2">Детальніше</a>
                            
                            <?php if (\models\Users::IsUserAdmin()): ?>
                                <div class="d-flex justify-content-between mt-3 pt-3 border-top">
                                    <form method="post" action="/boardgames/games/update" class="action-form">
                                        <input type="hidden" name="game_id" value="<?= $game['id'] ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-warning">✏️ Редагувати</button>
                                    </form>
                                    
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $game['id'] ?>">
                                        🗑 Видалити
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php if (\models\Users::IsUserAdmin()): ?>
                    <div class="modal fade" id="deleteModal<?= $game['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $game['id'] ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="deleteModalLabel<?= $game['id'] ?>">Підтвердження видалення</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрити"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <p>Ви дійсно бажаєте видалити гру <strong><?= htmlspecialchars($game['title']) ?></strong> з каталогу?</p>
                                    <p class="text-danger small mb-0">Цю дію неможливо буде скасувати.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Скасувати</button>
                                    <form method="post" action="/boardgames/games/delete" class="action-form">
                                        <input type="hidden" name="game_id" value="<?= $game['id'] ?>">
                                        <button type="submit" class="btn btn-danger">🗑 Видалити назавжди</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-info">Каталог ігор поки що порожній.</div>
        <?php endif; ?>
    </div>
</div>