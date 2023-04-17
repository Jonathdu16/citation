<?php 
    $title = 'Les auteurs';
    ob_start(); 
?>

<main style="width: 100%;">
    <form action="index.php?controller=auteurs&action=update" method="POST">
        <fieldset>
            <legend>Formulaire de mise à jour d'auteur</legend>
            <div class="field">
                <label for="auteur">Nom de l'auteur</label>
                <?php foreach($auteurs as $auteur) : ?>
                    <input type="text" name="auteur" id="auteur" value="<?= $auteur['auteur']; ?>">
                <?php endforeach ; ?>
            </div>
            <div class="field">
                <label for="bio">Nom de l'auteur</label>
                <?php foreach($auteurs as $auteur) : ?>
                    <textarea name="bio" id="bio"><?= $auteur['bio']; ?></textarea>
                <?php endforeach ; ?>
            </div>
            <div style="display: none;" class="field">
                <?php foreach($auteurs as $auteur) : ?>
                    <input type="text" name="id" id="id" value="<?= $auteur['id']; ?>">
                <?php endforeach ; ?>
            </div>
            <div class="field">
                <input type="submit" value="Mettre à jour">
            </div>
        </fieldset>
        
    </form>
</main>

<?php 
    $content = ob_get_clean();
    require ROOT.'/view/templates/default.php'; 
?>