<?php 

require_once('Database.php');
require_once('Article.php');

class ArticleRepository
{
	public static function getAllArticle()
	{
		$db = Database::connect();
		$sql = "SELECT * FROM articles"; //j'initialise ma commande SQL
		$data = $db->query($sql); //articles = l'execution de la requete sql
		Database::disconnect();
		$articles = $data->fetchAll(PDO::FETCH_CLASS, "Article");

		return $articles;	
	}

	public static function getArticleById($idArticle)
	{
		//modifier requete sql
		$db = Database::connect();
		$sql = "SELECT * FROM articles WHERE id = $idArticle"; //j'initialise ma commande SQL
		$data = $db->query($sql); //articles = l'execution de la requete sql
		$db = Database::disconnect();
		$articles = $data->fetchAll(PDO::FETCH_CLASS, "Article");
		if (count($articles) == 1)
			return $articles[0];
		else
			return null;
	}

	public static function get10MostRecentArticle()
	{
		//modifier sql
	}

	public static function removeArticleById($idArticle)
	{
 		//modifier sql
 		$db = Database::connect();
		$sql = "DELETE FROM articles WHERE id = $idArticle"; //j'initialise ma commande SQL
		$article = $db->exec($sql); //articles = l'execution de la requete sql
		$db = Database::disconnect(); 
	}

	public static function updateArticle($newArticle)
	{
		$db = Database::connect();
		/*Syntaxe du Update*/
		$sql = "UPDATE `articles` SET `title`='".$newArticle->getTitle()."',`content`='".$newArticle->getContent().
		"',`date`='".$newArticle->getDate()."' WHERE id = '".$newArticle->getId()."'";
		$db->exec($sql);
		$db = Database::disconnect();
	}

}

 ?>