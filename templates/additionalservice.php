<?php
$title_services_1=get_field("title_service_1");
$image_services_1=get_field("image_service_1");
$content_services_1=get_field("content_service_1");
$title_services_2=get_field("title_service_2");
$image_services_2=get_field("image_service_2");
$content_services_2=get_field("content_service_2");
$title_services_3=get_field("title_service_3");
$image_services_3=get_field("image_service_3");
$content_services_3=get_field("content_service_3");
$title_services_4=get_field("title_service_4");
$image_services_4=get_field("image_service_4");
$content_services_4=get_field("content_service_4");
$title_services_5=get_field("title_service_5");
$image_services_5=get_field("image_service_5");
$content_services_5=get_field("content_service_5");
$title_services_6=get_field("title_service_6");
$image_services_6=get_field("image_service_6");
$content_services_6=get_field("content_service_6");

/*Template Name: additional services Page */ ?>
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

 <h2 class="yellow title-section" >Additional Services</h2>
<section>

        <?php if ($title_services_1 != null) : ?>
           
           <div class="img">
           <?=
            ($image_services_1!= null && !empty($image_services_1)) ? 
       wp_get_attachment_image($image_services_1, 'full', false, ['class' => 'left']) 
       :
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
<section>

        <?php if ($title_services_4 != null) : ?>
           
           <div class="img">
           <?= ($image_services_4!= null && !empty($image_services_4)) ? 
       wp_get_attachment_image($image_services_3, 'full', false, ['class' => 'left']) :
        null;
        ?>
           </div>
           <div class="content">
            <div class="sub-service"> <?= $title_services_4 ?></div><br/>
           <div class="content-service"> <?= $content_services_4; ?></div><br/>
           
           </div> 
           <?php endif; ?> 
            
</section>

<section>

        <?php if ($title_services_5 != null) : ?>
           
           <div class="img">
           <?= ($image_services_5!= null && !empty($image_services_5)) ? 
       wp_get_attachment_image($image_services_5, 'full', false, ['class' => 'left']) :
        null;
        ?>
           </div>
           <div class="content">
            <div class="sub-service"> <?= $title_services_5 ?></div><br/>
           <div class="content-service"> <?= $content_services_5; ?></div><br/>
           
           </div> 
           <?php endif; ?> 
            
</section>

<section>

        <?php if ($title_services_3 != null) : ?>
           
           <div class="img">
           <?= ($image_services_6!= null && !empty($image_services_6)) ? 
       wp_get_attachment_image($image_services_6, 'full', false, ['class' => 'left']) :
        null;
        ?>
           </div>
           <div class="content">
            <div class="sub-service"> <?= $title_services_6 ?></div><br/>
           <div class="content-service"> <?= $content_services_6; ?></div><br/>
           
           </div> 
           <?php endif; ?> 
            
</section>


<?php get_footer(); ?>
