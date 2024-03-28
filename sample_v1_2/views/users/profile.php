<div class="container">
    <h3 class="mb-3">Profil</h3>
    <div class="mb-3">
        <h5>Vzdevek</h5>
        <label><?php echo $user->username ?></label>
    </div>
    <div class="mb-3">
        <h5>E-Mail</h5>
        <label><?php echo $user->email ?></label>
    </div>
    <div class="mb-3">
        <h5>Število objav</h5>
        <label><?php echo User::num_of_articles($user->id) ?></label>
    </div>
</div>