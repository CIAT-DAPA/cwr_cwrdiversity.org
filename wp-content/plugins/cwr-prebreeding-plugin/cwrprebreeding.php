<?php

/*
  Plugin Name: CWR Prebreeding Use Section
  Plugin URI: http://www.cwrdiversity.org
  Description: Prebreeding Use section for cwrdiversity website.
  Version: 1.0
  Author: Héctor Fabio Tobón R. (CIAT)
  License:
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Create new custom post type for CWR Use.
add_action('init', 'create_prebreeding_post_type');

function create_prebreeding_post_type() {
    register_post_type('prebreeding_eval', array(
        'labels' => array(
            'name' => __('Prebreeding'),
            'singular_name' => __('Prebreeding'),
            'add_new' => __('Add New Item')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'menu_icon' => plugins_url('images/icon-transformers.png', __FILE__),
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'comments')
            )
    );
}

// Create new Taxonomy for CWR Use.
add_action('init', 'crops_taxonomy_init');

function crops_taxonomy_init() {
    register_taxonomy(
            'taxonomy_crops', 'prebreeding_eval', array(
        'label' => __('Crops'),
        'hierarchical' => true, // like categories.
        'public' => true,
        'show_ui' => true,
        'sort' => true,
        'labels' => array(
            'edit_item' => __('Edit Crop'),
            'update_item' => __('Update Crop'),
            'new_item_name' => __('New Crop'),
            'add_new_item' => __('Add new Crop'),
            'singular_name' => __('Crop'),
            'search_items' => __('Search Crops'),
            'all_items' => __('All Crops'),
            'parent_item' => __('Parent Crop')
        ),
        'args' => array('orderby' => 'term_order'),
        'rewrite' => array('slug' => 'crop'),
        'capability_type' => 'post',
            )
    );
}

/* * **** METABOX (Attach File) ****** */

// register actions to wordpress
add_action('admin_menu', 'cwr_attachment_metabox');
add_action('save_post', 'cwr_save_attachment_reference');

// create global variable to be used in other functions.
$cwr_meta_box = array(
    'id' => 'cwr-attachment-box',
    'title' => 'Attach File',
    'page' => 'prebreeding_eval',
    'context' => 'normal',
    'priority' => 'high',
    'field' => array(
        'name' => 'File:',
        'desc' => 'Enter an URL or upload a file here.',
        'id' => 'cwr_attached_file'
    ),
    'uploadButton' => array(
        'id' => 'cwr_upload_file_button',
        'text' => 'Upload'
    )
);

// Create metabox for attachments files.
function cwr_attachment_metabox() {
    global $cwr_meta_box;
//add_meta_box($id, $title, $callback, $page, $context, $priority);
    add_meta_box($cwr_meta_box['id'], $cwr_meta_box['title'], 'cwr_attachment_show_metabox', $cwr_meta_box['page'], $cwr_meta_box['context'], $cwr_meta_box['priority']);
}

// Show the metabox in the web interface.
function cwr_attachment_show_metabox() {
    global $cwr_meta_box, $post;
    $meta = get_post_meta($post->ID, $cwr_meta_box['field']['id'], true); // this variable is used in the attach_file.php.
    include 'metaboxes/attach_file.php';

    // hidden custom nonce for submit verification later.
    echo "<input type='hidden' name='nonce_box_" . $cwr_meta_box['field']['id'] . "' value='" . wp_create_nonce(basename(__FILE__)) . "' />";
}

// Save function.
function cwr_save_attachment_reference($post_id) {
    global $cwr_meta_box;

    // verify nonce
    if (!wp_verify_nonce($_POST["nonce_box_" . $cwr_meta_box['field']['id']], basename(__FILE__))) {
        return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    $old = get_post_meta($post_id, $cwr_meta_box['field']['id'], true);
    $new = $_POST[$cwr_meta_box['field']['id']];

    if ($new && $new != $old) {
        update_post_meta($post_id, $cwr_meta_box['field']['id'], $new);
    } elseif ('' == $new && $old) {
        delete_post_meta($post_id, $cwr_meta_box['field']['id'], $old);
    }
}

// create upload button.
function cwr_admin_upload_scripts() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('cwr-upload-file', plugin_dir_url(__FILE__) . 'metaboxes/attach_file.js', array('jquery', 'media-upload', 'thickbox'));
    wp_enqueue_script('cwr-upload-file');
}

function cwr_admin_upload_styles() {
    wp_enqueue_style('thickbox');
    wp_enqueue_style('cwr-upload-file_css', plugin_dir_url(__FILE__) . 'metaboxes/attach_file.css');
}

if (isset($_GET['post_type']) && $_GET['post_type'] == 'prebreeding_eval') {
    add_action('admin_print_scripts', 'cwr_admin_upload_scripts');
    add_action('admin_print_styles', 'cwr_admin_upload_styles');
}
?>
