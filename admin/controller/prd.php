<?php

function act_add_prd()
{
    if (isset($_POST['btn_add_prd'])) {
        $name_prd = $_POST['name_prd'];
        $price_prd = $_POST['price_prd'];
        $desc_prd = $_POST['desc_prd'];
        $id_cate = $_POST['id_cate'];
        $file = $_FILES['img_prd'];
        $img_prd = $file['name'];

        $error = [];
        if ($file['size'] > 0) {
            $ext = pathinfo($img_prd, PATHINFO_EXTENSION);
            if ($ext != "png" && $ext != "jpg") {
                $error['image'] = "Bạn phải nhập ảnh có đuôi png hoặc jpg";
            } elseif ($file['size'] >= 1024 * 1024 * 2) {
                $error['image'] = "Ảnh không được lớn 2Mb";
            }
        }
        if (!$error) {
            add_prd($name_prd, $price_prd, $img_prd, $desc_prd, $id_cate);
            move_uploaded_file($file['tmp_name'], "../image/img_prd/" . $img_prd);
        }
    }
}

function act_delete_prd()
{
    if (isset($_GET['id_prd'])) {
        delete_prd($_GET['id_prd']);
    }
}

function act_update_prd()
{
    if (isset($_POST['btn_update_prd'])) {
        $id_prd = $_POST['id_prd'];
        $img_prd = $_POST['img_prd'];
        $name_prd = $_POST['name_prd'];
        $price_prd = $_POST['price_prd'];
        $desc_prd = $_POST['desc_prd'];
        $id_cate = $_POST['id_cate'];
        $file = $_FILES['img_prd'];
        $img_prd = $file['name'];

        $error = [];
        if ($file['size'] > 0) {
            $img_prd = $file['name'];
            $ext = pathinfo($img_prd, PATHINFO_EXTENSION);
            if ($ext != "png" && $ext != "jpg") {
                $error['image'] = "Bạn phải nhập ảnh có đuôi png hoặc jpg";
            } elseif ($file['size'] >= 1024 * 1024 * 2) {
                $error['image'] = "Ảnh không được lớn 2Mb";
            }
        }
        if (!$error) {
            update_prd($id_prd, $name_prd, $price_prd, $img_prd, $desc_prd, $id_cate);
            move_uploaded_file($file['tmp_name'], "../image/img_prd/" . $img_prd);
        }
    }
}
