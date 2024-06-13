
<div class="flex space-evenly wrap">
<form method="post" action="">
    <fieldset>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" required
            value="<?php if (isset($school)) : ?><?= $school ->schoolNom ?><?php endif ?>">
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Adresse</label>
            <input type="text" placeholder="Adresse" class="form-control" id="adresse" name="adresse" required
            value="<?php if (isset($school)) : ?><?= $school -> schoolAdresse ?><?php endif ?>">
        </div>
        <div class="mb-3">
            <label for="Ville" class="form-label">Ville</label>
            <input type="text" placeholder="Ville" class="form-control" id="ville" name="ville" required
            value="<?php if (isset($school)) : ?><?= $school -> schoolVille ?><?php endif ?>">
        </div>
        <div class="mb-3">
            <label for="Code=postal" class="form-label">Code Postal</label>
            <input type="number" placeholder="Code Postal" class="form-control" id="code_postal" name="code_postal" required
            value="<?php if (isset($school)) : ?><?= $school -> schoolCodePostal ?><?php endif ?>">
        </div>
        <div class="mb-3">
            <label for="phone=number" class="form-label">Numéro de téléphone</label>
            <input type="tel" placeholder="Numéro de téléphone" class="form-control" id="phone_number" name="phone_number" required
            value="<?php if (isset($school)) : ?><?= $school -> schoolNumero ?><?php endif ?>">
        </div>
        <div class="mb-3">
            <label for="school-option" class="form-label">Choisis une option</label>
                <select name="option[]" id="options-select" multiple>
                    <?php foreach ($options as $option) : ?>
                        <option value="<?= $option->optionScolaireId ?>"
                        <?php if (isset($optionsActiveSchool)) : ?><?php foreach ($optionsActiveSchool as $optionSchool) : ?>
                        <?php if ($option->optionScolaireId === $optionSchool->optionScolaireId) : ?>selected<?php endif ?>
                        <?php endforeach ?><?php endif ?>><?= $option->nom ?></option>
                    <?php endforeach ?>
                </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="texte" placeholder="Image" id="image" name="image"
            value="<?php if (isset($school)) : ?><?= $school -> schoolImage ?><?php endif ?>">
        </div>
        <div>
            <button name="btnEnvoi" value="send" class="btn btn-primary">Envoyer</button>
        </div>
    </fieldset>
</form>
</div>