<?php /* Template Name: contato */ 
get_header() ?>
<!-- END Header -->
<?php
  if($_POST['nome']) :

    $nome = esc_html($_POST["nome"]);
    $email = esc_html($_POST["email"]);
    if (isset($_POST["msg"])) $msg = esc_html($_POST["msg"]);
    
    
    if ( is_email($email)){
        $message = "<p>Nome: ".$nome. "</p>"
            ."<p>Email: ".$email. "</p>"
            ."<p>Mensagem: ".$msg. "</p>";
        add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));

    
        $headers = 'From: Site <site@gaspe.com.br>' . "\r\n";
        wp_mail('glaice.10@gmail.com', '[Fale Conosco] '.$nome,$message,$headers );

    };
   ?>

<script>
alert("Recebemos sua mensagem. Assim que possível entraremos em contato..");
</script>
<?php endif ;?>

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
                <form action="" method="POST" id="contact-form" class="contactForm">
                    <div id="status"></div>
                    <div class="six columns alpha">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" value="" name="nome" />
                    </div>
                    <div class="six columns last">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="" />
                    </div>
                    <div class="clear"></div>
                    <div>
                        <label for="msg">Mensagem</label>
                        <textarea name="msg" id="msg" rows="50" cols="10"></textarea>
                    </div>                   
                    <div >
                        <input type="submit" name="send" value="Enviar" class="button medium"/>
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
