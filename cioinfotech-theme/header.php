<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Skip to content','cioinfotech'); ?></a>
<header class="site-header">
  <div class="container header-inner">
    <div class="site-logo">
      <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
        <a class="text-logo" href="<?php echo esc_url(home_url('/')); ?>">CIO Infotech</a>
      <?php endif; ?>
    </div>
    <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="primary-navigation"><span></span><span></span><span></span></button>
    <nav class="main-navigation" id="primary-navigation" aria-label="Primary navigation">
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>false,'menu_class'=>'menu')); ?>
    </nav>
  </div>
</header>
