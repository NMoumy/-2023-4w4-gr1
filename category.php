<?php 
/**
* category.php est le modèle par défaut pour afficher une archive d'articles de catégorie specifique
*/ 
?>

    <?php get_header(); ?>    

        <main>
            <pre>category.php</pre>
            <h1>Bienvenue sur 4W4</h1>
            <h2><?= category_description() ?></h2>
            <section class="blocflex">
                <?php if(have_posts()): 
                    while(have_posts()): the_post(); ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                            <h3><?= wp_trim_words(get_the_title(), 5, "..."); ?></h3>
                                <hr> 
                                <?= wp_trim_words(get_the_excerpt(), 10, "..."); ?>
                            </a>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </main>

    <?php get_footer(); ?>   

</body>
</html>
