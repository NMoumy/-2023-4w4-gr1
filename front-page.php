<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <!-- <pre>front-page.php</pre> -->
            <h3>Bienvenue sur 4W4</h3>
            <section class="blocflex">
                <?php if(have_posts()):
                    while (have_posts()): the_post(); 
                        $la_categorie = 'note-4w4';
                        if (in_category('galerie')) {
                            $la_categorie = 'galerie';
                        }
                        get_template_part("template-parts/categorie",$la_categorie);
                    endwhile; 
                endif; ?>
            </section>
        </main>

    <?php get_footer(); ?>   
