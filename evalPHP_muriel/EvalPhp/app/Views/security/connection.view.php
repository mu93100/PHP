<?php
require_once(__DIR__ . "/../partials/head.php");
?>

<h1>Connexion</h1>

<form method="POST">
    <div class="col-md-4 mx-auto d-block mt-5">
        <div class="mb-3">
            <label for="mail" class="form-label">E-mail</label>
            <input type="email" class="form-control" name='mail' id="mail">
            <?php if (isset($arrayError['mail'])) {
				?>
					<p class='text-danger'><?= $arrayError['mail'] ?></p>
				<?php
            } ?>
        </div>
        <div class="mb-1">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name='password' id="password">
            <?php if (isset($arrayError['password'])) {
				?>
					<p class='text-danger'><?= $arrayError['password'] ?></p>
				<?php
            } ?>
        </div>
        <button type="submit" class="btn colorPurpel mt-3">Connexion</button>
    </div>
</form>
<?php
include_once(__DIR__ . "/../partials/footer.php");
?>