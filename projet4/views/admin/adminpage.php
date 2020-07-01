<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Jean Forteroche - Billet simple pour l'Alaska</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="http://localhost/projet4/views/home.php">BLOG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#chapters-list">Liste des chapitres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="login.php" target="_blank"><button class="btn btn-outline-danger my-2 my-sm-0" type="button">Déconnexion</button></a>
                    </form>
                </div>
            </nav>
        </header>
        <!-- Tableau admin chapitres -->
        <section class="admin-table py-4">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="admin-table-chapter-title text-center text-light">
                        <h1>Administration des chapitres</h1>
                    </div>
                    <div class="add-chapter text-center">
                        <button class="btn btn-success my-2 my-sm-0 btn-lg" type="button">Ajouter un article</button>
                    </div>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">N° Chapitre</th>
                                <th scope="col">Titre chapitre</th>
                                <th scope="col">Modifications</th>
                                <th scope="col">Suppressions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($chapters as $chapter) : ?>
                                <tr>
                                    <td><?php echo $chapter['number'] ?></td>
                                    <td><?php echo $chapter['title'] ?></td>
                                    <td><button class="btn btn-secondary my-2 my-sm-0" type="button">Accéder</button></td>
                                    <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Tableau admin commentaires -->
        <section class="admin-table py-4">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="admin-table-comment-title text-center text-light">
                        <h1>Commentaires signalés</h1>
                    </div>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">N° Chapitre</th>
                                <th scope="col">Pseudo</th>
                                <th scope="col">Commentaire</th>
                                <th scope="col">Suppression</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($comments as $comments) : ?>
                                <tr>
                                    <td><?php echo $comments['id_chapter'] ?></td>
                                    <td><?php echo $comments['pseudo'] ?></td>
                                    <td><?php echo $comments['content'] ?></td>
                                    <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>