<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No hay entradas para mostrar.</p>
    <?php endif; ?>
    <div class="mi-seccion">
    <h2>Título de la Sección</h2>
    <p>Este es un párrafo de ejemplo para mostrar contenido personalizado.</p>
    <a href="#" class="mi-boton">Haz clic aquí</a>
</div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>