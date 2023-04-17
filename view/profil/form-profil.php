<?php 
    $title = 'Espace profil';
    ob_start(); 
?>

<main style="text-align: center;" class="espace-profil">
    <form action="" class="field-form">
        <fieldset>
            <legend><h1>Formulaire de modification de profil</h1></legend>
            <div style="display: flex; flex-direction: column; align-items: center;" class="field-form-profil-block">
                <label for="name">Prénom</label>
                <?php foreach($profils as $profil) : ?>
                    <input type="text" name="firstname" value="<?= $profil['prenom']; ?>" id="firstname">
                <?php endforeach; ?>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center;" class="field-form-profil-block">
                <label for="">Nom</label>
                <?php foreach($profils as $profil) : ?>
                    <input type="text" name="lastname" value="<?= $profil['nom']; ?>" id="lastname">
                <?php endforeach; ?>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center;" class="field-form-profil-block">
                <label for="">E-mail</label>
                <?php foreach($profils as $profil) : ?>
                    <input type="mail" name="mail" value="<?= $profil['mail']; ?>" id="mail">
                <?php endforeach; ?>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center;" class="field-form-profil-block">
                <label for="password">Mot de passe</label>
                <?php foreach($profils as $profil) : ?>
                    <input type="text" name="password" value="<?= $profil['mot_de_passe']; ?>" id="password">
                <?php endforeach; ?>
            </div>
        </fieldset>
    </form>
</main>

<?php 
    $content = ob_get_clean();
    require ROOT.'/view/templates/default.php'; 
?>