<?php

function construct()
{
    //"DÙng chung, load đầu tiên";
    load_model('index');
    // load('helper','format');
    load('lib', 'validation');
}

function indexAction()
{
    $list = get_list_users();
    load_view('index', compact('list'));
}

function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn_login'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = "khong dc de trong";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "khong dung dinh dang";
            } else {
                $username = $_POST['username'];
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = "khong dc de trong";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "khong dung dinh dang";
            } else {
                $password = md5($_POST['password']);
            }
        }
        if (empty($error)) {
            if (check_login($username, $password)) {

                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                redirect("?mod=users&act=index");
            } else {
                $error['account'] = "Tài khoản không tồn tại trên hệ thống";
            }
        }
    }
    load_view('login');
}

function regAction()
{
    global $error, $fullname, $password, $email, $username;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống trường này";
        } else {
            $fullname = $_POST['fullname'];
        }
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống trường này";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường này";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường này";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Password không đúng định dạng";
            } else {
                $password = md5($_POST['password']) ;
            }
        }
        if (empty($error)) {
            if(!user_exit($username, $email)){
                $data = [
                    'fullname' => $fullname,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password
                ];
                add_user($data);
                redirect("?mod=users&action=login");
            }
            else {
                $error['account'] = "Tài khoản đã tồn tại trên hệ thống";
            }
        }
    }
    load_view('reg');
}
function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}