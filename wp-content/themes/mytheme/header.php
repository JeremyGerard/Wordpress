<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <nav class="navbar  navbar-fixed-top navbar-default">
        <div class="container">
            <div class="blog-logo">
                <a class="navbar-brand" href="#index" title="BeeHive">
                    <!--img src="<?php echo get_bloginfo('template_url') ?>/images/beehive-search.png" alt=""/-->
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#index" title="" class="active"> Qui sommes-nous </a></li>
                    <li><a href="#entreprise" title=""> Entreprise </a></li>
                    <li><a href="#candidat" title=""> Candidat </a></li>
                    <li><a href="#offres" title=""> Offres d'emploi </a></li>
                    <li><a href="#contact" title=""> Contact </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
    <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>

    <section id="index" class="blog-index">
        <div class="flex-container">
            <h1 class="background-title">Qui sommes-nous</h1>
            <p>BEEHIVE Search est un cabinet de recrutement spécialisé dans la recherche de profils de Cadres et de Cadres Dirigeants. Nous accompagnons aussi bien des grands groupes internationaux que des PME, PMI ou ETI.</p>
            <p>BEEHIVE Search cultive sa singularité par son approche sectorielle et l’animation d’une large communauté de professionnels.</p>
            <p>S’appuyant sur une démarche d’approche directe ainsi que sur une méthodologie rigoureuse et vérifiée, BEEHIVE Search est en mesure de trouver les meilleurs potentiels pour votre entreprise.</p>
            <p>Notre expérience nous permet de cerner au mieux les attentes et les enjeux de nos clients et d’approcher les candidats. </p>
        </div>
    </section>

    <section id="entreprise" class="blog-entreprise">
        <div class="flex-container">
            <h1 class="background-title">Entreprise</h1>
            <p>Fort de 10 années d’expérience dans le recrutement par approche directe, nous vous accompagnons dans vos projets de recrutements sur des profils de Cadre et de Cadre Dirigeant.</p>
            <p>L’écoute est au cœur de notre relation. Nous comprenons vos enjeux et vos attentes afin de vous proposer des solutions en adéquation avec vos besoins.</p>
            <p>Pour y parvenir, nous mettons en place une démarche de chasse de têtes systématique et nous nous appuyons sur une méthodologie de travail rigoureuse et vérifiée. Notre conseil repose également sur l’utilisation d’outils d’évaluation éprouvés.</p>
            <p>Cette méthodologie nous a permis de pourvoir des centaines de postes sur des recrutements pointus et durables.</p>
            <p>Vous êtes à la recherche de cette qualité de partenariat pour optimiser vos recrutements, contactez-nous afin que nous étudiions ensemble vos projets.</p>
        </div>
    </section>

    <section id="candidat" class="blog-candidat">
        <div class="flex-container">
            <h1 class="background-title">Candidat</h1>
            <p>Un changement de poste est une étape importante dans une carrière professionnelle.</p>
            <p>Nous prenons le temps de comprendre vos aspirations personnelles et professionnelles. Notre objectif est de vous proposer de mettre en adéquation vos compétences et vos motivations avec le poste visé et les meilleures opportunités.</p>
            <p>Notre rôle consiste également à vous accompagner tout au long du processus de recrutement et à vous apporter notre expertise afin de vous positionner sur le marché. </p>
            <p>Nous construisons nos échanges sur une base de confiance et de bienveillance. La transparence, l’exigence et la réactivité caractérisent notre façon d’agir.</p>
            <p>Retrouvez toutes nos offres disponibles !</p>
        </div>
    </section>

    <section id="offres" class="blog-offres">
        <div class="flex-container">
            <h1 class="background-title">Offres d'emploi</h1>
        </div>
    </section>

    <section id="contact" class="blog-contact">
        <div class="flex-container">
            <h1 class="background-title">Contact</h1>
        </div>
    </section>


    <!--div class="blog-masthead">
    <div class="container">
    <nav class="blog-nav">
    <a class="blog-nav-item" href="#">Qui sommes-nous</a>
    <a class="blog-nav-item" href="#">Entreprise</a>
    <a class="blog-nav-item" href="#">Candidat</a>
    <a class="blog-nav-item" href="#">Offres d'emploi</a>
    <a class="blog-nav-item" href="#">Contact</a>
    </nav>
    </div>
    </div-->

