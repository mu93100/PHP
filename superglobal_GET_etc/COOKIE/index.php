<?php
// cookie === données recueillies ds post ou get
include_once "./utils.php";

session_start();
var_dump($_SESSION);
var_dump($_COOKIE);

if (isset($_POST['login'])) { // vérif si le login est ds POST
    if (isset($_POST["nom"]) && isset($_POST["prenom"])){
        $_SESSION["nom"]= $_POST["nom"];
        $_SESSION["prenom"]= $_POST["prenom"];
    }
    $session_name=$_SESSION['nom'];
    $session_prenom=$_SESSION['prenom'];
    setcookie('cookie_name', $session_name, time()+(86400*30), "/PHP/superglobal_GET_etc/COOKIE/", "", false, true); // 'cookie_name' on donne un nom /PHP/... on prend adress ds URL de la page index
    setcookie('cookie_prenom', $session_prenom, time()+(86400*30), "/PHP/superglobal_GET_etc/COOKIE/","", false, true);

    header("location: welcome.php");
    exit();
}
?>
<form action="" method="post">
    <label for="">N O M</label>
    <input type="text" name="nom" value="<?php echo isset($_COOKIE['cookie_name']) ? htmlspecialchars($_COOKIE['cookie_name']) : '';?>">
<!--  opérateur ternaire === cond ?===IF (ce qu'il se passe) : ===ELSE 'ce qu'il se passe' ; (ne pas oublier le ;) -->
    <label for="">P R E N O M</label>
    <input type="text" name="prenom" value="<?php echo isset($_COOKIE['cookie_prenom']) ? htmlspecialchars($_COOKIE['cookie_prenom']) : '';?>">

    <label for=""></label>
    <input type="submit" name="login" value="L O G I N">
</form>

<a href="./language.php">fretrzez</a>