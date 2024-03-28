<div class="container">
    <h3 class="mb-3">Spremeni podatke</h3>
    <form action="/users/update" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Vzdevek</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user->username; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-pošta</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>">
        </div>
       
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="register">Shrani</button>
        </div>
        <label class="text-danger"><?php echo $error; ?></label>
    </form>
    <div class="mb-3">
            <a href="/users/edit_password"><button class="btn btn-secondary">Spremeni geslo</button></a>
    </div>
</div>