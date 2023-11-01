<?php



/*Template Name: Contact-us Page */ ?>
<?php get_header();

$title_location = get_field('location');
$title_company = get_field('company_number');
$title_contact = get_field('connect_with_us');



?>
<main  class="contact-us-page w-100">
    <div class="container ">
       <div class="contact-us row ">
        
         <div class="rel-contact-us col-sm-6 p-3 ltr">
            <h3 class="yellow">Location</h3>
            <p><?= $title_location?></p>
            <br/>
            <h3 class="yellow">Company Number</h3>
            <p><?= $title_company ?> | <?= $title_company ?></p>
            <br/>
            <h3 class="yellow">connect with us</h3>
            <p><?= $title_contact ?></p>
            <br/>
        </div>
        <div class="image-contact-us col-sm-6 p-3">
            <img src="<?= get_stylesheet_directory_uri() .'/assets/img/Group-37432.svg' ?>"/>
         </div>
       </div>
       <div class="topics">
         <div class="title-topic"></div>
         <div class="search-topic"></div>
       </div>
       
      
       <div class="w-100 form-contact">
       <form method="post" action="function.php">
        <h2>contact us</h2>
           <div class="form-group">
              <input type="text" class="border-input" name="firstname" placeholder="FirstName*" />
              <input type="text" class="border-input" name="lastname" placeholder="LastName*" />
           </div>
           <div class="form-group">
              <input type="text" class="border-input" name="number" placeholder="PhoneNumber*" />
              <input type="email" class="border-input" name="email" placeholder="Email" />
           </div>
           <div class="form-group">
           <textarea rows="5" class="text-area-contact-us " name="message" placeholder="Message*"></textarea>

           </div>
           <div class="">
                <input type="submit" value="Submit" name="submit" class="btn-alert"/>
            </div>
       </form>
</div>
    </div>
</div>
</main>

<?php get_footer(); ?>