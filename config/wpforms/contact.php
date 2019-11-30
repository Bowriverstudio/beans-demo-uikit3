<?php
/**
 * Inserts the contact form.
 */

if ( class_exists( 'WPForms_Template', false ) ) :
    /**
     * Contact Form
     * Template for WPForms.
     */
    class WPForms_Template_contact_form extends WPForms_Template {

        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function init() {

            // Template name
            $this->name = 'Contact Form';

            // Template slug
            $this->slug = 'contact_form';

            // Template description
            $this->description = '';

            // Template field and settings
            $this->data = array (
                'field_id' => 3,
                'fields' => array (
                    0 => array (
                        'id' => '0',
                        'type' => 'name',
                        'label' => 'Name',
                        'format' => 'simple',
                        'required' => '1',
                        'size' => 'medium',
                        'simple_placeholder' => 'Name',
                        'label_hide' => '1',
                        'css' => 'uk-width-1-2',
                    ),
                    1 => array (
                        'id' => '1',
                        'type' => 'email',
                        'label' => 'Email',
                        'required' => '1',
                        'size' => 'medium',
                        'placeholder' => 'Email',
                        'label_hide' => '1',
                        'css' => 'uk-width-1-2',
                    ),
                    2 => array (
                        'id' => '2',
                        'type' => 'textarea',
                        'label' => 'Message',
                        'required' => '1',
                        'size' => 'medium',
                        'placeholder' => 'Message',
                        'label_hide' => '1',
                        'limit_count' => '1',
                        'limit_mode' => 'characters',
                        'css' => 'uk-width-1-1',
                    ),
                ),
                'settings' => array (
                    'form_title' => 'Contact Form',
                    'submit_text' => 'Submit',
                    'submit_text_processing' => 'Sending...',
                    'submit_class' => 'uk-button uk-button-primary',
                    'honeypot' => '1',
                    'dynamic_population' => '1',
                    'ajax_submit' => '1',
                    'notification_enable' => '1',
                    'notifications' => array (
                        1 => array (
                            'email' => '{admin_email}',
                            'subject' => 'New Entry: Contact Form',
                            'sender_name' => 'Beans',
                            'sender_address' => '{admin_email}',
                            'replyto' => '{field_id="1"}',
                            'message' => '{all_fields}',
                        ),
                    ),
                    'confirmations' => array (
                        1 => array (
                            'type' => 'message',
                            'message' => '<p class="uk-text-success ">Thanks for contacting us! We will be in touch with you shortly.</p>',
                            'message_scroll' => '1',
                            'page' => '103',
                        ),
                    ),
                ),
                'meta' => array (
                    'template' => 'contact_form',
                ),
            );
        }
    }
    new WPForms_Template_contact_form;
endif;