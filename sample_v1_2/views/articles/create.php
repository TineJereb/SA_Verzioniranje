<div class="container">
    <h3 class="mb-3">Objavi Novico</h3>
    <form action="/articles/store" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($_POST["title"]) ? $_POST["title"]: ""; ?>">
        </div>
        <div class="mb-3">
            <label for="abstract" class="form-label">Opis</label>
            <input type="text" class="form-control" id="abstract" name="abstract" value="<?php echo isset($_POST["abstract"]) ? $_POST["abstract"]: ""; ?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Novica</label>
            <input type="text" class="form-control" id="text" name="text" value="<?php echo isset($_POST["text"]) ? $_POST["text"]: ""; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="create">Objavi</button>
        <label class="text-danger"><?php echo $error; ?></label>
    </form>
</div>