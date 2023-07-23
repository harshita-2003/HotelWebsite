<?php
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'HotelWebsite';

    $con = mysqli_connect($hname,$uname,$pass,$db);

    if(!$con){
        die("cannot connect to databse".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }

        return $data;
    }

    // prepared statement
    function select($sql,$values,$datatype){
        // to use con inside function
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatype,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("query cannot be executed - select");
            }
        }
        else{
            die("query cannot be prepared - select");
        }
    }
?>