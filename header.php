<!-- entête du thème -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <title>mon 4w4</title>
   
    <?php wp_head(); ?>
</head>

<body class="site <?= is_front_page() ? "no-aside" : "" ?>">
    <header class="site__entete">
        <div class="entete__nav">
            <div class="menu__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="menu__nav__recherche">
                <input id="cc__bouton__burger" type="checkbox" />
                <label class='bouton__burger__conteneur' for="cc__bouton__burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </label>
                <?php wp_nav_menu(array(
                                    "menu" => "entete",
                                    "container" => "nav",
                                    "container_class" => "menu__entete", //pour changer le nom de la class
                )); ?>
                <?= get_search_form(); ?>
            </div>
        </div>

        <h1 class="site__titre"><a href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></h1></a>
        <h2 class="site__sous__titre"><?= bloginfo('description'); ?></h2>

    </header>
    
    <?php 
        if(! is_front_page()) {
            get_template_part("template-parts/aside"); 
        }
    ?>