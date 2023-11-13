<?php
$title_services_1=get_field("title_service1");
$image_services_1=get_field("image_service1");
$content_services_1=get_field("content_service1");
$title_services_2=get_field("title_service2");
$image_services_2=get_field("image_service2");
$content_services_2=get_field("content_service2");
$title_services_3=get_field("title_service3");
$image_services_3=get_field("image_service3");
$content_services_3=get_field("content_service3");


/*Template Name: service Page */ ?>
<?php get_header();?> 


<section>
            
             <div class="content">
                 <?php the_content(); ?>
             </div>
             <div class="img">
             <?php the_post_thumbnail('large'); ?> 
             <img src="<?php bloginfo('template_url'); ?>/assets/img/service.svg" /> 
             </div>
            </section>
 <br/>

 <h2 class="yellow title-section" >Our Services</h2>
<section>

        <?php if ($title_services_1 != null) : ?>
           
           <div class="img">
           <?= ($image_services_1!= null && !empty($image_services_1)) ? 
       wp_get_attachment_image($image_services_1, 'full', false, ['class' => 'left']) :
        null;
        ?>
           </div>
           <div class="content">
            <div class="sub-service"> <?= $title_services_1 ?></div><br/>
           <div class="content-service"> <?= $content_services_1; ?></div><br/>
           
           </div> 
           <?php endif; ?> 
            
</section>
<section>

        <?php if ($title_services_2 != null) : ?>
            <div class="content">
            <div class="sub-service"> <?= $title_services_2 ?></div><br/>
           <div class="content-service"> <?= $content_services_2; ?></div><br/>
           
           </div> 
           <div class="img">
           <?= ($image_services_2!= null && !empty($image_services_2)) ? 
       wp_get_attachment_image($image_services_2, 'full', false, ['class' => 'left']) :
        null;
        ?>
           </div>
           <?php endif; ?> 
            
</section>
<section>

        <?php if ($title_services_3 != null) : ?>
           
           <div class="img">
           <?= ($image_services_3!= null && !empty($image_services_3)) ? 
       wp_get_attachment_image($image_services_3, 'full', false, ['class' => 'left']) :
        null;
        ?>
           </div>
           <div class="content">
            <div class="sub-service"> <?= $title_services_3 ?></div><br/>
           <div class="content-service"> <?= $content_services_3; ?></div><br/>
           
           </div> 
           <?php endif; ?> 
            
</section>

<?php get_footer(); ?>
