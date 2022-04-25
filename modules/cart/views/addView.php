<?php
//lấy thông tin sản phẩm cần thêm
$id =(int) $_GET['id'];
add_cart($id);
update_info_cart();
// show_array($_SESSION['cart']);
redirect("?mod=cart&action=show");