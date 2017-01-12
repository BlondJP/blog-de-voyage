    <?php include('header.php'); ?> <!--mon header est le fichier header.php -->

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
                			 <a class="btn btn-lg btn-primary" href="articleShow.php?id=<?php echo $article->getId(); ?>" role="button">Lire plus &raquo;</a>

                    </div>

      			<?php endforeach; ?>
    
    <?php include('footer.php'); ?>