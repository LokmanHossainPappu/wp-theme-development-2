<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'Halim-options';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => __('Halim Option', 'halim'),
      'menu_slug'  => 'Halim-options',
      'framework_title' => 'Halim Options - <small> Lokman Hossain </small> ',
      'menu_parent' => 'themes.php',
      'menu_type' => 'submenu'
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
        'id' => 'header_options',
        'title'  => 'Header Options',
         
        ));

    CSF::createSection($prefix, array(
        
        'title' => __('Header Left', 'halim'),
        'parent' => 'header_options',
        'fields' => array(
           
            array(
                'id' => 'header_email',
                'type' => 'text',
                'title' => 'Email Address'
            ),
            array(
                'id' => 'header_phone',
                'type' => 'text',
                'title' => 'Phone Number'
            )
        )
        ));

        CSF::createSection($prefix, array(
            'title' => 'Header Icons',
            'parent' => 'header_options',
            'fields' => array(
                array(
                    'id' => 'header_icons',
                    'title' => 'Header Icons',
                    'type' => 'group',
                    'fields' => array(
                        array(
                            'id' => 'social_title',
                            'type' => 'text',
                            'title' => 'social title'
                        ),
                        array(
                            'id' => 'social_link',
                            'type' => 'text',
                            'title' => 'social Link'
                        ),
                        array(
                            'id' => 'social_icon',
                            'type' => 'icon',
                            'title' => 'social icon'
                        ),
                    )
                )
            )
                    ));
   
            //About section

            CSF::createSection($prefix, array(
                'parent'=> 'about_options',
                'title' => __('About Section Title', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'about_sec_subtitle',
                        'title' => __('Sub Title', 'halim'),
                        'type' => 'text',
                        'desc' => __('Write About Section Subtitle Here', 'halim')
                    ),
                    array(
                        'id' => 'about_sec_title',
                        'title' => __('Title', 'halim'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'about_sec_des',
                        'title' => __('Description', 'halim'),
                        'type' => 'textarea'
                    )
                )
            ));
        
            // About Page Content
            CSF::createSection($prefix, array(
                'parent'=> 'about_options',
                'title' => __('About Page Content', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'about_page_title',
                        'title' => __('Title', 'halim'),
                        'type' => 'text',
                        'desc' => __('Write About Page Title Here', 'halim')
                    ),
                    array(
                        'id' => 'about_page_desc',
                        'title' => __('About Page Description', 'halim'),
                        'type' => 'textarea'
                    ),
                    array(
                        'id' => 'about_page_btn',
                        'title' => __('About Page Link', 'halim'),
                        'type' => 'text'
                    )
                )
            ));
        
             // About Page Features
             CSF::createSection($prefix, array(
                'parent'=> 'about_options',
                'title' => __('About Page Features', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'about_page_features',
                        'title' => __('About Features', 'halim'),
                        'type' => 'group',
                        'button_title' => __('Add New Feature', 'halim'),
                        'desc' => __('Write About Page Title Here', 'halim'),
                        'fields' => array(
                            array(
                                'id' => 'features_title',
                                'title' => __('About Feature Title', 'halim'),
                                'type' => 'text'
                            ),
                            array(
                                'id' => 'features_icon',
                                'title' => __('About Feature Icon', 'halim'),
                                'type' => 'icon'
                            ),
                            array(
                                'id' => 'features_des',
                                'title' => __('About Feature Description', 'halim'),
                                'type' => 'textarea'
                            )
                        )
                    )
                )
            ));
        
            CSF::createSection($prefix, array(
                'parent' => 'about_options',
                'title' => __('About FAQ', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'about_faq_list',
                        'title' => __('About Faq', 'halim'),
                        'type' => 'group',
                        'button_title' => __('Add New FAQ', 'halim'),
                        'fields' => array(
                            array(
                                'id' => 'faq_title',
                                'title' => __('Faq Title', 'halim'),
                                'type' => 'text'
                            ),
                            array(
                                'id' => 'faq_des',
                                'title' => __('Faq Description', 'halim'),
                                'type' => 'textarea'
                            )
                        )
                    )
                )
            ));
        
            CSF::createSection($prefix, array(
                'parent' => 'about_options',
                'title' => __('About Skills', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'about_skills_list',
                        'title' => __('About Skills', 'halim'),
                        'type' => 'group',
                        'button_title' => __('Add New Skill', 'halim'),
                        'fields' => array(
                            array(
                                'id' => 'skill_title',
                                'title' => __('Skill Title', 'halim'),
                                'type' => 'text'
                            ),
                            array(
                                'id' => 'skill_number',
                                'title' => __('Skill Number', 'halim'),
                                'type' => 'text'
                            )
                        )
                    )
                )
            ));
        
            // Counter Options
        
            CSF::createSection($prefix, array(
                'id' => 'counter_options',
                'title' => __('Counter Options'),
                'icon' => 'fas fa-rocket',
                'fields' => array(
                    array(
                        'id' => 'counter_lists',
                        'title' => __('Counter Lists'),
                        'type' => 'group',
                        'button_title' => __('Add New Counter'),
                        'fields' => array(
                            array(
                                'id' => 'counter_title',
                                'type' => 'text',
                                'title' => __('Counter Title')
                            ),
                            array(
                                'id' => 'counter_number',
                                'type' => 'number',
                                'title' => __('Counter Number')
                            ),
                            array(
                                'id' => 'counter_icon',
                                'type' => 'icon',
                                'title' => __('Counter Icon')
                            ),
                        )
                    )
                )
            ));
        
            // CTA Options
        
            CSF::createSection($prefix, array(
                'id' => 'cta_options',
                'title' => __('CTA Options'),
                'icon' => 'fas fa-bullhorn',
                'fields' => array(
                    array(
                        'id' => 'cta_switch',
                        'type' => 'switcher',
                        'title' => __('Show CTA?', 'halim'),
                        'default' => true
                    ),
                    array(
                        'id' => 'cta_title',
                        'type'=> 'text',
                        'title' => __('CTA Title', 'halim'),
                        'default' => __('best solution for your business', 'halim'),
                        'help' => __('Write CTA Title Here', 'halim'),
                        'dependency' => array('cta_switch', '==', 'true')
                    ),
                    array(
                        'id' => 'cta_subtitle',
                        'type'=> 'textarea',
                        'title' => __('CTA SubTitle', 'halim'),
                        'default' => __('the can be used on larger scale projectss as well as small scale projectss', 'halim'),
                        'dependency' => array('cta_switch', '==', 'true')
                    ),
                    array(
                        'id' => 'cta_btn_txt',
                        'type'=> 'text',
                        'title' => __('CTA Button Text', 'halim'),
                        'default' => __('contact us', 'halim'),
                        'dependency' => array('cta_switch', '==', 'true')
                    ),
                    array(
                        'id' => 'cta_btn_url',
                        'type'=> 'text',
                        'title' => __('CTA Button Url', 'halim'),
                        'default' => 'https://www.google.com',
                        'dependency' => array('cta_switch', '==', 'true')
                    )
                )
            ));
        
            // Contact Options
            CSF::createSection($prefix, array(
                'id' => 'contact_options',
                'title' => __('Contact Options', 'halim'),
                'icon' => 'fas fa-bullhorn',
                'fields' => array(
                    array(
                        'id' => 'contact_info',
                        'title' => __('Contact Info', 'halim'),
                        'type' => 'group',
                        'button_title' => __('Add New Concatc Items', 'halim'),
                        'fields' => array(
                            array(
                                'id' => 'contact_info_title',
                                'type' => 'text',
                                'title' => __('Contact Info Title', 'halim')
                            ),
                            array(
                                'id' => 'contact_info_icon',
                                'type' => 'icon',
                                'title' => __('Contact Info Icon', 'halim')
                            ),
                            array(
                                'id' => 'contact_info_des',
                                'type' => 'text',
                                'title' => __('Contact Info Description', 'halim')
                            )
                        )
                    ),
                    array(
                        'id' => 'contact_map',
                        'type' => 'map',
                        'title' => __('Contact Map', 'halim')
                    )
        
                )
            ));
        
        
            // Footer Options
            CSF::createSection($prefix, array(
                'id' => 'footer_options',
                'title' => __('Footer Options', 'halim'),
                'icon' => 'fas fa-rocket',
                'fields' => array(
                    array(
                        'id' => 'footer_text',
                        'type' => 'text',
                        'title' => __('Copyright Text' , 'halim'),
                        'default' => __('&copy; All Rights Reserved 2020' ,'halim')
                    ),
                    array(
                        'id' => 'footer_social',
                        'type' => 'group',
                        'title' => __('Footer Social Links', 'halim'),
                        'button_title' => __('Add New Link', 'halim'),
                        'fields' => array(
                            array(
                                'id' => 'footer_social_title',
                                'type' => 'text',
                                'title' => __('Footer Link Title', 'halim')
                            ),
                            array(
                                'id' => 'footer_social_icon',
                                'type' => 'icon',
                                'title' => __('Footer Link Icon', 'halim')
                            ),
                            array(
                                'id' => 'footer_social_url',
                                'type' => 'text',
                                'title' => __('Footer Link URL', 'halim')
                            )
                        )
                    ),
                    array(
                        'id' => 'footer_link_target',
                        'type' => 'select',
                        'title' => __('Select Link Target', 'halim'),
                        'options' => array(
                            '_self' => __('Open in Same Tab', 'halim',),
                            '_blank' => __('Open in New Tab', 'halim',),
                            '_window' => __('Open in New Window', 'halim',)
                        ),
                        'default' => '_blank'
                    )
                )
            ));
};