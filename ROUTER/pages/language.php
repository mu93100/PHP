<?php
    if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    
        if (isset($_POST['set_language'])) {
            if (isset($_POST['language'])) {
                $_SESSION['language']=$_POST['language'];
                createCookie('langueChoisie', $_POST['language']);

                header("Location: index"); // ou index.php ?
                exit();
            } 
        }   else {
           $_SESSION['cookie__langueChoisie']='french';
        }  
}

?>

<form method="post">
    <label for="language">choisissez votre langue</label>
    <select name="language">
        <option value="English">English</option>
        <option value="French">French</option>
        <option value="Spanish">Spanish</option>
    </select>
    <input type="submit" name="set_language" value="Save Language">
</form>

<!-- avec POST je récup données de 1 form
    avec SESSION récup données de TOUS LES form 
    
    FORM
    <form method="post">

    ->

<?php

// var_dump($_COOKIE);
// var_dump($_SESSION);
?>    