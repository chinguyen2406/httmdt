
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>xin chào <?php echo $_SESSION['user_login']; ?></p>
    <a href="?mod=users&action=logout">Thoát</a> 
    <div>
        <table border="1">
            <tr>
                <td>STT</td>
                <td>Họ và tên</td>
                <td>Email</td>
            </tr>
            <?php
            $t = 0;
            foreach ($list as $item) {
                $t++
            ?>
                <tr>
                    <td><?php echo $t ?></td>
                    <td><?php echo $item['fullname']   ?></td>
                    <td><?php echo $item['email']   ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>