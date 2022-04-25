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
        <h1>Đăng Ký Tài Khoản</h1>
        <form id="login" action="" method="POST">
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>" placeholder="Fullname">
            <?php echo form_error('fullname'); ?>
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
            <?php echo form_error('username'); ?>
            <input type="text" name="email" id="email" value="" placeholder="Email">
            <?php echo form_error('email'); ?>
            <input type="password" name="password" id="password" value="" placeholder="Password">
            <?php echo form_error('password'); ?>
            <input type="submit" name="btn_reg" id="btn_login" value="Đăng ký">
            <?php echo form_error('account'); ?>
        </form>
        <a href="<?php echo base_url("?mod=users&action=login"); ?>">Đăng nhập</a>
    </div>
</body>

</html>