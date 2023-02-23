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
<body>
    <header class="site__entete">
        <div class="entete__nav">
            <div class="menu__logo">
                <?php the_custom_logo(); ?>
                <?php wp_nav_menu(array(
                                    "menu" => "entete",
                                    "container" => "nav",
                                    "container_class" => "menu__entete", //pour changer le nom de la class
                )); ?>
            </div>
            <?= get_search_form(); ?>
        </div>

        <h1 class="site__titre"><a href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></h1></a>
        <h2 class="site__sous__titre"><?= bloginfo('description'); ?></h2>

    </header>
