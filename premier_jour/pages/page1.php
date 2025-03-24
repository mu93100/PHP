<?php


include_once "../component/header.php";

$variable = 123;

?>


<h1>page1</h1>

<?php 


echo "<h1>je suis affiché avec echo</h1>";

$tab=["salut","tu vas","bien"];

foreach ($tab as $values){
    echo "<div>". $values ."</div>";
}


?>




<?php

if ($variable > 100) : ?>

    <div class="divdiv"> $variable est superieur à 100</div>


<?php else : ?>

    <div>
        $variable est inferieur à 100
    </div>

<?php endif;




include_once "../component/footer.php";
