<?php

$title = 'Connexion';

ob_start();
?>

<h2>Se connecter</h2>

<form action="index.php?controller=profil&action=connexion" method="post">
    <div class="field">
        <label for="mail">Mail</label>
        <input type="email" name="mail" id="mail">
    </div>
    <div class="field">
        <label for="mot_de_passe">Mot de passe</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe">
    </div>

    <div class="submit">
        <input type="submit" value="se connecter">
    </div>
</form>
<button type="button"><a href="index.php?controller=utilisateur&action=motDePasseOublie">Mot de passe oublié</a></button>
<?php

$content = ob_get_clean();
require ROOT . '/view/templates/connexion.php';