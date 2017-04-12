<?php

$args = array(
    'post_type' => 'post',
    'orderby' => 'rand',
    'numberposts' => 1,
    'meta_query' => array(
        //'relation' 	=> 'NOT',
        array(
            'key' => 'key',
            'value' => 'value',
            'compare' => '!='
        ),
    )
);

return get_posts($args);
