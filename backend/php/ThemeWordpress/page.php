<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php
get_header(); ?>

<div class="contenido-personalizado">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    
</div>

<?php
get_footer();
?>
</main>

<?php get_footer(); ?>