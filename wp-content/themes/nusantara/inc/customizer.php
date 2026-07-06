<?php
/**
 * PT Nusantara Digital Theme Customizer
 *
 * @package Nusantara
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Customizer Settings
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nusantara_customize_register( $wp_customize ) {

    // 1. Company Information Section
    $wp_customize->add_section( 'nusantara_company_info', array(
        'title'       => __( 'Company Information', 'nusantara' ),
        'priority'    => 30,
        'description' => __( 'Manage global company details like contact info and copyright.', 'nusantara' ),
    ) );

    // Contact Email
    $wp_customize->add_setting( 'nusantara_contact_email', array(
        'default'           => 'hello@nusantara.digital',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'nusantara_contact_email', array(
        'label'       => __( 'Contact Email', 'nusantara' ),
        'section'     => 'nusantara_company_info',
        'type'        => 'email',
    ) );

    // Contact Phone
    $wp_customize->add_setting( 'nusantara_contact_phone', array(
        'default'           => '+62 811 1234 5678',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nusantara_contact_phone', array(
        'label'       => __( 'Contact Phone', 'nusantara' ),
        'section'     => 'nusantara_company_info',
        'type'        => 'text',
    ) );

    // Business Hours
    $wp_customize->add_setting( 'nusantara_business_hours', array(
        'default'           => 'Mon - Fri, 09:00 AM - 05:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nusantara_business_hours', array(
        'label'       => __( 'Business Hours', 'nusantara' ),
        'section'     => 'nusantara_company_info',
        'type'        => 'text',
    ) );

    // Footer Copyright
    $wp_customize->add_setting( 'nusantara_footer_copyright', array(
        'default'           => 'PT Nusantara Digital. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nusantara_footer_copyright', array(
        'label'       => __( 'Footer Copyright Text', 'nusantara' ),
        'section'     => 'nusantara_company_info',
        'type'        => 'text',
    ) );

    // 2. Social Media Section
    $wp_customize->add_section( 'nusantara_social_media', array(
        'title'       => __( 'Social Media Links', 'nusantara' ),
        'priority'    => 31,
    ) );

    $social_networks = array( 'linkedin' => 'LinkedIn', 'twitter' => 'Twitter/X', 'instagram' => 'Instagram' );
    
    foreach ( $social_networks as $network => $label ) {
        $wp_customize->add_setting( 'nusantara_social_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'nusantara_social_' . $network, array(
            'label'       => sprintf( __( '%s URL', 'nusantara' ), $label ),
            'section'     => 'nusantara_social_media',
            'type'        => 'url',
        ) );
    }
}
add_action( 'customize_register', 'nusantara_customize_register' );
