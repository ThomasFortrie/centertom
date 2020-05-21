<?php get_header() ?>


<?php if (have_posts()) : ?>

    <div class="row justify-content-around">
    <?php while (have_posts()) : the_post(); ?>
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?> - par <?php the_author() ?></h5>
                    <p class="card-text">
                        <?php the_post_thumbnail();
                        the_excerpt() ?>
                    </p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>



        <?php endwhile ?>
        </div>
    <?php else : ?>
        <h1>Pas d'articles</h1>
    <?php endif; ?>




    <?php get_footer() ?>