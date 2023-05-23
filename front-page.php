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

            <section class="blocflex bloc__archive">
                <h2>Les archives</h2>
                <?php wp_nav_menu(array(
                "menu" => "archives",
                "container" => "nav",
                "container_class" => "menu__archives"
                )); ?>
            </section>

            <section class="blocflex bloc__atelier">
                <h2>Les ateliers</h2>
                <?php wp_nav_menu(array(
                "menu" => "ateliers",
                "container" => "nav",
                "container_class" => "menu__ateliers"
                )); ?>
            </section>

            <section class="blocflex bloc__galerie">
                <h2>Les galeries</h2>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'galerie'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while ($query->have_posts()): $query->the_post(); 
                            get_template_part("template-parts/categorie", "galerie");
                        endwhile; 
                    endif;
                    wp_reset_postdata();
                ?>
            </section>

            <section class="blocflex bloc__note"> 
                <h2>Les nouveaux articles</h2> 
                <div>
                    <?php if(have_posts()):
                        while (have_posts()): the_post(); 
                            if (in_category('note-4w4')) {
                                $la_categorie = 'note-4w4';
                                get_template_part("template-parts/categorie", $la_categorie);
                            }
                            if (in_category('cours')) {
                                $la_categorie = 'cours';
                                get_template_part("template-parts/categorie", $la_categorie);
                            }
                        endwhile; 
                    endif; ?>
                </div>
            </section>

        </main>

    <?php get_footer(); ?>   
    