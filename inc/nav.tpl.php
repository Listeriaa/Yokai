<?php
// include 'data.php';
$nav = [
    "Accueil"   => "index.php",
    "Yōkai" => [],
    "Aller plus loin"   => "aller_plus_loin.php"
];


//Je veux remplir mon tableau nav dynamiquement avec les données du tableau yokai;
//je crée donc un tableau ayant pour clé le nom du yokai et en valeur l'url (format GET), en parcourant le tableau des yokai
foreach ($yokais as $numYokai => $details) {

    $tableau[$details['nom']] = "yokai.php?yokai=$numYokai";
};

//je rajoute ce tableau en valeur de ma clé Yokai dans le tableau nav
$nav['Yōkai'] = $tableau;

?>

<nav>
    <ul class="flex">
        <?php
        foreach ($nav as $page => $url) :
            if (is_array($url)) :
        ?>
                <li class="sousmenu"><a class="hover_nav" href="#" ><?= $page ?></a>
                    <ul >
                        <?php
                        foreach ($url as $nom => $url_article) :
                        ?>


                            <li><a class="hover_nav" href="<?= $url_article ?>"><?= $nom ?></a></li>

                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
            <?php
            else :

            ?>
                <li><a class="hover_nav" href="<?= $url ?>"><?= $page ?></a></li>
        <?php
            endif;
        endforeach;
        ?>