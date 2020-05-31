<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
<?php wp_nav_menu(['theme_location' => 'headerNav',
 'container' => false,
 'menu_class' => 'navbar nav mr-auto']); ?>
<div class="container">