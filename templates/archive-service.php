<?php


/*Template Name: archive services Page */ ?>
<?php get_header();?> 


<section>
<form method="post" action="function.php">
      
           <div class="form-group">
           <input type="text" class="input-form w-50 bg-none" name="lastname" placeholder="*Last Name" />
              <input type="text" class="input-form w-50" name="firstname" placeholder="*First Name" />
             
           </div>
           <div class="form-group">
           <input type="email" class="input-form w-50" name="email" placeholder="*Email" />
              <input type="text" class="input-form w-50" name="number" placeholder="Phone Number" />
              
           </div>
           <div class="form-group">
           <input type="number" class="input-form w-50" name="dzipcode" placeholder="destination Zip Code" />
           <input type="number" class="input-form w-50" name="ozipcode" placeholder="*origionz zip code" />
              
           </div>
           <div class="form-group">
           <input type="date" class="input-form w-50" name="movingdate" placeholder="moving date" />
           <input type="text" class="input-form w-50" name="typemove" placeholder="type of move" />
              
           </div>
          
           <div class="form-group">
                <input type="submit" value="Get A Qoute" name="getgoute" class="service-form"/>
            </div>
       </form>
             <div class="content">
                <!-- <?Php the_title(); ?> -->
                 <?php the_content(); ?>
             </div>
           
            </section>
 <br/>


<section>
     
      <div class="step">
      <div class="img-step">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/step1.svg" />
         </div>
         <div class="content">
            <h2 class="yellow">Step1</h2>
            <h3 class="text-light">Consultation</h3>
            <p>lorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epson</p>
         </div>
        
      </div>     
            
</section>
<section>
     
      <div class="step">
      
         <div class="content">
            <h2 class="yellow">Step2</h2>
            <h3 class="text-light">Consultation</h3>
            <p>lorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epson</p>
         </div>
         <div class="img-step">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/step1.svg" />
         </div>
      </div>     
            
</section>
<section>
     
      <div class="step">
      <div class="img-step">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/step1.svg" />
         </div>
         <div class="content">
            <h2 class="yellow">Step3</h2>
            <h3 class="text-light">Consultation</h3>
            <p>lorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epson</p>
         </div>
        
      </div>     
            
</section>
<section>
     
      <div class="step">
     
         <div class="content">
            <h2 class="yellow">Step4</h2>
            <h3 class="text-light">Consultation</h3>
            <p>lorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epson</p>
         </div>
         <div class="img-step">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/step1.svg" />
         </div>
      </div>     
            
</section>
<section>
     
      <div class="step">
      <div class="img-step">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/step1.svg" />
         </div>
         <div class="content">
            <h2 class="yellow">Step5</h2>
            <h3 class="text-light">Consultation</h3>
            <p>lorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epsonlorem epson</p>
         </div>
        
      </div>     
            
</section>
<div class="texonomy"></div>

<div class="comment"></div>

<?php get_footer(); ?>
