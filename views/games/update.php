<?php
/** @var array $game */
/** @var array $categories */
?>
<style>
    .admin-form-container {
        max-width: 800px; 
        background: white; 
        padding: 30px; 
        border-radius: 15px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin: 0 auto;
    }
</style>

<div class="container mt-4 admin-form-container">
    <form method="post" action="/boardgames/games/update">
        <input type="hidden" name="game_id" value="<?= $game['id'] ?>">

        <div class="mb-3">
            <label class="form-label fw-bold">Назва гри</label>
            <input type="text" name="title" class="form-control" required value="<?= htmlspecialchars($game['title']) ?>">
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Ціна (грн)</label>
                <input type="number" step="0.01" name="price" class="form-control" required value="<?= htmlspecialchars($game['price']) ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Категорія</label>
                <select name="category_id" class="form-select" required>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?= $cat['id'] ?>" <?= ($game['category_id'] == $cat['id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($cat['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Мін. кількість гравців</label>
                <input type="number" name="min_players" class="form-control" required value="<?= htmlspecialchars($game['min_players']) ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Макс. кількість гравців</label>
                <input type="number" name="max_players" class="form-control" required value="<?= htmlspecialchars($game['max_players']) ?>">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">URL посилання на зображення</label>
            <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($game['image']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Опис гри</label>
            <textarea name="description" class="form-control" rows="4" required><?= htmlspecialchars($game['description']) ?></textarea>
        </div>

        <button type="submit" class="btn btn-warning w-100 fs-5 text-dark fw-bold">💾 Зберегти зміни</button>
    </form>
</div>