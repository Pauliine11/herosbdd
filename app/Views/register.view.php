<?php 
require_once(__DIR__ . '/partials/head.php');
?>

<?php
    require_once 'partials/head.php';
?>
<h1>Formulaire</h1>

<section id="contact" class="contact">
    <form action="#" method="post">
        <div class="container mt-5">
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="name">Prénom</label>
                <input type="text" class="form-control" name="name" placeholder="Prénom" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="4" placeholder="Vôtre message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
        </div>
    </form>
</section>
<?php 
require_once(__DIR__ . '/partials/footer.php');
?>