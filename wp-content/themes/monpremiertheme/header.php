<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- icones BS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">

    <script src="<?php bloginfo('template_directory') ?>/monjs.js"></script>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php   // echo "<pre>"; var_dump(get_defined_vars()); echo "</pre>"; 
    ?>
    <header class="container-fluid">

        <div class="row">
            <!-- dynamic_sidebar est la fonction qui va permettre de récupérer en affichage FRONT les éléments que va  contenir le WIDGET haut gauche du back-office (elle prend en argument l'ID du WIDGET (haut-gauche) -->
            <div class="col-6 bleu">
                <div class="row">
                    <div class="col-2 mt-1 ms-2"><?php dynamic_sidebar('haut-gauche') ?></div>
                    <div class="col-6 text-primary mt-3"><h1><?php bloginfo() ?></h1></div>
                </div>
            </div>
            <div class="col-6 rouge"><?php dynamic_sidebar('haut-droite') ?></div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-12 vert"><?php dynamic_sidebar('entete') ?></div>
        </div>

        <!-- Récupère le chemin jusqu'à la racine du site -->
        <!-- <?php bloginfo('template_directory'); ?> -->
    </header>
    <main class="container my-5">