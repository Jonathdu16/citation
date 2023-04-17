<?php 
    $title = 'Les auteurs';
    ob_start(); 
?>

<main style="width: 100%;">
    <h2>Liste des citations</h2>

    <section style="width: 100%;">
        <h3>Ajouter un auteur</h3>
        <form style="width: 100%; margin: 2% 0; display: flex;" action="index.php?controller=auteurs&action=add" method="post">
            <div style="width: 100%; display: flex;" class="fields">
                <div style="width: 100%; display: flex; align-items: center" class="field">
                    <label for="auteur">Nom de l'auteur</label>
                    <input type="text" name="auteur" id="auteur">
                </div>
                <div  style="width: 100%; display: flex; align-items: center" class="field">
                    <label for="bio">Biographie</label>
                    <textarea name="bio" id="bio"></textarea>
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Ajouter l'auteur">
            </div>
        </form>
    </section>
    <table style="width: 100%;">
    <thead>
        <tr>
            <th>Auteur</th>
            <th>Biographie</th>
            <th>Date de la dernière modfication</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($auteurs as $auteur): ?>
            <tr>
                <td><?= $auteur['auteur']; ?></td>
                <td><?= substr($auteur['bio'],0,20).'...' ?></td>
                <td><?= $auteur['date_modif']; ?></td>
                <td><a style="color: white;" href="index.php?controller=auteurs&action=update&id=<?= $auteur['id']; ?>">Modifier</a> - <a style="color: white;"  href="index.php?controller=auteurs&action=delete&id=<?= $auteur['id']; ?>&redirect=auteurs">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php 
    $content = ob_get_clean();
    require ROOT.'/view/templates/default.php'; 
?>