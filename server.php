<?php

        $servername= "localhost";
        $username = "root";
        $password = "";
        $dbname = "register_db";
        //create connection

        $conn = mysqli_connect($servername,$username,$password,$dbname);
        // check connection
        if (!$conn) {
            die("connection failed". mysqli_connect_error());
        }
        else {
            echo "connection successfully";
        }



?>