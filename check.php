<?php

    include_once 'datb.php';

    $user = $_POST['name'];

    $pass = $_POST['password'];

    $connection;
    

    if (isset($_POST['btn'])) {

        

        $sqlL = "SELECT * FROM `userinfo` where username='$user' AND  password='$pass'";

        $reuselt =  mysqli_query($connection,$sqlL) or die('error query');


        $row = $reuselt->num_rows;

        if($row > 0){

            require_once('index.php');

        }else {
            
            echo("hi there");
        }

    }

?>