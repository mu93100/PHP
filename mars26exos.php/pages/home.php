<?php
include_once "../component/header.php";
?>


<?php

?>


<div class="container_home">
    <h1>H O M E</h1>  
    <img src="https://image.lematin.ch/2025/03/18/333d5bba-22c1-4a1d-a8c0-7cd03b7fe64b.jpeg?auto=format%2Ccompress%2Cenhance&fit=max&w=1200&h=1200&rect=0%2C0%2C4000%2C2662&fp-x=0.584&fp-y=0.51427498121713&s=588764506d624da4c624a4f3b2a5bfcc" alt="">

    <div class="produits">
        <?php
        $produit=[
            [
                "name"=>"ordinateur",
                "prix"=>1000,
                "category"=>"informatique"
            ],
            [
                "name"=>"chaise",
                "prix"=>3000,
                "category"=>"meubles"
            ],
            [
                "name"=>"chaussures",
                "prix"=>20,
                "category"=>"vêtements"
            ]
        ];
        ?>
    </div>  
</div>


<?php
include_once "../component/footer.php";
?>

