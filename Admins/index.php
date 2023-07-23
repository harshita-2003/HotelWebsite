<?php
 require('inc/db_config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="css/common.css">

    <?php require('inc/links.php'); ?>

    <link rel="icon" href="images/logo.jpg">

    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            text-align: center;
            width: 400px;
        }
        .custom-bg{
            color:white;
            background-color:mediumturquoise;
        }
        .custom-bg:hover{
            background-color:mediumturquoise;
            opacity: 80%;
        }
    </style>
</head>
<body class="bg-light">
    
    <div class="login-form rounded bg-white shadow overflow-hidden">
        <form method="post">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Admin Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>


<?php 
    if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass` =? ";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
        $datatype = "ss";

        $res = select($query,$values,$datatype);
        // print_r($res);
        if($res->num_rows==1){
            echo"got user";
        }
        else{
            echo <<<alert
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            alert;
        }
    }
?>


    <?php require('inc/scripts.php') ?>
</body>
</html>