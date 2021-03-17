<?php
include 'data.php';
$nav = [
    "Accueil"   => "index.php",
    "Yokai" => [],
    "Aller plus loin"   => "aller_plus_loin.php"
];

// $tableau=$nav["Yokai"];
foreach ($yokais as $yokai => $details) {

    $tableau[$details['nom']] = "article.php?article=$yokai";
};

$nav['Yokai'] = $tableau;

?>

<nav>
    <ul>
        <?php
        foreach ($nav as $page => $url) :
            if (is_array($url)) :
        ?>
                <li class="sousmenu"><a href="#" ><?= $page ?></a>
                    <ul >
                        <?php
                        foreach ($url as $nom => $url_article) :
                        ?>


                            <li><a href="<?= $url_article ?>"><?= $nom ?></a></li>

                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
            <?php
            else :

            ?>
                <li><a href="<?= $url ?>"><?= $page ?></a></li>
        <?php
            endif;
        endforeach;
        ?>