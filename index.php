<?php
require_once __DIR__ . '/Hero.php';
require_once __DIR__ . '/Orc.php';

$hero = new Hero(2000, 0, 'gourdin', 250, 'oreiller', 600);
$orc = new Orc(500, 0);
$nbAttack = '';
$count = 0;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jeu de combat automatique sur le thème de stranger things. Revivez le combat entre Eleven et Vecna">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="icon" type="image/vnd.icon" href="/public/assets/img/icons8-choses-étranges-48.png">
    <title>Eleven VS Vecna: jeu</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img src="/public/assets/img/serie-stranger-things.jpg" alt="">
            <img class="arrowImg" src="/public/assets/img/PIXNIO-2751789-5589x4000.jpeg" alt="">
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div>
                    <h1 class="titre text-center">Eleven VS Vecna: l'ultime combat!</h1>
                </div>
                <?php
                while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
                    $orc->attack();
                    $hero->attacked($orc->getDamage());
                    $nbAttack = $count++; ?>

                    <div class="result col-3  my-1 mx-1">

                        <p>le niveau de vie d'Eleven est: <?= $hero->getHealth() ?> </p>
                        <p>la rage d'Eleven est: <?= $hero->getRage() ?></p>
                        <p>la force de frappe de Vecna est de: <?= $orc->getDamage() ?></p>
                        <p>le nombre d'attaques de Vecna est: <?= $nbAttack ?></p>
                        <p>Le niveau de vie de Vecna est: <?= $orc->getHealth() ?> </p>
                    </div>
                <?php if ($hero->getRage() >= 100 && $hero->getHealth() > 0) {
                        $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
                        $hero->setRage(0);
                    }
                } ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <button class="borderLink">
                    <a class=" fightLink" href="javascript:window.location.reload()">FIGHT !</a>
                </button>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row justify-content-center">
                <?php
                if ($orc->getHealth() <= 0) {
                    $orc->getHealth() - $hero->getWeaponDamage();
                ?>
                    <div class="heroWinImg col-12  align-items-center">
                        <h2 class="text-center">Eleven a gagné </h2>
                        <img class="" src="/public/assets/img/giphy.gif" alt="Ogre">

                    </div>
                <?php } else { ?>
                    <div class="orcWinImg  col-12 ">
                        <h2 class="text-center">Vecna a gagné </h2>
                        <img class="" src="/public/assets/img/stranger-things-4-vecna-4t8udxf804nmxiy6.gif" alt="Ogre">
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <p class="footer text-center">Anne Piau &copy; 2023</p>
    </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<div>

</div>

</html>