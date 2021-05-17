
<?php include('server.php') ?>
<?php
        session_start();
        if (!isset($_session['username'])) {
            $_session['msg'] = "you must log in first";
            header('location: login.php');
        }
        if (isset($_GET['logout'])){
            session_destroy();
            unset($_session['username']);
            header('location: login.php');
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

        .navbar-nav{

        }
        .input-group{
            padding: 10px;
            padding-right: 8cm;
            padding-left: 3cm;

        }

        .jumbotron{
            margin-bottom: 0px;
            background-color: aqua;

            font-family: myFirstFont;
            src: url(sansation_light.woff);

        }

    </style>



</head>
<body>
    <div class="header">
        <h2>Home page</h2>
    </div>

    <div    class="content">
        <!-- logged in user informatiion -->

        <?php  if (isset($_session['username'])) : ?>
        <p> Welcome <strong><?php echo $_session['username']; ?></strong></p>
        <p><a href"index.php?logout='1'" style="color: re;"> Logout</a></p>
        <?php  endif ?>

    </div>
<div class="jumbotron">
    <div class="container text-center">
        <h1>LaoStudy</h1>
        <p>Provided by Ministry of education and sport, Laos. Non-Government Organization ( UN )</p>
    </div>
</div>

<!--navbar-header-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">

            <!--Input-->
            <ul class="nav navbar-nav">

                <li><a class="navbar-brand" href="laocourse.php">Laos Course</a></li>
                <li><a class="navbar-brand" href="intercourse.php">International Course</a></li>

            </ul>

            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>







</body>




</html>




