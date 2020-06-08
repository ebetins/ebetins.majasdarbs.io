<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "./libs/bootstrap-3.3.7/dist/css/bootstrap.css" rel ="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <script src="./libs/jQuery/jquery.js"></script>
    <script src="./js/my.js"></script>
    <script src="./libs/bootstrap-3.3.7/dist/js/bootstrap.js"> </script>
    <title>Document</title>
    <script>
        $("document").ready(function () {
          
        });
    </script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav  navbar-right">
                <li><a href="index">Jaunumi</a></li>
                <li><a href="kontakti">Kontakti</a></li>
                <li class="active" ><a href="sazina">Saziņa</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="contaier-fluid" id="">
    <div class="row">
		<div class = "col-md-2">
			<p></p>
		</div>
		<div class="col-md-8">
            <form action="sazina" method="post">
                <div class="form-group">
                    <label for="name">Vārds:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Uzvārds:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadiet epastu" name="email">
                </div>
                <div class="form-group">
                    <label for="mobile">Telefons:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="question">Jūsu jautājums:</label>
                    <textarea class="form-control" id="question" rows="3" name="question"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="save">Iesniegt</button>
            </form>
		</div>
		<div class="col-md-2">
			<p></p>
		</div>
    </div>
</div>
<?php

    if (isset($_POST['save'])){
        echo "<b>Vārds:</b>{$_POST['name']}<br/>";
        echo "<b>Uzvārds:</b>{$_POST['surname']}<br/>";
        echo "<b>E-Pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }

?>
</body>
</html>