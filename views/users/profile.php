<?php

/** @var array $rows */
?>
<style>
    :root {
        --nut-brown: #8B4513;
        --nut-light: #D2691E;
        --nut-gold: #DAA520;
        --nut-cream: #FFF8DC;
        --nut-dark: #5D4037;
        --nut-bg: #f9f3e9;
        --nut-green: #556B2F;
    }

    body {
        background: linear-gradient(135deg, var(--nut-bg) 0%, #f5ebd8 100%);
        color: var(--nut-dark);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 2rem 1rem;
        min-height: 100vh;
    }

    .container {
        max-width: 1200px;
        padding: 3rem;
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 25px;
        box-shadow: 
            0 20px 50px rgba(139, 69, 19, 0.15),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 40px rgba(255, 248, 220, 0.5);
        border: 2px solid rgba(218, 165, 32, 0.2);
        margin: 0 auto;
        position: relative;
        overflow: hidden;
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold), var(--nut-light));
    }

    h2 {
        color: var(--nut-brown);
        font-weight: 800;
        margin-bottom: 2.5rem;
        font-size: 2.5rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        position: relative;
        padding-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        border-radius: 2px;
    }

    h2 i {
        color: var(--nut-light);
        font-size: 2.2rem;
    }

    h3 {
        color: var(--nut-brown);
        font-weight: 700;
        margin: 3rem 0 2rem;
        font-size: 2rem;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    h3 i {
        color: var(--nut-light);
        font-size: 1.8rem;
    }

    .profile-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 3rem;
        padding: 2rem;
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.6), rgba(255, 253, 245, 0.6));
        border-radius: 20px;
        border: 2px solid rgba(218, 165, 32, 0.2);
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
    }

    .profile-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: white;
        box-shadow: 0 8px 20px rgba(139, 69, 19, 0.3);
        border: 4px solid white;
    }

    .profile-info h4 {
        color: var(--nut-brown);
        margin: 0;
        font-size: 1.8rem;
        font-weight: 700;
    }

    .profile-info p {
        color: var(--nut-light);
        margin: 0.5rem 0 0;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .profile-info p i {
        color: var(--nut-gold);
    }

    .form-row {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    @media (max-width: 768px) {
        .form-row {
            flex-direction: column;
            gap: 1.5rem;
        }
    }

    .form-group {
        flex: 1;
        margin-bottom: 1.8rem;
    }

    .form-label {
        color: var(--nut-brown);
        font-weight: 600;
        margin-bottom: 0.8rem;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.1rem;
    }

    .form-label i {
        color: var(--nut-light);
        font-size: 1.2rem;
    }

    .form-control {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        color: var(--nut-dark);
        border: 2px solid rgba(210, 105, 30, 0.3);
        border-radius: 15px;
        padding: 1rem 1.5rem;
        width: 100%;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: inset 0 2px 4px rgba(139, 69, 19, 0.1);
    }

    .form-control:focus {
        border-color: var(--nut-light);
        box-shadow: 
            0 0 0 0.25rem rgba(210, 105, 30, 0.25),
            inset 0 2px 4px rgba(139, 69, 19, 0.1);
        outline: none;
        background: white;
    }

    .form-control:hover:not(:read-only) {
        border-color: var(--nut-light);
    }

    .form-control[readonly] {
        background: rgba(255, 248, 220, 0.5);
        cursor: not-allowed;
        opacity: 0.8;
    }

    .password-wrapper {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--nut-light);
        cursor: pointer;
        font-size: 1.2rem;
        transition: color 0.3s ease;
    }

    .toggle-password:hover {
        color: var(--nut-brown);
    }

    .btn-nut {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 3rem;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
        border: none;
        cursor: pointer;
        margin-top: 1rem;
        position: relative;
        overflow: hidden;
    }

    .btn-nut::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
        transform: translateY(-3px) scale(1.02);
        box-shadow: 
            0 12px 30px rgba(139, 69, 19, 0.35),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-nut:hover::before {
        left: 100%;
    }

    .btn-nut:active {
        transform: translateY(-1px);
    }

    .btn-nut i {
        font-size: 1.3rem;
        margin-right: 12px;
    }

    .no-orders {
        text-align: center;
        padding: 3rem;
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 20px;
        border: 2px dashed rgba(210, 105, 30, 0.3);
        color: var(--nut-light);
        font-size: 1.2rem;
    }

    .no-orders i {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: var(--nut-gold);
        display: block;
    }

    .table-wrapper {
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 20px;
        padding: 1.5rem;
        border: 2px solid rgba(218, 165, 32, 0.2);
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
        overflow: hidden;
    }

    .table {
        width: 100%;
        background: transparent;
        border-collapse: collapse;
        margin: 0;
    }

    .table thead th {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        font-weight: 600;
        padding: 1.2rem 1rem;
        text-align: left;
        border: none;
        position: relative;
        font-size: 1rem;
    }

    .table thead th::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: rgba(255, 255, 255, 0.3);
    }

    .table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(210, 105, 30, 0.1);
    }

    .table tbody tr:hover {
        background: rgba(255, 248, 220, 0.7);
        transform: translateX(5px);
    }

    .table tbody td {
        padding: 1.2rem 1rem;
        color: var(--nut-dark);
        font-size: 1rem;
        border: none;
    }

    .table tbody tr:nth-child(even) {
        background: rgba(255, 248, 220, 0.3);
    }

    .order-status {
        display: inline-block;
        padding: 0.4rem 1rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .status-pending {
        background: linear-gradient(45deg, #ffa726, #ffb74d);
        color: #fff;
    }

    .status-processing {
        background: linear-gradient(45deg, #29b6f6, #4fc3f7);
        color: #fff;
    }

    .status-completed {
        background: linear-gradient(45deg, #66bb6a, #81c784);
        color: #fff;
    }

    .nut-decoration {
        text-align: center;
        margin: 2rem 0;
    }

    .nut-decoration span {
        font-size: 1.8rem;
        margin: 0 10px;
        opacity: 0.3;
        display: inline-block;
        animation: bounce 2s ease-in-out infinite;
    }

    .nut-decoration span:nth-child(2) {
        animation-delay: 0.3s;
    }

    .nut-decoration span:nth-child(3) {
        animation-delay: 0.6s;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Адаптивність */
    @media (max-width: 992px) {
        .container {
            padding: 2rem 1.5rem;
        }
        
        .profile-header {
            flex-direction: column;
            text-align: center;
            padding: 1.5rem;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            font-size: 2.5rem;
        }
        
        h2 {
            font-size: 2rem;
        }
        
        h3 {
            font-size: 1.7rem;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 1.5rem 1rem;
        }
        
        h2 {
            font-size: 1.8rem;
        }
        
        h3 {
            font-size: 1.5rem;
        }
        
        .table-wrapper {
            overflow-x: auto;
        }
        
        .table {
            min-width: 800px;
        }
        
        .btn-nut {
            width: 100%;
            padding: 0.9rem 2rem;
            font-size: 1.1rem;
        }
    }

    @media (max-width: 480px) {
        body {
            padding: 1rem 0.5rem;
        }
        
        .container {
            padding: 1.5rem 1rem;
        }
        
        h2 {
            font-size: 1.6rem;
        }
        
        .form-control {
            padding: 0.8rem 1rem;
        }
    }
</style>

<div class="container mt-4">
    <div class="profile-header">
        <div class="profile-avatar">
            <i class="bi bi-person-circle"></i>
        </div>
        <div class="profile-info">
            <h4><?= htmlspecialchars($_SESSION['user']['firstName'] . ' ' . $_SESSION['user']['lastName']) ?></h4>
            <p><i class="bi bi-person-badge"></i> <?= htmlspecialchars($_SESSION['user']['login']) ?></p>
            <p><i class="bi bi-calendar-check"></i> Користувач з 2024</p>
        </div>
    </div>

    <h2><i class="bi bi-person-gear"></i> Редагування профілю</h2>
    
    <form method="POST" action="/users/updateProfile" id="profileForm">
        <div class="form-row">
            <div class="form-group">
                <label for="login" class="form-label"><i class="bi bi-person-fill"></i> Логін</label>
                <input type="text" class="form-control" id="login" name="login" 
                       value="<?= htmlspecialchars($_SESSION['user']['login']) ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="<?= htmlspecialchars($_SESSION['user']['email'] ?? '') ?>" 
                       placeholder="Введіть ваш email">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="firstName" class="form-label"><i class="bi bi-person-vcard"></i> Ім'я</label>
                <input type="text" class="form-control" id="firstName" name="firstName" 
                       value="<?= htmlspecialchars($_SESSION['user']['firstName']) ?>" required>
            </div>
            <div class="form-group">
                <label for="lastName" class="form-label"><i class="bi bi-person-badge"></i> Прізвище</label>
                <input type="text" class="form-control" id="lastName" name="lastName" 
                       value="<?= htmlspecialchars($_SESSION['user']['lastName']) ?>" required>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group password-wrapper">
                <label for="password" class="form-label"><i class="bi bi-key-fill"></i> Новий пароль</label>
                <input type="password" class="form-control" id="password" name="password" 
                       placeholder="Залиште порожнім, якщо не хочете змінювати">
                <button type="button" class="toggle-password" onclick="togglePassword('password')">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
            <div class="form-group password-wrapper">
                <label for="confirmPassword" class="form-label"><i class="bi bi-key"></i> Підтвердження паролю</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" 
                       placeholder="Повторіть новий пароль">
                <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword')">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="phone" class="form-label"><i class="bi bi-telephone-fill"></i> Телефон</label>
                <input type="tel" class="form-control" id="phone" name="phone" 
                       value="<?= htmlspecialchars($_SESSION['user']['phone'] ?? '') ?>" 
                       placeholder="+38 (0XX) XXX-XX-XX">
            </div>
            <div class="form-group">
                <label for="address" class="form-label"><i class="bi bi-geo-alt-fill"></i> Адреса</label>
                <input type="text" class="form-control" id="address" name="address" 
                       value="<?= htmlspecialchars($_SESSION['user']['address'] ?? '') ?>" 
                       placeholder="Ваша адреса доставки">
            </div>
        </div>
        
        <button type="submit" class="btn-nut">
            <i class="bi bi-save-fill"></i> Зберегти зміни
        </button>
    </form>

    <div class="nut-decoration">
        <span>🥜</span>
        <span>🌰</span>
        <span>🫘</span>
    </div>

    <h3><i class="bi bi-basket-fill"></i> Історія замовлень</h3>
    
    <?php if (!empty($rows) && is_array($rows)) : ?>
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>№ Замовлення</th>
                        <th>Дата</th>
                        <th>Сума</th>
                        <th>Статус</th>
                        <th>Адреса</th>
                        <th>Телефон</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $order) : ?>
                        <tr>
                            <td><strong>#<?= htmlspecialchars($order['id']) ?></strong></td>
                            <td><?= date('d.m.Y H:i', strtotime($order['created_at'])) ?></td>
                            <td><strong><?= number_format($order['total_price'] ?? 0, 2) ?> грн</strong></td>
                            <td>
                                <span class="order-status status-<?= htmlspecialchars($order['status'] ?? 'pending') ?>">
                                    <?= $order['status'] == 'pending' ? 'Очікує' : 
                                       ($order['status'] == 'processing' ? 'Обробляється' : 
                                       ($order['status'] == 'completed' ? 'Завершено' : 'Очікує')) ?>
                                </span>
                            </td>
                            <td><?= htmlspecialchars($order['address']) ?></td>
                            <td><?= htmlspecialchars($order['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <div class="no-orders">
            <i class="bi bi-basket"></i>
            <p>У вас ще немає замовлень</p>
            <p>Перейдіть до <a href="/nuts/index" style="color: var(--nut-brown); font-weight: 600;">каталогу горіхів</a>, щоб зробити перше замовлення!</p>
        </div>
    <?php endif; ?>
</div>

<script>
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = field.nextElementSibling.querySelector('i');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
    }
}

document.getElementById('profileForm').addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    if (password || confirmPassword) {
        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Паролі не збігаються!');
            return false;
        }
        
        if (password.length < 6 && password.length > 0) {
            e.preventDefault();
            alert('Пароль повинен містити щонайменше 6 символів!');
            return false;
        }
    }
});
</script>