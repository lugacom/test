<div class="vidget">
    <h1>Меню</h1>
    <ul>
        <li><a href="<?php echo URL::site(''); ?>">Главная</a></li>
        <li><a href="<?php echo URL::site('static/about'); ?>">О сайте</a></li>
        <li><a href="<?php echo URL::site('static/contacts'); ?>">Мои контакты</a></li>
    </ul>
</div><!-- #vidget -->
<div class="vidget">
    <h1>Разделы</h1>
    <ul>
        <?php //foreach ($articles as $article): ?>
        <li><a href="<?php //echo URL::site('articles/' . $article['id'] . '-' . $article['alt_title']); ?>"><?php //echo $article['title']; ?></a></li>
<?php //endforeach; ?>
    </ul>
</div><!-- #vidget -->