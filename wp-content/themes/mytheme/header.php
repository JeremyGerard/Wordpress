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
    <?php wp_head();?>
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
      <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>


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

