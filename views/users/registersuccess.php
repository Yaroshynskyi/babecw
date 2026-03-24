<?php
$this->Title = 'Успішна реєстрація';
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow border-0 text-center" style="max-width: 500px; width: 100%; border-radius: 15px;">
        <div class="card-body p-5">
            <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
            <h2 class="fw-bold mt-3 mb-4">Реєстрація успішна!</h2>
            <p class="text-muted fs-5 mb-5">Ваш акаунт було успішно створено. Тепер ви можете увійти в систему, використовуючи свої дані.</p>
            
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                <a href="/boardgames/users/login" class="btn btn-primary btn-lg px-4 rounded-pill shadow-sm">Увійти в акаунт</a>
                <a href="/boardgames/games/index" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">В каталог ігор</a>
            </div>
        </div>
    </div>
</div>