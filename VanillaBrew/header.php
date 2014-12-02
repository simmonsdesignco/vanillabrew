<?php
//    $mode = '?'.time();
    // $mode = '?100';
$mode = '?'.time();

?>
<?php 
global $post;
$this_slug = get_post( $post )->post_name;
$this_permalink = get_permalink();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico?1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Nunito:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,100,400' rel='stylesheet' type='text/css'>
    <!-- Stylesheets -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/global.css<?php echo $mode; ?>">
</head>
<body lang="en">
    <header id="nav-header">
        <nav id="primary-navigation" class="primary-navigation" role="navigation">
            <div class="wrap">
		        <a href="<?php bloginfo('url'); ?>" id="nav-logo">Vanilla<span>Brew</span></a>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'nav-menu', 'menu_class' => 'nav-menu' ) ); ?>
            </div>
        </nav>
        <div id="r-nav">
        	<button type="button" id="r-nav-toggle"><i class="fa fa-navicon"></i></button>
        </div>
    </header>
