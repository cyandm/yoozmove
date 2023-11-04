<?php



/*Template Name: About Page */ ?>
<?php get_header(); 
$image_section_one = get_field('image1');
$text_section_one = get_field('text1');
$number_section_one = get_field('number1');

$image_section_two = get_field('image2');
$text_section_two = get_field('text2');
$number_section_two = get_field('number2');

$image_section_three = get_field('image3');
$text_section_three = get_field('text3');
$number_section_three = get_field('number3');

$text_section_four = get_field('text4');
$number_section_four = get_field('number4');

$text_section_five = get_field('text5');
$number_section_five = get_field('number5');

$title_section_one = get_field('title2');
$content_section_one = get_field('content1');


$image_section_four = get_field('image4');
$content_section_two= get_field('content2');



$title_section_three = get_field('title3');
$content_section_three= get_field('content3');

$image_vision_one = get_field('image5');
$content_vision_one =get_field('content4');


$image_mission_one = get_field('image6');
$content_mission_one =get_field('content5');

$image_value_one = get_field('image67');
$content_value_one =get_field('content6');

$title_why_one = get_field('title4');
$content_Why_one =get_field('content7');


$content_8 =get_field('content8');
$content_9 =get_field('content9');
$content_10 =get_field('content10');
$content_11 =get_field('content11');
$content_12 =get_field('content12');
$content_13 =get_field('content13');


?>



<main  class="contact-us-page  w-100">
<div class="container-fluid ">
   <div class="our-story left">
      <h1>Our Story</h1>
      <p class="text-white justify text-left">Welcome to Yooz Move, where we are dedicated to serving as your trusted partner for all your moving 
         requirements in the DFW area. Our company was established by Nader Sianaki, a seasoned entrepreneur 
         renowned for his extensive expertise in logistics and operations. At Yooz Move, we prioritize delivering 
         dependable and efficient moving services customized to meet your specific needs. With our commitment to excellence 
         and customer satisfaction, you can trust us to ensure a seamless and stress-free moving experience.
      </p>
   </div>
   <div class="about1">
      
      <div class=" right text-white justify text-left">
         <p class="w-80 m-5"><?php if ($text_section_one != null) : ?>
                    <div class="about-us">
                        <?= $text_section_one; ?>
                    </div>
                <?php endif; ?>  
         </p>
      </div>
      <div class="left">
      <?= ($image_section_one != null && !empty($image_section_one)) ? 
       wp_get_attachment_image($image_section_one, 'full', false, ['class' => 'left']) :
        null;
        ?>

      </div>
      </div>
   </div>
   <div class="about1">
     <div class="left">
     <?= ($image_section_two != null && !empty($image_section_two)) ?  wp_get_attachment_image($image_section_two, 'full', false, ['class' => 'left']) : ''; ?>
     </div>
     <div class=" right text-white justify text-left">
         <p class="w-80 m-5"><?php if ($text_section_two != null) : ?>
                    <div class="about-us">
                        <?= $text_section_two; ?>
                    </div>
                <?php endif; ?>  
         </p>
      </div>
      
   </div>
   <div class="about1">
  
      <div class=" right text-white justify text-left">
         <p class="w-80 m-5"><?php if ( $text_section_three != null) : ?>
                    <div class="about-us">
                        <?=  $text_section_three; ?>
                    </div>
                <?php endif; ?> 
         </p>
      </div>
      <div class="left">
      <?= ($image_section_three != null && !empty($image_section_three)) ?  wp_get_attachment_image($image_section_three, 'full', false, ['class' => 'left']) : ''; ?>
      </div>
      </div>
   </div>
   <div class="about1">
  
      <div class=" right text-white justify text-left">
         <p class="w-80 m-5"><?php if ( $text_section_four != null) : ?>
                    <div class="about-us">
                        <?=  $text_section_four; ?>
                    </div>
                <?php endif; ?> 
         </p>
      </div>
      <div class=" right text-white justify text-left">
         <p class="w-80 m-5"><?php if ( $text_section_five != null) : ?>
                    <div class="about-us">
                        <?=  $text_section_five; ?>
                    </div>
                <?php endif; ?>  
         </p>
      </div>
      </div>
   </div>
   <br/>
   <div class="our-team left">
      
                    <div class="about-us">
                    <h1><?php if ($title_section_one != null) : ?>
                        <?= $title_section_one; ?>
                        <?php endif; ?> </h1>
                    </div>
                   
      <p class="text-white justify text-left">
      <?php if ($content_section_two!= null) : ?>
                    <div class="about-us">
                        <?= $content_section_two; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
    <br/>
      <div class="team">
       <div class=" right text-white justify text-left">
         <p class="w-80 m-5"><?php if ($content_section_two!= null) : ?>
                    <div class="about-us">
                        <?= $content_section_two; ?>
                    </div>
                <?php endif; ?> 
         </p>
         <div class=" row counter d-flex">
           <div class="column">
            <div class="card">
              <p><i class="fa fa-user"></i></p>
               <h3>11+</h3>
               <p>Partners</p>
            </div>
           </div>
           <div class="column">
            <div class="card">
            <p><i class="fa fa-user"></i></p>
             <h3 class="yellow">11+</h3>
             <p>Partners</p>
            </div>
           </div>
           <div class="column">
             <div class="card">
              <p><i class="fa fa-user"></i></p>
              <h3>11+</h3>
              <p>Partners</p>
             </div>
           </div>
           <div class="column">
             <div class="card">
              <p><i class="fa fa-user"></i></p>
              <h3>11+</h3>
              <p>Partners</p>
             </div>
            </div>
         </div>
      </div>
      <div class="left">
       <img src="<?= get_stylesheet_directory_uri() .'/assets/img/our-team.svg' ?>"/>
       
      </div>
      
     </div>
<!--vision -->
   <div class="vision left">
                  
   <div class=" vision-right">
         <p class="w-80 m-5"> <?php if ($content_vision_one!= null) : ?>
         <div class="vision-text">
          <?= $content_vision_one; ?>
          </div>
          <?php endif; ?>  
         </p>
      </div>
      <div class="vision-left">
      <?= $image_vision_one != null ?  wp_get_attachment_image($image_vision_one, 'full', false, ['class' => 'feature-image']) : ''; ?>
                    <div class="image-two-section-three">
                        <?= $image_vision_one != null ? wp_get_attachment_image($image_vision_one, 'full', false, ['class' => 'feature-image']) : ''; ?>
                    </div>
     

      </div>
      </div>             
   

         
<!-- end of vision -->
<hr>

<!--mission -->
<div class="mission left">
                  
                  <div class=" mission-right">
                        <p class="w-80 m-5"> <?php if ($content_mission_one!= null) : ?>
                        <div class="mission-text">
                         <?= $content_mission_one; ?>
                         </div>
                         <?php endif; ?>  
                        </p>
                     </div>
                     <div class="mission-left">
                     <?= $image_mission_one != null ?  wp_get_attachment_image($image_mission_one, 'full', false, ['class' => 'feature-image']) : ''; ?>
                                   <div class="image-two-section-three">
                                       <?= $image_mission_one != null ? wp_get_attachment_image($image_mission_one, 'full', false, ['class' => 'feature-image']) : ''; ?>
                                   </div>
                    
               
                     </div>
                     </div>             
                  
               
                        
               <!-- end of mission -->
<hr>
               
<!--core value -->
<div class="value left">
                  
                  <div class=" value-right">
                        <p class="w-80 m-5"> <?php if ($content_value_one!= null) : ?>
                        <div class="value-text">
                         <?= $content_value_one; ?>
                         </div>
                         <?php endif; ?>  
                        </p>
                     </div>
                     <div class="value-left">
                     <?= $image_value_one != null ?  wp_get_attachment_image($image_value_one, 'full', false, ['class' => 'feature-image']) : ''; ?>
                                   <div class="image-two-section-three">
                                       <?= $image_value_one != null ? wp_get_attachment_image($image_value_one, 'full', false, ['class' => 'feature-image']) : ''; ?>
                                   </div>
                    
               
                     </div>
                     </div>             
                  
               
                        
               <!-- end of value -->
<!--why -->
<div class="our-team left">
      
<div class="about-us">
                    <h1><?php if ($title_Why_one != null) : ?>
                        <?= $title_Why_one; ?>
                        <?php endif; ?> </h1>
                    </div>
                   
      <p class="text-white justify text-left">
      <?php if ($content_Why_one= null) : ?>
                    <div class="about-us">
                        <?= $content_Why_one; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>

<!-- end why-->

<div class="row d-flex w-100">
   <div class="card-dark w-30 m-3">
      <p><?php if ($content_8= null) : ?>
                    <div class="about-us">
                        <?= $content_8; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
   <div class="card-dark w-30 m-3">
      <p><?php if ($content_9= null) : ?>
                    <div class="about-us">
                        <?= $content_9; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
   <div class="card-dark w-30 m-3">
      <p><?php if ($content_10= null) : ?>
                    <div class="about-us">
                        <?= $content_10; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
   <br/>
   <div class="card-dark w-30 m-3">
      <p><?php if ($content_11= null) : ?>
                    <div class="about-us">
                        <?= $content_11; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
   <div class="card-dark w-30 m-3">
      <p><?php if ($content_12= null) : ?>
                    <div class="about-us">
                        <?= $content_12; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
   <div class="card-dark w-30 m-3">
      <p><?php if ($content_13= null) : ?>
                    <div class="about-us">
                        <?= $content_13; ?>
                    </div>
                <?php endif; ?> 
      </p>
   </div>
</div>





   </div>
   
   
     
</div>
      
        
<?php

$my_query = array("post_type" => "comment","posts_per_page" => 6);
$query1 = new WP_Query($my_query);
while($query1->have_posts()) : $query1->the_post();

?>
<div class="card card-comment">
    <div class="card-header">
        <h5><a href=”<?php the_permalink(); ?>”><?php the_title(); ?> </a></h5>
    </div>
    <div class="card-body">
        <p><?php the_content(); ?></p>
    </div>
</div>


<?php endwhile; wp_reset_postdata(); ?> 
         
      
</main>
<?php get_footer(); ?>