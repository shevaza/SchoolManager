<?php
include "../config/dbconfig.php";

switch ($_POST['action']) {
    case 'update_school':
        mysqli_query($mysqli, "UPDATE `school` SET `name` = '$_POST[school]'");
        return print_r("success");
        break;
        
        default:
        return print_r("err");
        break;
    }
