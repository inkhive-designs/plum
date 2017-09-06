<?php
function plum_customize_register_static_page($wp_customize) {
    //Static Page
    $wp_customize->add_section('plum_static_page_section',
        array(
            'title' => __('Static Page', 'plum'),
            'priority' => 100,
        )
    );

    //Page Title Enable/Disable
    $wp_customize->add_setting('plum_contact_page_title',
        array(
            'sanitize_callback' => 'plum_sanitize_checkbox'
        ));
    $wp_customize->add_control('plum_contact_page_title',
        array(
            'setting' => 'plum_contact_page_title',
            'section' => 'plum_static_page_section',
            'label' => __('Disable Page Title', 'plum'),
            'description' => __('Default: Enabled. Check to Disable Page Title.', 'plum'),
            'type' => 'checkbox'
        )
    );

    //From Shortcode
    $wp_customize->add_setting('plum_form_shortcode_set',
        array(
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control('plum_form_shortcode_set',
        array(
            'setting' => 'plum_form_shortcode_set',
            'section' => 'plum_static_page_section',
            'label' => __('Shortccode', 'plum'),
            'description' => __('Paste form shortcode here to display form.', 'plum'),
            'type' => 'textarea',
        )
    );

    //Contact Us Details
    $wp_customize->add_setting('plum_select_contact_page',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control('plum_select_contact_page',
        array(
            'setting' => 'plum_select_contact_page',
            'section' => 'plum_static_page_section',
            'label' => __('Contact Page', 'plum'),
            'description' => __('Select a Page to display Address Details', 'plum'),
            'type' => 'dropdown-pages',
        )
    );

    //Page Text
    $wp_customize->add_setting('plum_static_selectpage',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control('plum_static_selectpage',
        array(
            'setting' => 'plum_static_selectpage',
            'section' => 'plum_static_page_section',
            'label' => __('Detail Box', 'plum'),
            'description' => __('Select a Page to display Detail Box', 'plum'),
            'type' => 'dropdown-pages',
        )
    );

    //Page Button Text
    $wp_customize->add_setting('plum_static_button',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('plum_static_button',
        array(
            'setting' => 'plum_static_button',
            'section' => 'plum_static_page_section',
            'label' => __('Button Name', 'plum'),
            'type' => 'text',
        )
    );


    //Map Image
    $wp_customize->add_setting('plum_map_set',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'plum_map_set',
            array (
                'setting' => 'plum_map_set',
                'section' => 'plum_static_page_section',
                'label' => __('Map Location Image', 'plum'),
                'description' => __('Upload an image to display location in MAP. Image should be 788 X 414', 'plum'),
            )
        )
    );

    //Button Text
    $wp_customize->add_setting('plum_button_text',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('plum_button_text',
        array(
            'setting' => 'plum_button_text',
            'section' => 'plum_static_page_section',
            'label' => __('Button ', 'plum'),
            'description' => __('Enter button name', 'plum'),
            'type' => 'text',
        )
    );

    //Button Url
    $wp_customize->add_setting('plum_button_url',
        array(
            'sanitize_callback' => 'esc_url'
        )
    );

    $wp_customize->add_control('plum_button_url',
        array(
            'setting' => 'plum_button_url',
            'section' => 'plum_static_page_section',
            'label' => __('Button URL', 'plum'),
            'description' => __('Enter button URL with: http://', 'plum'),
            'type' => 'url',
        )
    );
}
add_action('customize_register', 'plum_customize_register_static_page');