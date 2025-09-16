<?php 
require_once(__DIR__ . '/partials/head.php');
?>

<?php
    require_once 'partials/head.php';
?>
<h1 class="mt-5">Formulaire d'inscription</h1>

<section id="contact" class="contact">
    <form method="POST">
        <div class="container mt-5">

            <div class="form-group">
                <label for="pseudo" class="form-label" >Pseudo</label>
                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                <?php
                    if(isset($arrayError['pseudo'])){
                      ?>
                      <p class="text-danger"><?= $arrayError['pseudo']?></p>
                      <?php  
                    }
                ?>
            </div>

            <div class="form-group">
                <label for="email" class="form-label mt-3">Adresse e-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <?php
                    if(isset($arrayError['email'])){
                      ?>
                      <p class="text-danger"><?= $arrayError['email']?></p>
                      <?php  
                    }
                ?>
            </div>

            <div class="form-group">
                <label for="password" class="form-label mt-3">Mot de passe:</label>
                <input type="password" class="form-control"  id="password" name="password"  placeholder="Entrez le mot de passe">
                <?php
                    if(isset($arrayError['password'])){
                      ?>
                      <p class="text-danger"><?= $arrayError['password']?></p>
                      <?php  
                    }
                ?>
            </div>

            <button type="submit" class="btn btn-info mt-3">S'inscrire</button>
        </div>
    </form>
</section>

<?php 
require_once(__DIR__ . '/partials/footer.php');
?>