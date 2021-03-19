<?php
/* Template Name: About */

 get_header(); ?>

<div class="hero-about">
      <div class="hero-about__left">
        <h1 class="hero__title title"><?php the_title(); ?></h1>
        <p class="hero__text">Founded in 2010, we are a creative agency that produces lasting results for our clients. We’ve partnered with many startups, corporations, and nonprofits alike to craft designs that make real impact. We’re always looking forward to creating brands, products, and digital experiences that connect with our clients’ audiences.</p>
      </div>
      <div class="hero-about__right">
        <img class="hero-about__img" src="<?php echo get_theme_file_uri('/assets/about/desktop/image-about-hero.jpg') ?>">
      </div>
</div>

    <!-- <div class="about-second">
        <div class="about-second__short">
        <img class="about-second__img about-second__img--world" src="<?php echo get_theme_file_uri('/assets/about/desktop/image-world-class-talent.jpg') ?>">
        </div>
        <div class="about-second__large">
        <h2 class="about-second__title title">World-class talent</h2>
        <p class="about-second__text">We are a crew of strategists, problem-solvers, and technologists. Every design is thoughtfully crafted from concept to launch, ensuring success in its given market. We are constantly updating our skills in a myriad of platforms.
        Our team is multi-disciplinary and we are not merely interested in form — content and meaning are just as important. We give great importance to craftsmanship, service, and prompt delivery. Clients have always been impressed with our high-quality outcomes that encapsulates their brand’s story and mission.</p>
        </div>
    </div> -->

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

    <div class="about-second">
        <div class="about-second__large">
        <h2 class="about-second__title title">The real deal</h2>
        <p class="about-second__text">As strategic partners in our clients’ businesses, we are ready to take on any challenge as our own. Solving real problems require empathy and collaboration, and we strive to bring a fresh perspective to every opportunity. We make design and technology more accessible and give you tools to measure success. 
        We are visual storytellers in appealing and captivating ways. By combining business and marketing strategies, we inspire audiences to take action and drive real results.</p>
        </div>
        <div class="about-second__short">
        <img class="about-second__img about-second__img--deal" src="<?php echo get_theme_file_uri('/assets/about/desktop/image-real-deal.jpg') ?>">
        </div>
    </div>

<?php pageCta(); ?>
  </div>

  <?php get_footer(); ?>
