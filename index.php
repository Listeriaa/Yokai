<?php
include 'inc/data.php';
$title = "Yōkai on the watch";
include "inc/header.tpl.php";
?>



<?php
include 'inc/left.tpl.php';
?>
    
    <section class="right summary_responsive flex">
        <?php
        //je souhaite afficher l'image et le nom de chaque page Yokai sur ma page accueil, gestion du lien vers la page via GET
        foreach ($yokais as $yokai => $detail) :
        ?>
            <a href="yokai.php?yokai=<?= $yokai ?>">
                <article class="article article_responsive">
                    <div class="image image_responsive">
                        <img src="images/<?= $detail['image'] ?>" alt="illustration de <?= $detail['nom'] ?>">
                    </div>
                    <h2 class="titre_image black">
                        <?= $detail['nom'] ?>
                    </h2>
                </article>
            </a>
        <?php
        endforeach; ?>

    </section>

<?php
include 'inc/footer/footer.resp.tpl.php';
?>
