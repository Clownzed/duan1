<?php

function show_cate()
{
    $sql = "SELECT * FROM `category`";
    $cate =  pdo_query($sql);
    return $cate;
}
function show_one_cate($id_cate)
{
    $sql = "SELECT * FROM `category` WHERE id_cate = $id_cate";
    $cate = pdo_query_one($sql);
    return $cate;
}

function add_cate($name_cate, $img_cate, $desc_cate, $id_staff)
{
    $sql = "INSERT INTO `category`(`name_cate`, `img_cate`, `desc_cate`, `id_staff`) VALUES ('$name_cate','$img_cate','$desc_cate','$id_staff)')";
    pdo_execute($sql);
}
function update_cate($id_cate, $name_cate, $img_cate, $desc_cate, $id_staff)
{
    $sql = "UPDATE `category` SET `name_cate`='$name_cate',`img_cate`='$img_cate',`desc_cate`='$desc_cate',`id_staff`='$id_staff' WHERE id_cate = $id_cate";
    pdo_execute($sql);
}

function delete_cate($id_cate)
{
    $sql = "DELETE FROM `category` WHERE id_cate = $id_cate";
    pdo_execute($sql);
}
