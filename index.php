<?php
include 'inc/data.php';
$title = "Yokai on the watch";
include "inc/header.tpl.php";
?>

<body>

    <section class="left">
        <header>
            <h1>Yokai on the watch</h1>
            <?php
            include 'inc/nav.tpl.php';
            ?>
        </header>
        <section class="presentation presentation_responsive">
            <h2>Qu'est ce qu'un Yokai?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos molestias modi ut, eligendi et id ullam ab earum suscipit natus officia, vel optio quis at laborum neque libero in expedita fugiat. Libero ad, unde id adipisci soluta mollitia tenetur ipsum architecto aliquid modi fugiat tempora possimus harum deleniti pariatur rerum sequi sed voluptatibus, expedita beatae neque? </p>
        </section>
    </section>
    <section class="summary summary_responsive flex">
        <?php
        //je souhaite afficher l'image et le nom de chaque page Yokai sur ma page accueil, gestion du lien vers la page via GET
        foreach ($yokais as $yokai => $detail) :
        ?>
            <a href="yokai.php?yokai=<?= $yokai ?>">
                <article class="article article_responsive">
                    <div class="image image_responsive black">
                        <img src="images/<?= $detail['image'] ?>" alt="illustration de <?= $detail['nom'] ?>">
                    </div>
                    <div class="titre_image black">
                        <?= $detail['nom'] ?>
                    </div>
                </article>
            </a>
        <?php
        endforeach; ?>

    </section>

    <footer>
        <p>Illustrations par <a target="_blank" href="http://senryoya.tumblr.com">Senryo</a></p>
        <p><a target="_blank" href="http://laetitia-rolland.com">Laetitia Rolland ©</a></p>
    </footer>

</body>

</html>