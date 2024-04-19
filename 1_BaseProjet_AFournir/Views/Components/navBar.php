<ul class="flexible space-evenly">

    <li class="menu hover-vert"><a href="index.php">Home</a></li>

    <?php if (isset($_SESSION["user"])) : ?> 
        <li class="menu hover-vert"><a href="profil">Profil</a></li>
        <li class="menu hover-vert"><a href="deconnexion">Déconnexion</a></li>
    <?php else : ?>
        <li  class="menu hover-vert"><a href="inscription">Inscription</a></li>
        <li  class="menu hover-vert"><a href="connexion">Connexion</a></li>
    <?php endif ?>

</ul>