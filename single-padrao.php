<? get_header() ?>
<!-- BEGIN Content -->
<div class="inner-bg"></div>
<div id="content-wrapper">
    <div id="content" class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="/">Home</a></li>
                        <li><? the_title();?></li>
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
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	 
        <? wpb_set_post_views(get_the_id()); ?>
        <div class="twelve columns">
           	<div class="post-block inner-block">
                <h3><? the_title(); ?></h3>
                <div class="bottom10"></div>
                    <? the_content(); ?>  
                <div class="clear"></div>
                <div class="bottom10"></div>
          </div>
             
		  <div class="clear"></div>
          <div class="bottom20"></div>
          
          <div class="inner-similar-posts">
			<h4>NOTÍCIAS RELACIONADAS</h4>
            <ul id="similar-posts">           
                         
                    <? get_related_posts(get_the_ID()); ?>
             </ul>  



             
		  </div>

		  <div class="clear"></div>
		  <div class="big_separator top10 bottom10"></div>

<h4>COMENTÁRIOS</h4>
<div class="fb-comments" data-href="http://gaspe.com.br" data-width="700" data-num-posts="20"></div>
<div class="bottom30"></div> 
       
</div>
     <? endwhile;endif ?> 


<!-- barra lateral -->


        <aside class="four columns"><? get_sidebar() ?>     </aside>
       	<div class="clear"></div>
        
	</div>
</div>
<!-- END Content -->
<? get_footer(); ?>
