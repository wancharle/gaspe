<? get_header(); ?>
<!-- BEGIN Content -->
<div class="inner-bg"></div>
<div id="content-wrapper">
    <div class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="/">Home</a></li>
                    <li><? the_title(); ?></li>
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

		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
        <? the_content();
           endwhile;
           endif;
           ?> 
         
        <div class="clear"></div>        
        </div> 
        
    </div>
</div>
<!-- END Content -->
<? get_footer(); ?>

