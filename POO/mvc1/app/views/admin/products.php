<section class="admin-section">
    <?php 
    
    var_dump($products);?>
        
    <div class="admin-header">
        <h2>Manage Products</h2>
        <div>
            <a href="<?php echo BASE_URL; ?>/admin/addProduct" class="btn btn-primary">Add Product</a>
            <a href="<?php echo BASE_URL; ?>/admin" class="btn btn-outline">Back to Dashboard</a>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td>
                            <img src="<?php echo BASE_URL."/". $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="thumbnail">
                        </td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo number_format($product['price'], 2); ?></td>
                        <td class="actions">
                            <a href="<?php echo BASE_URL; ?>/admin/editProduct/<?php echo $product['id']; ?>" class="btn btn-small btn-secondary">Edit</a>
                            <a href="<?php echo BASE_URL; ?>/admin/deleteProduct/<?php echo $product['id']; ?>" class="btn btn-small btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>