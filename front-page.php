<!-- Cabecera-->
<?php get_header(); ?>

<!-- Contenido -->
<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </section>
<?php endif; ?>

<!-- Pie de pagina -->
<?php get_footer(); ?>