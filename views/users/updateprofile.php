<?php
/** @var array $user */
/** @var string $error_message */
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh; padding: 20px 0;">
    <div class="card shadow border-0" style="max-width: 600px; width: 100%; border-radius: 15px;">
        <div class="card-body p-5">
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                <h3 class="fw-bold mb-0"><i class="bi bi-pencil-square text-warning me-2"></i>Редагування профілю</h3>
                <a href="/boardgames/users/profile" class="btn btn-outline-secondary btn-sm rounded-pill">Скасувати</a>
            </div>

            <?php if (!empty($error_message)) : ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error_message) ?></div>
            <?php endif ?>

            <form method="post" action="/boardgames/users/updateprofile">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Ім'я</label>
                        <input name="firstname" type="text" class="form-control" value="<?= htmlspecialchars($user['firstName']) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Прізвище</label>
                        <input name="lastname" type="text" class="form-control" value="<?= htmlspecialchars($user['lastName']) ?>" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Новий пароль</label>
                    <input name="password" type="password" class="form-control" placeholder="Залиште порожнім, якщо не хочете змінювати">
                    <div class="form-text">Введіть новий пароль лише у випадку, якщо бажаєте його змінити.</div>
                </div>

                <button type="submit" class="btn btn-warning w-100 py-2 fs-5 fw-bold rounded-pill shadow-sm text-dark">
                    Зберегти зміни <i class="bi bi-check2-circle ms-1"></i>
                </button>
            </form>
        </div>
    </div>
</div>