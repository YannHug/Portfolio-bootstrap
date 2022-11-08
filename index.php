<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Portfolio Yannick HUGUES</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://bootswatch.com/5/cerulean/bootstrap.min.css" rel="stylesheet">
    <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>
<body>

<!--  Barre de navigation  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <button aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
            data-bs-target="#navbarToggler" data-bs-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav w-100 d-flex justify-content-center align-items-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#about">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#competences">Compétences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<!-- Accueil -->
<section class="text-white bg-dark text-center d-flex flex-column align-items-center w-100 h-75 p-3 mx-auto"
         id="accueil">

    <!-- Message success -->
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-dismissible alert-success mt-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>
                <?php
                echo $_SESSION['message'];
                ?>
            </strong>
        </div>
        <?php
        unset($_SESSION['message']);
    }
    ?>

    <div class="mt-auto">
        <img alt="profile picture" class="imgProfileAcc img-thumbnail rounded mb-3" src="assets/images/profil.png">
        <h1>Salut, moi c'est Yannick</h1>
        <p class="lead">Je suis développeur junior, spécialisé en PHP/Symfony</p>
        <p class="lead">
            <a class="btn btn btn-secondary" href="#about">En savoir plus</a>
        </p>
    </div>
    <div class="mt-auto">
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
</section>


<!-- Portfolio -->
<section class="py-5" id="portfolio">
    <h2 class="text-center mb-5 text-uppercase">Portfolio</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-4 shadow-sm">
                    <img alt="card-image" class="card-img-top" src="https://picsum.photos/150">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            aliquam assumenda, doloremque error iusto molestias nam officiis recusandae soluta
                            sunt!</p>
                        <div class="btn-group">
                            <a class="text-dark" href="https://github.com" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Code Source</button>
                            </a>
                            <a class="text-dark ms-2" href="#" target="_blank">
                                <button class="btn btn-sm btn-outline-info">Voir le projet</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- A propos -->
<section class="bg-dark text-white mb-0" id="about">
    <div class="container py-5">
        <h2 class="text-center text-uppercase text-white pb-3">À Propos</h2>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, nostrum porro? Asperiores
                    cupiditate facilis inventore magni quod. Eos molestiae, natus. Blanditiis exercitationem, fugiat,
                    inventore maxime necessitatibus odit perspiciatis quo rem, repellendus reprehenderit rerum sunt
                    totam?</p>
            </div>
            <div class="col-lg-4">
                <p class="lead">Adipisci deleniti deserunt dolor doloremque doloribus eligendi error esse, est eum ex
                    facilis illo iste iure laboriosam libero magnam magni molestias nemo nulla optio porro provident
                    quam qui quisquam quos sequi soluta suscipit totam velit?</p>
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="#contact-form">Contactez moi</a>
        </div>
    </div>
</section>

<!-- Competences -->
<section class="container" id="competences">
    <h2 class="text-center text-uppercase my-5">Mes compétences</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <img alt="image de la technologie" class="imgCompetences" src="https://picsum.photos/200">
            <h2 class="text-center">Lorem.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda doloribus expedita praesentium
                repellendus repudiandae! Asperiores cum iusto tempora. Dicta ducimus expedita magni modi placeat! A
                aspernatur assumenda mollitia perferendis perspiciatis sapiente tempore unde vero voluptatem!</p>
            <a class="btn btn-secondary mb-5" href="#">Voir mes projets &raquo;</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <img alt="image de la technologie" class="imgCompetences" src="https://picsum.photos/200">
            <h2 class="text-center">Lorem.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda doloribus expedita praesentium
                repellendus repudiandae! Asperiores cum iusto tempora. Dicta ducimus expedita magni modi placeat! A
                aspernatur assumenda mollitia perferendis perspiciatis sapiente tempore unde vero voluptatem!</p>
            <a class="btn btn-secondary mb-5" href="#">Voir mes projets &raquo;</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <img alt="image de la technologie" class="imgCompetences" src="https://picsum.photos/200">
            <h2 class="text-center">Lorem.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda doloribus expedita praesentium
                repellendus repudiandae! Asperiores cum iusto tempora. Dicta ducimus expedita magni modi placeat! A
                aspernatur assumenda mollitia perferendis perspiciatis sapiente tempore unde vero voluptatem!</p>
            <a class="btn btn-secondary mb-5" href="#">Voir mes projets &raquo;</a>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="bg-dark text-white mb-0" id="contact">
    <div class="container">
        <h2 class="titreContact text-center">Rentrons en Contact !</h2>
        <div class="row">
            <div class="col-10 mx-auto">
                <form id="contact-form" role="form" method="post" action="assets/php/mail.php">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="form_prenom">Prénom *</label>
                                <input class="form-control" id="form_prenom" name="prenom" required="required"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="form_nom">Nom *</label>
                                <input class="form-control" id="form_nom" name="nom" required="required" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input class="form-control" id="form_email" name="email" required="required"
                                       type="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea class="form-control" id="form_message" name="message" required="required"
                                          rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <input class="btn btn-success btn-send" type="submit" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white">
    <p class="text-center m-0">
        @Tout droit réservés - Yannick HUGUES
    </p>
</footer>

<!-- Script -->
<script src="app.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>