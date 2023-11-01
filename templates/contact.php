<?php



/*Template Name: Contact-us Page */ ?>
<?php get_header(); ?>
<main  class="contact-us-page  col-sm-12">
    <div class="container ">
       <div class="contact-us row ">
        
         <div class="rel-contact-us col-sm-6 p-3 ltr">
            <h3>Location</h3>
            <p>Dallas Fort-Worth (DFW), Texas</p>
            <br/>
            <h3>Company Number</h3>
            <p>0042626046 | 0042626046</p>
            <br/>
            <h3>Connect with us</h3>
            <p>icons</p>
            <br/>
        </div>
        <div class="image-contact-us col-sm-6 p-3">
            <img src="<?= get_stylesheet_directory_uri() .'/assets/img/Group-37432.svg' ?>"/>
         </div>
       </div>
       
       
      
       
       <form method="post" action="function.php">
        <h2>contact us</h2>
           <div class="container">
              <input type="text" class="border-input" name="firstname" placeholder="FirstName*" />
              <input type="text" class="border-input" name="lastname" placeholder="LastName*" />
           </div>
           <div class="container">
              <input type="text" class="border-input" name="number" placeholder="PhoneNumber*" />
              <input type="email" class="border-input" name="email" placeholder="Email" />
           </div>
           <div class="container">
           <textarea rows="5" class="text-area-contact-us " name="message" placeholder="Message*"></textarea>

           </div>
           <div class="form-control">
                <input type="submit" value="Submit" name="submit" />
            </div>
       </form>
    </div>
</div>
</main>

<?php get_footer(); ?>