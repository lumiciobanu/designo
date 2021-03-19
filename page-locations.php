<?php
/* Template Name: Locations */

 get_header(); ?>

<div class="locations">
    <div class="locations__item">
        <div class="locations__wide">
            <h2 class="locations__title">Canada</h2>
            <div class="locations__info">
                <div class="locations__column">
                <p class="locations__text"><strong>Designo Central Office</strong></p>
                <p class="locations__text">3886 Wellington Street</p>
                <p class="locations__text">Toronto, Ontario M9C 3J5</p>
                </div>
                <div class="locations__column">
                <p class="locations__text"><strong>Contact</strong></p>
                <p class="locations__text">P: +1 253-863-8967</p>
                <p class="locations__text">M: contact@designo.co</p>
                </div>
            </div>
        </div>

        <div class="locations__imgcontainer">
        <img class="locations__img" src="<?php echo get_theme_file_uri('./assets/locations/desktop/image-map-united-kingdom.png') ?>">
        </div>
    </div>

    <div class="locations__item locations__item--center">
        <div class="locations__imgcontainer">
            <img class="locations__img locations__img--center" src="<?php echo get_theme_file_uri('./assets/locations/desktop/image-map-australia.png') ?>">
        </div>
        
        <div class="locations__wide">
            <h2 class="locations__title">Australia</h2>
            <div class="locations__info">
                <div class="locations__column">
                <p class="locations__text"><strong>Designo AU Office</strong></p>
                <p class="locations__text">3886 Wellington Street</p>
                <p class="locations__text">Toronto, Ontario M9C 3J5</p>
                </div>
                <div class="locations__column">
                <p class="locations__text"><strong>Contact</strong></p>
                <p class="locations__text">P: +1 253-863-8967</p>
                <p class="locations__text">M: contact@designo.co</p>
                </div>
            </div>
        </div>

       
    </div>

    <div class="locations__item">
        <div class="locations__wide">
            <h2 class="locations__title">United Kingdom</h2>
            <div class="locations__info">
                <div class="locations__column">
                <p class="locations__text"><strong>Designo UK Office</strong></p>
                <p class="locations__text">3886 Wellington Street</p>
                <p class="locations__text">Toronto, Ontario M9C 3J5</p>
                </div>
                <div class="locations__column">
                <p class="locations__text"><strong>Contact</strong></p>
                <p class="locations__text">P: +1 253-863-8967</p>
                <p class="locations__text">M: contact@designo.co</p>
                </div>
            </div>
        </div>

        <div class="locations__imgcontainer">
        <img class="locations__img" src="<?php echo get_theme_file_uri('./assets/locations/desktop/image-map-canada.png') ?>">
        </div>
    </div>
      
</div>


<?php pageCta(); ?>
  </div>

  <?php get_footer(); ?>