<?php get_header() ?>

<?php while (have_posts()) : the_post() ?>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>
    <a href="<?php echo get_post_type_archive_link('post')?>"> Voir les dernière actus</a>


<?php endwhile ?>
<? get_footer() ?>