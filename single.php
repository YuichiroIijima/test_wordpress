<?php get_header(); ?>

<main>
  <?php while(have_posts()):the_post(); ?>
  <div id="post-<?php the_ID(); ?>">
    <h1>
      <?php the_title(); ?>
    </h1>
    <p class="post-meta">
      <span class="post-date"><?php the_time('Y年n月j日'); ?></span>
    </p>
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>