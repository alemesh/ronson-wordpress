<?php
function anc_3f_customize_register( $wp_customize ) {
    //header
    $wp_customize->add_setting( 'contact_emails' , array(//'header_textcolor'
        'default' => __('Emails', 'anc-3f'),
        'transport' => 'refresh',
    ) );


    //============================================================================
    $wp_customize->add_section( 'contactforms_settings' , array(//'mytheme_new_section_name'
        'title'      => __( 'Contactform settings', 'anc-3f' ),//'Visible Section Name', 'mytheme'
        'priority'   => 30,
    ) );

    //============================================================================
    //header
    $wp_customize->add_control(
        'contact_emails',//your_control_id
        array(
            'label'    => __( 'List emails separated by commas', 'anc-3f' ),//'Control Label', 'mytheme'
            'section'  => 'contactforms_settings',//your_section_id
            'settings' => 'contact_emails',//your_setting_id
            'type'     => 'text',//'radio'
        )
    );


}
add_action( 'customize_register', 'anc_3f_customize_register' );