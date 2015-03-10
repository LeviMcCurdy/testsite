<?php $siteURL = ""; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $pageTitle; ?> | Website or business name</title>
        <meta name="description" content="<?php echo $pageDescription; ?>">
        <?php
        // If canonical URL is specified, include canonical link element
		if($pageCanonical)
		{
		echo '<link rel="canonical" href="' . $pageCanonical . '">';
		}
		// If meta robots content is specified, include robots meta tag
		if($pageRobots)
		{
		echo '<meta name="robots" content="' . $pageRobots . '">';
		}
		?>
        
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->  
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> 
            or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    	<header>
			<div class="grid-full"><!-- Begin Nav Section ============================================== -->
				<nav id="desktop-nav">
					<ul>
                		<?php include('nav.php'); ?>
					</ul>
				</nav>
				
			</div><!-- End Nav Section ============================================== -->

	</header><!-- container -->



