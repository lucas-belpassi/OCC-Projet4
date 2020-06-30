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

        <!-- Section : Couverture et présentation de l'auteur -->
        <section class="title-cover-author bg-secondary py-4">
            <div class="container-fluid">
                <div class="row">
                    <!-- Couverture et titre du livre -->
                    <div class="col-lg-8">
                        <div class="cover-and-title">
                            <img class="img-fluid border border-dark" src="img/cover.jpg" alt="Paysage d'Alaska">
                            <div class="booktitle text-light">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>"Un billet pour l'Alaska"</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Présentation de l'auteur -->
                    <div class="col-lg-4 text-center">
                        <div class="author-presentation text-light">
                            <div class="row">
                                <div class="col-lg-7 offset-2">
                                    <img class="img-fluid rounded-circle border border-dark" src="img/author.jpg" alt="Portrait Jean Forteroche">
                                </div>
                            </div>
                            <div class="presentation">
                                <div class="row">
                                    <div class="col-md-9 offset-1">
                                        <h3><i class="fa fa-pencil" aria-hidden="true"></i> Jean Forteroche</h3>
                                        <h4>Auteur de roman de voyage</h4>
                                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.".</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Liste des chapitres -->
        <section id="chapters-list" class="chapters-list text-light bg-dark py-4">
            <div class="row">
                <div class="col-md-8 offset-2 chapter-list-title text-center">
                    <h2><i class="fa fa-book" aria-hidden="true"></i> Listes des chapitres</h2>
                </div>
            </div>
            <?php foreach ($chapters as $chapter) : ?>
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <article class="chapter rounded border border-dark">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="img-fluid" alt="Un homme deant un paysage en Alaska" src="<?php echo "img/" . $chapter['image']?>">
                                </div>
                                <div class="col-sm-9">
                                    <h3 class="text-center p-4">Chapitre <?php echo $chapter['number'] . " : " . $chapter['title']; ?></h3>
                                    <p class="ml-2 mr-2"><?php echo $chapter['content']; ?></p>
                                    <div class="text-right mr-2 mb-2">
                                        <a href="http://localhost/projet4/index.php?p=chapters/read/<?=$chapter['number']?>"><button class="btn btn-outline-secondary text-light my-sm-0" type="submit">Lire le chapitre</button></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Pagination -->
            <nav aria-label="Page navigation chapters">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href= <?php echo '"http://localhost/projet4/index.php?p=chapters&page=' . $previousPage . '"' ?> >Précédent</a>
                    </li>
                    <?php
                    for($i=1; $i<=$totalPages; $i++) {
                    echo '<li class="page-item"><a class="page-link" href="http://localhost/projet4/index.php?p=chapters&page=' . $i . '">' . $i . '</a></li>';
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" href=<?php echo '"http://localhost/projet4/index.php?p=chapters&page=' . $nextPage . '"' ?> >Next</a>
                    </li>
                </ul>
            </nav>
        </section>
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