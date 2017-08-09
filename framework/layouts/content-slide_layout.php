<?php
/**
 * @package Plum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-sm-6 grid slide'); ?>>

    <div class="featured-thumb col-md-12">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('plum-pop-thumb'); ?></a>
        <?php else: ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
        <?php endif; ?>
    </div><!--.featured-thumb-->

    <div class="out-thumb col-md-12">
        <header class="entry-header">
            <h1 class="entry-title title-font"><a class="hvr-underline-reveal" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <div class="postedon"><div class="date"><?php echo get_the_date( 'D, M j' ); ?> </div><div class="author"><?php the_author(); ?></div></div>
            <div class="clearfix"></div>
            <span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,100).(get_the_excerpt() ? "..." : "" ); ?></span>
            <span class="readmore"><a class="hvr-underline-from-center" href="<?php the_permalink() ?>"><?php _e('Read More','plum'); ?></a></span>
        </header><!-- .entry-header -->
    </div><!--.out-thumb-->

</article><!-- #post-## -->