<?php

function construct(){
    load_model('index');
}

function indexAction(){
    $list_products = get_list_products();
    $list_cats = get_list_cats();
    // show_array( $list_cats );
    load_view('index', compact('list_products', 'list_cats'));
}