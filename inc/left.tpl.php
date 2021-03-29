<?php
//Je veux afficher dans la section'presentation' de la classe 'left', un texte différent en fonction de la page où nous sommes.
//Sur accueil, je veux afficher les données de $presentation correspondant a accueil par ex et sur les pages des yokai, je veux afficher juste leur nom.
//Je vais créer un tableau $presentation pour stocker mes données à l'exception des pages Yokai qui se réfèreront au $yokai présent sur le data.php

$presentation = [
    "Yōkai on the watch" => [
        'h2' => "Qu'est ce qu'un yōkai?",
        'p' => "Les yōkai (妖怪, « esprit », « fantôme ») sont un type de créatures surnaturelles dans le folklore japonais. Ils peuvent être malfaisants et dangereux, comme la célèbre Kuchisake onna (« femme à la bouche fendue ») ou juste malicieux à l'instar de l'Akaname (« lèche-crasse ») dont le seul hobbie est de lécher la saleté des baignoires.  Au Japon, encore aujourd'hui, la plupart des phénomènes surnaturels ou inexplicables sont attribués aux yōkai, et bien qu'ils existent depuis le moyen-âge nippon, certains sont nés récemment, grâce à l'imagination de mangakas comme Shigeru Mizuki."
    ],
    "Aller plus loin" =>[
        'h2' => "Encore plus de yōkai",
        'p' => "Il existe de nombreuses ressources pour en apprendre plus sur les yōkai : mangas, animes, podcasts....<br>En voici quelques unes pour aller plus loin dans le monde des yōkai."
    ]
];

?>

<body>

    <section class="left">
        <header>
            <h1>Yōkai on the watch<span class="kanji">愛 妖怪</span></h1>
            <?php
            include 'inc/nav.tpl.php';
            ?>
        </header>

        <?php
        //je veux afficher seulement un h2 contenant le nom francais et japonais si je suis sur une page Yokai.
        //comme seules ces pages ont une variable $yokai, j'utilise isset 
        //dans mon IF.
        if (isset($yokai)):
            ?>
                <section class="transparent presentation_yokai_responsive presentation_responsive">
                <h2><?=$yokais[$yokai]['nom']?> <?=$yokais[$yokai]['japonais']?></h2>
                </section>
            <?php
            
            else :
            ?>
                <section class="transparent presentation_responsive">
                <h2><?=$presentation[$title]['h2']?></h2>
                <p><?=$presentation[$title]['p']?></p>
                </section>
            <?php
            endif;
        include 'inc/footer/footer.screen.tpl.php';
        ?>

    </section>