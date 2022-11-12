<?php
include_once "../model/connect.php";
include_once "view/header.php";
include_once "controller/prd.php";
include_once "model/prd.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'show_prd':
            include "product/show_prd.php";
            break;

        case 'form_add_prd':
            include "product/add_prd.php";
            break;

        case 'add_prd':
            act_add_prd();
            include "product/show_prd.php";
            break;
        case 'delete_prd':
            act_delete_prd();
            include "product/show_prd.php";
            break;

        case 'form_update_prd':
            if (isset($_GET['id_prd'])) {
                $prd = show_one_prd($_GET['id_prd']);
            }
            include "product/update_prd.php";
            break;
        case 'update_prd':
            act_update_prd();
            include "product/show_prd.php";
            break;
    }
}

include_once "view/footer.php";
