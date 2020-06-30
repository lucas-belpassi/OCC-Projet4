<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Jean Forteroche - Billet simple pour l'Alaska</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../style/style.css">
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
                            <tr>
                                <td>1</td>
                                <td>Des envies d'ailleurs</td>
                                <td><button class="btn btn-secondary my-2 my-sm-0" type="button">Accéder</button></td>
                                <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mes débuts en Alaska</td>
                                <td><button class="btn btn-secondary my-2 my-sm-0" type="button">Accéder</button></td>
                                <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rencontre innoubliable</td>
                                <td><button class="btn btn-secondary my-2 my-sm-0" type="button">Accéder</button></td>
                                <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                            </tr>
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
                            <tr>
                                <td>1</td>
                                <td>Mali13</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</td>
                                <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hellohelloman</td>
                                <td>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</td>
                                <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Carlito</td>
                                <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                <td><button class="btn btn-danger my-2 my-sm-0" type="button">Supprimer</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>