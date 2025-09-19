<?php 
require_once(__DIR__ . '/partials/head.php');
?>

<h1>Bienvenue ! </h1>

<?php
    if($heros){
        foreach($heros as $value){
            ?>
                <div style="width: 18rem;">
                    <img class="card-img-top rounded-circle border-4 border border-dark" src="public/img/<?= $value['image'] ?>" alt="Image de <?php echo $value['name'] ?>">
                    <h2><?= $value['name']?></h2>
                    <a href="/hero?id=<?= $value['id']?>" class="btn btn-outline-info d-flex justify-content-center">Voir +</a>
                </div>
            <?php
        }
    }else{
        echo "<p>Aucun personnage disponible, ils sont tous en mission.</p>";
    } 
?>

<?php 
require_once(__DIR__ . '/partials/footer.php');
?>