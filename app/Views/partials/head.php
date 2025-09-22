<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Heros Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header class="header">
        <a href="/" class="logo">Heros' Project</a>
        <nav class="navbar">
            <?php
                if(isset($_SESSION['user'])){
                    if($_SESSION['user']['role'] === "admin"){
              ?>                
                  <a href="/addheros">Ajouter un hero</a>                
              <?php
            }
            ?>
                <a href="/logout" style="--i:1;">Se déconnecter</a>
            <?php
                } else {
            ?>
                <a href="/register" style="--i:0;">S'inscrire</a>
                <a href="/login" style="--i:1;">Se connecter</a>
            <?php
                }
            ?>
        </nav>
    </header>
