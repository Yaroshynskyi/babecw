<div class="container mt-5">
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
    }

    .container {
        padding: 2rem;
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 25px;
        box-shadow: 
            0 15px 40px rgba(139, 69, 19, 0.12),
            0 0 0 1px rgba(210, 105, 30, 0.1),
            inset 0 0 30px rgba(255, 248, 220, 0.5);
        border: 1px solid rgba(218, 165, 32, 0.2);
        margin: 2rem auto;
        max-width: 1400px;
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
        margin-bottom: 2rem;
        font-size: 2.8rem;
        text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
        display: flex;
        align-items: center;
        gap: 15px;
    }

    h1 i {
        color: var(--nut-light);
        font-size: 2.5rem;
    }

    .filter-container {
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.6), rgba(255, 253, 245, 0.6));
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        border: 2px solid rgba(218, 165, 32, 0.2);
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
    }

    .filter-section {
        margin-bottom: 1.5rem;
    }

    .filter-section h5 {
        color: var(--nut-brown);
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.2rem;
    }

    .filter-section h5 i {
        color: var(--nut-light);
        font-size: 1.3rem;
    }

    .form-control, .form-select {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        color: var(--nut-dark);
        border: 2px solid rgba(210, 105, 30, 0.3);
        border-radius: 15px;
        padding: 0.75rem 1.25rem;
        transition: all 0.3s ease;
        box-shadow: inset 0 2px 4px rgba(139, 69, 19, 0.1);
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--nut-light);
        box-shadow: 
            0 0 0 0.25rem rgba(210, 105, 30, 0.25),
            inset 0 2px 4px rgba(139, 69, 19, 0.1);
        outline: none;
        background: white;
    }

    .form-check {
        margin-bottom: 0.5rem;
    }

    .form-check-input {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border: 2px solid rgba(210, 105, 30, 0.3);
        width: 1.2em;
        height: 1.2em;
        margin-top: 0.2em;
        cursor: pointer;
    }

    .form-check-input:checked {
        background-color: var(--nut-light);
        border-color: var(--nut-light);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
    }

    .form-check-label {
        color: var(--nut-dark);
        font-weight: 500;
        margin-left: 0.5rem;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .form-check-input:checked + .form-check-label {
        color: var(--nut-light);
        font-weight: 600;
    }

    .btn-nut {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.8rem 2rem;
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: #ffffff;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 
            0 6px 20px rgba(139, 69, 19, 0.2),
            0 0 0 3px rgba(255, 248, 220, 0.8);
        border: none;
        cursor: pointer;
        margin-right: 1rem;
        margin-top: 0.5rem;
    }

    .btn-nut:hover {
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
        transform: translateY(-2px);
        box-shadow: 
            0 10px 25px rgba(139, 69, 19, 0.3),
            0 0 0 3px rgba(218, 165, 32, 0.9);
    }

    .btn-nut i {
        font-size: 1.1rem;
        margin-right: 8px;
    }

    .btn-outline-nut {
        background: transparent;
        color: var(--nut-brown);
        border: 2px solid var(--nut-light);
        box-shadow: 0 4px 15px rgba(139, 69, 19, 0.1);
    }

    .btn-outline-nut:hover {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        border-color: transparent;
    }

    .card {
        background: linear-gradient(145deg, #ffffff, #faf6ed);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 
            0 8px 25px rgba(139, 69, 19, 0.1),
            0 0 0 1px rgba(210, 105, 30, 0.1);
        border: 1px solid rgba(218, 165, 32, 0.2);
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 
            0 15px 35px rgba(139, 69, 19, 0.15),
            0 0 0 2px rgba(218, 165, 32, 0.3);
    }

    .card-img-container {
        width: 100%;
        height: 220px;
        overflow: hidden;
        position: relative;
    }

    .card-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card:hover .card-img-container img {
        transform: scale(1.1);
    }

    .card-body {
        padding: 1.5rem;
        position: relative;
    }

    .card-title {
        color: var(--nut-brown);
        font-weight: 700;
        font-size: 1.4rem;
        margin-bottom: 1rem;
        line-height: 1.3;
        height: 3.5rem;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .card-text {
        color: var(--nut-dark);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 1rem;
    }

    .card-text strong {
        color: var(--nut-light);
        font-weight: 600;
    }

    .price-tag {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 700;
        font-size: 1.2rem;
        display: inline-block;
        margin-bottom: 1rem;
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.2);
    }

    .volume-badge {
        background: rgba(210, 105, 30, 0.1);
        color: var(--nut-light);
        padding: 0.3rem 0.8rem;
        border-radius: 15px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-right: 0.5rem;
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    .manufacturer-badge {
        background: rgba(218, 165, 32, 0.1);
        color: var(--nut-dark);
        padding: 0.3rem 0.8rem;
        border-radius: 15px;
        font-size: 0.85rem;
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    .btn-container {
        position: absolute;
        top: 15px;
        right: 15px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        z-index: 10;
    }

    .btn-card {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        font-size: 1.1rem;
    }

    .btn-card:hover {
        transform: scale(1.1);
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
    }

    .btn-buy {
        background: linear-gradient(45deg, var(--nut-light), var(--nut-brown));
        color: white;
    }

    .btn-buy:hover {
        background: linear-gradient(45deg, var(--nut-brown), var(--nut-dark));
    }

    .btn-update {
        background: linear-gradient(45deg, #28a745, #218838);
        color: white;
    }

    .btn-update:hover {
        background: linear-gradient(45deg, #218838, #1e7e34);
    }

    .btn-delete {
        background: linear-gradient(45deg, #dc3545, #c82333);
        color: white;
    }

    .btn-delete:hover {
        background: linear-gradient(45deg, #c82333, #bd2130);
    }

    .out-of-stock {
        opacity: 0.7;
        position: relative;
    }

    .out-of-stock::after {
        content: "Немає в наявності";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(139, 69, 19, 0.9);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 1.1rem;
        z-index: 5;
        text-align: center;
        width: 80%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .out-of-stock .btn-buy {
        display: none;
    }

    .no-products {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(145deg, rgba(255, 248, 220, 0.5), rgba(255, 253, 245, 0.5));
        border-radius: 20px;
        border: 2px dashed rgba(210, 105, 30, 0.3);
        color: var(--nut-light);
        font-size: 1.3rem;
        margin-top: 2rem;
    }

    .no-products i {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        color: var(--nut-gold);
        display: block;
    }

    .nut-separator {
        text-align: center;
        margin: 2rem 0;
    }

    .nut-separator span {
        font-size: 1.5rem;
        margin: 0 8px;
        opacity: 0.3;
        animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    @media (max-width: 768px) {
        .container {
            padding: 1.5rem;
            margin: 1rem;
        }
        
        h1 {
            font-size: 2.2rem;
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }
        
        .filter-container {
            padding: 1.5rem;
        }
        
        .btn-container {
            flex-direction: row;
            top: 10px;
            right: 10px;
        }
        
        .btn-card {
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }
        
        .card-img-container {
            height: 180px;
        }
    }
</style>

    <h1><i class="bi bi-basket-fill"></i> Каталог горіхів</h1>

    <form method="post" action="/nuts/filter">
        <div class="filter-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="filter-section">
                        <h5><i class="bi bi-search"></i> Пошук за назвою</h5>
                        <input type="text" name="search_name" class="form-control" placeholder="Введіть назву горіхів..." value="<?php

use models\Users;

 echo htmlspecialchars($search_name ?? ''); ?>">
                    </div>
                    
                    <div class="filter-section">
                        <h5><i class="bi bi-filter"></i> Фільтр за категорією</h5>
                        <?php
                        $categories = [
                            ['id' => 1, 'name' => 'Класичні горіхи'],
                            ['id' => 2, 'name' => 'Екзотичні горіхи'],
                            ['id' => 3, 'name' => 'Насіння'],
                            ['id' => 4, 'name' => 'Суміші та набори']
                        ];

                        foreach ($categories as $category) : ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category_id" id="category<?php echo $category['id']; ?>" value="<?php echo $category['id']; ?>" <?php if (isset($category_id) && $category_id == $category['id']) echo 'checked'; ?>>
                                <label class="form-check-label" for="category<?php echo $category['id']; ?>">
                                    <?php echo $category['name']; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="filter-section">
                        <h5><i class="bi bi-sort-down"></i> Сортування за ціною</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort_price" id="priceAsc" value="asc" <?php if (isset($sort_price) && $sort_price == 'asc') echo 'checked'; ?>>
                            <label class="form-check-label" for="priceAsc">
                                Від найнижчої до найвищої
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort_price" id="priceDesc" value="desc" <?php if (isset($sort_price) && $sort_price == 'desc') echo 'checked'; ?>>
                            <label class="form-check-label" for="priceDesc">
                                Від найвищої до найнижчої
                            </label>
                        </div>
                    </div>
                    
                    <div class="filter-section">
                        <h5><i class="bi bi-box"></i> Фільтр за об'ємом</h5>
                        <select class="form-select" name="volume">
                            <option value="">Всі об'єми</option>
                            <option value="100г">100г</option>
                            <option value="250г">250г</option>
                            <option value="500г">500г</option>
                            <option value="1кг">1кг</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <button type="submit" class="btn-nut">
                    <i class="bi bi-funnel-fill"></i> Застосувати фільтри
                </button>
                <a href="/nuts/index" class="btn-nut btn-outline-nut">
                    <i class="bi bi-x-circle-fill"></i> Очистити фільтр
                </a>
            </div>
        </div>
    </form>

    <div class="nut-separator">
        <span>🥜</span>
        <span>🌰</span>
        <span>🫘</span>
    </div>

    <div class="row mt-4">
        <?php
        $inStock = [];
        $outOfStock = [];
        if (!empty($rows)) {
            foreach ($rows as $row) {
                if (!empty($row)) {
                    foreach ($row as $key => $value) {
                        if (is_array($value)) {
                            if ($value['stock_quantity'] > 0) {
                                $inStock[] = $value;
                            } else {
                                $outOfStock[] = $value;
                            }
                        }
                    }
                }
            }
        }
        foreach ($inStock as $value) : ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="btn-container">
                        <?php if (Users::IsUserAdmin()) : ?>
                            <form method="post" action="/nuts/update">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn-card btn-update" title="Оновити">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </form>
                            <form method="post" action="/nuts/delete">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn-card btn-delete" title="Видалити">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        <?php endif ?>
                        <form method="post" action="/nuts/addToCart">
                            <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                            <button type="submit" class="btn-card btn-buy" title="Додати в кошик">
                                <i class="bi bi-cart-plus-fill"></i>
                            </button>
                        </form>
                    </div>
                    <div class="card-img-container">
                        <img src="<?php echo $value['image_url']; ?>" class="card-img-top" alt="<?php echo $value['name']; ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <div class="price-tag"><?php echo $value['price']; ?> грн</div>
                        <div>
                            <span class="volume-badge"><?php echo $value['volume']; ?></span>
                            <span class="manufacturer-badge"><?php echo $value['manufacturer']; ?></span>
                        </div>
                        <p class="card-text"><?php echo $value['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        
        <?php foreach ($outOfStock as $value) : ?>
            <div class="col-md-4 mb-4">
                <div class="card out-of-stock">
                    <?php if (Users::IsUserAdmin()) : ?>
                        <div class="btn-container">
                            <form method="post" action="/nuts/delete">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn-card btn-delete" title="Видалити">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                            <form method="post" action="/nuts/update">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn-card btn-update" title="Оновити">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </form>
                        </div>
                    <?php endif ?>
                    <div class="card-img-container">
                        <img src="<?php echo $value['image_url']; ?>" class="card-img-top" alt="<?php echo $value['name']; ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <div class="price-tag"><?php echo $value['price']; ?> грн</div>
                        <div>
                            <span class="volume-badge"><?php echo $value['volume']; ?></span>
                            <span class="manufacturer-badge"><?php echo $value['manufacturer']; ?></span>
                        </div>
                        <p class="card-text"><?php echo $value['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($inStock) && empty($outOfStock)) : ?>
            <div class="no-products">
                <i class="bi bi-basket"></i>
                <p>На жаль, за вашими критеріями товарів не знайдено.</p>
                <p>Спробуйте змінити параметри пошуку або <a href="/nuts/index" style="color: var(--nut-brown); font-weight: 600;">перегляньте весь каталог</a></p>
            </div>
        <?php endif; ?>
    </div>
</div>