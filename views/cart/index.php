<?php
/** @var array $cart */
/** @var float $total */
?>
<div class="container mt-5 mb-5">
    <h2 class="mb-4"><i class="bi bi-cart3 me-2"></i>Ваш кошик</h2>

    <?php if (!empty($cart)): ?>
        <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
            <div class="card-body p-0">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Товар</th>
                            <th>Ціна</th>
                            <th class="text-end pe-4">Дія</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $index => $item): ?>
                            <tr>
                                <td class="ps-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= !empty($item['image']) ? htmlspecialchars($item['image']) : '/assets/images/default-game.jpg' ?>" alt="Game" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;" class="me-3 shadow-sm">
                                        <strong class="fs-5"><?= htmlspecialchars($item['title']) ?></strong>
                                    </div>
                                </td>
                                <td class="fs-5 fw-semibold text-success"><?= number_format($item['price'], 2, '.', ' ') ?> ₴</td>
                                <td class="text-end pe-4">
                                    <form method="post" action="/boardgames/cart/remove" style="margin: 0;">
                                        <input type="hidden" name="index" value="<?= $index ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-danger px-3 rounded-pill">❌ Видалити</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-light p-4 d-flex justify-content-between align-items-center">
                <h4 class="mb-0 text-dark">Всього до сплати: <span class="text-success fw-bold ms-2"><?= number_format($total, 2, '.', ' ') ?> ₴</span></h4>
                <div>
                    <a href="/boardgames/cart/clear" class="btn btn-outline-secondary me-3 rounded-pill">Очистити кошик</a>
                    <a href="/boardgames/order/checkout" class="btn btn-success btn-lg rounded-pill px-4 shadow-sm">Оформити замовлення <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-light text-center p-5 shadow-sm" style="border-radius: 15px;">
            <i class="bi bi-cart-x text-muted" style="font-size: 5rem;"></i>
            <h3 class="mt-3 text-muted">Ваш кошик наразі порожній</h3>
            <a href="/boardgames/games/index" class="btn btn-primary btn-lg mt-4 rounded-pill px-4">Перейти до каталогу</a>
        </div>
    <?php endif; ?>
</div>