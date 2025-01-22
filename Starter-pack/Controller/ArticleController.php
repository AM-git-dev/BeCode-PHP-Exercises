<?php

declare(strict_types = 1);
require_once(__DIR__ . '/../Model/Article.php');
class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = Article::getArticles();



        // Load the view
        require 'View/articles/index.php';

    }

    // Note: this function can also be used in a repository - the choice is yours

    public function show()
    {
        $id = $_GET["id"];
        $article = Article::getArticlebyID($id);
        require 'View/articles/show.php';
    }
}

