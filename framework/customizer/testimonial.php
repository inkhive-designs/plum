<?php
function plum_customize_register_testimonial($wp_customize) {
    $wp_customize->add_panel('plum_testimonial_panel',
        array(
            'title' => __('Testimonials', 'plum'),
            'priority' => 46,
        )
    );

    for($i = 1; $i<=4; $i++) :

    $wp_customize->add_section('plum_testimonial_section_'.$i,
        array(
            'title' => __('Testimonial_', 'plum').$i,
            'priority' => 0,
            'panel' => 'plum_testimonial_panel',
        )
    );

    $wp_customize->add_setting('plum_testimonial_image_'.$i,
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_control(
            $wp_customize,
            'plum_testimonial_image_'.$i,
            array(
                'section' => 'plum_testimonial_section_'.$i,
                'setting' => 'plum_testimonial_image_'.$i,
                'label' => __('Upload an image ', 'plum').$i,
            )
        )
    );

    $wp_customize->add_setting('plum_testimonial_name_'.$i,
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control('plum_testimonial_name_'.$i,
        array(
            'section' => 'plum_testimonial_section_'.$i,
            'setting' => 'plum_testimonial_name_'.$i,
            'label' => __('Testimonial Name ', 'plum').$i,
            'type' => 'text',
        )
    );

    $wp_customize->add_setting('plum_testimonial_designation_'.$i,
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('plum_testimonial_designation_'.$i, array(
            'section' => 'plum_testimonial_section_'.$i,
            'setting' => 'plum_testimonial_designation_'.$i,
            'label' => __('Enter Designation ', 'plum').$i,
            'type' => 'text',
        )
    );

    $wp_customize->add_setting('plum_testimonial_button_'.$i,
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('plum_testimonial_button_'.$i,
        array(
            'section' => 'plum_testimonial_section_'.$i,
            'setting' => 'plum_testimonial_button_'.$i,
            'label' => __('Enter Button Name ', 'plum').$i,
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('plum_testimonial_button_url_'.$i,
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control('plum_testimonial_button_url_'.$i,
        array(
            'section' => 'plum_testimonial_section_'.$i,
            'setting' => 'plum_testimonial_button_url_'.$i,
            'label' => __('Enter Button URL ', 'plum').$i,
            'description' => __('Enter URL with "http://" ', 'plum'),
            'type' => 'url',
        )
    );

    endfor;

}
add_action('customize_register', 'plum_customize_register_testimonial');