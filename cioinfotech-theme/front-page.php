<?php get_header(); ?>
<main id="main-content">
<section class="hero-section"><div class="container hero-grid">
  <div class="hero-content">
    <span class="eyebrow">TECHNOLOGY · INNOVATION · GROWTH</span>
    <h1>Empowering businesses through <span>technology</span></h1>
    <p>Discover technology-driven solutions that help businesses innovate, transform and grow.</p>
    <div class="hero-actions">
      <a class="button button-primary" href="<?php echo esc_url(home_url('/services/')); ?>">Explore our services</a>
      <a class="button button-outline" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact us</a>
    </div>
  </div>
  <div class="hero-visual" aria-hidden="true"><div class="visual-orbit orbit-one"></div><div class="visual-orbit orbit-two"></div><div class="visual-core"><span>CIO</span><small>INFOTECH</small></div><div class="visual-dot dot-one"></div><div class="visual-dot dot-two"></div></div>
</div></section>
<section class="intro-section section-padding"><div class="container narrow-container">
  <span class="section-kicker">ABOUT CIO INFOTECH</span><h2>Technology solutions for a changing world</h2>
  <p>This is introductory placeholder copy. Replace it with company-approved information about CIO Infotech, its experience, capabilities and approach.</p>
  <a class="text-link" href="<?php echo esc_url(home_url('/about-us/')); ?>">Discover our company <span>→</span></a>
</div></section>
<section class="services-section section-padding"><div class="container">
  <div class="section-heading"><div><span class="section-kicker">WHAT WE DO</span><h2>Services built around your goals</h2></div><p>Showcase the company's verified services here. Update these cards once approved service descriptions are available.</p></div>
  <div class="card-grid">
    <article class="service-card"><div class="card-icon">01</div><h3>Software Development</h3><p>Custom software solutions designed around business requirements.</p><a href="<?php echo esc_url(home_url('/services/')); ?>">Learn more →</a></article>
    <article class="service-card"><div class="card-icon">02</div><h3>Cloud &amp; Modernization</h3><p>Modern technology approaches to support scalable digital operations.</p><a href="<?php echo esc_url(home_url('/services/')); ?>">Learn more →</a></article>
    <article class="service-card"><div class="card-icon">03</div><h3>Technology Consulting</h3><p>Practical technology guidance aligned with business objectives.</p><a href="<?php echo esc_url(home_url('/services/')); ?>">Learn more →</a></article>
  </div>
  <p class="content-note">Service names and descriptions are starter placeholders, not verified company claims.</p>
</div></section>
<section class="insights-section section-padding"><div class="container">
  <div class="section-heading"><div><span class="section-kicker">KNOWLEDGE &amp; IDEAS</span><h2>Latest insights</h2></div><a class="text-link" href="<?php echo esc_url(home_url('/tech-insights/')); ?>">Explore all insights →</a></div>
  <div class="post-grid">
  <?php $latest_posts = new WP_Query(array('post_type'=>'post','posts_per_page'=>3,'post_status'=>'publish'));
  if ($latest_posts->have_posts()) : while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
    <article class="post-card"><a class="post-image" href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail()) : the_post_thumbnail('large'); else : ?><span class="image-placeholder">CIO Insights</span><?php endif; ?>
    </a><div class="post-card-content"><span class="post-date"><?php echo esc_html(get_the_date()); ?></span><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_the_excerpt(),18)); ?></p></div></article>
  <?php endwhile; wp_reset_postdata(); else : ?>
    <div class="empty-posts"><h3>Technology insights are coming soon</h3><p>Published articles will appear here.</p></div>
  <?php endif; ?>
  </div>
</div></section>
<section class="careers-cta"><div class="container cta-inner"><div><span class="section-kicker">GROW WITH US</span><h2>Build what comes next.</h2><p>Explore career opportunities at CIO Infotech.</p></div><a class="button button-light" href="<?php echo esc_url(home_url('/careers/')); ?>">Explore careers →</a></div></section>
</main>
<?php get_footer(); ?>
