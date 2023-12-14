<?php get_header(); ?>

<?php

$page_id = get_queried_object_id();

?>

<div  id="app" class="app">
  

  <div id="pages" class="pages" data-barba="wrapper">
    <div class="page page_default" data-barba-namespace="default" data-barba="container">
    
      <div class="page__content">

        <?php include get_template_directory() . '/repeater.php' ; ?>

      </div>
      
    </div>
  </div>

<?php
  get_footer();
  wp_footer();
?>

</body>
</html>