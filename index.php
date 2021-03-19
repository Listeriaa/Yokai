<?php
include 'inc/data.php';
$title = "Yokai on the watch";
include "inc/header.tpl.php";
?>


<main>
    <section class="presentation presentation_responsive">
        <h2>Qu'est ce qu'un Yokai?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos molestias modi ut, eligendi et id ullam ab earum suscipit natus officia, vel optio quis at laborum neque libero in expedita fugiat. Libero ad, unde id adipisci soluta mollitia tenetur ipsum architecto aliquid modi fugiat tempora possimus harum deleniti pariatur rerum sequi sed voluptatibus, expedita beatae neque? </p>
    </section>
    <section class="summary summary_responsive">
        <?php
            foreach ($yokais as $yokai => $detail) :
        ?>
        <a href="yokai.php?yokai=<?=$yokai?>">
            <article class="article article_responsive">
                <div class="image image_responsive black">
                    <img src="images/<?=$detail['image']?>" alt="illustration de <?=$detail['nom']?>">
                </div>
                <div class="titre_image black">
                    <?=$detail['nom']?>
                </div>
            </article>
        </a>
        <?php
        endforeach;?>

    </section>
</main>
<footer>

</footer>
</div>
</body>

</html>