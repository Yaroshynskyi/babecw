<?php
/** @var array $orders */
?>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold"><i class="bi bi-clipboard-data me-2"></i>Всі замовлення магазину</h2>
        <span class="badge bg-primary fs-5 px-3 py-2">Всього: <?= count($orders) ?></span>
    </div>

    <div class="card shadow-sm border-0" style="border-radius: 15px;">
        <div class="card-body p-0">
            <?php if (!empty($orders)): ?>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th class="ps-4 py-3">№</th>
                                <th>ID Клієнта</th>
                                <th>Одержувач</th>
                                <th>Контакти</th>
                                <th>Адреса доставки</th>
                                <th class="pe-4">Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td class="ps-4 fs-5 fw-bold text-primary">#<?= $order['id'] ?></td>
                                    <td><span class="badge bg-secondary"><?= $order['user_id'] ? 'User ID: ' . $order['user_id'] : 'Гість' ?></span></td>
                                    <td class="fw-semibold"><?= htmlspecialchars($order['customer_name']) ?></td>
                                    <td><?= htmlspecialchars($order['phone']) ?></td>
                                    <td><?= htmlspecialchars($order['address']) ?></td>
                                    <td class="pe-4">
                                        <form method="post" action="/boardgames/order/changestatus" style="margin: 0;">
                                            <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                                            <select name="status" class="form-select form-select-sm fw-bold border-0 shadow-sm
                                                <?php 
                                                    if($order['status'] == 'Нове') echo 'bg-warning text-dark';
                                                    elseif($order['status'] == 'Відправлено') echo 'bg-primary text-white';
                                                    elseif($order['status'] == 'Виконано') echo 'bg-success text-white';
                                                    elseif($order['status'] == 'Скасовано') echo 'bg-danger text-white';
                                                    else echo 'bg-light text-dark';
                                                ?>" 
                                                onchange="this.form.submit()" style="cursor: pointer;">
                                                
                                                <option value="Нове" <?= $order['status'] == 'Нове' ? 'selected' : '' ?>>Нове</option>
                                                <option value="В обробці" <?= $order['status'] == 'В обробці' ? 'selected' : '' ?>>В обробці</option>
                                                <option value="Відправлено" <?= $order['status'] == 'Відправлено' ? 'selected' : '' ?>>Відправлено</option>
                                                <option value="Виконано" <?= $order['status'] == 'Виконано' ? 'selected' : '' ?>>Виконано</option>
                                                <option value="Скасовано" <?= $order['status'] == 'Скасовано' ? 'selected' : '' ?>>Скасовано</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="p-5 text-center text-muted">
                    <i class="bi bi-inbox fs-1"></i>
                    <h4 class="mt-3">Замовлень поки немає</h4>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>