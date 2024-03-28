<div class="container">
    <h3 class="mb-3">Spremeni geslo</h3>
    <form action="/users/store_password" method="POST">
        <div class="mb-3">
            <label for="current_password" class="form-label">Trenutno geslo</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
        </div>
        <div class="mb-3">
            <label for="new_password_1" class="form-label">Novo geslo</label>
            <input type="password" class="form-control" id="new_password_1" name="new_password_1">
        </div>
        <div class="mb-3">
            <label for="new_password_2" class="form-label">Ponovno vnesi novo geslo</label>
            <input type="password" class="form-control" id="new_password_2" name="new_password_2">
        </div>
        <button type="submit" class="btn btn-primary" name="edit_password">Shrani</button>
        <label class="text-danger"><?php echo $error; ?></label>

    </form>
</div>