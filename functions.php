<?php
    /*
     * Llorix One Lite Child functions and definitions
     *
     * @package llorix-one-lite-child
     *
     */
    
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'llorix-one-lite-fontawesome','llorix-one-lite-bootstrap-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_ext1', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'chld_thm_cfg_parent','llorix-one-lite-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION

/*
 * Add additional settings and controls to the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( !function_exists( 'llorix_one_lite_child_customize_register' ) ):
    function llorix_one_lite_child_customize_register( $wp_customize ) {

        /* APPEARANCE */
        /* General Options */
        
        /* Show both logo and title */
        $wp_customize->add_setting(
            'llorix_one_lite_child_both_logo_and_title', array(
                'sanitize_callback' => 'llorix_one_lite_sanitize_text',
            )
        );
        
        $wp_customize->add_control(
            'llorix_one_lite_child_both_logo_and_title', array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Show both logo and site title on the header?', 'llorix-one-lite-child' ),
                'section'     => 'llorix_one_lite_appearance_general',
                'priority'    => 3,
            )
        );
        
        /* HEADER */
        /* Very Top Header */

        /* Fax number - text */
        $wp_customize->add_setting(
            'llorix_one_lite_child_very_top_header_fax_text', array(
                'default'           => esc_html__( 'Fax to: ', 'llorix-one-lite-child' ),
                'sanitize_callback' => 'llorix_one_lite_sanitize_text',
            )
        );
        
        $wp_customize->add_control(
            'llorix_one_lite_child_very_top_header_fax_text', array(
                'label'    => esc_html__( 'Text before the fax number', 'llorix-one-lite-child' ),
                'section'  => 'llorix_one_lite_very_top_header_content',
                'priority' => 4,
            )
        );
        
        /* Fax number */
        $wp_customize->add_setting(
            'llorix_one_lite_child_very_top_header_fax', array(
                'default'           => esc_html__( '(+9) 0999.600.300', 'llorix-one-lite-child' ),
                'sanitize_callback' => 'llorix_one_lite_sanitize_text',
            )
        );
        
        $wp_customize->add_control(
            'llorix_one_lite_child_very_top_header_fax', array(
                'label'    => esc_html__( 'Fax number', 'llorix-one-lite-child' ),
                'section'  => 'llorix_one_lite_very_top_header_content',
                'priority' => 4,
            )
        );

        /* FOOTER */

        /* Footer bottom note */
        $wp_customize->add_setting(
            'llorix_one_lite_child_footer_bottom_note', array(
                'default'           => esc_html__( 'Llorix One Lite powered by WordPress', 'llorix-one-lite-child' ),
                'sanitize_callback' => 'llorix_one_lite_sanitize_text',
            )
        );
        
        $wp_customize->add_control(
            'llorix_one_lite_child_footer_bottom_note', array(
                'label'    => esc_html__( 'Bottom note', 'llorix-one-lite-child' ),
                'section'  => 'llorix_one_lite_footer_section',
                'priority' => 3,
            )
        );
    }
endif;
add_action( 'customize_register', 'llorix_one_lite_child_customize_register');
    
/*
 * Contact section display content.
 *
 * @param array $llorix_one_lite_contact_info_item_decoded Section content.
 *
 * This is a modified version of "llorix_one_lite_contanct_content" function, including the following changes:
 *
 * 1. All contact info links are opened in new browser tabs, except mailto links.
 * 2. If no link is provided for a contact item, the item is dispalyed as simple text not hyperlink.
 * 3. The number of grid columns of the section is extended to 4 in order to accommodate 4 contact items in one row.
 */
if ( !function_exists( 'llorix_one_lite_child_contact_content' ) ):
    function llorix_one_lite_child_contact_content( $llorix_one_lite_contact_info_item_decoded ) { ?>

        <div class="section-overlay-layer">
            <div class="container">
                <!-- CONTACT INFO -->
                <div class="row contact-links">
                    <?php
                    if ( ! empty( $llorix_one_lite_contact_info_item_decoded ) ) {
                        foreach ( $llorix_one_lite_contact_info_item_decoded as $llorix_one_contact_item ) {
                            $link = ( ! empty( $llorix_one_contact_item->link ) ? apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_contact_item->link, 'Contact section' ) : '' );
                            $icon = ( ! empty( $llorix_one_contact_item->icon_value ) ? apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_contact_item->icon_value, 'Contact section' ) : '' );
                            $text = ( ! empty( $llorix_one_contact_item->text ) ? apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_contact_item->text, 'Contact section' ) : '' );
            
                            if ( ! empty( $icon ) || ! empty( $text ) ) { ?>
                                <div class="col-sm-3 contact-link-box col-xs-12">
                                    <?php
                                    if ( ! empty( $icon ) ) { ?>
                                        <div class="icon-container">
                                            <i class="fa <?php echo esc_attr( $icon ); ?> colored-text"></i>
                                        </div>
                                    <?php
                                    }
                                    if ( ! empty( $text ) ) {
                                        if ( ! empty( $link ) ) { ?>
                                            <a <?php echo ( ! empty( $link ) ? 'href="' . esc_url( $link ) . '"' : '' );
                                                echo ( ( substr( $link, 0, 7 ) === 'mailto:' ) ? '' : 'target="_blank"' )?> class="strong">
                                                <?php echo html_entity_decode( $text ); ?>
                                            </a>
                                    <?php
                                        }
                                        else { ?>
                                            <p class="strong"><?php echo html_entity_decode( $text ); ?></p>
                                    <?php
                                        }
                                    } ?>
                                </div>
                        <?php
                            }
                        }
                    } ?>
                </div><!-- .contact-links -->
            </div><!-- .container -->
        </div>
<?php
    }
endif;
?>