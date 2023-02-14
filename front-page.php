<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main>
            <pre>front-page.php</pre>
            <h1>Bienvenue sur 4W4</h1>
            <section class="blocflex">
                <?php if(have_posts()): 
                    while(have_posts()): the_post(); ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <!-- get_the_excerpt(); -->
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
