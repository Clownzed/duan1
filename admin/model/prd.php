<?php

function show_prd()
{
    $sql = "SELECT * FROM `product`";
    $prd =  pdo_query($sql);
    return $prd;
}
function show_one_prd($id_prd)
{
    $sql = "SELECT * FROM `product` WHERE id_prd = $id_prd";
    $prd = pdo_query_one($sql);
    return $prd;
}

function add_prd($name_prd, $price_prd, $img_prd, $desc_prd, $id_cate)
{
    $sql = "INSERT INTO `product`( `name_prd`,  `price_prd`, `img_prd`, `desc_prd`, `id_cate`) VALUES ('$name_prd','$price_prd','$img_prd','$desc_prd','$id_cate')";
    pdo_execute($sql);
}
function update_prd($id_prd, $name_prd, $price_prd, $img_prd, $desc_prd, $id_cate)
{
    $sql = "UPDATE `product` SET `name_prd`='$name_prd',`img_prd`='$img_prd',`price_prd`='$price_prd',`desc_prd`='$desc_prd',`id_cate`='$id_cate' WHERE id_prd = $id_prd";
    pdo_execute($sql);
}

function delete_prd($id_prd)
{
    $sql = "DELETE FROM `product` WHERE id_prd = $id_prd";
    pdo_execute($sql);
}
