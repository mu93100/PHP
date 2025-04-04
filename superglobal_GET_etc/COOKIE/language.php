<?php
// ------FACUNDO

session_start();
print '<pre>';
print_r($_SESSION);
print '<pre>';

if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['set_language'])) {
    $language = $_POST['language'];
    setcookie('user_language', $language, time() + 3600 * 24 * 30, '/'); // Expire dans 30 jours
    $_SESSION['language'] = $language;
    header('Location: welcome.php');
    exit();
}
?>

<form method="post">
    Choose your language:
    <select name="language">
        <option value="English">English</option>
        <option value="French">French</option>
        <option value="Spanish">Spanish</option>
    </select>
    <input type="submit" name="set_language" value="Save Language">
</form>
