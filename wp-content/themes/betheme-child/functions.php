<?php
/**
 * Betheme Child Theme
 *
 * @package Betheme Child Theme
 * @author Muffin group
 * @link https://muffingroup.com
 */

/**
 * Theme constants
 * Please do NOT change this
 */

define('CHILD_THEME_URI', get_stylesheet_directory_uri());

/**
 * Child Theme constants
 * You can change below constants
 */

// white label

define('WHITE_LABEL', false);

// static CSS is placed in Child Theme directory

define('STATIC_IN_CHILD', false);

/**
 * Enqueue Styles
 */

function mfnch_enqueue_styles()
{
	// enqueue the parent stylesheet
	// however we do not need this if it is empty

	// wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );

	// enqueue the parent rtl stylesheet

	if (is_rtl()) {
		wp_enqueue_style('mfn-rtl', get_template_directory_uri() . '/rtl.css');
	}

	// enqueue the child stylesheet

	wp_dequeue_style('style');
	wp_enqueue_style('style', CHILD_THEME_URI .'/style.css');
}
add_action('wp_enqueue_scripts', 'mfnch_enqueue_styles', 101);

/**
 * Load Textdomain
 */
 
function mfnch_textdomain()
{
	load_child_theme_textdomain('betheme', get_stylesheet_directory() . '/languages');
	load_child_theme_textdomain('mfn-opts', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'mfnch_textdomain');

function my_assets() {
    wp_enqueue_script( 'theme-style', get_stylesheet_uri(), array( 'jscookie' ) );
	wp_enqueue_script( 'jscookie', 'https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js' );
}

add_action( 'wp_enqueue_scripts', 'my_assets', 1 );

// ADD SLICK SLIDER

function slickSlider() {
	wp_enqueue_style( 'slick-slider-theme', get_stylesheet_uri(), array( 'slick' ) );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'slick-slider', get_stylesheet_uri(), array( 'slick' ) );
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );

	wp_register_script( 'slick-slider', get_stylesheet_directory_uri() . '/slick/slick.js', array( 'jquery' ) );
	wp_enqueue_script( 'slick-slider' );
}

add_action( 'wp_enqueue_scripts', 'slickSlider' );

function exclude_category( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
		  $query->set( 'cat', 'news' );
		  }
	}
  add_action( 'pre_get_posts', 'exclude_category' );

// Custom News Loop
function CustomNewsLoop() {

	$args = array( 
		'category_name' => 'news', 
		'post_type' => 'post', 
		'posts_per_page' => -1 
	);
	$loop = new WP_Query( $args );

  //$date = the_field('news_item_date');
	if ( $loop->have_posts() ) {
		?>
            <style media="screen">
            .news-wrap {
                padding: 40px 0;
                }
            .entry-content.news-item {
                background: white;
                padding: 20px;
            }
            a.read-more-link {
                font-family: 'Cairo', sans-serif;
                font-size: 1.5em;
                text-decoration: none;
                font-weight: 600;
            }
            .news-item h2 {
                font-weight: 500;
            }
            </style>
			<div class="multiple-items news-wrap">
					<?php
					while ( $loop->have_posts() ) {
						// DISABLE AUTOMATIC P TAGS ON THE content
						//remove_filter('the_content', 'wpautop');
						 $loop->the_post();

						 ?>

					 <div class="entry-content news-item">
                         
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 
						 <h4><?php echo get_the_date(); ?></h4>
            <p class="gridly-excerpt">
                <?php  
                             if(the_excerpt()) {
                                 echo get_the_excerpt(); 
                             } 
                             
                ?></p>
            <div class="read-more">
                <a class="read-more-button" title="Read More" href="<?php the_permalink() ?>">Read More</a>
            </div>
                         
                         
					</div>

						<?php
					}
			?>

			</div>

<?php
wp_reset_postdata();
} else {
	echo "no posts";
}

}
add_shortcode('customnewsloop', 'CustomNewsLoop');