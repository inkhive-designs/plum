<div class="container">
    <?php
    for($x = 1; $x<=4; $x++ ) :
        if( get_theme_mod('plum_testimonial_image_'.$x) && get_theme_mod('plum_testimonial_name_'.$x) && get_theme_mod('plum_testimonial_designation_'.$x)!= '' ) : ?>
            <div class="col-md-3 col-sm-6 sm-testimonial">
                <div class="testimonial">
                    <img src="<?php echo esc_attr( get_theme_mod('plum_testimonial_image_'.$x)); ?>" />
                    <h3><?php echo esc_html( get_theme_mod('plum_testimonial_name_'.$x)); ?></h3>
                    <h4><?php echo esc_html ( get_theme_mod('plum_testimonial_designation_'.$x)); ?></h4>
                    <a href="<?php echo esc_url( get_theme_mod('plum_testimonial_button_url_'.$x));?>"><?php echo esc_html( get_theme_mod('plum_testimonial_button_'.$x)); ?></a>
                </div>
            </div>
        <?php endif; ?>
    <?php endfor; ?>
</div>
