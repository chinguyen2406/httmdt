<?php

// function get_list_users() {
//     $result = db_fetch_array("SELECT * FROM `tbl_users`");
//     return $result;
// }

// function get_user_by_id($id) {
//     $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
//     return $item;
// }

function check_login($username, $password)
{
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' AND `password` = '{$password}'");
    return $check;
}

function add_user($data){
    return db_insert('tbl_users', $data);
}

function user_exit($username, $email){
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' AND `email` = '{$email}'");
    return $check;
}

function get_list_users(){
    $check = db_fetch_array("SELECT `fullname`,`email` FROM `tbl_users`");
    return $check;
}