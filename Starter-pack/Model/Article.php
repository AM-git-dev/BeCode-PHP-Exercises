<?php

declare(strict_types=1);
require_once 'dbconnect.php';

class Article
{
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(string $title, ?string $description, ?string $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public static function getArticles()
    {
        $bdd = DbConnexion::getBdd();

        $query = $bdd->prepare("SELECT * FROM articles");

        $query->execute();

        $rawArticles = $query->fetchAll();

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }

    public static function getArticlebyID($id) {
        $bdd = DbConnexion::getBdd();
        $query = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
        $query->execute([$_GET['id']]);
        $rawArticle = $query->fetch();
        $article = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        return $article;
    }
    public function formatPublishDate($format  = 'd-m-Y')
    {
      $date = new DateTime($this->publishDate);
      return $date->format($format);

    }


}




