<?php
/**
 * Blog64 Theme Customizer.
 *
 * @package blog64
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blog64_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}

add_action( 'customize_register', 'blog64_customize_register' );


function blog64_customizer_register( $wp_customize ) 
    {
      // Do stuff with $wp_customize, the WP_Customize_Manager object.     

      $wp_customize->add_panel( 'theme_option', array(
        'priority' => 60,
        'title' => __( 'Theme Option', 'blog64' ),
        'description' => __( 'Theme Option for Homepage.', 'blog64' ),
      ));
      


      /**********************************************/
      /*************** HEADER SECTION ***************/
      /**********************************************/

      $wp_customize->add_section('header_section',array(
        'title' => __('Header Section','blog64'),
        'description'   => __( 'Configure Your Headings here', 'blog64' ),
        'panel' => 'theme_option'
      ));


      $wp_customize->add_setting('blog64_header_display',array(
        'sanitize_callback' => 'blog64_sanitize_text',
        'default' => ''
      ));

      $wp_customize->add_control(new WP_Customize_Control($wp_customize,'blog64_header_display',array(
        'label' => __('Show Header Section in Homepage','blog64'),
        'section' => 'header_section',
        'settings' => 'blog64_header_display',
        'type'=> 'checkbox',
        ))
      );

      /* ------ For Heading Section ------ */

      $wp_customize->add_setting(
        'blog64_heading',
          array(
            'sanitize_callback' => 'blog64_sanitize_text',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'blog64_heading',
          array(
          'label' => __( 'Homepage Heading', 'blog64' ),
          'section' => 'header_section',
          'settings' => 'blog64_heading',
          'type' => 'text',
         )
      );

      /* ------ For Sub Heading Section ------ */

      $wp_customize->add_setting(
        'blog64_subheading',
          array(
            'sanitize_callback' => 'blog64_sanitize_text',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'blog64_subheading',
          array(
          'label' => __( 'Homepage Sub Heading', 'blog64' ),
          'section' => 'header_section',
          'settings' => 'blog64_subheading',
          'type' => 'text',
         )
      );

      /* ------ For Action Button Section ------ */

      $wp_customize->add_setting(
        'blog64_button',
            array(
              'sanitize_callback' => 'esc_url_raw',
              'default' => '',
          )
      );

      $wp_customize->add_control(
        'blog64_button',
         array(
          'label' => __( 'Blog Button URL', 'blog64' ),
          'section' => 'header_section',
          'settings' => 'blog64_button',
          'type' => 'text',
         )
      );     

     


      /**********************************************/
      /********** HOMEPAGE BACKGROUND SECTION **********/
      /**********************************************/

      $wp_customize->add_section('homepage_banner',array(
        'title' => __('Homepage Banner Section','blog64'),
        'description' => __('Upload 1920x900px Background Banner Image for Homepage','blog64'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting('blog64_bg_image',array(
      'sanitize_callback' => 'esc_url_raw',
      'default' =>  get_template_directory_uri().'/images/bg.jpg'
      ));
      

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'blog64_bg_image',array(
        'label' => __('Edit Background Banner Image','blog64'),
        'section' => 'homepage_banner',
        'settings' => 'blog64_bg_image'
        )  
      ));
      


      /**********************************************/
      /*************** BLOG LISTINGS SECTION ****************/
      /**********************************************/

      $wp_customize->add_section('blog64_listing_category',array(
        'title' => __('Blog Listing Categories','blog64'),
        'description' => __('Select the Category for Blog Listing Section in Homepage','blog64'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting('blog_category_display',array(
        'sanitize_callback' => 'blog64_sanitize_category',
        'default' => ''
      ));

      $wp_customize->add_control(new blog64_Customize_Dropdown_Taxonomies_Control($wp_customize,'blog_category_display',array(
        'label' => __('Choose category','blog64'),
        'section' => 'blog64_listing_category',
        'settings' => 'blog_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));   




      /**********************************************/
      /*************** FOOTER SECTION ***************/
      /**********************************************/

       $wp_customize->add_section(
        'footer_section',
          array(
            'title' => __('Footer Settings','blog64'),
            'description' => __('This section includes Footer Copyrights and Social Icons Settings.','blog64'),
            'panel' => 'theme_option'
        )
      );


      /**********************************************/
      /*************** COPYRIGHTS SECTION **************/
      /**********************************************/
       
      $wp_customize->add_setting(
        'copyright_textbox',
          array(
            'sanitize_callback' => 'blog64_sanitize_text',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'copyright_textbox',
          array(
          'label' => __('Copyright text','blog64'),
          'section' => 'footer_section',
          'settings' => 'copyright_textbox',
          'type' => 'text',
         )
      );


      /**********************************************/
      /******* SOCIAL ICON HIDE/ DISPLAY SECTION ********/
      /**********************************************/

      $wp_customize->add_setting('blog64_socialicon_display',array(
        'sanitize_callback' => 'blog64_sanitize_text',
        'default' => ''
      ));

      $wp_customize->add_control(new WP_Customize_Control($wp_customize,'blog64_socialicon_display',array(
        'label' => __('Show social icons','blog64'),
        'section' => 'footer_section',
        'settings' => 'blog64_socialicon_display',
        'type'=> 'checkbox',
        ))
      );


      /**********************************************/
      /********** SOCIAL ICON LINKS SECTION ***********/
      /**********************************************/

      $wp_customize->add_setting(
        'facebook_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'facebook_textbox',
          array(
            'label' => __('Facebook','blog64'),
            'section' => 'footer_section',
            'settings' => 'facebook_textbox',
            'type' => 'text',
          )
      );

      $wp_customize->add_setting(
        'twitter_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'twitter_textbox',
         array(
          'label' => __('Twitter','blog64'),
          'section' => 'footer_section',
          'settings' => 'twitter_textbox',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting(
        'googleplus_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'googleplus_textbox',
          array(
          'label' => __('Googleplus','blog64'),
          'section' => 'footer_section',
          'settings' => 'googleplus_textbox',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting(
        'linkedin_textbox',
            array(
              'sanitize_callback' => 'esc_url_raw',
              'default' => '',
          )
      );

      $wp_customize->add_control(
        'linkedin_textbox',
         array(
          'label' => __('Linkedin','blog64'),
          'section' => 'footer_section',
          'settings' => 'linkedin_textbox',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting(
        'pinterest_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
          'default' => '',
          )
      );
      
      $wp_customize->add_control(
        'pinterest_textbox',
          array(
            'label' => __('Pinterest','blog64'),
            'section' => 'footer_section',
            'settings' => 'pinterest_textbox',
            'type' => 'text',
         )
      );

      

      /**********************************************/
      /*************** EXTRA SECTION ***************/
      /**********************************************/

       $wp_customize->add_section(
        'extra_section',
          array(
            'title' => __('Extra Settings','blog64'),
            'description' => __('This section includes Innerpage Settings for Author Info and Post Navigation enable / disable option.','blog64'),
            'panel' => 'theme_option'
        )
      );


      $wp_customize->add_setting('blog64_authorinfo_display',array(
        'sanitize_callback' => 'blog64_sanitize_text',
        'default' => ''
      ));

      $wp_customize->add_control(new WP_Customize_Control($wp_customize,'blog64_authorinfo_display',array(
        'label' => __('Show Author Info in Post','blog64'),
        'section' => 'extra_section',
        'settings' => 'blog64_authorinfo_display',
        'type'=> 'checkbox',
        ))
      );


      $wp_customize->add_setting('blog64_postnavi_display',array(
        'sanitize_callback' => 'blog64_sanitize_text',
        'default' => ''
      ));

      $wp_customize->add_control(new WP_Customize_Control($wp_customize,'blog64_postnavi_display',array(
        'label' => __('Show Post Navigation in Post','blog64'),
        'section' => 'extra_section',
        'settings' => 'blog64_postnavi_display',
        'type'=> 'checkbox',
        ))
      );



      /**********************************************/
      /***** ADJUSTMENT OF SIDEBAR POSITION SECTION *****/
      /**********************************************/
     
      $wp_customize->add_panel( 'layout', array(
        'priority' => 70,
        'title' => __( 'Theme Layout', 'blog64' ),
        'description' => __( '', 'blog64' ),
      ));

      $wp_customize->add_section('sidebar' , array(
        'title' => __('Category Sidebar','blog64'),
        'panel' => 'layout'
      ));

      $wp_customize->add_setting('sidebar_position', array(
        'sanitize_callback' => 'blog64_sanitize_text',
          'default' => ''
        ));

      $wp_customize->add_control('sidebar_position', array(
        'label'      => __('Category Sidebar position', 'blog64'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('No Sidebar','blog64'),
          'left'   => __('Left Sidebar','blog64'),
          'right'  => __('Right Sidebar','blog64'),
        ),
      ));


      /**********************************************/
      /********** SINGLE POST SIDEBAR SECTION ***********/
      /**********************************************/
     

      $wp_customize->add_section('single_post_sidebar' , array(
        'title' => __('Single Post Sidebar','blog64'),
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('single_post_sidebar_position', array(
        'sanitize_callback' => 'blog64_sanitize_text',
          'default' => ''
      ));

      $wp_customize->add_control('single_post_sidebar_position', array(
        'label'      => __('Single Post Sidebar position', 'blog64'),
        'section'    => 'single_post_sidebar',
        'settings'   => 'single_post_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('No Sidebar','blog64'),
          'left'   => __('Left Sidebar','blog64'),
          'right'  => __('Right Sidebar','blog64'),
        ),
      ));


      /**********************************************/
      /********** SINGLE PAGE SIDEBAR SECTION ***********/
      /**********************************************/
     

      $wp_customize->add_section('single_page_sidebar' , array(
        'title' => __('Single Page Sidebar','blog64'),
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('single_page_sidebar_position', array(
        'sanitize_callback' => 'blog64_sanitize_text',
          'default' => ''
      ));

      $wp_customize->add_control('single_page_sidebar_position', array(
        'label'      => __('Single Page Sidebar position', 'blog64'),
        'section'    => 'single_page_sidebar',
        'settings'   => 'single_page_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('No Sidebar','blog64'),
          'left'   => __('Left Sidebar','blog64'),
          'right'  => __('Right Sidebar','blog64'),
        ),
      ));


      /**********************************************/
      /******** SEARCH PAGE SIDEBAR SECTION *********/
      /**********************************************/     

      $wp_customize->add_section('search_page_sidebar' , array(
        'title' => __('Search Page Sidebar','blog64'),
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('search_page_sidebar_position', array(
        'sanitize_callback' => 'blog64_sanitize_text',
          'default' => ''
      ));

      $wp_customize->add_control('search_page_sidebar_position', array(
        'label'      => __('Search Page Sidebar position', 'blog64'),
        'section'    => 'search_page_sidebar',
        'settings'   => 'search_page_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('No Sidebar','blog64'),
          'left'   => __('Left Sidebar','blog64'),
          'right'  => __('Right Sidebar','blog64'),
        ),
      ));



      /**********************************************/
      /******** PAGE NOT FOUND SIDEBAR SECTION *********/
      /**********************************************/     

      $wp_customize->add_section('page_not_found_sidebar' , array(
        'title' => __('Page Not Found Sidebar','blog64'),
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('page_not_found_sidebar_position', array(
        'sanitize_callback' => 'blog64_sanitize_text',
          'default' => ''
      ));

      $wp_customize->add_control('page_not_found_sidebar_position', array(
        'label'      => __('Page Not Found Sidebar position', 'blog64'),
        'section'    => 'page_not_found_sidebar',
        'settings'   => 'page_not_found_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('No Sidebar','blog64'),
          'left'   => __('Left Sidebar','blog64'),
          'right'  => __('Right Sidebar','blog64'),
        ),
      ));      

      
    }

add_action( 'customize_register', 'blog64_customizer_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blog64_customize_preview_js() {
	wp_enqueue_script( 'blog64_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'blog64_customize_preview_js' );

function blog64_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function blog64_sanitize_textarea( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function blog64_sanitize_category($input){
  $output=intval($input);
  return $output;

}