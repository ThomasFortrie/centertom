<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'theme_location' => 'headerNav',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
                ]); ?>


                <?php echo (get_search_form()) ?>
            </div>
        </nav>