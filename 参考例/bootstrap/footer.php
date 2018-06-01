
<footer class="bg-dark">
<?php wp_nav_menu(array(
    'menu_class'=> 'footer-nav',
    'theme_location' => 'place_footer',
    ));
?>
</footer>
</div>
<!-- .container終了 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-slim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<?php wp_footer() ?>
</body>
</html>