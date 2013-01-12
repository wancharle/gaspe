<?php
  $post = $wp_query->post;

  if (in_category('albuns')) {
      include(TEMPLATEPATH.'/single-albuns.php');
  } else {
      include(TEMPLATEPATH.'/single-padrao.php');
  }
?>
