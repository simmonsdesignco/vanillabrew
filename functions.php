<?php
/**
 * VanillaBrew functions and definitions
 *
 * @package VanillaBrew
 * @subpackage VanillaBrew
 * @since VanillaBrew 1.0
 */

remove_filter('the_content', 'wpautop');

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
    array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'post'
        )
    );
}

//Stop wordpress from redirecting
remove_filter('template_redirect', 'redirect_canonical');


// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary'   => __( 'Top primary menu', 'vanillabrew' ),
    'secondary' => __( 'Secondary menu in left sidebar', 'vanillabrew' ),
) );





/**
*
* Shortcodes
*
*/
// HELPER FUNCTIONS
function normalize_attributes($atts) {
    if (is_array($atts)) {
        foreach ($atts as $key => $value) {
            if (is_int($key)) {
                $atts[$value] = true;
                unset($atts[$key]);
            }
        }
    } else {
    }
    return $atts;
}
// END HELPER FUNCTIONS
function sdc_headline($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
    		'full-width' => false,
    		'class' => '',
    		'parallax' => false
        ), $atts);
    $buildReturn = '<section class="headline';
    if ($atts['full-width']) {
    	$buildReturn .= ' full-width';
    }
    if ($atts['parallax']) {
        $buildReturn .= ' with-parallax';
    }
    if ($atts['class'] != '') {
    	$buildReturn .= " ".$atts['class'];
    }
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap"><h1>';
    return $buildReturn.do_shortcode($content).'</h1></div></div></section>';
}
function sdc_headline_small($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => '',
            'parallax' => false
        ), $atts);
    $buildReturn = '<section class="headline-small';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    if ($atts['parallax']) {
        $buildReturn .= ' with-parallax';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    return $buildReturn.do_shortcode($content).'</div></div></section>';
}
function sdc_icon($atts, $content = null) {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => ''
        ), $atts);
    $buildReturn = '<i class="fa fa-'.$atts['class'].'"></i>';
    return $buildReturn;
}
function sdc_one($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    if ($atts['full-width']) {
        $buildReturn .= '<section class="one-full-width '.$atts['class'].'">';
    }
    $buildReturn .= '<div class="wrap">';
    $closing .= '</div>';
    if ($atts['full-width']) { $closing .= '</section>'; }
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_halves($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    if ($atts['full-width']) {
        $buildReturn .= '<section class="halves-full-width '.$atts['class'].'">';
    }
    $buildReturn .= '<div class="wrap">';
    $closing .= '</div>';
    if ($atts['full-width']) { $closing .= '</section>'; }
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_thirds($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    if ($atts['full-width']) {
        $buildReturn .= '<section class="thirds-full-width '.$atts['class'].'">';
    }
    $buildReturn .= '<div class="wrap">';
    $closing .= '</div>';
    if ($atts['full-width']) { $closing .= '</section>'; }
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_fourths($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    if ($atts['full-width']) {
        $buildReturn .= '<section class="fourths-full-width '.$atts['class'].'">';
    }
    $buildReturn .= '<div class="wrap">';
    $closing .= '</div>';
    if ($atts['full-width']) { $closing .= '</section>'; }
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_fifths($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    if ($atts['full-width']) {
        $buildReturn .= '<section class="fifths-full-width '.$atts['class'].'">';
    }
    $buildReturn .= '<div class="wrap">';
    $closing .= '</div>';
    if ($atts['full-width']) { $closing .= '</section>'; }
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_sixths($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    if ($atts['full-width']) {
        $buildReturn .= '<section class="sixths-full-width '.$atts['class'].'">';
    }
    $buildReturn .= '<div class="wrap">';
    $closing .= '</div>';
    if ($atts['full-width']) { $closing .= '</section>'; }
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_section($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => ''
        ), $atts);
    $buildReturn = '<div class="section '.$atts['class'].'">';
    $closing .= '</div>';
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_slider($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    $buildReturn = '<section class="slider';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"><div id="next-slide"></div>';
    $closing .= '</section>';
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_slide($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => '',
            'order' => ''
        ), $atts);
    $buildReturn = '<div class="slide';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= ' slide-'.$atts['order'].'"><div class="wrap"><div class="inner-wrap">';
    $closing .= '</div></div></div>';
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_page_headline($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => '',
            'parallax' => false
        ), $atts);
    $buildReturn = '<section class="page-headline';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    if ($atts['parallax']) {
        $buildReturn .= ' with-parallax';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    return $buildReturn.do_shortcode($content).'</div></div></section>';
}
function sdc_content_section($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    $buildReturn = '<section class="content-section';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    return $buildReturn.do_shortcode($content).'</div></div></section>';
}
function sdc_content_block($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => '',
            'position' => ''
        ), $atts);
    $buildReturn = '<div class="content-block';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    if ($atts['position'] == 'left') {
        $buildReturn .= " content-block-left";
    }
    if ($atts['position'] == 'middle') {
        $buildReturn .= " content-block-middle";
    }
    if ($atts['position'] == 'right') {
        $buildReturn .= " content-block-right";
    }
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    return $buildReturn.do_shortcode($content).'</div></div></div>';
}
function sdc_side_bar($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => '',
            'position' => ''
        ), $atts);
    $buildReturn = '<div class="side-bar';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    if ($atts['position'] == 'left') {
        $buildReturn .= " side-bar-left";
    }
    if ($atts['position'] == 'middle-left') {
        $buildReturn .= " side-bar-middle-left";
    }
    if ($atts['position'] == 'middle-right') {
        $buildReturn .= " side-bar-middle-right";
    }
    if ($atts['position'] == 'right') {
        $buildReturn .= " side-bar-right";
    }
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    return $buildReturn.do_shortcode($content).'</div></div></div>';
}
function sdc_divider($atts, $content = null) {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => ''
        ), $atts);
    $buildReturn = '<div class="divider';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"></div>';
    return $buildReturn;
}
function sdc_google_maps($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'full-width' => false,
            'class' => ''
        ), $atts);
    $buildReturn = '<section class="google-maps__wrapper';
    if ($atts['full-width']) {
        $buildReturn .= ' full-width';
    }
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    return $buildReturn.do_shortcode($content).'</div></div></section>';
}
function sdc_img($atts, $content = null) {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'src' => '',
            'full-width' => false,
            'class' => ''
        ), $atts);
    $buildReturn = '<img src="'.get_template_directory_uri().'/images/'.$atts['src'].'" class="section-img';
    $buildReturn .= ($atts['full-width'] ? ' full-width' : '');
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    return $buildReturn.do_shortcode($content).'';
}
function sdc_form($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => '',
            'action' => '',
            'id' => ''
        ), $atts);
    $buildReturn = '<form enctype="multipart/form-data" method="post" target="'.$atts['id'].'-target" action="'.get_template_directory_uri().'/php/'.$atts['action'].'.php" id="'.$atts['id'].'" name="'.$atts['id'].'" class="contact-form';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '"><div class="wrap"><div class="inner-wrap">';
    $closing = '</div></div></form><iframe id="'.$atts['id'].'-target" name="'.$atts['id'].'-target" class="form-target" src="#"></iframe>';
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_field($atts, $content = null) {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'type' => '',
            'name' => '',
            'placeholder' => '',
            'label' => '',
            'required' => false,
            'class' => ''
        ), $atts);
    $atts['label'] .= ($atts['required'] ? '<b>*</b>' : '');
    $buildReturn = '<div class="field-wrap';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    $buildReturn .= ($atts['label'] != '' ? '<label for="'.$atts['name'].'">'.$atts['label'].'</label>' : '');
    $buildReturn .= '<input type="'.$atts['type'].'" id="'.$atts['name'].'" name="'.$atts['name'].'" value="" placeholder="'.$atts['placeholder'].'" class="input-field"';
    $buildReturn .= ($atts['required'] ? ' required ' : '');
    $buildReturn .= '>';
    return $buildReturn.do_shortcode($content).'</div>';
}
function sdc_message($atts, $content = null) {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'name' => '',
            'placeholder' => '',
            'label' => '',
            'required' => false,
            'class' => ''
        ), $atts);
    $atts['label'] .= ($atts['required'] ? '<b>*</b>' : '');
    $buildReturn = '<div class="field-wrap';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    $buildReturn .= ($atts['label'] != '' ? '<label for="'.$atts['name'].'">'.$atts['label'].'</label>' : '');
    $buildReturn .= '<textarea name="'.$atts['name'].'" id="'.$atts['name'].'" value="" placeholder="'.$atts['placeholder'].'" class="textarea-field"';
    $buildReturn .= ($atts['required'] ? ' required ' : '');
    $buildReturn .= '>';
    return $buildReturn.do_shortcode($content).'</textarea></div>';
}
function sdc_submit($atts, $content = null) {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'label' => '',
            'class' => ''
        ), $atts);
    $buildReturn = '<div class="field-wrap';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    $buildReturn .= '<button type="submit" id="submit-button">'.$atts['label'].'</button>';
    return $buildReturn.do_shortcode($content).'</div>';
}
function sdc_button($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'link' => '',
            'class' => ''
        ), $atts);
    $buildReturn = '<div class="button-wrap';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    $buildReturn .= '<a href="'.$atts['link'].'"><span>';
    return $buildReturn.do_shortcode($content).'</span></a></div>';
}
function sdc_list($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => ''
        ), $atts);
    $buildReturn = '<div class="ul-wrap';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    $buildReturn .= '<ul class="list">';
    $closing = '</ul></div>';
    return $buildReturn.do_shortcode($content).$closing;
}
function sdc_list_item($atts, $content = '') {
    $atts = normalize_attributes($atts);
    $atts = shortcode_atts(array(
            'class' => ''
        ), $atts);
    $buildReturn = '<li class="list-item';
    $buildReturn .= ($atts['class'] != '' ? ' '.$atts['class'] : '');
    $buildReturn .= '">';
    $closing = '</li>';
    return $buildReturn.do_shortcode($content).$closing;
}





add_shortcode('icon', 'sdc_icon');
add_shortcode('headline', 'sdc_headline');
add_shortcode('headline-small', 'sdc_headline_small');
add_shortcode('one-row', 'sdc_one');
add_shortcode('halves-row', 'sdc_halves');
add_shortcode('thirds-row', 'sdc_thirds');
add_shortcode('fourths-row', 'sdc_fourths');
add_shortcode('fifths-row', 'sdc_fifths');
add_shortcode('sixths-row', 'sdc_sixths');
add_shortcode('section', 'sdc_section');
add_shortcode('slider', 'sdc_slider');
add_shortcode('slide', 'sdc_slide');
add_shortcode('page-headline', 'sdc_page_headline');
add_shortcode('content-block', 'sdc_content_block');
add_shortcode('content-section', 'sdc_content_section');
add_shortcode('side-bar', 'sdc_side_bar');
add_shortcode('divider', 'sdc_divider');
add_shortcode('img', 'sdc_img');
add_shortcode('google-maps', 'sdc_google_maps');
add_shortcode('form', 'sdc_form');
add_shortcode('field', 'sdc_field');
add_shortcode('message', 'sdc_message');
add_shortcode('submit', 'sdc_submit');
add_shortcode('button', 'sdc_button');
add_shortcode('list', 'sdc_list');
add_shortcode('list-item', 'sdc_list_item');



// Widget Shortcode Support
add_filter( 'widget_text', 'do_shortcode' );




/**
 * Register the VanillaBrew widget areas.
 *
 * @since VanillaBrew 1.0
 *
 * @return void
 */
function vanillabrew_widgets_init() {
    require get_template_directory() . '/inc/widgets.php';
    register_widget( 'Twenty_Fourteen_Ephemera_Widget' );

    register_sidebar( array(
        'name'          => __( 'Footer Widget', 'twentyfourteen' ),
        'id'            => 'footer',
        'description'   => __( 'The footer of the website', 'twentyfourteen' ),
        'before_widget' => '<div id="%1$s" class="footer-wrap %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="footer-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'vanillabrew_widgets_init' );



// Widget example code
//     register_sidebar( array(
//         'name'          => __( 'Content Sidebar', 'twentyfourteen' ),
//         'id'            => 'sidebar-2',
//         'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),
//         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</aside>',
//         'before_title'  => '<h1 class="widget-title">',
//         'after_title'   => '</h1>',
//     ) );
