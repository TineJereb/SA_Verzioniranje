<div class="container">
    <h3>Seznam mojih novic</h3>
    <?php
    if ($articles != NULL) {
        foreach ($articles as $article){
            ?>
            <div class="article">
                <h4><?php echo $article->title;?></h4>
                <p><b>Povzetek:</b> <?php echo $article->abstract;?></p>
                <p><?php echo $article->text; ?></p>
                <p>Objavil: <?php echo $article->user->username; ?>, <?php echo date_format(date_create($article->date), 'd. m. Y \ob H:i:s'); ?></p>
                <a href="/articles/edit?id=<?php echo $article->id;?>"><button class="btn btn-primary" >Uredi</button></a>
                <a href="/articles/delete?id=<?php echo $article->id;?>"><button class="btn btn-primary">Zbriši</button></a>
            </div>
            <?php
        }   
    }
    else
        {
            ?>
            <div class="article">
                <p>You have no published articles.</p>
            </div>
            <?php
        }
    ?>
</div>