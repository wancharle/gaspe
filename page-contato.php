<?php /* Template Name: contato */ 
get_header() ?>
<!-- END Header -->


<!-- BEGIN Content -->
<div class="inner-bg"></div>
<div id="content-wrapper">
    <div id="content" class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="/">Home</a></li>
                    <li>Fale Conosco</li>
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
        
        
            <div><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=205562585576537413592.0004917c0c3ec7fa23ad1&amp;hl=pt-BR&amp;ie=UTF8&amp;t=m&amp;ll=-19.832641,-40.268744&amp;spn=0.003028,0.008594&amp;z=17&amp;output=embed"></iframe></div>
            <div class="white_space10"></div>
            
            <div class="sixteen columns">
            
            <div class="twelve columns alpha">
            <h4>Fale Conosco</h4>
                <p>
                 Nos encontramos na igreja aos sábados, as 17:00 horas.
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
            <h4>LOCALIZAÇÃO</h4>
            <div class="contact-details">
            	<span>Endereço:</span><p>Rua Geoseppe Testa, 77, Bela Vista. Aracruz - ES</p>
                <span>Telefone:</span><p>(27) 3296-1319 (Paróquia)</p>
                <span>E-mail:</span><p><a href="mailto:contato@gaspe.com.br">contato@gaspe.com.br</a></p>
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



<? get_footer() ?>
