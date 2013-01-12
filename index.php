<? get_header();?>
<!-- BEGIN Slider -->
<? get_template_part("slider");?>
<!-- End Slider -->

            <div class="slide-text full">
            	<a href="#" class="ts-prev" title="Prev"></a> 
                <div class="textSlider">
					 <ul>
                        <li>
                            <h2>Grupo de <span>Amigos</span> Semeando a Paz e o Evangelho</h2>
                            <p>
“Um amigo fiel é uma poderosa proteção: quem o achou, descobriu um tesouro.
Nada é comparável a um amigo fiel, o ouro e a prata não merecem ser postos em paralelo com a sinceridade de sua fé.
Um amigo fiel é um remédio de vida e imortalidade; quem teme ao Senhor, achará esse amigo.
Quem teme ao Senhor terá também uma verdadeira amizade, pois seu amigo lhe será semelhante.” (Eclo 6, 14-16)
                            </p>
                        </li>
                   </ul>
					
                </div>
                <a href="#" class="ts-next" title="Next"></a> 
                <div class="clear"></div>
            </div>


<!-- BEGIN Content -->
<div id="content-wrapper">

	<div class="container">

        <div class="four columns">
            
        	<h4>Últimas Notícias</h4>
            
            <p>
Fique atento aos eventos que se
aproximam! O GASPE está organizando
o II FEST JOVEM, para disseminar as
artes entre os jovens e também em prol 
do 8º Retiro Espiritual de Carnaval, que
acontecerá entre os dias 09 e 12 de
fevereiro.  Não fique de fora. Venha e
participe!"
           </p>
            <a href="/noticias/" class="more-link">veja mais notícias</a>
        </div>

        <div class="twelve columns last">

        	<ul class="recent-works" id="portfolio-list">
   	       <?php
                global $post;
                $args = array( 'numberposts' => 3, 'category' => get_cat_ID("Notícias"), );
                $myposts = get_posts( $args );
		$classes = array('alpha','','last');
		$i= 0;
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
            	
                <li class="<?=$classes[$i]?>">
                    <a href="<? the_permalink();?>">
                        <? the_post_thumbnail("Mensagens")?>
                    </a>
                    <a href="<? the_permalink()?>" class="item-title"><? the_title() ?></a>
                   <a href="<? the_permalink()?>" data-rel="prettyPhoto" title="<? the_title();?>"></a>
                   
                </li>
		<? $i=$i+1; endforeach; ?>
            </ul>

            <div class="clear"></div>    
    
        </div>

        <div class="clear"></div> 

        <div class="big_separator"></div>

        <div class="four columns">
        	
            <h4>Últimas Mensagens</h4>
            
            <p>
Refletir é renovar a alma. Aqui você
encontra algumas mensagens que
podem te levar a refletir sobre sua
juventude,  sobre as escolhas que tem
tomado, sobre a igreja e tudo o mais
que envolve nosso dia-a-dia.
            </p>
            <a href="/mensagens/" class="more-link blue-more">veja mais mensagens</a>
        </div>

        <div class="twelve columns last">

        	<ul id="blogposts-list" class="recent-works">
           <?php
                global $post;
                $args = array( 'numberposts' => 3, 'category' => get_cat_ID("Mensagens"), );
                $myposts = get_posts( $args );
		$classes = array('alpha','','last');
		$i= 0;
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
            	
                <li class="<?=$classes[$i]?>">
                    <a href="<? the_permalink();?>">
                        <? the_post_thumbnail("Mensagens")?>
                    </a>
                    <a href="<? the_permalink()?>" class="item-title"><? the_title() ?></a>
                   
                </li>
		<? $i=$i+1; endforeach; ?>
            </ul>

            <div class="clear"></div>

         </div>
         
         
        <div class="clear"></div>

        <div class="big_separator"></div>
        <!-- START Carousel slider -->
      <div class="sixteen columns">
            <h5>Nossos Colaboradores do Retiro</h5>
           <div class="carousel-wrapper logo-carousel" style="overflow:hidden;">
                <a href="#" class="car-prev">Prev</a>         
                <ul class="carousel">
<?php
            $patrocinadores= get_posts( array('post_type'=>'patrocinadores','numberposts'=>50) );
            foreach( $patrocinadores as $post ) :
                    setup_postdata($post);
                    echo "<li><div class='patrocinadores-logos'><a href='".get_permalink()."'>";
                            the_post_thumbnail();
                    ?></a></div></li>

<?
                endforeach;
                ?>

            </ul>
            <a href="#" class="car-next">Next</a>                      
            	<div class="clear"></div>
            </div>            
            <div class="clear"></div>
            <!-- END Carousel -->
        </div>


    </div>
</div>
<!-- END Content -->
 

<? get_footer()?>
