<?php 
require_once(__DIR__ . '/partials/head.php');
?>
    <div class="container">
        <h1 class="mt-5"><?= $hero['name'] ?></h1>
        <div class="row">
            <div class="col">
                <img class="widthHero mt-5" src="public/img/<?= $hero['image']?>" alt="Image de <?= $hero['name']?>">
            </div>
            <div class="col">
                <h2 class="mt-5">Pouvoir magique :</h2>
                <p class="mt-5"><?= $hero['magic_power']?></p>
            </div>
            <div class="col">
                <h2 class="mt-5">Description :</h2>
                <p class="mt-5"><?= $hero['description'] ?></p>
            </div>

            <?php 
                if((isset($_SESSION['user'])) && ($_SESSION['user']['role'] === 'admin')){
            ?>
            <div class="col">
                <a href="/edithero?id=<?= $hero['id'] ?>" class="btn mt-5 colorBtn">Modifier</a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
<?php 
require_once(__DIR__ . '/partials/footer.php');
?>