<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
	<title>Reverence - Responsive Church Theme</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link href='http://fonts.googleapis.com/css?family=News+Cycle|PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
    <style type="text/css">@import url("http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz");</style>
	<!--[if lt IE 9]>   <link rel="stylesheet" type="text/css" href="css/ie.css" /> <![endif]-->
    
    <meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>

<script type="text/javascript">
var d = document;
var safari = (navigator.userAgent.toLowerCase().indexOf('safari') != -1) ? true : false;
var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
onload = function() {

    var body = gebtn(d,'body')[0];
    body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';

    if (!d.getElementById || !d.createTextNode) return;
    var ls = gebtn(d,'label');
    for (var i = 0; i < ls.length; i++) {
        var l = ls[i];
        if (l.className.indexOf('label_') == -1) continue;
        var inp = gebtn(l,'input')[0];
        if (l.className == 'label_check') {
            l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
            l.onclick = check_it;
        };
        if (l.className == 'label_radio') {
            l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
            l.onclick = turn_radio;
        };
    };
};
var check_it = function() {
    var inp = gebtn(this,'input')[0];
    if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
        this.className = 'label_check c_on';
        if (safari) inp.click();
    } else {
        this.className = 'label_check c_off';
        if (safari) inp.click();
    };
};
var turn_radio = function() {
    var inp = gebtn(this,'input')[0];
    if (this.className == 'label_radio r_off' || inp.checked) {
        var ls = gebtn(this.parentNode,'label');
        for (var i = 0; i < ls.length; i++) {
            var l = ls[i];
            if (l.className.indexOf('label_radio') == -1)  continue;
            l.className = 'label_radio r_off';
        };
        this.className = 'label_radio r_on';
        if (safari) inp.click();
    } else {
        this.className = 'label_radio r_off';
        if (safari) inp.click();
    };
};
</script>
    <script type="text/javascript">
    
      jQuery(function(){
  
        jQuery('#googlemap').gmap3(
          {
            action: 'addMarker',
            address: "1319 Stanley avenue, Glendale, Los Angeles, USA",
            map:{
              center: true,
              zoom: 14
            },
			
          },
          {action: 'setOptions', args:[{scrollwheel:true}]}
        );
          
      });
    </script>  
	<!--[if lt IE 9]>
    	<script src="js/html5.js"></script>
    <![endif]-->
</head>
<body>

<!-- BEGIN Header -->
<div class="header-wrapper"> 
<header class="container">
	
    <div id="logo" class="five columns">

        <div class="three columns alpha">
        	<a href="index.html"><img src="images/logo.png" width="138" height="46" alt="Reverence" /></a>
        </div>
        
        <div class="four columns alpha last">

        	<p id="slogan"></p>

        </div>        

        <div class="clear"></div>

    </div>

    <nav class="eleven columns last">

        <ul class="sf-menu">

            <li><a href="index.html">HOME</a>
            <ul class="sub-menu">
 					<li><a href="index.html">Reverence Slider</a></li>
					<li><a href="index2.html">FlexiSlider</a></li>
                    <li><a href="index3.html">Alternate Layout</a></li>
            </ul>

            </li>

            <li><a href="company.html">ABOUT US</a>
			<ul class="sub-menu"> 
                    <li><a href="company.html">Our Church</a></li>
                    <li><a href="services.html">Services and Sermons</a></li>
                    <li><a href="alternate_layout.html">Alternate Layout</a></li>
			</ul>
			</li>

            <li><a href="shortcodes.html">FEATURES</a>

             <ul class="sub-menu">
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li><a href="sidebar_widgets.html">Sidebar Widgets</a></li>
                    <li><a href="tables.html">Tables</a></li>
					<li><a href="sitemap.html">Sitemap</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Third level sample</a>

                        <ul class="sub-menu">
                            <li><a href="#">First Element</a></li>
                            <li><a href="#">Some Element</a></li>
                            <li><a href="#">Another Element</a></li>                          
                        </ul> 
   
                    </li>

              </ul>
            </li>
            
            <li><a href="gallery.html">MEDIA</a>
			<ul class="sub-menu">
                    <li><a href="gallery.html">Filterable Gallery</a></li>
                    <li><a href="gallery_sidebar.html">Gallery with Sidebar</a></li>
                    <li><a href="details.html">Details Page</a></li>
			</ul>
			</li>            
            
            <li><a href="blog.html">BLOG</a>
			<ul class="sub-menu">                   
                    <li><a href="blog.html">Sidebar Right</a></li>
                    <li><a href="blog_sidebar_left.html">Sidebar Left</a></li>
                    <li><a href="blog-inner.html">Inner page</a></li>
            </ul>

            </li>

            <li><a href="contact.php" class="active-item">CONTACT</a></li>

        </ul>


<!-- MOBILE NAVIGATION -->


<!-- END MOBILE NAVIGATION -->

    </nav>

    <div class="clear"></div>

</header>
</div>

<!-- END Header -->


<!-- BEGIN Content -->
<div class="inner-bg"></div>
<div id="content-wrapper">
    <div id="content" class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
                <div class="four columns last" id="search-global">
                    <form id="search-global-form" method="post">
                        <div>
                            <input type="text" name="searchterm" value="" title="Search" />                           
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="medium_separator"></div>
            <div class="white_space10"></div>
        </div>
        
        
            <div><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Manhattan,+New+York,+NY&amp;aq=0&amp;oq=manhattan&amp;sll=37.0625,-95.677068&amp;sspn=39.047881,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;ll=40.78306,-73.971249&amp;spn=0.036564,0.084543&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
            <div class="white_space10"></div>
            
            <div class="sixteen columns">
            
            <div class="twelve columns alpha">
            <h4>CONTACT US</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Maecenas quis vulputate dolor integer ut orci nunc vel tempor ligula donec porta blandit sem vitae iaculis tortor cursus eget phasellus sapien dui vehicula sit amet gravida ac fermentum quis pur vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae pellentesque sollicitudin purus non  
                </p>
                <form id="contact-form" class="contactForm">
                    <div id="status"></div>
                    <div class="six columns alpha">
                        <label for="name">Name</label>
                        <?php if(isset($nameError) && $nameError != ''): ?><span class="errorarr"><?php echo $nameError;?></span><?php endif;?>
                        <input type="text" id="name" value="" name="name" />
                    </div>
                    <div class="six columns last">
                        <label for="email">Email</label>
                        <?php if(isset($emailError) && $emailError != ''): ?><span class="errorarr"><?php echo $emailError;?></span><?php endif;?>
                        <input type="text" id="email" name="email" value="" />
                    </div>
                    <div class="clear"></div>
                    <div>
                        <label for="message">Message</label>
                        <?php if(isset($messageError) && $messageError != ''): ?><span class="errorarr"><?php echo $messageError;?></span><?php endif;?>
                        <textarea name="message" id="message" rows="50" cols="10"></textarea>
                    </div>                   
                    <div>
                        <input type="submit" name="send" value="Submit" class="button medium"/>
                        <input type="reset" name="resent" value="Reset" class="button medium"/>
                    </div>
                </form>
                <div class="clear"></div>
            	<div class="bottom30"></div>            
            </div>
                
        <aside class="four columns last">      
            <h4>LOCATION</h4>
            <div class="contact-details">
            	<span>Address:</span><p>1600 Pacific Coast Highway, Laguna Beach, CA 92607</p>
                <span>Phone:</span><p>000 011(949) 458-2300</p>
                <span>Fax:</span><p>000 011(949) 458-4300</p>
                <span>E-mail:</span><p><a href="mailto:info@reverence.com">info@reverence.com</a></p>
           	</div>
            
            <div class="clear"></div>
            <div class="bottom30"></div>       
                      
        </aside>
                
                <div class="clear"></div>
            
            </div>
            <div class="clear"></div>
    	</div>
       
    </div>
</div>
<!-- END Content -->

<!-- BEGIN Footer -->
<div id="footer-wrapper">

	<footer class="container">

    	<div class="four columns footer-block">
        	<h3>Latest News</h3>
            
            <ul class="news">
            	<li><a href="#">The sacraments of Christian initiation - Baptism, Confirmation, and the Eucharist</a></li>
                <li><a href="#">Strengthened by the sacrament of Confirmation</a></li>
                <li><a href="#">To feed the Church by the word and grace of God</a></li>
           </ul>
        </div>

        <div class="four columns footer-block">
        	<h3>Twitter Widget</h3>
            
            <ul id="twitter_update_list" class="twitter">
            	<li></li>                
            </ul>
        </div>

        <div class="four columns footer-block">
        	<h3>Popular Posts</h3>
            
            <ul class="list-posts">
            	<li>
                	<div class="list-post-thumb">
                    	<img src="images/demo/footer1.png" alt="" />
                    </div>
                    <div class="list-post-desc">
                    	<a href="#">Devotions to Our Lord Jesus Christ</a>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                	<div class="list-post-thumb">
                    	<img src="images/demo/footer2.png" alt="" />
                    </div>
                    <div class="list-post-desc">
                    	<a href="#">Prayer to the Blessed Virgin Mary</a>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                	<div class="list-post-thumb">
                    	<img src="images/demo/footer3.png" alt="" />
                    </div>
                    <div class="list-post-desc">
                    	<a href="#">Prayer to St. Michael the Archangel</a>
                    </div>
                    <div class="clear"></div>
                </li>
            </ul>
        </div>

        <div class="four columns last footer-block">
        	<h3>Contact Us</h3>
            
            <p>Suspendisse euismod, nunc eget pellentesque pellentesque, odio lectus tempor antea tristique sem. </p>
            <div class="contact-details">
            	<span>Address:</span><p>1600 Pacific Coast Highway, Laguna Beach, CA 92607</p>
                <span>Phone:</span><p>000 011(949) 458-2300</p>
                <span>Fax:</span><p>000 011(949) 458-4300</p>
                <span>E-mail:</span><p><a href="mailto:info@reverence.com">info@reverence.com</a></p>
            </div>

            <div class="clearsmall"></div>

        </div>

        <div class="clear"></div>

        <div id="footer-bottom-divider"><a href="#" id="toTop"><img src="images/back-top.png" width="49" height="49" alt="Back to top" /></a></div>
        <div id="footer-bottom">
             <div id="copyright">
                © 2012 Reverence Responsive HTML 5 Template by <a href="index.html">ignitethemes</a>
             </div>
             <div id="footer-menu">
                <ul>
 	              	<li><a href="index.html">Home</a></li>
		            <li><a href="sitemap.html">Sitemap</a></li>
					<li><a href="company.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
               </ul>
             </div>

             <div class="clear"></div>

         </div>

    </footer>

</div>

<!-- END Footer -->

<!-- BEGIN BOTTOM bar -->
<div class="bottom-wrapper">
	<div class="container">
    
		<div id="bottombar">       
            <div id="social">
            <!--Social Networks-->
        	<a href="#"><img src="images/social_icons/twitter.png" class="social fade" alt="Twitter"/></a>
            <a href="#"><img src="images/social_icons/facebook.png" class="social fade" alt="Facebook"/></a>
            <a href="#"><img src="images/social_icons/linkedin.png" class="social fade" alt="Linkedin"/></a>
            <a href="#"><img src="images/social_icons/vimeo.png" class="social fade" alt="Vimeo"/></a>            
            <a href="#"><img src="images/social_icons/flickr.png" class="social fade" alt="Flickr"/></a>
        	<!--End Social Networks--> 
             </div>
             <div class="clear"></div>
         </div>

	</div>
</div>
<!-- END BOTTOM bar -->

<!-- Twitter -->

<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/igniteflash.json?callback=twitterCallback2&amp;count=2"></script><!--Change "igniteflash" to your twitter name. -->

<script type="text/javascript">
<!-- Contact form validation
jQuery(document).ready(function(){
  jQuery(".contactForm").validate({
	submitHandler: function() {
	
		var postvalues =  jQuery(".contactForm").serialize();
		
		
		jQuery.ajax
		 ({
		   type: "POST",
		   url: "contact/process-form.php",
		   data: postvalues,
		   success: function(response)
		   {
		 	 jQuery("#status").html(response).show('normal');
		     jQuery('.contactForm :input.not("#send"), #message').val("");
		   }
		 });
		return false;
		
    },
	focusInvalid: true,
	focusCleanup: false,
	errorLabelContainer: jQuery("#registerErrors"),
  	rules: 
	{
		name: {required: true},
		email: {required: true, minlength: 6,maxlength: 50, email:true},
		message: {required: true}
	},
	
	messages: 
	{
		contactName: {required: "Name is required"},
		email: {required: "E-mail is required", email: "Please provide a valid e-mail"},
		message: {required: "Message is required"}
	},
	
	errorPlacement: function(error, element) 
	{
		error.insertBefore(element);
		jQuery('<span class="errorarr"></span>').insertBefore(element);
	},
	invalidHandler: function()
	{
		//jQuery("body").animate({ scrollTop: 0 }, "slow");
	}
	
});
});
-->
</script>
</body>
</html>