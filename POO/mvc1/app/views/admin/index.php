<section class="admin-dashboard">
    <h2>Admin Dashboard</h2>
    
    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-value"><?php echo $users_count; ?></div>
            <div class="stat-label">Users</div>
            <a href="<?php echo BASE_URL; ?>/admin/users" class="btn btn-secondary">Manage Users</a>
        </div>
        
        <div class="stat-card">
            <div class="stat-value"><?php echo $products_count; ?></div>
            <div class="stat-label">Products</div>
            <a href="<?php echo BASE_URL; ?>/admin/products" class="btn btn-secondary">Manage Products</a>
        </div>
    </div>
</section>