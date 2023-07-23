<?php
    require('inc/essentials.php');
    require('inc/db_config.php');

    session_start();
    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true){
        redirect('dashboard.php');
    }
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
            // echo"got user";
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');
        }
        else{
            alert('warning','Login failed - Invalid Credentials');
        }
    }
?>


    <?php require('inc/scripts.php') ?>
</body>
</html>