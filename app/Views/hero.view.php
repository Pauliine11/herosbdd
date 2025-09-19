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
            <div class="col">
                <button type="submit" class="btn mt-5 colorBtn">Modifier</button>
            </div>
        </div>
    </div>
<?php 
require_once(__DIR__ . '/partials/footer.php');
?>