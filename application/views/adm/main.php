<?php foreach ($articles as $article): ?>
    <div class="post-main">
        <h1><a href="<?php echo URL::site('articles/' . $article['id'] . '-' . $article['alt_title']); ?>"><?php echo $article['title']; ?></a>
<!--            <span class="articles_date"><?php echo $article['date'] . ' г.'; ?></span>date-->
        </h1>
    </div><!-- #post-main -->
<?php endforeach; ?>