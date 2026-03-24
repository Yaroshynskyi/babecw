<?php
/** @var string $error_message */
$this->Title = 'Вхід в систему';
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow border-0" style="max-width: 450px; width: 100%; border-radius: 15px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
                <h2 class="fw-bold mt-2">Вхід в акаунт</h2>
            </div>

            <?php if (!empty($error_message)) : ?>
                <div class="alert alert-danger text-center"><?= htmlspecialchars($error_message) ?></div>
            <?php endif ?>

            <form method="post" action="/boardgames/users/login">
                <div class="mb-3">
                    <label class="form-label fw-bold">Логін</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                        <input name="login" type="text" class="form-control" placeholder="Введіть логін" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Пароль</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                        <input name="password" type="password" class="form-control" placeholder="Введіть пароль" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 fs-5 fw-bold rounded-pill shadow-sm">Увійти</button>
            </form>

            <div class="text-center mt-4">
                <span class="text-muted">Не маєте акаунту?</span>
                <a href="/boardgames/users/register" class="text-decoration-none fw-bold ms-1">Зареєструватися</a>
            </div>
        </div>
    </div>
</div>