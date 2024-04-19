<style>
      
    .cadre {
        width: 400px;
        margin: 0 auto;
        /* Centrage horizontal */
        border: 1px solid #000;
        padding: 20px;
        text-align: center;
    }

    .titre {
        text-align: center;
        font-size: 58px;
        margin-top: 50px;
        font-weight: 600;
        color: rgb(24, 61, 61);
        text-decoration: underline;
        margin-bottom: 50px;
    }

    .profil-li {
        font-size: 24px;
        padding-left: 0px;
        text-align: left;
        margin-bottom: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .profil-btn {
        display: flex;
        justify-content: center;
        margin: 10px;
        border: none;
        border-radius: 5px;
        font-size: 13px;
        cursor: pointer;
        padding: 5px;
    }

    .btn-modifier {
        background-color: rgb(24, 61, 61);
        color: white;
    }

    .btn-supprimer {
        background-color: rgb(24, 61, 61);
        color: white;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profil-btn a {
        text-decoration: none;
        color: white;
    }
</style>

<div class="titre">Page Profil</div>
<div class="cadre">
      <ul>
            <li class="profil-li"><strong>Nom : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->nomUser ?> <?php endif ?></li>
            <li class="profil-li"><strong>Prénom : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->prenomUser ?> <?php endif ?></li>
            <li class="profil-li"><strong>Email : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->emailUser ?> <?php endif ?></li>
            <li class="profil-li"><strong>Login : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->loginUser ?> <?php endif ?></li>
            <li class="profil-li last"><strong>Mot de passe : </strong><?php if (isset($_SESSION['user'])) : ?><?= $_SESSION['user']->passWordUser ?> <?php endif ?></li>
      </ul>
      <div class="btn-container">
            <button class="profil-btn btn-modifier"><a href="/updateProfil">Modifier</a></button>
            <button class="profil-btn btn-supprimer"><a href="/deleteProfil">Supprimer</a></button>
      </div>
</div>