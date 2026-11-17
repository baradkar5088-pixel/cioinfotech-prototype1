<?php get_header(); ?>
<main id="main-content" class="container content-page section-padding">
<?php while (have_posts()) : the_post(); ?><article <?php post_class('entry-content single-entry'); ?>
<span class="post-date"><?php echo esc_html(get_the_date()); ?></span><h1><?php the_title(); ?></h1>
<?php if (has_post_thumbnail()) : ?><div class="featured-image"><?php the_post_thumbnail('large'); ?></div><?php endif; ?>
<?php the_content(); ?></article><?php endwhile; ?>
</main>
<?php get_footer(); ?>
