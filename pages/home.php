<?php

foreach ($db -> query('SELECT * FROM articles','App\Table\article')as $post):?>
    <h2>
        <a href="<?= $post->url; ?>"><?= $post->titre; ?></a>
    </h2>
     <p>
         <?= $post->extrait;?>
     </p>

<?php endforeach; ?>

