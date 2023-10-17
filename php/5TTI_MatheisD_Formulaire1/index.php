<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Document</title>
</head>
<body>
    <form>
        <div class="box">
            <div class="partie-gauche">
                <fieldset>
                    <legend>Vos coordonées</legend>
                    <div class="box-gauche">
                        <div class="Name">
                            <label for="nom">Nom : </label>
                            <input type="text" id="nom">
                        </div>
                        <div class="Surname">
                            <label for="surname">Prénom : </label>
                            <input type="text" id="surname">
                        </div>
                        <div class="Date">
                            <label for="date">Date de naissance : </label>
                            <input type="date" id="Date">
                        </div>
                        <div class="Email">
                            <label for="Email">Email : </label>
                            <input type="email" id="Email">
                        </div>
                    </div>
                    <div class="Pays">
                        <label for="Pays">Pays : </label>
                        <select id="Pays">
                            <optgroup label="Europe">
                                <option value="">Belgique</option>
                            </optgroup>
                            <optgroup label="Amérique du nord">
                                <option value="">Etats-Unis</option>
                                <option value="">Etats-Canada</option>
                            </optgroup>
                        </select>
                    </div>
                </fieldset>
            </div>
            <div class="partie-droite">
                <fieldset>
                    <legend>Périodicité</legend>
                    <div class="newsletter-heb">
                        <label for="hebdomadaire"><input type="checkbox" id="hebdomadaire">Newsletter hebdomadaire</label>
                    </div>
                    <div class="newsletter-mens">
                        <label for="mensuelle"><input type="checkbox" id="mensuelle">Newsletter mensuelle</label>
                    </div>
                    <div class="newsletter-trim">
                        <label for="trimestrielle"><input type="checkbox" id="trimestrielle">Newsletter mensuelle</label>
                </fieldset>
                <fieldset>
                    <legend>Version papier / informatique</legend>
                    <div class="v-papier">
                        <label for="v-papier"><input type="checkbox" id="v-papier">Recevoir la version papier</label>
                    </div>
                    <div class="v-info">
                        <label for="v-info"><input type="checkbox" id="v-info">Recevoir la version informatique</label> 
                    </div>
                    <div class="nbCopies">
                        <label for="nbCopies">Nombre de copies souhaitées : </label>
                        <input type="number" id="nbCopies">
                    </div>
                </fieldset>
                <div class="btn">
                    <button>Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>