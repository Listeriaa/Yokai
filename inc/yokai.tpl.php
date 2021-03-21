<section class="page_article">
<article>
    <h2 class="hidden"><?=$yokais[$yokai]["nom"]?> <?=$yokais[$yokai]["japonais"]?></h2>
    <div class="image_article_responsive image_float">
        <img src="images/<?=$yokais[$yokai]["image"]?>" alt="illustration de <?=$yokais[$yokai]["nom"]?>">
    </div>
    <div class="descriptif_article_responsive">
        <p><span>Traduction</span> : <?=$yokais[$yokai]["traduction"]?></p>

        <p><span>Habitat</span> : <?=$yokais[$yokai]["habitat"]?></p>
         <?php
         //Je n'affiche ce paragraphe que si la clé "origine" existe dans le sous-tableau du yokai
         if (array_key_exists('origine', $yokais[$yokai])):
        ?>
        <p><span>Origines</span> : <?=$yokais[$yokai]["origine"]?></p>
        <?php
        endif;
        ?>
        <p><span>Apparence</span> : <?=$yokais[$yokai]["apparence"]?></p>
    
        <p><span>Comportement</span> : <?=$yokais[$yokai]["comportement"]?></p>
    </div>

</article>



</section>