<?php

function add_cart($id)
{
    $product = db_fetch_row("SELECT * FROM tbl_products WHERE id = $id");
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'thumbnail' => $product['thumbnail'],
        'code' => $product['code'],
        'qty' => $qty,
        'sub_total' => $product['price'] * $qty
    );
}

function update_info_cart()
{
    if (isset($_SESSION['cart'])) {

        $number = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $number += $item['qty'];
            $total += $item['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'number' => $number,
            'total' => $total
        );
    }
}

function get_list_by_cart()
{
    if (isset($_SESSION['cart'])) {
        // foreach ($_SESSION['cart']['buy'] as &$iteam) {
        //     $iteam['url_delete_cart'] = "?mod=cart&act=delete&id={$iteam['id']}";
        // }

        return $_SESSION['cart']['buy'];
    }
}

function get_number_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['number'];
    }
}

function get_total_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    } else {
        return false;
    }
}

function delete_cart($id)
{
    if (isset($_SESSION['cart'])) {
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        } else {
            unset($_SESSION['cart']);
        }
    }
}

function delete_cart_all()
{
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
}
// function update_cart($qty){
//     foreach ($qty as $id => $new_qty){
//         $_SESSION['cart']['buy'][$id]['qty']= $new_qty;
//         $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
//     }
//     update_info_cart();
// }
// function get_product_id($id){
//      global $list_product;
//      if(array_key_exists($id, $list_product)){
//          $list_product[$id]['url_cart'] = "?mod=cart&act=add&id={$id}";
//           $list_product[$id]['url'] = "?mod=product&act=main&id={$id}";
//          return $list_product[$id];
//      }
// }
// 
