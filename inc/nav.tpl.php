<?php
include 'data.php';
$nav = [
    "Accueil"   => "index.php",
    "Yokai"=> [],
    "Aller plus loin"   => "aller_plus_loin.php"
];

// $tableau=$nav["Yokai"];
foreach($yokais as $yokai => $details) {
    
    $tableau[$details['nom']]="article.php?article=$yokai";

    
};

$nav['Yokai']=$tableau;

?>

<nav>
    <ul>
    <?php
        foreach($nav as $page => $url):
            if (is_array($url)) :
                ?>
                <li><?=$page?>
                <?php
                foreach ($url as $nom => $url_article) :
                    ?>
            
                <ul>
                    <li><a href="<?=$url_article?>"><?=$nom?></a></li>
                </ul>
            </li>
    <?php
                endforeach;
            
            else:
        
        ?>
        <li><a href="<?=$url?>"><?=$page?></a></li>
<?php
        endif;
        endforeach;
    ?>
       