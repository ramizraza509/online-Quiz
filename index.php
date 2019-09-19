<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Quiz </title>
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
    <style type="text/css">
      #para{
        color: #8f8f8f;
      }
    </style>

  </head>

 <body>

    <div class="container">
	<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Online Quiz</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Result</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Sign In <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php"><i class="fa fa fa-user"></i> Register</a></li>
                  <li><a href="login.php"><i class="fa fa fa-sign-in"></i> Log In</a></li>
                  
                  <!--<li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>-->
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <!--<h1>Online Quiz </h1>
        <p>
          <a class="btn btn-lg btn-primary" href="" role="button">View Result &raquo;</a>
        </p>-->


        <?php include_once("register.php"); ?>
      </div>

	 <!--  <footer class="footer navbar-fixed-bottom" id="footer">
      <div class="container">
       
        <h3 align="center">hello ramiz </h3>

      </div>
     </footer>-->
	 <div class="container">
        <div class="well">
          <p align="right" id="para"><i>Designed & Developed by Ramiz Raza</i></p>
        </div>
    </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
  
  </body>
</html>
