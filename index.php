<?php get_header(); ?>

<main>
  <h1>Welcome to the ExUrban Base Theme</h1>
  <p>This is the default index template.</p>

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile;
  else :
    echo '<p>No content found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
