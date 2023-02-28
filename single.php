<?php 
/**
* single.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <!-- <pre>single.php</pre> -->
            <h1>Bienvenue sur 4W4</h1>
            <?php if(have_posts()): 
                while(have_posts()): the_post(); ?>
                <article class="dans__article">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </article>
                <hr>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>

    <?php get_footer(); ?>   

</body>
</html>