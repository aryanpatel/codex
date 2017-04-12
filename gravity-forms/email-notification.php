<?php

function gfrp_get_random_post($args = array()) {
    $args = array(
        'post_type' => GFRP_POST_TYPE_GFRPPRICES,
        'orderby' => 'rand',
        'numberposts' => 1,
        'meta_query' => array(
            //'relation' 	=> 'NOT',
            array(
                'key' => 'win_counter',
                'value' => '0',
                'compare' => '!='
            ),
        )
    );

    return get_posts($args);
}

/**
 * Attch random prize pdf to Gravity form email notification, update win counter
 * 
 * 
 * @package Gravity Forms - Random Prices
 * @since 1.0.0
 */
function gfrp_before_gravity_form_notification($notification, $form, $entry) {
    // Get Post by post type randomly
    $randomPost = $this->gfrp_get_random_post();
    // get custom fields
    $customFields = get_fields($randomPost[0]->ID);
    // Get winning counter of this post
    $winCounter = (int) $customFields['win_counter'];
    // get custom fields
    $customFields = get_fields($randomPost[0]->ID);
    // Get winning counter of this post
    $winCounter = (int) $customFields['win_counter'];
    if ($winCounter != "") {
        update_field('win_counter', $winCounter - 1, $randomPost[0]->ID);
    }
    gform_update_meta($entry['id'], 'prize_id', $randomPost[0]->ID);
    $_SESSION['prize_id'] = $randomPost[0]->ID;
    // Get attached PDF file Id
    $attachedFileId = $customFields['prize_attachment'];
    // Get attached PDF file path
    $attachmentPath = get_attached_file($attachedFileId);

    if ($attachmentPath) {
        //if this is user notification
        if ($notification['name'] == 'Winning Email') {
            $notification['attachments'] = $attachmentPath;
        }
    }

    return $notification;
}

/**
 * Set modal popup for front view 
 * 
 * 
 * @package Gravity Forms - Random Prices
 * @since 1.0.0
 */
function gfrp_display_model_popup() {
    if (isset($_GET['success']) && $_GET['success'] != '' && isset($_SESSION['prize_id'])) {
        include_once( GFRP_INC_DIR . '/front/gfrp_model_popup_render.php' );
        // Script class handles most of script functionalities of plugin
        include_once( GFRP_INC_DIR . '/class-gfrp-scripts.php' );
        $gfrp_scripts = new Gfrp_Scripts();
        $gfrp_scripts->add_hooks();
    }
}

/**
 * add hooks
 * 
 * 
 * @package Gravity Forms - Random Prices
 * @since 1.0.0
 */
function add_hooks() {
    add_filter('gform_notification_10', array($this, 'gfrp_before_gravity_form_notification'), 10, 3);

    add_action('wp_footer', array($this, 'gfrp_display_model_popup'));
}
