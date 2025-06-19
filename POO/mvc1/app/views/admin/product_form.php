<section class="admin-form">
    <h2><?= isset($product['id']) ? 'Edit' : 'Add'; ?> Product</h2>

    <!-- Message d'erreur général -->
    <?php if (isset($errors['add']) || isset($errors['update'])): ?>
        <div class="alert error"><?= $errors['add'] ?? $errors['update']; ?></div>
    <?php endif; ?>

    <!-- Formulaire avec upload de fichier (multipart) -->
    <form action="<?= isset($product['id']) 
                        ? BASE_URL . '/admin/editProduct/' . $product['id'] 
                        : BASE_URL . '/admin/addProduct'; ?>" 
        method="POST" enctype="multipart/form-data">

        <!-- Nom du produit -->
        <div class="form-group <?= isset($errors['name']) ? 'error' : ''; ?>">
            <label for="name">Product Name</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name'] ?? ''); ?>">
            <?php if (isset($errors['name'])): ?>
                <span class="error-message"><?= $errors['name']; ?></span>
            <?php endif; ?>
        </div>

        <!-- Description -->
        <div class="form-group <?= isset($errors['description']) ? 'error' : ''; ?>">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4"><?= htmlspecialchars($product['description'] ?? ''); ?></textarea>
            <?php if (isset($errors['description'])): ?>
                <span class="error-message"><?= $errors['description']; ?></span>
            <?php endif; ?>
        </div>

        <!-- Prix -->
        <div class="form-group <?= isset($errors['price']) ? 'error' : ''; ?>">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price'] ?? ''); ?>">
            <?php if (isset($errors['price'])): ?>
                <span class="error-message"><?= $errors['price']; ?></span>
            <?php endif; ?>
        </div>

        <!-- Upload d'image -->
        <div class="form-group <?= isset($errors['image']) ? 'error' : ''; ?>">
            <label for="image">Product Image</label>
            <input type="file" id="image" name="image" accept="image/*">
            <?php if (isset($errors['image'])): ?>
                <span class="error-message"><?= $errors['image']; ?></span>
            <?php endif; ?>

            <!-- Affichage de l’image actuelle si modification -->
            <?php if (!empty($product['image'])): ?>
                <p class="current-image">Current image:</p>
                <img src="<?= BASE_URL . '/' . $product['image']; ?>" alt="Current Product Image" style="max-width: 200px;">
            <?php endif; ?>
        </div>

        <!-- Boutons -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><?= isset($product['id']) ? 'Update' : 'Add'; ?> Product</button>
            <a href="<?= BASE_URL; ?>/admin/products" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</section>
