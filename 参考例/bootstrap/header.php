<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title('|',true,'right');bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" >
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" >
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<!-- header -->
<header class="navbar navbar-expand-md navbar-light">
<?php if(is_front_page()): ?>
  <h1 class="navbar-brand">
    <img src="<?php echo get_template_directory_uri(); ?>/images/bootstrap-solid.svg" width="30" height="30" class=" align-middle" alt="Bootstrap株式会社 公式ホームページ">
    <?php bloginfo('name'); ?>
  </h1>
<?php else: ?>
  <p><a class="navbar-brand" href="<?php echo(site_url()); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-middle" alt="Bootstrap株式会社 公式ホームページ">
    <?php bloginfo('name'); ?>
  </a></p>
<?php endif; ?>
<!-- ナビゲーション -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
<?php wp_nav_menu(array(
    'container' => 'nav',
    'menu_class'=> 'navbar-nav',
    'theme_location' => 'place_global',
    ));
?>
	</div>
<!-- ナビゲーション終了 -->
</header>
<!-- header終了 -->
