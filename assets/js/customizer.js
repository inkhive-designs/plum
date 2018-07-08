/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	wp.customize( 'plum_page_title', function( value ) {
		value.bind( function ( to ) {
			$( 'body.home.page header.entry-header' ).toggle();
		});
	});
	wp.customize( 'plum_disable_comments', function( value ) {
		value.bind( function( to ) {
			$( '#comments' ).toggle();
		});
	} );
	wp.customize( 'plum_footer_text', function( value ) {
		value.bind( function ( to ) {
			$( '.custom-info').text( to );
		});
	});
	
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '#text-title-desc' ).css({
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute'
				});
				// Add class for different logo styles if title and description are hidden.
				$( 'body' ).addClass( 'title-tagline-hidden' );
			} else {
				
				$( '#text-title-desc' ).css({
					clip: 'auto',
					position: 'relative'
				});
				$( '.site-branding a' ).css({
					color: to
				});
				// Add class for different logo styles if title and description are visible.
				$( 'body' ).removeClass( 'title-tagline-hidden' );
			}
		});
	});
	
	wp.customize( 'plum_header_desccolor', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).css( 'color', to );
		} );
	} );
	
	wp.customize( 'plum_social_icon_style', function( value ) {
		value.bind( function( to ) {
			var	ChangeClass	=	'common ' + to;
			jQuery( '.social-icons a' ).attr( 'class', ChangeClass );
		});
	});
	
	
	wp.customize( 'plum_social_1', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(0)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'plum_social_2', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(1)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'plum_social_3', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(2)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'plum_social_4', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(3)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'plum_social_5', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(4)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'plum_social_6', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(5)' ).attr( 'class', ClassNew );
		});
	});
/*
	var	faClassPrev	=	jQuery('.social-icons').find('a').each(function() {
		alert(jQuery(this).find('i').attr('class'));
	});
*/
/*
	wp.customize( 'plum_social_1', function( value ) {
		value.bind( function( to ) {
			
			alert(faClassPrev);
*/
/*
			var faClassNew	=	'fa-' + to;
			faClassPrev.removeClass('fa-pinterest-p').addClass(faClassNew);
*/
/*
			var faClass	=	'fa-' + to;
			jQuery( '.social-icons a:first-child i' ).removeClass()
*/
/*
		});
	});
*/
} )( jQuery );
