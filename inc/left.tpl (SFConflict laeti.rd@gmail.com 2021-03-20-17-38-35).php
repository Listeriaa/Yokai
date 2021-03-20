<?php
//Je veux afficher dans la presentation, un texte différent en fonction 
//de la page où nous sommes.
//Sur accueil, je veux afficher les données de $presentation correspondant a accueil par ex, sur les pages des yokai, je veux afficher juste leur nom
//Je vais créer un tableau $presentation pour stocker mes données.
$presentation = [
    "Yōkai on the watch" => [
        'h2' => "Qu'est ce qu'un yōkai?",
        'p' => "Les yōkai (妖怪, « esprit », « fantôme », « démon », « apparition étrange ») sont un type de créatures surnaturelles dans le folklore japonais. Il est souvent représenté comme un esprit malfaisant ou simplement malicieux démontrant les tracas quotidiens ou inhabituels."
    ],
    "Aller plus loin" =>[
        'h2' => "Encore plus de yōkai",
        'p' => "Il existe de nombreuses ressources pour en apprendre plus sur les yōkai : mangas, animes, podcasts....<br>En voici quelques unes pour aller plus loin dans le monde des yōkai."
    ]
];

//Je veux ajouter dynamiquement à ce tableau, la clé correspondant à chaque page Yokai et en valeur, son nom.

//Je vais parcourir le tableau $yokai pour remplir le tableau $presentation

foreach ($yokais as $numYokai => $details) {

    $presentation[$numYokai] = $details['nom'];
};

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
        //je veux afficher seulement un h2 si je suis sur une page Yokai.
        //comme seules ces pages ont une variable $yokai, j'utilise isset 
        //dans mon IF.
        if (isset($yokai)):
            ?>
                <section class="presentation_yokai_responsive presentation_responsive">
                <h2>Découvrez le <?=$yokais[$yokai][]>...</h2>
                </section>
            <?php
            
            else :
            ?>
                <section class="presentation_responsive">
                <h2><?=$presentation[$title]['h2']?></h2>
                <p><?=$presentation[$title]['p']?></p>
            </section>
            <?php
            endif;
        include 'inc/footer/footer.screen.tpl.php';
        ?>

    </section>