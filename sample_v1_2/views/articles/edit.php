<div class="container">
    <h3 class="mb-3">Urejanje</h3>
    <form action="/articles/update" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $article->title ?>">
        </div>
        <div class="mb-3">
            <label for="abstract" class="form-label">Opis</label>
            <input type="text" class="form-control" id="abstract" name="abstract" value="<?php echo $article->abstract ?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Novica</label>
            <input type="text" class="form-control" id="text" name="text" value="<?php echo $article->text ?>">
        </div>
        <input type="hidden" id="id" name="id" value="<?php echo $article->id?>">

        <button type="submit" class="btn btn-primary" name="update">Uredi</button>
        <label class="text-danger"><?php echo $error; ?></label>
    </form>
</div>