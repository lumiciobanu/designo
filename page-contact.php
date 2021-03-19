<?php
/* Template Name: Contact */

 get_header(); ?>

 
<div class="hero-contact">
      <div class="hero-contact__left">
        <h1 class="hero__title title"><?php the_title(); ?></h1>
        <p class="hero__text">Ready to take it to the next level? Let’s talk about your project or idea and find out how we can help your business grow. If you are looking for unique digital experiences that’s relatable to your users, drop us a line.</p>
      </div>
      <div class="hero-contact__form-container">
      <!-- <?php echo do_shortcode("[contact_form]"); ?> -->
      <form id="form" class="hero-contact__form" name="contactForm" action="/" method="GET" >
     <input type="text" name="name" placeholder="Your Name" id="name" class="hero-contact__name hero-contact__input">
     <div id="errorName"></div> 
     <input type="email" name="emailField" placeholder="Email Address" id="email" class="hero-contact__email hero-contact__input">
     <div id="errorEmail"></div> 
      <input type="text" name="phone" required placeholder="Phone Number" id="phone" class="hero-contact__phone hero-contact__input">
      <div id="errorPhone"></div>
     <input type="text" name="message" required placeholder="Your Message" id="message" class="hero-contact__message hero-contact__input"> 
      <button type="submit" id="submitBtn" class="hero-contact__submit">Submit</button>
      </form>
      </div>
    </div>

    <div class="features">
      <div class="features__card">
        <div class="features__imgcontainer features__imgcontainer--locations">
          <img class="features__img features__img--locations" src="<?php echo get_theme_file_uri('/assets/about/desktop/toronto.png') ?>">
        </div>
        <h3 class="features__title">Canada</h3>
        <button class="features__btn">Learn More</button>
      </div>
      <div class="features__card">
        <div class="features__imgcontainer features__imgcontainer--center features__imgcontainer--locations">
          <img class="features__img features__img--locations" src="<?php echo get_theme_file_uri('/assets/about/desktop/sydney.png') ?>">
        </div>
        <h3 class="features__title">Australia</h3>
        <button class="features__btn">Learn More</button>

      </div>
      <div class="features__card">
        <div class="features__imgcontainer features__imgcontainer--right features__imgcontainer--locations">
          <img class="features__img" src="<?php echo get_theme_file_uri('/assets/about/desktop/london.png') ?>">
      </div>
        <h3 class="features__title">United Kingdom</h3>
        <button class="features__btn features__img--locations">Learn More</button>

      </div>

    </div>


  </div>



  <?php get_footer(); ?>