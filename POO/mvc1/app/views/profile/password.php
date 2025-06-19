<section class="profile-form">
    <h2>Change Password</h2>
    
    <?php if (isset($errors['update'])): ?>
        <div class="alert error"><?php echo $errors['update']; ?></div>
    <?php endif; ?>
    
    <form action="<?php echo BASE_URL; ?>/profile/password" method="POST">
        <div class="form-group <?php echo isset($errors['current_password']) ? 'error' : ''; ?>">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password">
            <?php if (isset($errors['current_password'])): ?>
                <span class="error-message"><?php echo $errors['current_password']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($errors['new_password']) ? 'error' : ''; ?>">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password">
            <?php if (isset($errors['new_password'])): ?>
                <span class="error-message"><?php echo $errors['new_password']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($errors['confirm_password']) ? 'error' : ''; ?>">
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" id="confirm_password" name="confirm_password">
            <?php if (isset($errors['confirm_password'])): ?>
                <span class="error-message"><?php echo $errors['confirm_password']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Change Password</button>
            <a href="<?php echo BASE_URL; ?>/profile" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</section>