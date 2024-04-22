<?php
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( 'Job Pages', 'banca' ),
    'id'        => 'job_pages_0pt',
    'icon'      => 'dashicons dashicons-text-page',
));

/**
 * Job Query Filter Settings
 */
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( 'Query Filter', 'banca' ),
    'id'        => 'job_query_filter_opt',
    'icon'      => '',
    'subsection' => true,
    'fields'    => array(


    )
));

/**
 * Job Application Form
 */
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( 'Job Application Form', 'banca' ),
    'id'        => 'job_application_form_opt',
    'icon'      => '',
    'subsection' => true,
    'fields'    => array(

        array(
            'title'         => esc_html__( 'Title', 'banca' ),
            'id'            => 'job_application_form',
            'type'          => 'textarea',
            'description'   => esc_html__( 'Enter your shortcode', 'banca' ),
            'placeholder'   => esc_html__( '[Job Application Form ID="123"]', 'banca' ),
        ),
    )
));


/**
 * Job Mailchimp Form
 */
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( 'Mailchimp', 'banca' ),
    'id'        => 'job_mailchimp_opt',
    'icon'      => '',
    'subsection' => true,
    'fields'    => array(


        array(
            'title'     => esc_html__( 'Title', 'banca' ),
            'id'        => 'job_mailchimp_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Get email alerts for the latest Jobs in Bangladesh', 'banca' )
        ),

        array(
            'title'     => esc_html__( 'Subtitle', 'banca' ),
            'id'        => 'job_mailchimp_subtitle',
            'type'      => 'text',
            'default'   => esc_html__( 'You can cancel email alerts at any time.', 'banca' )
        ),

        array(
            'title'     => esc_html__( 'Email Placeholder', 'banca' ),
            'id'        => 'job_mailchimp_email_placeholder',
            'type'      => 'text',
            'default'   => esc_html__( 'Type in your email...', 'banca' )
        ),

        array(
            'title'     => esc_html__( 'Submit Button', 'banca' ),
            'id'        => 'job_mailchimp_submit_btn',
            'type'      => 'text',
            'default'   => esc_html__( 'Set Up Alert', 'banca' )
        ),

    )
));
