
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog de Naivo</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog de Naivo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Articles</a></li>
            <li><a href="#about">Administration</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Logout <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      			<?php 
      				include('ArticleRepository.php');
                	$articles = ArticleRepository::getAllArticle();
                ?>

                <?php foreach ($articles as $article) :?>

                		<div class="jumbotron">

                			<h1><?php echo $article->getTitle() ?></h1> <!-- Les 2 notations ('php echo' et =) se valent -->
                      		<p><?= $article->getContent() ?></p> <!-- syntaxe pour accede a un element d'un objet $objet->element-->
                			<a class="btn btn-lg btn-primary" href="/article?id=<?php echo $article->getId(); ?>" role="button">Lire plus &raquo;</a></p>

                    	</div>

      			<?php endforeach; ?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>