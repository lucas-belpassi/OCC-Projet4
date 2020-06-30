<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Jean Forteroche - Billet simple pour l'Alaska</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../style/style.css">

    <!-- JQUERY -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- TEXT EDITOR WYSIBB -->
    <script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
    <script src="../js/wysibb/wysibb.js"></script>
    <script src="../js/wysibb/fr.js"></script>
    <link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" />
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
        <section class="admin-chapter py-4">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="admin-table-chapter-title text-center text-light">
                        <h1>Ajouter/Modifier un chapitre</h1>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="admin-chapter-number">Numéro du chapitre</label>
                            <input class="form-control" id="admin-chapter-number">
                        </div>
                        <div class="form-group">
                            <label for="admin-chapter-title">Titre du chapitre</label>
                            <input class="form-control" id="admin-chapter-title"></input>
                        </div>
                        <div class="form-group">
                            <label for="admin-chapter-img">Image chapitre</label>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input">
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="admin-chapter-text">Contenu</label>
                            <textarea class="form-control" id="wysibb" rows="20"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-light btn-lg">Ajouter chapitre</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</body>

</html>