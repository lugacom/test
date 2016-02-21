<div class="post-main">
    <?php if ($article): ?>
        <h1><a href="<?php echo URL::site('articles/' . $article['id'] . '-' . $article['alt_title']); ?>"><?php echo $article['title']; ?></a>
            <span class="articles_date"><?php echo $article['date'] . ' г.'; ?></span><!--date-->
        </h1>
        <div class="post">
            <p><?php echo $article['content_full']; ?></p>
        </div><!-- #post -->
        <div class="post-info">
            <div class="share">
                <a onClick="window.open('https://vkontakte.ru/share.php?url=<?php echo URL::base('http');
    echo('articles/' . $article['id'] . '-' . $article['alt_title']); ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="vkontakte"></a>
                <a onClick="window.open('http://ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo URL::base('http');
    echo('articles/' . $article['id'] . '-' . $article['alt_title']); ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="odnoklassniki"></a>
                <a onClick="window.open('https://connect.mail.ru/share?url=<?php echo URL::base('http');
    echo('articles/' . $article['id'] . '-' . $article['alt_title']); ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="mail"></a>
                <a onClick="window.open('https://plus.google.com/share?url=<?php echo URL::base('http');
    echo('articles/' . $article['id'] . '-' . $article['alt_title']); ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="google"></a>
                <a onClick="window.open('https://www.facebook.com/sharer.php?u=<?php echo URL::base('http');
    echo('articles/' . $article['id'] . '-' . $article['alt_title']); ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="facebook"></a>
                <a onClick="window.open('https://twitter.com/intent/tweet?text=<?php echo $article['title']; ?> <?php echo URL::base('http');
    echo('articles/' . $article['id'] . '-' . $article['alt_title']); ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="twitter"></a>
                <a href='javascript:window.print(); void 0;' class="print"></a>
            </div>
        </div><!-- #post-info -->
<?php else: ?>
        <div style="padding:10px; margin-bottom:10px;">
            Статья не найдена или не существует
        </div>
<?php endif; ?>
</div><!-- #post-main -->