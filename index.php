<?php get_header() ?>


<?php if (have_posts()) : ?>

    <div class="row justify-content-around">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                   <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'atl' => '', 'style' => 'heigth: auto'] ) ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a><br><small> - par <?php the_author() ?></small></h5>
                        <br><? the_category() ?>
                        <p class="card-text">
                            <?php the_excerpt() ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>
            </div>



        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>




<?php get_footer() ?>