<?php

foreach ($db -> query('SELECT * FROM articles','App\Table\article')as $post);?>
    <h2>
        <a href="<?php $post->getURL() ?>"><?php $post->titre; ?></a>
    </h2>
     <p>
         <?php $post->getExtrait();?>
     </p>
<?php endforeach ?>

