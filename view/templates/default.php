<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <title><?= $title ?>- Citation</title>
</head>
<body>
    <?php if(isset($_SESSION['msg'])) :?>
        <div class="msg  <?= $_SESSION['msg']['css'] ?>">
            <?= $_SESSION['msg']['txt'] ?>
        </div>
    <?php unset($_SESSION['msg']); endif ?>
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-list-link"><a href="index.php?controller=citations">Citations</a></li>
            <li class="nav-list-link"><a href="index.php?controller=auteurs&action=list">Auteurs</a></li>
        </ul>
        <h1 class="nav-title">Salut <?= $_SESSION['profil']['prenom'] ?></h1>
        <ul class="nav-list">

        <?php if($_SESSION['profil']['is_admin']) : ?>
            <li class="nav-list-link"><a href="index.php?controller=utilisateurs">utilisateurs</a></li>
        <?php endif ?>
            <li class="nav-list-link"><a href="index.php?controller=utilisateur&action=update">Modifier son profil</a></li>
            <li class="nav-list-link"><a href="index.php?controller=profil&action=deconnexion">Se déconnecter</a></li>
        </ul>
    </nav>
    <?= $content ?>
</body>
</html>