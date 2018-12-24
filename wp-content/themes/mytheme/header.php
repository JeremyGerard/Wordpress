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

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">BeeHive</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#services">Qui sommes-nous</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#portfolio">Entreprise</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#about">Candidat</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#team">Offres d'emploi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!--div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
  </div>

  <div class="container">

      <div class="blog-header">
      	<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      	<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>