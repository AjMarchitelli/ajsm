<?php
// Add support for Custom Logo in the WordPress Customizer
function my_painting_theme_customize_register( $wp_customize ) {
    // No need to manually add the 'site_logo' setting anymore, as WordPress handles it
}
add_action( 'customize_register', 'my_painting_theme_customize_register' );

function my_painting_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );  // Enable support for custom logos in the theme
    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ));
}
add_action( 'after_setup_theme', 'my_painting_theme_setup' );

function my_painting_theme_scripts() {
    $script_path = get_template_directory_uri() . '/assets/js/main.js';
    echo '<!-- Debug: ' . $script_path . ' -->';

    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), null);
    wp_enqueue_script(
        'ajsm-main-js',
        $script_path,
        array(), 
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_painting_theme_scripts');


function my_painting_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_painting_widgets_init');


function enqueue_ajax_form_script() {
    wp_enqueue_script('ajax-form', get_template_directory_uri() . '/js/ajax-form.js', array('jquery'), null, true);
    wp_localize_script('ajax-form', 'ajax_form_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_form_script');



function handle_contact_form_submission_ajax() {
    if (isset($_POST['name'], $_POST['email'], $_POST['phone'])) {
        // Sanitize and validate input fields
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $service = sanitize_text_field($_POST['service']);
        $details = sanitize_textarea_field($_POST['details']);
        
        // Validate required fields
        if (empty($name) || empty($email) || empty($phone)) {
            echo json_encode(array('status' => 'error', 'message' => 'Please fill out all required fields.'));
            wp_die(); // This is necessary to terminate the AJAX request
        }

        // Prepare the email content
        $to = 'ajsmpaint@gmail.com';
        $subject = 'New Estimate Request';
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nDetails: $details";
        $headers = 'From: ' . $email . "\r\n" . 
                   'Reply-To: ' . $email . "\r\n" . 
                   'Content-Type: text/plain; charset=UTF-8' . "\r\n";

        // Send email
        if (wp_mail($to, $subject, $message, $headers)) {
            echo json_encode(array('status' => 'success', 'message' => 'Thank you for your submission! We will contact you shortly.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'There was an error submitting the form. Please try again later.'));
        }
    }
    wp_die(); // Terminate the AJAX request
}
add_action('wp_ajax_contact_form_submission', 'handle_contact_form_submission_ajax');
add_action('wp_ajax_nopriv_contact_form_submission', 'handle_contact_form_submission_ajax');


// Display success or error message
function display_form_message() {
    if ($error_message = get_transient('contact_form_error')) {
        echo '<div class="error-message">' . esc_html($error_message) . '</div>';
        delete_transient('contact_form_error');
    }
    
    if ($success_message = get_transient('contact_form_success')) {
        echo '<div class="success-message">' . esc_html($success_message) . '</div>';
        delete_transient('contact_form_success');
    }
}
add_action('wp_footer', 'display_form_message');



function enqueue_main_js() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
    wp_localize_script('main-js', 'ajax_form_obj', array(
        'ajax_url' => admin_url('admin-ajax.php') // Ensure the correct AJAX URL is passed
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_main_js');
