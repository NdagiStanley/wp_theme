<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stanmd
 */

?>
<?php
 $favicon_img = get_template_directory_uri() . '/assets/img/md.png';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="description" content="Web profile for Stan_MD">
	<meta name="author" content="Stanley Ndagi">
	<meta name="keywords" content="stanmd, Ndagi, Stanley, Ndagi Stanley, web profile, material design, Tech Kenyans, Global Tech Leader, Andela, developer, software, engineer">
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title>Stan_MD</title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cabin:300,400,500,700" />-->
	<!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fauna+One:400" />-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon_img;?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $favicon_img;?>">

	<?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="landing-page">

	<!-- Navigation -->
	<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<?php
				if ( is_front_page() ) : ?>
				<a class="navbar-brand page-scroll" href="#page-top">
				  TO GOD BE THE GLORY
				</a>
				<?php else : ?>
				<a class="navbar-brand page-scroll" href="/blog">
				  Stan_MD
				</a>
				<?php
				endif; ?>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
			</div>

			<div class="collapse navbar-collapse" id="navigation-example">
				<ul class="nav navbar-nav navbar-right">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<?php
					if ( is_front_page() ) : ?>
					<li>
						<a class="page-scroll" href="#about_this_young_man">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#so_far_so_good">So far, so good</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
					<li>
						<a class="page-scroll" href="#locate"><abbr title="Silicon Savannah and others">the 254 et al</abbr></a>
					</li>
					<li>
						<a href="/blog" target="_blank">
							<i class="material-icons">edit</i>BLOG</a>
					</li>
					<?php else : ?>
					<li>
						<a href="/">
							<i class="material-icons">home</i>HOME</a>
					</li>
					<?php
					endif; ?>
					<li>
						<a href="https://twitter.com/NdagiStanley" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/NdagiStanley" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
					</li>
					<li>
						<a href="https://www.github.com/NdagiStanley" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-github"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<div id="page" class="site">

	<div id="content" class="site-content">
