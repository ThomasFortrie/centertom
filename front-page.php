<?php get_header() ?>



        <?php while(have_posts()): the_post() ?>

            <h1><?php the_title() ?></h1>

            <?php the_content() ?>

            <a href="<?php echo(get_post_type_archive_link("post")) ?>">lien vers les actus</a>

        <?php endwhile ?>
    



<?php get_footer() ?>