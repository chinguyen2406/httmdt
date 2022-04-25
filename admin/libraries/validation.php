<?php
function is_username($username)
{
    $veg = "/^[A-Za-z0-9_\.]{5,32}/";
    if (!preg_match($veg, $username, $matchs))
        return false;
    return true;
}

function is_password($password)
{
    $veg = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}/";
    if (!preg_match($veg, $password, $matchs))
        return false;
    return true;
}

function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        return false;
    return true;
}

function form_error($lable_field)
{
    global $error;
    if (!empty($error[$lable_field])) {
        return "<p class='login'> $error[$lable_field] </p> ";
    }
}

function set_value($lable_field)
{
    global $$lable_field;
    if (!empty($$lable_field))
        return $$lable_field;
}
