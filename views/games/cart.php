<style>
    :root {
        --nut-brown: #8B4513;
        --nut-light: #D2691E;
        --nut-gold: #DAA520;
        --nut-cream: #FFF8DC;
        --nut-dark: #5D4037;
        --nut-bg: #f9f3e9;
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
        padding: 3rem;
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 25px;
        margin: 2rem auto;
        max-width: 1200px;
        box-shadow: 
            0 20px 50px rgba(139, 69, 19, 0.15),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 40px rgba(255, 248, 220, 0.5);
        border: 2px solid rgba(218, 165, 32, 0.2);
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

    h1 {
        color: var(--nut-brown);
        font-weight: 800;
        margin-bottom: 2.5rem;
        font-size: 2.8rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        position: relative;
        padding-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    h1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--nut-light), var(--nut-gold));
        border-radius: 2px;
    }

    h1 i {
        color: var(--nut-light);
        font-size: 2.5rem;
    }

    h3 {
        color: var(--nut-brown);
        font-weight: 700;
        margin: 2rem 0;
        font-size: 2rem;
    }

    .empty-cart {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 20px;
        border: 2px dashed rgba(210, 105, 30, 0.3);
        color: var(--nut-light);
        font-size: 1.3rem;
    }

    .empty-cart i {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        color: var(--nut-gold);
        display: block;
        animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .empty-cart a {
        display: inline-block;
        margin-top: 1.5rem;
        color: var(--nut-brown);
        font-weight: 600;
        text-decoration: none;
        border-bottom: 2px solid transparent;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    .empty-cart a:hover {
        color: var(--nut-light);
        border-bottom: 2px solid var(--nut-light);
    }

    .table-wrapper {
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 20px;
        padding: 1.5rem;
        border: 2px solid rgba(218, 165, 32, 0.2);
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
        overflow: hidden;
        margin-bottom: 2rem;
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
        padding: 1.3rem 1.2rem;
        text-align: left;
        border: none;
        position: relative;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
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
        padding: 1.3rem 1.2rem;
        color: var(--nut-dark);
        font-size: 1.05rem;
        border: none;
        vertical-align: middle;
    }

    .table tbody tr:nth-child(even) {
        background: rgba(255, 248, 220, 0.3);
    }

    .product-name {
        font-weight: 600;
        color: var(--nut-brown);
        font-size: 1.1rem;
    }

    .product-price {
        color: var(--nut-light);
        font-weight: 700;
        font-size: 1.1rem;
    }

    .product-volume {
        color: var(--nut-dark);
        background: rgba(210, 105, 30, 0.1);
        padding: 0.3rem 0.8rem;
        border-radius: 10px;
        font-size: 0.9rem;
        display: inline-block;
    }

    .product-manufacturer {
        color: var(--nut-dark);
        opacity: 0.8;
        font-size: 0.95rem;
    }

    .total-summary {
        background: linear-gradient(45deg, rgba(255, 248, 220, 0.8), rgba(255, 253, 245, 0.8));
        border-radius: 20px;
        padding: 2rem;
        margin: 2.5rem 0;
        border: 2px solid rgba(218, 165, 32, 0.3);
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .total-amount {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--nut-brown);
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
    }

    .cart-actions {
        display: flex;
        gap: 1.5rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .btn-nut {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 2.5rem;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
        border: none;
        cursor: pointer;
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
        transform: translateY(-3px) scale(1.05);
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
        font-size: 1.2rem;
        margin-right: 10px;
    }

    .btn-danger {
        background: linear-gradient(45deg, #dc3545, #c82333);
        box-shadow: 
            0 8px 25px rgba(220, 53, 69, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
    }

    .btn-danger:hover {
        background: linear-gradient(45deg, #c82333, #bd2130);
        box-shadow: 
            0 12px 30px rgba(220, 53, 69, 0.35),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-warning {
        background: linear-gradient(45deg, #ffc107, #e0a800);
        box-shadow: 
            0 8px 25px rgba(255, 193, 7, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
    }

    .btn-warning:hover {
        background: linear-gradient(45deg, #e0a800, #d39e00);
        box-shadow: 
            0 12px 30px rgba(255, 193, 7, 0.35),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-success {
        background: linear-gradient(45deg, #28a745, #218838);
        box-shadow: 
            0 8px 25px rgba(40, 167, 69, 0.25),
            0 0 0 3px rgba(255, 248, 220, 0.8);
    }

    .btn-success:hover {
        background: linear-gradient(45deg, #218838, #1e7e34);
        box-shadow: 
            0 12px 30px rgba(40, 167, 69, 0.35),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-sm {
        padding: 0.7rem 1.5rem;
        font-size: 1rem;
    }

    .form-inline {
        display: inline;
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
        animation: float 3s ease-in-out infinite;
    }

    .nut-decoration span:nth-child(2) {
        animation-delay: 0.5s;
    }

    .nut-decoration span:nth-child(3) {
        animation-delay: 1s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Адаптивність */
    @media (max-width: 992px) {
        .container {
            padding: 2.5rem;
        }
        
        .total-summary {
            flex-direction: column;
            text-align: center;
        }
        
        .cart-actions {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 2rem 1.5rem;
            margin: 1rem;
        }
        
        h1 {
            font-size: 2.2rem;
        }
        
        .table-wrapper {
            overflow-x: auto;
        }
        
        .table {
            min-width: 800px;
        }
        
        .cart-actions {
            flex-direction: column;
            width: 100%;
        }
        
        .btn-nut {
            width: 100%;
            justify-content: center;
        }
        
        .total-amount {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 1.5rem 1rem;
        }
        
        h1 {
            font-size: 1.8rem;
        }
        
        h3 {
            font-size: 1.5rem;
        }
        
        .empty-cart {
            padding: 2rem 1rem;
        }
        
        .empty-cart i {
            font-size: 3rem;
        }
        
        .nut-decoration span {
            font-size: 1.5rem;
            margin: 0 5px;
        }
    }
</style>

<div class="container mt-5">
    <h1><i class="bi bi-basket2-fill"></i> Ваш кошик</h1>
    
    <div class="nut-decoration">
        <span>🥜</span>
        <span>🌰</span>
        <span>🫘</span>
    </div>
    
    <?php if (!empty($cart)) : ?>
        <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Назва</th>
                        <th scope="col">Ціна</th>
                        <th scope="col">Об'єм</th>
                        <th scope="col">Виробник</th>
                        <th scope="col">Дії</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $index => $product) : ?>
                        <tr>
                            <td class="product-name"><?php echo htmlspecialchars($product['name']); ?></td>
                            <td class="product-price"><?php echo htmlspecialchars($product['price']); ?> грн.</td>
                            <td><span class="product-volume"><?php echo htmlspecialchars($product['volume']); ?></span></td>
                            <td class="product-manufacturer"><?php echo htmlspecialchars($product['manufacturer']); ?></td>
                            <td>
                                <form method="post" action="/flower/removeFromCart" class="form-inline">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <button type="submit" class="btn-nut btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i> Видалити
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="total-summary">
            <div>
                <h3>Загальна вартість:</h3>
                <div class="total-amount"><?php echo $total; ?> грн.</div>
            </div>
        </div>
        
        <div class="cart-actions">
            <form method="post" action="/flower/clearCart">
                <button type="submit" class="btn-nut btn-warning">
                    <i class="bi bi-trash"></i> Очистити кошик
                </button>
            </form>
            
            <a href="/order/checkout" class="btn-nut btn-success">
                <i class="bi bi-bag-check-fill"></i> Оформити замовлення
            </a>
            
            <a href="/nuts/index" class="btn-nut">
                <i class="bi bi-arrow-left"></i> Продовжити покупки
            </a>
        </div>
    <?php else : ?>
        <div class="empty-cart">
            <i class="bi bi-basket"></i>
            <p>Ваш кошик порожній</p>
            <p>Перейдіть до <a href="/nuts/index">каталогу горіхів</a>, щоб зробити перше замовлення!</p>
        </div>
    <?php endif; ?>
</div>