<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('•', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?b5bc650f91da25902a332dd98c93c223";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
	(function(){
    		var bp = document.createElement('script');
    		var curProtocol = window.location.protocol.split(':')[0];
   	 	if (curProtocol === 'https') {
       		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
   	 }
    	else {
       		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    	}
   	var s = document.getElementsByTagName("script")[0];
    	s.parentNode.insertBefore(bp, s);
})();
</script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<h1 class="menu-toggle">m</h1>
				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<a class="screen-reader-text skip-link" href="#content"><?php _e('Skip to content', 'expositio'); ?></a>
					<span id="navigation-close">&#10005;</span>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_id' => 'top-main-menu', 'fallback_cb' => false)); ?>
					<?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'nav-menu', 'container_id' => 'top-right-menu', 'fallback_cb' => false)); ?>
				</nav>
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<?php printf(__('<a href="%s">%s</a> by <a href="%s">%s</a>', 'expositio'),
							'http://www.guoguoqiu.com',
							'guoguoqiu',
							'http://guoguoqiu.com/',
							'Qiu'
						);
						?>
					</div><!-- .site-info -->
					<div class="copyright">&#169; 2017</div>
                    ICP备案:<a href="http://www.beian.miit.gov.cn/" target="_blank">京ICP备17046169号-1</a>
				</footer><!-- #colophon -->
			</header><!-- #masthead -->
			<div id="header-helper"></div>

			<div id="main" class="site-main">
