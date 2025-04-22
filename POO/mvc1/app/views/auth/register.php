<section class="auth-form">
    <h2>Register</h2>
    
    <?php if (isset($errors['register'])): ?>
        <div class="alert error"><?= $errors['register']; ?></div>
    <?php endif; ?>
    
    <form action="<?= BASE_URL; ?>/auth/register" method="POST">
        <div class="form-group <?= isset($errors['username']) ? 'error' : ''; ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= $username ?? '';  ?>">
            <?php if (isset($errors['username'])): ?>
                <span class="error-message"><?= $errors['username']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?= isset($errors['email']) ? 'error' : ''; ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $email ?? ''; ?>">
            <?php if (isset($errors['email'])): ?>
                <span class="error-message"><?= $errors['email']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?= isset($errors['password']) ? 'error' : ''; ?>">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php if (isset($errors['password'])): ?>
                <span class="error-message"><?= $errors['password']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?= isset($errors['confirm_password']) ? 'error' : ''; ?>">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password">
            <?php if (isset($errors['confirm_password'])): ?>
                <span class="error-message"><?= $errors['confirm_password']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        
        <p>Already have an account? <a href="<?= BASE_URL; ?>/auth/login">Login</a></p>
    </form>
</section>