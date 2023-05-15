<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <h3>Bienvenue sur 4W4</h3>
            <section class="blocflex bloc__evt">
                <h2>Les événements à venir</h2>
                <?php wp_nav_menu(array(
                "menu" => "evenements",
                "container" => "nav",
                "container_class" => "menu__evenements"
                )); ?>
            </section>
            <section class="blocflex">
            <h2>Les notes de cours</h2>                
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
