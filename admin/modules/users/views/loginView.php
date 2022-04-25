
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Document</title>

</head>

<body>
    <div id="wp-login">
        <h1>Đăng Nhập</h1>
        <form id="login" action="" method="POST">
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
            <?php echo form_error('username'); ?>
            <input type="password" name="password" id="password" value="" placeholder="Password">
            <?php echo form_error('password'); ?>
            <input type="submit" name="btn_login" id="btn_login" value="Đăng nhập">
            <?php echo form_error('account'); ?>
        </form>
        <a href="">Quên mật khẩu</a> |
        <a href="?mod=users&action=reg">Đăng ký tài khoản</a>
    </div>
</body>

</html>