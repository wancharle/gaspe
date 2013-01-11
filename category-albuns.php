<? get_header(); ?>
 <script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({show_title: false});
			jQuery('#portfolio-list').filterable();
		});
    </script>

<!-- BEGIN Content -->
<div class="inner-bg"></div>
<div id="content-wrapper">
    <div class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="/">Home</a></li>
                    <li>Fotos</li>
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
        </div>
        

        <div class="sixteen columns">
        	<div id="our-portfolio">
            	<ul id="portfolio-filter">
                    <li><a href="#all">Todos</a></li>
                    <? 
                    $categories= get_categories(array('hide_empty'=> '0','child_of' =>get_cat_ID('Albuns'))); 
                    foreach ($categories as $category):
                    echo "<li><a href=\"#".$category->slug."\">".$category->name."</a></li>";
                    endforeach;
                    ?>
                </ul>
            </div>
           	
        	<ul id="portfolio-list">
            	<?php while ( have_posts() ) : the_post(); ?>

                <li class="<?php $cats = wp_get_post_terms($post->ID,"category",array('fields' => 'slugs')); foreach($cats as $cat){echo $cat." ";}?>">
                   <a href="<? the_permalink()?>"><? the_post_thumbnail();?></a>
                   <a href="<? the_permalink()?>" class="item-title"><? the_title();?></a>
                </li>
                <? endwhile; ?>
             </ul>
            <div class="clear"></div>        
        </div> 
        
    </div>
</div>
<!-- END Content -->

<? get_footer(); ?>
