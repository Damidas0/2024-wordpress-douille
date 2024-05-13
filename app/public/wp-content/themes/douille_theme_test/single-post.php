<?php get_header( ) ?>

La douille :

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
        <? # the_post_thumbnail('medium', ['class' => 'card-img-tom', 'alt' => '', 'style' => 'height: auto;']) 
        ?>
        <p>
            <img src="<?php the_post_thumbnail_url( )?>" alt="", style="widhth: 100%; height:auto;">
            <?php the_content() ?>
        </p>

    <?php endwhile ?>

<?php else : ?>
    <h1> Pas d'article en ce moment <!-- TODO  mettre le 404--> </h1>
<?php endif ?>

<?php get_footer( ) ?>