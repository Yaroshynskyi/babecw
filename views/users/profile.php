<?php
/** @var array $user */
/** @var array $orders */
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0" style="border-radius: 15px;">
                <div class="card-body text-center p-4">
                    <i class="bi bi-person-circle text-secondary mb-3" style="font-size: 5rem;"></i>
                    <h4 class="fw-bold"><?= htmlspecialchars($user['firstName'] . ' ' . $user['lastName']) ?></h4>
                    <p class="text-muted mb-2"><i class="bi bi-person-badge me-2"></i><?= htmlspecialchars($user['login']) ?></p>
                    <span class="badge bg-<?= $user['role'] === 'admin' ? 'danger' : 'success' ?> px-3 py-2 fs-6">
                        <?= $user['role'] === 'admin' ? 'Адміністратор' : 'Клієнт' ?>
                    </span>
                    <div class="mt-4">
                        <a href="/boardgames/users/updateprofile" class="btn btn-outline-primary w-100 rounded-pill"><i class="bi bi-gear me-2"></i>Редагувати профіль</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card shadow-sm border-0" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h3 class="mb-4 fw-bold"><i class="bi bi-clock-history me-2"></i>Мої замовлення</h3>
                    
                    <?php if (!empty($orders)): ?>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>№</th>
                                        <th>Одержувач</th>
                                        <th>Адреса доставки</th>
                                        <th>Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $order): ?>
                                        <tr>
                                            <td class="fs-5 fw-bold text-primary">#<?= $order['id'] ?></td>
                                            <td>
                                                <?= htmlspecialchars($order['customer_name']) ?><br>
                                                <small class="text-muted"><i class="bi bi-telephone"></i> <?= htmlspecialchars($order['phone']) ?></small>
                                            </td>
                                            <td><?= htmlspecialchars($order['address']) ?></td>
                                            <td>
                                                <span class="badge bg-warning text-dark px-3 py-2"><?= htmlspecialchars($order['status']) ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-light text-center p-5">
                            <i class="bi bi-bag-x fs-1 text-muted"></i>
                            <p class="mt-3 mb-0 fs-5 text-muted">Ви ще не робили замовлень. Час це виправити!</p>
                            <a href="/boardgames/games/index" class="btn btn-primary mt-3 rounded-pill px-4">В каталог</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>