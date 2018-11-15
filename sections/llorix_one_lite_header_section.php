<?php
/**
 * Header section template file
 *
 * PHP version 5.6
 *
 * @category    Sections
 * @package     Llorix_One_Lite
 * @author      Themeisle <cristian@themeisle.com>
 * @license     GNU General Public License v2 or later
 * @link        http://themeisle.com
 */

$llorix_one_lite_child_slider_show  = get_theme_mod( 'llorix_one_lite_child_slider_show' );
    
if ( empty( $llorix_one_lite_child_slider_show ) || ! $llorix_one_lite_child_slider_show ) {

/* Display the big title section */

	$llorix_one_lite_header_logo = get_theme_mod( 'llorix_one_lite_header_logo', apply_filters( 'llorix_one_lite_header_logo_filter', llorix_one_lite_get_file( '/images/logo-2.png' ) ) );
	$llorix_one_lite_header_logo = apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_header_logo, 'Big title section' );

	$llorix_one_lite_header_title = get_theme_mod( 'llorix_one_lite_header_title', apply_filters( 'llorix_one_lite_header_title_filter', esc_html__( 'Simple, Reliable and Awesome.', 'llorix-one-lite' ) ) );
	$llorix_one_lite_header_title = apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_header_title, 'Big title section' );

	if ( current_user_can( 'edit_theme_options' ) ) {
	/* translators: %1$s is the customize link %2$s the customize link label */
	$llorix_one_lite_header_subtitle = get_theme_mod( 'llorix_one_lite_header_subtitle', sprintf( __( 'Change this text in %s', 'llorix-one-lite' ), sprintf( '<a href="%1$s" class="llorix-one-lite-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=llorix_one_lite_header_subtitle' ) ), __( 'Big title section', 'llorix-one-lite' ) ) ) );
	} else {
	$llorix_one_lite_header_subtitle = get_theme_mod( 'llorix_one_lite_header_subtitle' );
	}
	$llorix_one_lite_header_subtitle = apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_header_subtitle, 'Big title section' );

	$llorix_one_lite_header_button_text = get_theme_mod( 'llorix_one_lite_header_button_text', esc_html__( 'GET STARTED', 'llorix-one-lite' ) );
	$llorix_one_lite_header_button_text = apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_header_button_text, 'Big title section' );
	$llorix_one_lite_header_button_link = get_theme_mod( 'llorix_one_lite_header_button_link', '#' );
	$llorix_one_lite_header_button_link = apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_header_button_link, 'Big title section' );
	$llorix_one_lite_enable_move        = get_theme_mod( 'llorix_one_lite_enable_move' );
	$llorix_one_lite_first_layer        = get_theme_mod( 'llorix_one_lite_first_layer', llorix_one_lite_get_file( '/images/background1.png' ) );
	$llorix_one_lite_second_layer       = get_theme_mod( 'llorix_one_lite_second_layer', llorix_one_lite_get_file( '/images/background2.png' ) );
	if ( ! empty( $llorix_one_lite_header_logo ) || ! empty( $llorix_one_lite_header_title ) || ! empty( $llorix_one_lite_header_subtitle ) || ! empty( $llorix_one_lite_header_button_text ) ) {
?>

<?php
if ( ! empty( $llorix_one_lite_enable_move ) && $llorix_one_lite_enable_move ) {

	echo '<ul id="llorix_one_lite_move">';


		if ( empty( $llorix_one_lite_first_layer ) && empty( $llorix_one_lite_second_layer ) ) {

		$llorix_one_header_image2 = get_header_image();
		$llorix_one_header_image2 = apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_header_image2, 'Big title section' );
		echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $llorix_one_header_image2 . ');"></li>';

		} else {

		if ( ! empty( $llorix_one_lite_first_layer ) ) {
			echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $llorix_one_lite_first_layer . ');"></li>';
		}
		if ( ! empty( $llorix_one_lite_second_layer ) ) {
			echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(' . $llorix_one_lite_second_layer . ');"></li>';
		}
}

	echo '</ul>';

	}
?>

<div class="overlay-layer-wrap">
<div class="container overlay-layer" id="llorix_one_lite_header">

<!-- ONLY LOGO ON HEADER -->
<?php
if ( ! empty( $llorix_one_lite_header_logo ) ) {
	echo '<div class="only-logo"><div id="only-logo-inner" class="navbar"><div id="llorix_one_lite_only_logo" class="navbar-header"><img src="' . esc_url( $llorix_one_lite_header_logo ) . '"   alt=""></div></div></div>';
	} elseif ( isset( $wp_customize ) ) {
	echo '<div class="only-logo"><div id="only-logo-inner" class="navbar"><div id="llorix_one_lite_only_logo" class="navbar-header"><img src="" alt=""></div></div></div>';
	}
?>
<!-- /END ONLY LOGO ON HEADER -->

<div class="row">
<div class="col-md-12 intro-section-text-wrap">

<!-- HEADING AND BUTTONS -->
<?php
if ( ! empty( $llorix_one_lite_header_logo ) || ! empty( $llorix_one_lite_header_title ) || ! empty( $llorix_one_lite_header_subtitle ) || ! empty( $llorix_one_lite_header_button_text ) ) {
?>
						<div id="intro-section" class="intro-section">

							<!-- WELCOM MESSAGE -->
							<?php
							if ( ! empty( $llorix_one_lite_header_title ) ) {
								echo '<h1 id="intro_section_text_1" class="intro white-text">' . wp_kses_post( $llorix_one_lite_header_title ) . '</h1>';
								} elseif ( isset( $wp_customize ) ) {
								echo '<h1 id="intro_section_text_1" class="intro white-text llorix_one_lite_only_customizer"></h1>';
								}
							?>


							<?php
							if ( ! empty( $llorix_one_lite_header_subtitle ) ) {
								echo '<h5 id="intro_section_text_2" class="white-text">' . wp_kses_post( $llorix_one_lite_header_subtitle ) . '</h5>';
								} elseif ( isset( $wp_customize ) ) {
								echo '<h5 id="intro_section_text_2" class="white-text llorix_one_lite_only_customizer"></h5>';
								}
							?>

							<!-- BUTTON -->
							<?php
							if ( ! empty( $llorix_one_lite_header_button_text ) ) {
								if ( empty( $llorix_one_lite_header_button_link ) ) {
									echo '<button id="inpage_scroll_btn" class="btn btn-primary standard-button inpage-scroll"><span class="screen-reader-text">' . esc_html__( 'Header button label:', 'llorix-one-lite' ) . $llorix_one_lite_header_button_text . '</span>' . $llorix_one_lite_header_button_text . '</button>';
									} else {
									if ( strpos( $llorix_one_lite_header_button_link, '#' ) === 0 ) {
										echo '<button id="inpage_scroll_btn" class="btn btn-primary standard-button inpage-scroll" data-anchor="' . $llorix_one_lite_header_button_link . '"><span class="screen-reader-text">' . esc_html__( 'Header button label:', 'llorix-one-lite' ) . $llorix_one_lite_header_button_text . '</span>' . $llorix_one_lite_header_button_text . '</button>';
										} else {
										echo '<button id="inpage_scroll_btn" class="btn btn-primary standard-button inpage-scroll" onClick="parent.location=\'' . esc_url( $llorix_one_lite_header_button_link ) . '\'"><span class="screen-reader-text">' . esc_html__( 'Header button label:', 'llorix-one-lite' ) . $llorix_one_lite_header_button_text . '</span>' . $llorix_one_lite_header_button_text . '</button>';
										}
									}
								} elseif ( isset( $wp_customize ) ) {
								echo '<div id="intro_section_text_3" class="button"><div id="inpage_scroll_btn"><a href="" class="btn btn-primary standard-button inpage-scroll llorix_one_lite_only_customizer"></a></div></div>';
								}
							?>
							<!-- /END BUTTON -->

						</div>
						<!-- /END HEADNING AND BUTTONS -->
					<?php
					}// End if().
?>
</div>
</div>
</div>
</div>

<?php
	}// End if().
?>
} else {
    
 /* Display the slider section */
    
    $llorix_one_lite_child_slider_delay   = get_theme_mod( 'llorix_one_lite_child_slider_delay' );
    $llorix_one_lite_child_slider_content = get_theme_mod( 'llorix_one_lite_child_slider_content' );

    if ( function_exists( 'llorix_one_lite_general_repeater_is_empty' ) ){
    	$llorix_one_lite_child_slider_content_is_empty = llorix_one_lite_general_repeater_is_empty( $llorix_one_lite_child_slider_content );
    } else {
    	$llorix_one_lite_child_slider_content_is_empty = empty( $llorix_one_lite_child_slider_content );
    }      

    if ( ! $llorix_one_lite_child_slider_content_is_empty ) {

        if( ! empty( $llorix_one_lite_child_slider_delay ) ) {
            
            $llorix_one_lite_child_slider_delay = $llorix_one_lite_child_slider_delay * 1000;
            echo '<script type="text/javascript">
            jQuery(document ).ready(function( $ ) {
                                    jQuery("#myCarousel" ).carousel({
                                                                    interval:'.$llorix_one_lite_child_slider_delay.'
                                                                    });
                                    });
            </script>';
        }
        
        $llorix_one_lite_child_slider_decoded = json_decode( $llorix_one_lite_child_slider_content );
?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                for ( $indicator = 0; $indicator < count($llorix_one_lite_child_slider_decoded);  $indicator++ ) {
                ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $indicator; ?>" class="<?php echo ($indicator == 0) ? 'active' : ''; ?>"></li>

                <?php
                }
                ?>
            </ol>
            <div class="carousel-inner">

            <?php
            $llorix_one_lite_child_slider_indicator = 0;
            foreach ( $llorix_one_lite_child_slider_decoded as $llorix_one_lite_child_slide ) { 

                $image = !empty($llorix_one_lite_child_slide->image_url) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_child_slide->image_url, 'Slider section') : '';
                $title = !empty($llorix_one_lite_child_slide->title) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_child_slide->title, 'Slider section') : '';
                $subtitle = !empty($llorix_one_lite_child_slide->subtitle) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_child_slide->subtitle, 'Slider section') : '';
                
                if( ! empty( $image ) ) {
            ?>
                    <div class="<?php echo ($llorix_one_lite_child_slider_indicator == 0) ? 'item active' : 'item'; ?>">
                        <img src="<?php echo esc_html__( $image ); ?>" class="img-responsive">
                        <div class="container">
                            <div class="carousel-caption">
                                <?php
                                if( ! empty( $title ) ) {
                                    echo '<h2 class="slide_title"><strong>' . wp_kses_post( $title ) . '</strong></h2>';
                                }
                                ?>
                                <?php
                                if( ! empty( $subtitle ) ) {
                                    echo '<p class="slide_desc">' . wp_kses_post( $subtitle ) . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
                $llorix_one_lite_child_slider_indicator++;
                
            } //End of foreach
            ?>

            </div> <!--carousel-inner-->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div> <!-- /.carousel -->
<?php
    }
} // End else
?>
