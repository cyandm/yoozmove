<?php

$title_location = get_field('location');
$title_company = get_field('company_number');
$title_contact = get_field('connect_with_us');






/*Template Name: Contact-us Page */ ?>
<?php get_header();?>


<main  class="contact-us-page w-100">
    <div class="container ">
       <div class="contact-us">
        
         <div class="rel-contact-us">
            <h4 class="yellow">Location</h4>
            <p><?= $title_location?></p>
            <br/>
            <h4 class="yellow">Company Number</h4>
            <p><?= $title_company ?> | <?= $title_company ?></p>
            <br/>
            <h4 class="yellow">connect with us</h4>
            <p><?= $title_contact ?></p>
            <br/>
         </div>
        <div class="image-contact-us">
            <img src="<?= get_stylesheet_directory_uri() .'/assets/img/Group-37432.svg' ?>"/>
         </div>
        </div>
      
       </div>
       
      
       <div class="w-80 form-contact">
       <form method="post" action="function.php">
        <h2 class="yellow">contact us</h2>
           <div class="form-group">
           <input type="text" class="input-form w-50" name="lastname" placeholder="*LastName" />
              <input type="text" class="input-form w-50" name="firstname" placeholder="*FirstName" />
             
           </div>
           <div class="form-group">
           <input type="email" class="input-form w-50" name="email" placeholder="*Email" />
              <input type="text" class="input-form w-50" name="number" placeholder="PhoneNumber" />
              
           </div>
           <div class="form-group ">
           <textarea row="10"  class="input-form left " name="message" placeholder="*Message"></textarea>

           </div>
           <div class="form-group">
                <input type="submit" value="send message" name="submit" class="submit-form"/>
            </div>
       </form>
     </div>
    </div>

</main>

<?php get_footer(); ?>