<?php
    session_start();
    $errors = array();
    if (isset($_post['reg_user'])){
        $username = mysqli_real_escape_string($conn);
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body{

            font-size: 120%;
            background:#f8f8f8;

        }
        .header{
            width:100%;
            margin:50px auto 0px;
            color: white;
            background: #5f9ea0;
            text-align: center;
            border: 1px solid #b0c4de;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
        }
        form, .content{
            width: 30%;

            margin: 0px auto;
            padding: 20px;
            border: 1px solid #b0c4de;
            background: white;
            border-radius: 0px 0px 10px 10px;
        }
        .input-group{
            margin: 10px 0px 10px 0px;
        }
        .input-group {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .btn{
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5f9ea0;
            border: none;
            border-radius: 5px;
        }
        .error{
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border:1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }
        .success{
            color: #3c763d;
            background: #dff9d8;
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }


    </style>




</head>

<body>
<form action="/action_page.php">

    <div class="form-group">
        <label for="email">Name:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="email">Surname:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control"  id="pwd">

    </div>


    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>


</html>
