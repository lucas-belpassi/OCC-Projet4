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
                <a class="navbar-brand" href="http://localhost/projet4/index.php?p=chapters">BLOG</a>
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
                        <a href="login.php" target="_blank"><button class="btn btn-outline-secondary my-2 my-sm-0" type="button">Connexion</button></a>
                    </form>
                </div>
            </nav>
        </header>
        <!-- Chapitre complet -->
        <section class="full-chapter">
            <div class="row">
                <div class="col-lg-8 offset-2">
                    <h2 class="chapter-title text-center">Chapitre <?php echo $chapter['number'] . " : " . $chapter['title']; ?></h2>
                    <div class="row">
                        <div class="col-lg-8 offset-2">
                            <img class="img-fluid border border-light" src="<?php echo "img/" . $chapter['image'] ?>" alt="Un homme deant un paysage en Alaska">
                        </div>
                    </div>
                    <div class="chapter-text text-left text-justify bg-dark border border-light">
                        <p><?= $chapter['content'] ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Formulaire + Liste commentaires -->
        <section class="form-and-comments bg-dark pt-4 pb-4">
            <div class="row">
                <div class="col-lg-8 offset-2">
                    <!-- Postez un commentaire -->
                    <div class="post-comment-title text-light">
                        <h2 id="post-comment-title">Postez un commentaire :</h2>
                    </div>
                    <div class="comment-form text-white">
                        <form method="POST">
                            <div class="form-group">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" name="pseudo" class="form-control" id="pseudo-form">
                            </div>
                            <div class="form-group">
                                <label for="comment">Commentaire</label>
                                <textarea name="comment" class="form-control" id="comment-form" rows="2"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit_comment" class="btn btn-light">Ajouter un commentaire</button>
                            </div>
                            <div class="text-danger">
                                <p><?php echo $commentMsg ?></p>
                            </div>
                        </form>
                    </div>
                    <!-- Liste des commentaires -->
                    <div class="comments-list">
                        <?php foreach ($comments as $comment) : ?>
                            <div class="comment text-light py-4 border border-light mb-4">
                                <div class="comment-pseudo-date ml-4">
                                    <p id="pseudo-and-date"><span id="pseudo-comment"><?php echo $comment['pseudo']; ?></span> - <span id="date-comment"><?php echo $comment['date_comment_publication']; ?></span></p>
                                </div>
                                <div class="comment-text ml-4">
                                    <p><?php echo $comment['content']; ?></p>
                                </div>
                                <div class="signal mr-4 text-right">
                                    <form method="POST">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit_comment">Signaler</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>
        <!-- Bas de page -->
        <footer>
            <div class="row">
                <div class="col-sm-2 offset-4">
                    <button class="btn btn-outline-secondary text-light my-2 my-sm-0" type="submit">Mentions légales</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-outline-secondary text-light my-2 my-sm-0" type="submit">Politique de confidentialité</button>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>