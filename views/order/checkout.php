<?php
/** @var float $total */
/** @var string $error_message */
?>
<div class="container mt-5 mb-5" style="max-width: 600px;">
    <div class="card shadow" style="border-radius: 15px; border: none;">
        <div class="card-body p-5">
            <h2 class="mb-4 text-center fw-bold"><i class="bi bi-box-seam me-2"></i>Оформлення замовлення</h2>
            
            <div class="alert alert-info text-center mb-4 fs-5" style="border-radius: 10px;">
                До сплати: <strong class="text-success"><?= number_format($total, 2, '.', ' ') ?> ₴</strong>
            </div>

            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger"><?= $error_message ?></div>
            <?php endif; ?>

            <form method="post" action="/boardgames/order/checkout">
                <div class="mb-3">
                    <label class="form-label fw-bold">ПІБ отримувача</label>
                    <input type="text" name="customer_name" class="form-control form-control-lg" required placeholder="Наприклад: Іван Франко">
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Номер телефону</label>
                    <input type="text" name="phone" class="form-control form-control-lg" required placeholder="+38 (000) 000-00-00">
                </div>
                
                <div class="mb-4">
                    <label class="form-label fw-bold">Адреса доставки (Нова Пошта)</label>
                    <textarea name="address" class="form-control" rows="3" required placeholder="Місто, номер відділення..."></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow-sm fs-4 mt-2">
                    Підтвердити замовлення <i class="bi bi-check2-circle ms-2"></i>
                </button>
            </form>
        </div>
    </div>
</div>