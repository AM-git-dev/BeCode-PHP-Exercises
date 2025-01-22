<?php require 'View/includes/header.php'?>


<section>
    <h1>Articles</h1>
    <ul>
        <?php foreach ($articles as $key => $article) : ?>
            <li>
                <a href="index.php?page=show&id=<?=$key+1?>"><?= $article->title ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>


