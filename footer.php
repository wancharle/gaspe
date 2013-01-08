
<!-- BEGIN Footer -->
<div id="footer-wrapper">

	<footer class="container">

    	<div class="four columns footer-block">
        	<h3>Últimas Notícias</h3>
            <ul class="news">
              	 <?php
                global $post;
                $args = array( 'numberposts' => 3, 'category' => get_cat_ID("Notícias"), );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
            	<li><a href="<? the_permalink()?>"><? the_title()?></a></li>
		<?php endforeach;?>
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
                    	<img src="<? bloginfo("template_directory") ?>/images/demo/footer1.png" alt="" />
                    </div>
                    <div class="list-post-desc">
                    	<a href="#">Devotions to Our Lord Jesus Christ</a>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                	<div class="list-post-thumb">
                    	<img src="<? bloginfo("template_directory") ?>/images/demo/footer2.png" alt="" />
                    </div>
                    <div class="list-post-desc">
                    	<a href="#">Prayer to the Blessed Virgin Mary</a>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                	<div class="list-post-thumb">
                    	<img src="<? bloginfo("template_directory") ?>/images/demo/footer3.png" alt="" />
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

        <div id="footer-bottom-divider"><a href="#" id="toTop"><img src="<? bloginfo("template_directory") ?>/images/back-top.png" width="49" height="49" alt="Back to top" /></a></div>
        <div id="footer-bottom">

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
        	<a href="#"><img src="<? bloginfo("template_directory") ?>/images/social_icons/twitter.png" class="social fade" alt="Twitter"/></a>
            <a href="#"><img src="<? bloginfo("template_directory") ?>/images/social_icons/facebook.png" class="social fade" alt="Facebook"/></a>
            <a href="#"><img src="<? bloginfo("template_directory") ?>/images/social_icons/vimeo.png" class="social fade" alt="Vimeo"/></a>            
            <a href="#"><img src="<? bloginfo("template_directory") ?>/images/social_icons/flickr.png" class="social fade" alt="Flickr"/></a>
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

<!-- Slider -->

			<script type="text/javascript">
								
				var tpj=jQuery;
				tpj.noConflict();
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;

					tpj('.fullwidthbanner').revolution(
						{	
							delay:9000,												
							startwidth:890,
							startheight:450,
							
							onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
							
							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:3,
							
							hideThumbs:200,
							navigationType:"none",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
							navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
							navigationStyle:"round",				//round,square,navbar
							
							touchenabled:"on",						// Enable Swipe Function : on/off
							
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							
							fullWidth:"on",
							
							shadow:0,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
							
							stopLoop:"on"							// on == Stop loop at the last Slie,  off== Loop all the time.
														
						});	
					
					
					
						
			});
			</script>

</body>
</html>
