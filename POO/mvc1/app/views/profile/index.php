<section class="profile">
    <h2>Your Profile</h2>
    
    <div class="profile-card">
        <div class="profile-header">
            <h3><?php echo $user['username']; ?></h3>
            <span class="badge"><?php echo $user['is_admin'] ? 'Admin' : 'User'; ?></span>
        </div>
        
        <div class="profile-details">
            <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
            <p><strong>Member since:</strong> <?php echo date('F j, Y', strtotime($user['created_at'])); ?></p>
        </div>
        
        <div class="profile-actions">
            <a href="<?php echo BASE_URL; ?>/profile/edit" class="btn btn-secondary">Edit Profile</a>
            <a href="<?php echo BASE_URL; ?>/profile/password" class="btn btn-outline">Change Password</a>
        </div>
    </div>
</section>