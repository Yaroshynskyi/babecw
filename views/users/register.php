<?php
/** @var string $error_message */
$this->Title = 'Реєстрація';
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh; padding: 20px 0;">
    <div class="card shadow border-0" style="max-width: 600px; width: 100%; border-radius: 15px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <i class="bi bi-person-plus text-success" style="font-size: 3.5rem;"></i>
                <h2 class="fw-bold mt-2">Створення акаунта</h2>
            </div>

            <?php if (!empty($error_message)) : ?>
                <div class="alert alert-danger text-center"><?= htmlspecialchars($error_message) ?></div>
            <?php endif ?>

            <form method="post" action="/boardgames/users/register">
                <div class="mb-3">
                    <label class="form-label fw-bold">Логін</label>
                    <input name="login" type="text" class="form-control" placeholder="Придумайте логін" required>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Пароль</label>
                        <input name="password" type="password" class="form-control" placeholder="Введіть пароль" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Підтвердження</label>
                        <input name="password2" type="password" class="form-control" placeholder="Повторіть пароль" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Ім'я</label>
                        <input name="firstname" type="text" class="form-control" placeholder="Ваше ім'я" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">Прізвище</label>
                        <input name="lastname" type="text" class="form-control" placeholder="Ваше прізвище" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100 py-2 fs-5 fw-bold rounded-pill shadow-sm">Зареєструватися</button>
            </form>

            <div class="text-center mt-4 border-top pt-3">
                <span class="text-muted">Вже маєте акаунт?</span>
                <a href="/boardgames/users/login" class="text-decoration-none fw-bold text-success ms-1">Увійти</a>
            </div>
        </div>
    </div>
</div>