<?php
function get_list_products(){
    $result = db_fetch_array("SELECT * FROM `tbl_products`");
    return $result;
}

function data_tree($data, $parent_id = 0, $level = 0){
    $result = [];
    foreach($data as $item){
        if($item['parent_id'] == $parent_id){
            $item['level'] = $level;
            $result[] = $item;
            $child = data_tree($data, $item['id'], $level + 1);
            $result = array_merge($result, $child);
        }
    }
    return $result;
}

function get_list_cats(){
    $result = db_fetch_array("SELECT * FROM `tbl_product_cats` WHERE `parent_id` IS NULL");
    return $result;
}

