<?php
/* Template Name: App Design */

 get_header(); ?>


<?php headerPortfolio(); ?>


<div class="portfolio-cards">
          
        
        <?php 
        $portfolioApp = new WP_Query(array(
                'post_per_page' => -1,
                'post_type' => 'portfolio',
                'category_name' => 'app'
        ));

        $featured_img_url = get_the_post_thumbnail_url(get_the_ID());
        
        while ($portfolioApp->have_posts()) {
                $portfolioApp->the_post(); ?>
        <div class="portfolio__card">
       
        <?php the_post_thumbnail( 'medium', array( 'class' => 'portfolio__img' ) ); ?>

       <div class="portfolio__bottom">
     <a href="<?php the_permalink(); ?>"><h3 class="portfolio__title"><?php echo get_the_title(); ?></h3></a>
     <p class="portfolio__text"><?php echo the_excerpt(); ?></p>
     </div>
     </div>
               
                 
        
   <?php  } wp_reset_postdata();
       
      
     ?>
          


</div> 

<div class="services services__portfolio">

        <?php 
        $currentID = get_the_ID();
        $portfolioPages = new WP_Query(array(
                'post_per_page' => -1,
                'post_type' => 'page',
                'post__in' => array(43, 41),
                // 'category__in' => 'port',
                // 'post__not_in' => array($currentID)
               ));

        while ($portfolioPages->have_posts()) {
                $portfolioPages->the_post(); ?>
      <div class="services__column services__card services__card--portfolio">
        <h2 class="services__title"><?php echo get_the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>" class="services__link">View Projects</a>
      </div>
      <?php  } 
      wp_reset_postdata();
       
      
     ?>
      
    </div>

<?php pageCta(); ?>
  </div>


  <?php get_footer(); ?>