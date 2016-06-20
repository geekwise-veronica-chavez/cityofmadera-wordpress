<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<script src="https://use.fontawesome.com/7229e37c58.js"></script>
	</head>
	<body <?php body_class(); ?>>

		<header>
        <div id="banner">
            <a href="/index.html" class="shape">
                <div class="madera_logo rectangle">city of madera</div>  </a>
            <div class="triangle">
                    <i class="fa fa-sun-o weather" aria-hidden="true">70</i>
                 
            </div>
            <div id="wrap">
                    <form>
                        <div class=search_bar>
                        <input type="search" placeholder="" id=search>  
                        </div>
                    </form>
                    <div class="menu">
                        <label for="sticky_menu">
                       <div> 
                           <i class="fa fa-bars" aria-hidden="true"></i> Menu </div>
                      
                 
                     
                      <input type="checkbox" id="sticky_menu"/>
            <nav class="navigation_one">
                
               
                 <div id="x">
                            <i class="fa fa-times equis_nav" aria-hidden="true"></i></div>
                <ul class="ul_main_nav">
                     <li class="main_nav" id="border_top_res"><a href="/residents/index-res.html" class="main_page_li">residents</a></li>
                     <li class="main_nav"><a href="/visitors/index-visit.html" class="main_page_li">visitors</a></li>
                    <li class="main_nav"><a href="/business/index-buis.html" class="main_page_li">business</a> </li>
                    <li class="main_nav"><a href="/government/index-gov.html" class="main_page_li">government</a></li>
                    
                </ul>
            </nav>
            </label>
            </div>  
            
        </div>
       
            
	

        </header>
			<!-- /header -->
