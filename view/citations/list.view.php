<?php 
    $title = 'les citations';
    ob_start(); 
?>

<main style="width: 100%;">
    <h2>Liste des citations</h2>

    <section style="width: 100%;">
        <h3>Ajouter une citation</h3>
        <form style="width: 100%; margin: 2% 0; display: flex;" action="index.php?controller=citations&action=add" method="post">
            <div style="width: 100%; display: flex;" class="fields">
                <div style="width: 100%; display: flex; align-items: center" class="field">
                    <label for="citation">Citation</label>
                    <input type="text" name="citation" id="citation">
                </div>
                <div style="width: 100%; display: flex; align-items: center" class="field">
                    <label for="auteur">Auteur</label>
                    <select name="auteur" id="auteur">
                        <option value="">Pas d'auteur</option>
                        <?php foreach($auteurs as $auteur) :?>
                            <option value="<?= $auteur['id'] ?>"><?= $auteur['auteur'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <div style="width: 100%; display: flex; align-items: center" class="field">
                    <label for="explication">Explication</label>
                    <textarea name="explication" id="explication"></textarea>
                </div>
            </div>

            <div class="submit">
                <input type="submit" value="Enregistrer">
            </div>
        </form>
    </section>
    <table style="width: 100%;">
    <thead>
        <tr>
            <th>Citation</th>
            <th>Auteur</th>
            <th>Date de la dernière modfication</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($citations as $citation): ?>
            <tr>
                <td><?= substr($citation['citation'],0,20).'...' ?></td>
                <td><?= $citation['auteur']; ?></td>
                <td><?= $citation['date_modif']; ?></td>
                <td><a style="color: white;" href="index.php?controller=citations&action=update&id=<?= $citation['id']; ?>">Modifier</a> - <a style="color: white;" href="index.php?controller=citations&action=delete&id=<?= $citation['id']; ?>">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php 
    $content = ob_get_clean();
    require ROOT.'/view/templates/default.php'; 
?>