<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-about"><h2>CIO Infotech</h2><p>Technology solutions that help businesses move forward.</p></div>
    <div class="footer-links"><h3>Quick Links</h3>
      <?php wp_nav_menu(array('theme_location'=>'footer','container'=>false,'fallback_cb'=>false,'menu_class'=>'footer-menu')); ?>
    </div>
  </div>
  <div class="footer-bottom"><div class="container"><p>&copy; <?php echo esc_html(wp_date('Y')); ?> CIO Infotech. All rights reserved.</p></div></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
