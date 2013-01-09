<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
	<title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>

    <? wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<? bloginfo("template_directory");?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<? bloginfo("template_directory") ?>/css/prettyPhoto.css" />
    <link href='http://fonts.googleapis.com/css?family=News+Cycle|PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
    <style type="text/css">@import url("http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz");</style>
	<!--[if lt IE 9]>   <link rel="stylesheet" type="text/css" href="css/ie.css" /> <![endif]-->

    <meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   
    
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>	
	   
	<script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/menu.js"></script>
    <script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/custom.js"></script>
	<script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/sliders/jquery.eislideshow.js"></script>
	<script src="<? bloginfo("template_directory") ?>/js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="<? bloginfo("template_directory") ?>/js/jquery.carouFredSel-5.5.0-packed.js"></script>

	<!--[if lt IE 9]>

    	<script src="js/html5.js"></script>

    <![endif]-->


    <script type="text/javascript">		
		jQuery(document).ready(function(){
        	jQuery('.carousel').carouFredSel({
				responsive : true,
				width:'92%',
				scroll: 2,
				items: {
					width: 300,
					visible:{
						min: 1,
						max: 5
					}
				},
				next : '.car-next',
				prev : '.car-prev',
				auto: true
			});
			jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({show_title: false});
			jQuery('#ei-slider').eislideshow({
				easing		: 'easeOutExpo',
				titleeasing	: 'easeOutExpo',
				titlespeed	: 1200,
				autoplay: true
			});
			jQuery('.textSlider ul').carouFredSel({
				responsive : true,
				width:'100%',
				items : 1,
				scroll: 1,
				items: {visible:1},
				next : '.ts-next',
				prev : '.ts-prev',
				auto: false,
				scroll : {	            
					items         : 1,
					easing        : "easeInExpo",
					duration      : 700,
					pauseDuration : 4500,                     
					pauseOnHover  : true
				} 
			});
		});
    </script>    
    
        <!-- REVOLUTION BANNER CSS SETTINGS -->	
    <link rel="stylesheet" type="text/css" href="<? bloginfo("template_directory") ?>/css/fullwidth.css" media="screen" />		
	<link rel="stylesheet" type="text/css" href="<? bloginfo("template_directory") ?>/rs-plugin/css/settings.css" media="screen" />	
	
	
     <!-- jQuery KenBurn Slider  -->	
	<script type="text/javascript" src="<? bloginfo("template_directory") ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="<? bloginfo("template_directory") ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 	
</head>

<body class="red">

<!-- BEGIN Header -->
<div class="header-wrapper"> 
<header class="container">
	
    <div id="logo" class="five columns">

        <div class="four columns alpha">
        	<a href="/"><img src="<? bloginfo("template_directory") ?>/images/logo.png" width="138" height="46" alt="Reverence" /></a>
        </div>
        
        <div class="four columns alpha last">

        	<p id="slogan"></p>

        </div>        

        <div class="clear"></div>

    </div>


 <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container'=>'nav',
 'container_class'=>'eleven columns last',
 'menu_class'=> 'sf-menu' ) );?>

                    

<!-- MOBILE NAVIGATION -->


<!-- END MOBILE NAVIGATION -->


    <div class="clear"></div>

</header>
</div>

<!-- END Header -->


