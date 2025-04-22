<section class="hero">
    <h1>Welcome to <?php echo APP_NAME; ?></h1>
    <p>Discover our amazing products</p>
</section>

<section class="products">
    <h2>Featured Products</h2>
    
    <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo BASE_URL ."/" . $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                </div>
                <div class="product-details">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['description']; ?></p>
                    <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>