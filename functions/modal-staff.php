<?php
 
function load_page_by_ajax_callback() {
    check_ajax_referer('view_bio', 'security');
    $args = array(
        'post_type' => 'staff',
        'post_status' => 'publish',
        'p' => $_POST['id'],
    );
 
    $posts = new WP_Query( $args );
 
    $arr_response = array();
    if ($posts->have_posts()) {
 
        while($posts->have_posts()) {
 
            $posts->the_post();
            $modal_content = apply_filters( 'the_content', get_the_content() );
            
        	$arr_response = array(
                'title' => get_the_title(),
                'content' => $modal_content,
            );
        }
        wp_reset_postdata();
    }
 
    echo json_encode($arr_response);
 
    wp_die();
}

add_action('wp_ajax_load_page_by_ajax', 'load_page_by_ajax_callback');
add_action('wp_ajax_nopriv_load_page_by_ajax', 'load_page_by_ajax_callback');