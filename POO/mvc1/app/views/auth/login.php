<section class="auth-form">
    <?php var_dump($_COOKIE) ?>
    <h2>Login</h2>
    
    <?php if (isset($errors['login'])): ?>
        <div class="alert error"><?php echo $errors['login']; ?></div>
    <?php endif; ?>
    
    <form action="<?php echo BASE_URL; ?>/auth/login" method="POST">
        <div class="form-group <?php echo isset($errors['username']) ? 'error' : ''; ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?=isset($_COOKIE['cookie_mvc_username']) ? $_COOKIE['cookie_mvc_username'] : '' ?>">
            <?php if (isset($errors['username'])): ?>
                <span class="error-message"><?php echo $errors['username']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($errors['password']) ? 'error' : ''; ?>">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="<?=isset($_COOKIE['cookie_mvc_password']) ? $_COOKIE['cookie_mvc_password'] : '' ?>">
            <?php if (isset($errors['password'])): ?>
                <span class="error-message"><?php echo $errors['password']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        
        <p>Don't have an account? <a href="<?php echo BASE_URL; ?>/auth/register">Register</a></p>
    </form>
</section>