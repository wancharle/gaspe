      	<h4>POSTS</h4>
            <div class="widget">
                <ul class="tabs">
                    <li><a class="" href="#">Popular</a></li>
                    <li><a class="" href="#">Recentes</a></li>
                </ul>
                <div class="clear"></div>
                <div class="panes">
                    <div class="pane">
                        <ul class="widget-post-list">
<?php 
    $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'wpb_post_views_count', 'order' => 'DESC'  ) );
    while ( $popularpost->have_posts() ) : $popularpost->the_post();

?>
                            <li>
                                <div class="wpl-image">
                                    <a href="<?php the_permalink() ?>"><? the_post_thumbnail();?></a>
                                </div>
                                <div class="wpl-desc">
                                   <p><?the_title();?></p>
                                </div>
                                <div class="clear"></div>	
                            </li>

<? endwhile;?>
                           </ul>
                    </div>
                    <div class="pane">
                        <ul class="widget-post-list">
<?php
$aRecentPosts = new WP_Query("showposts=5"); // 5 é o número de posts recentes que você deseja mostrar
while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>
                            <li>
                                <div class="wpl-image">
                                    <a href="<?the_permalink()?>"><? the_post_thumbnail();?></a>
                                </div>
                                <div class="wpl-desc">
                                   <p><? the_title();?></p>
                                </div>
                                <div class="clear"></div>	
                            </li>
<? endwhile;?>
                        </ul>
                    </div>
               
                </div>
        	</div>

          
                        
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' ); endif; ?>
   
