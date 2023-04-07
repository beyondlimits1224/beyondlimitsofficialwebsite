<ul class="socmed flex-container jcc">
    <?php foreach($data['posts'] as $post) : ?>
        <li class="item"><a href="#"><?php echo $post->icons;?></a></li>
        <?php endforeach; ?>
</ul>
