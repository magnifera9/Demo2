<?php
/** Theme Name	: Enigma-Parallax
* Theme Core Functions and Codes
*/
	/**Includes required resources here**/
	require( get_template_directory() . '/core/menu/default_menu_walker.php' );
	require( get_template_directory() . '/core/menu/weblizar_nav_walker.php' );
	require( get_template_directory() . '/core/menu/weblizar_nav_side_walker.php' );//side menu
	//require( get_template_directory() . '/core/admin/admin.php');
	require( get_template_directory() . '/core/scripts/css-js.php' ); //Enquiring Resources here	
	require( get_template_directory() . '/core/comment-function.php' );
	require(dirname(__FILE__).'/customizer.php');
	require(get_template_directory() . '/class-tgm-plugin-activation.php');
	require get_template_directory() . '/core/custom-header.php';
	//Sane Defaults
	function enigma_parallax_default_settings()
{
	$ImageUrl = get_template_directory_uri() ."/images/1.jpg";
	$ImageUrl2 = get_template_directory_uri() ."/images/2.jpg";
	$ImageUrl3 = get_template_directory_uri() ."/images/3.jpg";
	$ImageUrl4 = get_template_directory_uri() ."/images/portfolio1.png";
	$ImageUrl5 = get_template_directory_uri() ."/images/portfolio2.png";
	$ImageUrl6 = get_template_directory_uri() ."/images/portfolio3.png";
	$ImageUrl7 = get_template_directory_uri() ."/images/portfolio4.png";
	$ImageUrl8 = get_template_directory_uri() ."/images/portfolio5.png";
	$ImageUrl9 = get_template_directory_uri() ."/images/portfolio6.png";
	$client1 = get_template_directory_uri() ."/images/client1.jpg";
	$client2 = get_template_directory_uri() ."/images/client2.jpg";
	$client3 = get_template_directory_uri() ."/images/client3.jpg";
	$client4 = get_template_directory_uri() ."/images/client4.jpg";
	$team1 = get_template_directory_uri() ."/images/team1.jpg";
	$team2 = get_template_directory_uri() ."/images/team2.jpg";
	$team3 = get_template_directory_uri() ."/images/team3.jpg";
	$team4 = get_template_directory_uri() ."/images/team4.jpg";
	$wl_theme_options=array(
			//Logo and Fevicon header
			'title_position'=>'',
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'150',
			'_frontpage' => '1',
			'blog_count'=>'3',		
			'custom_css'=>'',
			'excerpt_blog'=>'55',
			'snoweffect'=>'0',
			'read_more'=>__('Read More', 'enigma-parallax' ),
			'autoplay'=>'1',
			
			'service_home'=>'',
			'show_testimonial'=>'',
			'show_blog'=>'',
			'show_team'=>'',
			'show_contact'=>'',
			
			'slider_image_speed' => '',
			'slide_image_1' => $ImageUrl,
			'slide_title_1' => __('Contrary to popular ', 'enigma-parallax' ),
			'slide_desc_1' => __('Lorem Ipsum is simply dummy text of the printing', 'enigma-parallax' ),
			'slide_btn_text_1' => __('Read More', 'enigma-parallax' ),
			'slide_btn_link_1' => '#',
			'slide_image_2' => $ImageUrl2,
			'slide_title_2' => __('variations of passages', 'enigma-parallax' ),
			'slide_desc_2' => __('Contrary to popular belief, Lorem Ipsum is not simply random text', 'enigma-parallax' ),
			'slide_btn_text_2' => __('Read More', 'enigma-parallax' ),
			'slide_btn_link_2' => '#',
			'slide_image_3' => $ImageUrl3,
			'slide_title_3' => __('Contrary to popular ', 'enigma-parallax' ),
			'slide_desc_3' => __('Aldus PageMaker including versions of Lorem Ipsum, rutrum turpi', 'enigma-parallax' ),
			'slide_btn_text_3' => __('Read More', 'enigma-parallax' ),
			'slide_btn_link_3' => '#',			
			// Footer Call-Out
			'fc_home'=>'1',			
			'fc_title' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'enigma-parallax' ),
			'fc_btn_txt' => __('More Features', 'enigma-parallax' ),
			'fc_btn_link' =>"#",
			//Social media links
			'header_social_media_in_enabled'=>'1',
			'footer_section_social_media_enbled'=>'1',
			'twitter_link' =>"#",
			'fb_link' =>"#",
			'linkedin_link' =>"#",
			'youtube_link' =>"#",
			'instagram' =>"#",
			'gplus' =>"#",
			'vk_link' =>"#",
			'qq_link' =>"#",
			'slider_choise' => '1',
			
			//side menu
			'side' => 'on',

			'email_id' => 'example@mymail.com',
			'phone_no' => '0159753586',
			'footer_customizations' => __(' &#169; 2018 Enigma-Parallax Theme', 'enigma-parallax' ),
			'developed_by_text' => __('Theme Developed By', 'enigma-parallax' ),
			'developed_by_weblizar_text' => __('enigma-parallax Themes', 'enigma-parallax' ),
			'developed_by_link' => 'http://weblizar.com/',
			// service
			'services_home'=>'1',
			'home_service_heading' => __('Our Services', 'enigma-parallax' ),
			'service_1_title'=>__("Idea",'enigma-parallax' ),
			'service_1_icons'=>"fa-google",
			'service_1_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'enigma-parallax' ),
			'service_1_link'=>"#",
			'service_2_title'=>__('Records', 'enigma-parallax' ),
			'service_2_icons'=>"fa-database",
			'service_2_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'enigma-parallax' ),
			'service_2_link'=>"#",
			'service_3_title'=>__("WordPress", 'enigma-parallax' ),
			'service_3_icons'=>"fa-wordpress",
			'service_3_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'enigma-parallax' ),
			'service_3_link'=>"#",

			//product settings:
			'product_title'=>'',

			//Portfolio Settings:
			'portfolio_home'=>'1',
			'port_heading' => __('Recent Works', 'enigma-parallax' ),
			'port_1_img'=> $ImageUrl4,
			'port_1_title'=>__('Bonorum', 'enigma-parallax' ),
			'port_1_link'=>'#',
			'port_2_img'=> $ImageUrl5,			
			'port_2_title'=>__('Content', 'enigma-parallax' ),
			'port_2_link'=>'#',
			'port_3_img'=> $ImageUrl6,
			'port_3_title'=>__('dictionary', 'enigma-parallax' ),
			'port_3_link'=>'#',
			'port_4_img'=> $ImageUrl7,
			'port_4_title'=>__('randomised', 'enigma-parallax' ),
			'port_4_link'=>'#',
			'upload__portfolio_image'=>'',
			//BLOG Settings
			'blog_home' => '1',
			'blog_title'=>__('Latest Blog', 'enigma-parallax' ),
			'upload__blog_image'=>'',
			'blog_speed'=>'2000',
			//team options
			'team_home' => '1',
			'team_title' => __('Our Team','enigma-parallax'),
			'team_name_1' => __('Member 1','enigma-parallax'),
			'team_name_2' => __('Member 2','enigma-parallax'),
			'team_name_3' => __('Member 3','enigma-parallax'),
			'team_name_4' => __('Member 4','enigma-parallax'),
			'team_post_1' => __('Team Member 1','enigma-parallax'),
			'team_post_2' => __('Team Member 2','enigma-parallax'),
			'team_post_3' => __('Team Member 3','enigma-parallax'),
			'team_post_4' => __('Team Member 4','enigma-parallax'),
			'team_fb_1' => '#',
			'team_fb_2' => '#',
			'team_fb_3' => '#',
			'team_fb_4' => '#',
			'team_twitter_1' => '#',
			'team_twitter_2' => '#',
			'team_twitter_3' => '#',
			'team_twitter_4' => '#',
			'team_linkedin_1' =>'#',
			'team_linkedin_2' =>'#',
			'team_linkedin_3' =>'#',
			'team_linkedin_4' =>'#',
			'team_1_img' => $team1,
			'team_2_img' => $team2,
			'team_3_img' => $team3,
			'team_4_img' => $team4,
			'slider_home' =>'1',
			
			/* meta option */
			'meta_single'=>'',
			'meta_single_img'=>'',
			
			/* Font section */
			'font_title' => 'Open Sans',
			'font_description' => 'Open Sans',
			'theme_title' => 'Open Sans',
			'header_menu_link' => 'Open Sans',	
		);
		
		
		return apply_filters( 'enigma_options', $wl_theme_options );
}
	function enigma_parallax_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'enigma_options', array() ), 
        enigma_parallax_default_settings() 
    );    
	}
	
	
		$args = array(
	'flex-width'    => true,
	'width'         => 2000,
	'default-text-color'     => '000000',
	'flex-height'    => true,
	'height'        => 100,
	'default-image' => get_template_directory_uri() . '/images/header-bg.png',
);
add_theme_support( 'custom-header', $args ); 
add_action('wp_enqueue_scripts', 'enigma_parallax_font_family');
function enigma_parallax_font_family()
   {
	 wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Rock+Salt|Neucha|Sans+Serif|Indie+Flower|Shadows+Into+Light|Dancing+Script|Kaushan+Script|Tangerine|Pinyon+Script|Great+Vibes|Bad+Script|Calligraffitti|Homemade+Apple|Allura|Megrim|Nothing+You+Could+Do|Fredericka+the+Great|Rochester|Arizonia|Astloch|Bilbo|Cedarville+Cursive|Clicker+Script|Dawning+of+a+New+Day|Ewert|Felipa|Give+You+Glory|Italianno|Jim+Nightshade|Kristi|La+Belle+Aurore|Meddon|Montez|Mr+Bedfort|Over+the+Rainbow|Princess+Sofia|Reenie+Beanie|Ruthie|Sacramento|Seaweed+Script|Stalemate|Trade+Winds|UnifrakturMaguntia|Waiting+for+the+Sunrise|Yesteryear|Zeyada|Warnes|Verdana|Abril+Fatface|Advent+Pro|Aldrich|Alex+Brush|Amatic+SC|Antic+Slab|Candal');
     
	 wp_enqueue_style ('googleFonts');
     }
		
	/*After Theme Setup*/
	add_action( 'after_setup_theme', 'enigma_parallax_head_setup' ); 	
	function enigma_parallax_head_setup()
	{	
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 550; //px
	
	    //Blog Thumb Image Sizes
		add_image_size('enigma_parallax_home_post_thumb',340,210,true);
		//Blogs thumbs
		add_image_size('enigma_parallax_page_thumb',730,350,true);	
		add_image_size('enigma_parallax_blog_2c_thumb',570,350,true);
		add_theme_support( 'title-tag' );
		
		// Logo
		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
			'flex-height'  => true,
		));
		add_theme_support( 'woocommerce' );
		// Load text domain for translation-ready
		//load_theme_textdomain( 'enigma-parallax', get_template_directory() . '/core/languages' );	
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		
		// theme support 	
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args); 
		add_theme_support( 'automatic-feed-links');
		add_theme_support( 'customize-selective-refresh-widgets' );
		
	}
	

	// Read more tag to formatting in blog page 
	function enigma_parallax_content_more($more)
	{  							
	   return '<div class="blog-post-details-item"><a class="enigma_blog_read_btn" href="'.esc_url(get_permalink()).'"><i class="fa fa-plus-circle"></i>"'.__('Read More', 'enigma-parallax' ).'"</a></div>';
	}   
	add_filter( 'the_content_more_link', 'enigma_parallax_content_more' );
	
	
	// Replaces the excerpt "more" text by a link
	function enigma_parallax_excerpt_more($more) {      
	return '';
	}
	add_filter('excerpt_more', 'enigma_parallax_excerpt_more');
	/*
	* enigma-parallax widget area
	*/
	add_action( 'widgets_init', 'enigma_parallax_widgets_init');
	function enigma_parallax_widgets_init() {
	/*sidebar*/
	register_sidebar( array(
			'name' => __( 'Sidebar', 'enigma-parallax' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'enigma-parallax' ),
			'before_widget' => '<div class="enigma_sidebar_widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_sidebar_widget_title"><h2>',
			'after_title' => '</h2></div>'
		) );

	register_sidebar( array(
			'name' => __( 'Footer Widget Area', 'enigma-parallax' ),
			'id' => 'footer-widget-area',
			'description' => __( 'footer widget area', 'enigma-parallax' ),
			'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column">',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_footer_widget_title">',
			'after_title' => '<div class="enigma-footer-separator"></div></div>',
		) ); 
	}
	
	/* Breadcrumbs  */
	function enigma_parallax_breadcrumbs() {
    $delimiter = '';
    $home = __('Home', 'enigma-parallax' ); // text for the 'Home' link
    $before = '<li>'; // tag before the current crumb
    $after = '</li>'; // tag after the current crumb
    echo '<ul class="breadcrumb">';
    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . esc_url($homeLink). '">' . $home . '</a></li>' . $delimiter . ' ';
    if (is_category()) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0)
            echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
        echo $before . ' _e("Archive by category","enigma-parallax") "' . single_cat_title('', false) . '"' . $after;
    } elseif (is_day()) {
        echo '<li><a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo '<li><a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
        echo '<li><a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
        echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
        if (get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<li><a href="' . esc_url($homeLink . '/' . $slug['slug']) . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } else {
            $cat = get_the_category();
            $cat = $cat[0];
            echo $before . get_the_title() . $after;
        }
		
    } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        echo '<li><a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_page() && !$post->post_parent) {
        echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . esc_url(get_permalink($page->ID)) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
            echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_search()) {
        echo $before . _e("Search results for","enigma-parallax")  . get_search_query() . '"' . $after;

    } elseif (is_tag()) {        
		echo $before . _e('Tag','enigma-parallax') . single_tag_title('', false) . $after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . _e("Articles posted by","enigma-parallax") . $userdata->display_name . $after;
    } elseif (is_404()) {
        echo $before . _e("Error 404","enigma-parallax") . $after;
    }
    
    echo '</ul>';
	}
	
	
	//PAGINATION
		function enigma_parallax_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='enigma_blog_pagination'><div class='enigma_blog_pagi'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link(1))."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a href='".esc_url(get_pagenum_link($i))."'>".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link($paged + 1))."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link($pages))."'>&raquo;</a>";
         echo "</div></div>";
     }
}
	/*===================================================================================
	* Add Author Links
	* =================================================================================*/
	function enigma_parallax_author_profile( $contactmethods ) {	
	
	$contactmethods['youtube_profile'] = __('Youtube Profile URL','enigma-parallax');	
	$contactmethods['twitter_profile'] = __('Twitter Profile URL','enigma-parallax');
	$contactmethods['facebook_profile'] = __('Facebook Profile URL','enigma-parallax');
	$contactmethods['linkedin_profile'] = __('Linkedin Profile URL','enigma-parallax');
	
	return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'enigma_parallax_author_profile', 10, 1);
	/*===================================================================================
	* Add Class Gravtar
	* =================================================================================*/
	add_filter('get_avatar','enigma_parallax_gravatar_class');

	function enigma_parallax_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='author_detail_img", $class);
    return $class;
	}	
	/****--- Navigation for Author, Category , Tag , Archive ---***/
	function enigma_parallax_navigation() { ?>
	<div class="enigma_blog_pagination">
	<div class="enigma_blog_pagi">
	<?php posts_nav_link(); ?>
	</div>
	</div>
	<?php }

	/****--- Navigation for Single ---***/
	function enigma_parallax_navigation_posts() { ?>
	<div class="navigation_en">
	<nav id="wblizar_nav"> 
	<span class="nav-previous">
	<?php previous_post_link('&laquo; %link'); ?>
	</span>
	<span class="nav-next">
	<?php next_post_link('%link &raquo;'); ?>
	</span> 
	</nav>
	</div>	
<?php 
	}
if (is_admin()) {
	require_once('core/admin/admin-themes.php');
}
add_action('tgmpa_register','enigma_parallax_plugin_recommend');
function enigma_parallax_plugin_recommend(){
	$plugins = array(
	array(
            'name'      => 'Facebook By Weblizar',
            'slug'      => 'facebook-by-weblizar',
            'required'  => false,
        ),
	array(
            'name'      => 'Ultimate Responsive Image Slider',
            'slug'      => 'Ultimate Responsive Image Slider',
            'required'  => false,
        ),
	array(
            'name'      => 'Admin Custom Login',
            'slug'      => 'admin-custom-login',
            'required'  => false,
        ),
	);
    tgmpa( $plugins );
}	
/*===================================================================================
	* DISPLAY LOCATION
	* =================================================================================*/
function register_my_menus() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'enigma-parallax' ) );
  register_nav_menus(
    array(
      'SIDEER' => esc_attr( 'SIDE MENU' ),
      /*'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )*/
    )
  );
}
add_action( 'init', 'register_my_menus' );


function enigma_parallax_custom_admin_notice() {
	wp_register_style( 'custom_admin_css', get_template_directory_uri() . '/core/admin/admin-rating.css');
    wp_enqueue_style( 'custom_admin_css' );
	$wl_th_info = wp_get_theme(); 
	$currentversion = str_replace('.','',(esc_html( $wl_th_info->get('Version') )));
	$isitdismissed = 'enigma_parallax_notice_dismissed'.$currentversion;
	if ( !get_user_meta( get_current_user_id() , $isitdismissed ) ) { ?>
	<div class="notice-box notice-success is-dismissible flat_responsive_notice" data-dismissible="disable-done-notice-forever">
		<div>
			<p>	
			<?php _e('Thank you for using the free version of ','enigma-parallax'); ?>
			<?php echo esc_html( $wl_th_info->get('Name') );?> - 
			<?php echo esc_html( $wl_th_info->get('Version') );
			 ?>
			<?php _e('Please give your reviews and ratings on ','enigma-parallax'); echo $wl_th_info->get('Name'); _e(' theme. Your ratings will help us to improve our themes.', 'enigma-parallax'); ?>
			<script type="text/javascript">alert(<?php echo $isitdismissed?>);</script>
			<?php if($wl_th_info->get('Name')=="enigma-parallax") { ?>
			<a class="rateme" href="<?php echo esc_url('https://wordpress.org/support/theme/enigma-parallax/reviews/?filter=5');  ?>" target="_blank" aria-label="Dismiss the welcome panel"> <?php } else { ?>
			<a class="rateme" href="<?php echo esc_url('https://wordpress.org/support/theme/parallaxis/reviews/?filter=5');  ?>" target="_blank" aria-label="Dismiss the welcome panel"> <?php } ?>
				<strong><?php _e('Rate Us here','enigma-parallax');?></strong>
			</a>
			<a class="dismiss" href="?-notice-dismissed<?php echo $currentversion;?>"><strong>Dismiss</strong></a>
			</p>
		</div>
		
	</div>
	
<?php
	}
 }
add_action('admin_notices', 'enigma_parallax_custom_admin_notice');

function enigma_parallax_notice_dismissed() {
	$wl_th_info = wp_get_theme(); 
	$currentversion = str_replace('.','',(esc_html( $wl_th_info->get('Version') )));
	$dismissurl = '-notice-dismissed'.$currentversion;
	$isitdismissed = 'enigma_parallax_notice_dismissed'.$currentversion;
    $user_id = get_current_user_id();
    if ( isset( $_GET[$dismissurl] ) )
        add_user_meta( $user_id, $isitdismissed, 'true', true );
}
add_action( 'admin_init', 'enigma_parallax_notice_dismissed' );

$theme_options = enigma_parallax_get_options();
if($theme_options['snoweffect']!=''){
	function snow_script() {
	wp_enqueue_script('snow', get_template_directory_uri() .'/js/snowstorm.js');
	}
	add_action( 'wp_enqueue_scripts', 'snow_script' );
}
?>