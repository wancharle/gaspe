<? get_header() ?>
<div class="inner-bg"></div>
<div id="content-wrapper">	
    <div id="content" class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="/">Home</a></li>
                    <li><?php single_cat_title(); ?></li>
                </ul>
                <div class="four columns last" id="search-global">
                </div>
            </div>
            <div class="medium_separator"></div>
            <div class="white_space10"></div>
        </div>       
        
        
        <div class="twelve columns">
            	<?php while ( have_posts() ) : the_post(); ?>
        
           	<article class="post-block">
            	<h3><? the_title()?></h3>               
                <div class="five columns alpha">
					<div class="featured-image">
                    	<a href="<? the_permalink()?>"><? the_post_thumbnail('destaque-categorias') ?></a> 
					</div>
                    <div class="clear"></div> 
                    <div class="bottom10"></div>                              
                </div>              
                <div class="seven columns last">               	
                	<p class="bottom20">
                    <? the_excerpt(); ?>
                    </p>
                    <p><a href="<? the_permalink() ?>">Leia Mais</a></p>                 
                    
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="bottom10"></div>                
            </article>
            <div class="bottom20"></div>
          <? endwhile;?> 
<?php wp_pagenavi(); ?> 
           <div class="clear"></div>  
        </div>
      
        <aside class="four columns">
        <? get_sidebar() ?>      
        </aside>
       	<div class="clear"></div>
	</div>
</div>
<!-- END Content -->
<? get_footer() ?>
