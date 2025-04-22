<section class="profile-form">
    <h2>Edit Profile</h2>
    
    <?php if (isset($errors['update'])): ?>
        <div class="alert error"><?php echo $errors['update']; ?></div>
    <?php endif; ?>
    
    <form action="<?php echo BASE_URL; ?>/profile/edit" method="POST">
        <div class="form-group <?php echo isset($errors['username']) ? 'error' : ''; ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>">
            <?php if (isset($errors['username'])): ?>
                <span class="error-message"><?php echo $errors['username']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($errors['email']) ? 'error' : ''; ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>">
            <?php if (isset($errors['email'])): ?>
                <span class="error-message"><?php echo $errors['email']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Profile</button>
            <a href="<?php echo BASE_URL; ?>/profile" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</section>