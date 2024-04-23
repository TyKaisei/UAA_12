<div class="titre">Page Profil</div>
<div class="cadre">
      <ul>
            <li class="profil-li"><strong>Login : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->loginUser ?> <?php endif ?></li>
            <li class="profil-li"><strong>Nom : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->nomUser ?> <?php endif ?></li>
            <li class="profil-li"><strong>Prénom : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->prenomUser ?> <?php endif ?></li>
            <li class="profil-li"><strong>Email : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->emailUser ?> <?php endif ?></li>
            <li class="profil-li last"><strong>Mot de passe : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->passWordUser ?> <?php endif ?></li>
      </ul>
      <div class="btn-container">
            <button class="profil-btn btn-modifier"><a href="updateProfil">Modifier</a></button>
            <button class="profil-btn btn-supprimer"><a href="deleteProfil">Supprimer</a></button>
      </div>
</div>