
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
            <h3>Twitter</h3>
            <ul id="twitter_update_list">
                <li> </li>
            </ul>

        </div>

        <div class="four columns footer-block">

        	<h3>Albuns Recentes</h3>
            
            <ul class="list-posts">
            <?php
                global $post;
                $args = array( 'numberposts' => 3, 'category' => get_cat_ID("Albuns"), );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
            	<li>
                	<div class="list-post-thumb">
                        <? the_post_thumbnail();?>
                    </div>
                    <div class="list-post-desc">
                    	<a href="<? the_permalink() ?>"><? the_title();?></a>
                    </div>
                    <div class="clear"></div>
                </li>
            <? endforeach;?> 
            </ul>
        </div>

        <div class="four columns last footer-block">
        	<h3>Fale Conosco</h3>
            
            <p>Você pode participar de diversas
maneiras.  Nos encontramos na igreja
aos sábados, as 17:00 horas.
Entre em contato conosco.</p>
            <div class="contact-details">
            	<span>Endereço:</span><p>Rua Geoseppe Testa, 77, Bela Vista. Aracruz - ES</p>
                <span>Telefone:</span><p>(27) 3296-1319 (Paróquia)</p>
                <span>E-mail:</span><p><a href="mailto:contato@gaspe.com.br">contato@gaspe.com.br</a></p>
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
        	<a target="_blank" href="https://twitter.com/grupo_gaspe"><img src="<? bloginfo("template_directory") ?>/images/social_icons/twitter.png" class="social fade" alt="Twitter"/></a>
            <a target="_blank" href="http://www.flickr.com/photos/92069716@N07/"><img src="<? bloginfo("template_directory") ?>/images/social_icons/flickr.png" class="social fade" alt="Flickr"/></a>
            <a target="_blank" href="http://www.facebook.com/groups/contato.gaspe/?fref=ts"><img src="<? bloginfo("template_directory") ?>/images/social_icons/facebook.png" class="social fade" alt="Facebook"/></a>
        	<!--End Social Networks--> 
             </div>
             <div class="clear"></div>
         </div>

	</div>
</div>
<!-- END BOTTOM bar -->

<!-- Twitter -->

<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/grupo_gaspe.json?callback=twitterCallback2&amp;count=2"></script><!--Change "igniteflash" to your twitter name. -->
<? wp_footer();?>
</body>
</html>
