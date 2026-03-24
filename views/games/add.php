<?php
/** @var string $error_message */
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

<div class="container mt-4 views/games/add.php">
    
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger"><?= $error_message ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label fw-bold">Назва гри</label>
            <input type="text" name="title" class="form-control" required placeholder="Наприклад: Монополія">
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Ціна (грн)</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Категорія (ID)</label>
                <select name="category_id" class="form-select" required>
                    <option value="1">Стратегії</option>
                    <option value="2">Для вечірок</option>
                    <option value="3">Сімейні</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Мін. кількість гравців</label>
                <input type="number" name="min_players" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Макс. кількість гравців</label>
                <input type="number" name="max_players" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Виробник</label>
                <input type="text" name="manufacturer" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Мова гри</label>
                <input type="text" name="language" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Час партії (хв)</label>
                <input type="text" name="playtime" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Мінімальний вік</label>
                <input type="number" name="age" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">URL посилання на зображення</label>
            <input type="text" name="image" class="form-control" placeholder="https://...">
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Опис гри</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100 fs-5">Додати гру в каталог</button>
    </form>
</div>