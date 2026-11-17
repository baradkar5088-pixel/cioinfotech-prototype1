<?php get_header(); ?>
<main id="main-content" class="container content-page section-padding">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article <?php post_class('entry-content'); ?>><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><?php the_excerpt(); ?></article>
<?php endwhile; the_posts_pagination(); else : ?><h1>Nothing found</h1><p>Content will appear here when published.</p><?php endif; ?>
</main>
<?php get_footer(); ?>
