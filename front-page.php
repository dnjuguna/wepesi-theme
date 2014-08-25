<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link href="//static.wepesi.com/default.min-0.0.1.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body class="home">
        <div class="container">
            <header class="header clearfix">
                <div class="pull-left">
                    <h1 class="logo">
                        <a>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wepesi.png" width="189" height="40" alt="Wepesi"/>
                        </a>
                    </h1>
                </div>
                <div class="pull-right">
                    <nav class="nav color-one">
                        <ul>
                            <li><a href="/">HOME</a></li>
                            <li><a href="/portfolio">PORTFOLIO</a></li>
                            <li><a href="/pricing">PRICING</a></li>
                            <li><a href="/blog">BLOG</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
<main class="main">
	<h1>Your great website starts now.</h1>
	<p>Wepesi lets you build websites that are;</p>
	<ul>
		<li class="space-top"><h2>easy to create <i class="fa fa-check"></i></h2></li>
		<li class="space-top"><h2>easy to update <i class="fa fa-check"></i></h2></li>
		<li class="space-top"><h2>easy on your budget <i class="fa fa-check"></i></h2></li>
	</ul>
	<ul class="activate-links space-top row">
		<li class="color-three">
		  <a href="/oauth/connect/facebook-signup/dashboard">
			<i class="fa fa-facebook"></i>
			<span>Create with facebook</span>
		  </a>
		</li>
		<li class="color-three">
		  <a href="/oauth/connect-twitter/dashboard">
			<i class="fa fa-twitter"></i>
			<span>Create with twitter</span>
		  </a>
		</li>
		<li class="color-three">
		  <a href="/oauth/connect/linkedin-profile/dashboard">
			<i class="fa fa-linkedin"></i>
			<span>Create with linkedin</span>
		  </a>
		</li>
		<li class="color-three">
			<form method="get" action="/">
				<input type="text" name="address" value="Create with your email" class="placeholder"/>&#160;
			</form>
		</li>
	  </ul>
</main>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/home.js"/>
<?php get_footer(); ?>