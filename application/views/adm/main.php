<div class="post-main">
<?php foreach ($articles as $article): ?>
        <h1><a href="<?php echo URL::site('articles/' . $article['id'] . '-' . $article['alt_title']); ?>"><?php echo $article['title']; ?></a>
            <span class="articles_date"><?php echo $article['date']; ?></span><!--date-->
        </h1>
<?php endforeach; ?>
 </div><!-- #post-main -->
<div class="post-main">
<h1>
<p>
Всего записей<span class="articles_date"><?php echo $count['count']; ?></span>
</p>
</h>
</div>