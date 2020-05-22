<?php get_header() ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title() ?></h1>
        <br>
        <img src="<?php the_post_thumbnail_url() ?>" alt="" width="auto" height="300px">
        <?php the_content() ?>

    <?php endwhile ?>

<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>




<?php get_footer() ?>