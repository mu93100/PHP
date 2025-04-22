<section class="admin-section">
    <div class="admin-header">
        <h2>Manage Users</h2>
        <a href="<?php echo BASE_URL; ?>/admin" class="btn btn-outline">Back to Dashboard</a>
    </div>
    
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <span class="badge <?php echo $user['is_admin'] ? 'admin' : 'user'; ?>">
                                <?php echo $user['is_admin'] ? 'Admin' : 'User'; ?>
                            </span>
                        </td>
                        <td><?php echo date('Y-m-d', strtotime($user['created_at'])); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>