<?php 
    $title = 'Espace profil';
    ob_start(); 
?>

<main class="espace-profil">
    <form action="index.php?controller=utilisateur&action=update&id=<?= $_SESSION['profil']['id'];  ?>" class="field-form-profil" method="POST">
        <fieldset>
            <legend><h1>Formulaire de modification de profil</h1></legend>
            <div class="field-form-profil-block">
                <label for="name">Prénom</label>
                <input type="text" name="firstname" value="<?= $_SESSION['profil']['prenom']; ?>" id="firstname">
            </div>
            <div class="field-form-profil-block">
                <label for="lastnam">Nom</label>
                <input type="text" name="lastname" value="<?= $_SESSION['profil']['nom']; ?>" id="lastname">
            </div>
            <div class="field-form-profil-block">
                <label for="mail">E-mail</label>
                <input type="mail" name="mail" value="<?= $_SESSION['profil']['mail'];  ?>" id="mail">
            </div>
            <div class="field-form-profil-block field-form-profil-block__submit">
                <input type="submit" value="Valider les modifications">
            </div>
        </fieldset>
    </form>
</main>

<?php 
    $content = ob_get_clean();
    require ROOT.'/view/templates/default.php'; 
?>