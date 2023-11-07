<?php 
$number = get_field('phone' , get_the_ID());


?>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>
 <footer >
    <div class="column">
      <h4>connect with us</h4>
      <ul class="row text-light">
      	<li><a href="/"><i class="fa fa-telegram"></i></a></li>
      	<li><a href="/"><i class="fa fa-telegram"></i></a></li>
      	<li><a href="/"><i class="fa fa-telegram"></i></a></li>
      	<li><a href="/"><i class="fa fa-telegram"></i></a></li>

      </ul>
      <img src="../wp-content/themes/theme-init/yoozmove/assets/img/footer.svg" />
    </div>
  
    <div class="column">
      <h4>Privacy Policy</h4>
    <?php wp_nav_menu( [ 'theme_location' => 'subfooter4' ] ) ?>
    </div>

    <div class="column">
      <h4>Company number</h4>
       <ul>
        <li>
       <?= $phone = get_field('phone', get_the_ID()); ?>
       <li>
       <?= $phone = get_field('phone', get_the_ID()); ?></li>
       </ul>

      
    </div>
    <div class="column">
      <h4>Locations served</h4>
      <?php wp_nav_menu( [ 'theme_location' => 'subfooter3' ] ) ?>
    </div>
     <div class="column">
      <h4>YoozMove</h4>
      
        <?php wp_nav_menu( [ 'theme_location' => 'subfooter2' ] ) ?>
        
    </div>
     <div class="column" width="10%">
     
     <h4>Home</h4>
      <?php wp_nav_menu( [ 'theme_location' => 'subfooter1' ] ) ?>
         
    
    </div>
  </footer>
</body>
</html>
