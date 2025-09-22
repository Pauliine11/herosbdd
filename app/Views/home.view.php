<?php 
require_once(__DIR__ . '/partials/head.php');
?>
 <h1>Les meilleurs des héros</h1>
    <div class="container-fluid my-5">
        <div class="row justify-content-around">
            <?php
            if($heros){
                foreach($heros as $value){

                    ?>
                        <div style="width: 22rem;">
                            <img class="card-img-top" src="public/img/<?= $value['image'] ?>" alt="Image de <?php echo $value['name'] ?>">
                            <h2 class="mt-2"><?= $value['name']?></h2>
                            <a href="/hero?id=<?= $value['id']?>" class="btn colorBtn d-flex justify-content-center mt-4">Voir +</a>
                        </div>
                    <?php
                }
            }else{
                echo "<p>Aucun personnage disponible, ils sont tous en mission.</p>";
            }   
            ?>
        </div>
        
    </div>

<?php 
require_once(__DIR__ . '/partials/footer.php');
?>