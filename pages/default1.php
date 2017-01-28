<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Maseno University Research Portal</title>
        <link rel="shortcut icon" href="../resources/Images/maseno20university.png"  type="image/x-icon"/>
        <!-- Latest compiled and minified CSS -->
        <link href="../resources/CSS/Style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Latest compiled and minified JavaScript -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid header" >
            <img src="../resources/Images/msu_banner2.png" alt="" class="header-img image-responsive"/>
            <h1 class="header-text text-primary text-center">Welcome...</h1>

        </div>
        <div class="navbar navbar-inverse navbar-static-top my-navbar" data-spy="affix" data-offset-top="197">
            <div class="container">
                <a href="maseno.ac.ke" class="navbar-brand">Maseno University Website </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="rows">
              
                <div class="col-md-6 well">
                    <form action="pages/default2.php" method="post" accept-charset="UTF-8">
                        <div class="form-group">
                            <label for="articleType">Article Type</label>
                            <!--<input type="text" name="articleType" class="form-control" id="articleType" aria-describedby="emailHelp" placeholder="article Type" autocomplete="on">-->
							<select name="articleType" required class="form-control">
							<option value="new">New</option>
							<option value="amendment">Amendment</option>
							<option value="revised">Revised</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label for="articleTitle">Title</label>
                            <input type="text" name="articleTitle" class="form-control" id="articleTitle" placeholder="Article Title">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn-primary" id="login" value="Next">

                        </div>
                </div>
               
            </div>
        </div>
    </body>
</html>
