<?php get_header() ?>

La douille :

<?php if (have_posts()) : ?>

    <div class="row">

        <?php while (have_posts()) : the_post(); ?>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <? the_post_thumbnail('medium', ['class' => 'card-img-tom', 'alt' => '', 'style' => 'height: auto;']) ?>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text">
                            <?php the_excerpt() ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        <?php endwhile ?>

    </div>
<?php else : ?>
    <h1> Pas d'article en ce moment </h1>
<?php endif ?>








<?php get_footer() ?>