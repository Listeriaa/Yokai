<?php
//Je veux afficher dans la presentation, un texte différent en fonction 
//de la page où nous sommes.
//Sur accueil, je veux afficher les données de $presentation correspondant a acceuil
//Je vais créer un tableau $presentation pour stocker mes données.
$presentation = [
    "Yokai on the watch" => [
        'h2' => "Qu'est ce qu'un Yokai?",
        'p' => "lorem50"
    ],
    "Aller plus loin" =>[
        'h2' => "Encore plus de Yokais",
        'p' => "Il existe de nombreuses ressources pour en apprendre plus sur les Yokais : mangas, animes, podcasts....<br>En voici quelques unes pour aller plus loin dans le monde des Yokais."
    ]
];

//Je veux ajouter dynamiquement à ce tableau, la clé correspondant à chaque page Yokai et en valeur, son nom.

//Je vais parcourir le tableau $yokai pour remplir le tableau $presentation

foreach ($yokais as $numYokai => $details) {

    $presentation[$numYokai] = $details['nom'];
};

var_dump($presentation);



?>

<body>

    <section class="left">
        <header>
            <h1>Yokai on the watch</h1>
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
            <section class="presentation presentation_responsive">
            <h2><?=$presentation[$yokai]?></h2>
            </section>
        <?php
        
        else :
        ?>
            <section class="presentation presentation_responsive">
            <h2><?=$presentation[$title]['h2']?></h2>
            <p><?=$presentation[$title]['p']?></p>
        </section>
        <?php
        endif;
    
    ?>
    </section>