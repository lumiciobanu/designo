<?php
function designo_files() {
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
');
    wp_enqueue_style('style', get_stylesheet_uri());


}

add_action('wp_enqueue_scripts', 'designo_files');


/**
 * Enqueue Design Scripts.
 */
function designo_scripts() {
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');

}
add_action('myscript', 'designo_scripts');

function designo_mm_toggle_scripts() {
    wp_enqueue_script( 'designo-mm-toggle', get_stylesheet_directory_uri() . '/js/mobile-menu-toggle.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'designo_mm_toggle_scripts' );


function designo_custom_menu() {
    register_nav_menu('header-menu', __(' Header Menu' ));
    register_nav_menu ('mobile-menu', __( 'Mobile Menu'));
}

add_action ( 'init', 'designo_custom_menu' );



function designo_features() {
    add_theme_support ('title-tag');
    add_theme_support ('post-thumbnails');
    add_theme_support ('custom-logo');
}

add_action ('after_setup_theme', 'designo_features');

//Add Excerpt to Page
add_post_type_support( 'page', 'excerpt' );

//Register sidebar
function designo_widgets_init() {
    register_sidebar(array (
        'name' => __('Footer One', 'designo'),
        'description' => "This is a Footer One Widget Description", 
        'id' => ("footer-one"),
        'before_widget' => '</div class="footer__bottom">',
        'after_widget' => '<div id="footer-two" class="footer__column">',
        'before_title' => '<div id="footer-one" class="footer__column">',
        'after_title' => '<p class="footer__text">3886 Wellington Street</p>'
    ));
    register_sidebar(array (
        'name' => __('Footer Two', 'designo'),
        'description' => "This is a Footer Two Widget Description", 
        'id' => ("footer-two"),
        'before_widget' => '</div class="footer__bottom">',
        'after_widget' => '<div id="footer-three" class="footer__column">',
        'before_title' => '<div id="footer-two" class="footer__column">',
        'after_title' => '<p class="footer__text">M : contact@designo.co</p>'
    ));
    register_sidebar(array (
        'name' => __('Footer Three', 'designo'),
        'description' => "This is a Footer Three Widget Description", 
        'id' => ("footer-three"),
        'before_widget' => '</div class="footer__bottom">',
        'after_widget' => '<div class="footer__bottom">',
        'before_title' => '<div id="footer-two" class="footer__column">',
        'after_title' => '<p class="footer__text">M : contact@designo.co</p>'
    ));

  
}

add_action ('init', 'designo_widgets_init');

function designo_post_types() {
    register_post_type('portfolio', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'portfolio'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Portfolio',
            'add_new_item' => 'Add New Portfolio',
            'edit_item' => 'Edit Portfolio',
            'all_items' => 'All Portfolio',
            'singular_name' => 'Portfolio'
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomies' => array ('category')

    ) );
}


add_action('init', 'designo_post_types');


function add_taxonomy_page() {
    $labels = array(
        'name' => 'Categories',
        'singular_name' => 'Category',
        'add_new' => 'Add Category',
        'add_new_item' => 'Add New Category',
        'all_items' => 'All Categories',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'update_item' => 'Update Category',
        'search_items' => 'Search Categories',
        'not_found' => 'No record found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item',
        'menu_name' => 'Categories'
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'page_category'),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        );
    register_taxonomy('page_category', array('page'), $args);
}
add_action('init', 'add_taxonomy_page', 0);


function pageCta() { 
?>
<div class="cta">
      <div class="cta__text">
        <h2 class="cta__title">Let’s talk about<br> your project</h2>
        <p class="cta__text">Ready to take it to the next level? Contact us today and find out how<br> our expertise can
          help your business grow.</p>
      </div>
      <button class="hero__btn">Get in touch</button>
    </div>
    <?php }

function headerPortfolio() {
    ?>

<div class="header-portfolio">
        <h1 class="header-portfolio__title title-portfolio"><?php the_title(); ?></h1>
        <p class="header-portfolio__text"><?php echo the_excerpt(); ?></p>

</div>
<?php }