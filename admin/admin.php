<?php 
session_start();

if(!isset($_SESSION["role"])){
  header("Location:../index.php");
  }
 ?>
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
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="../navbar.css" rel="stylesheet">
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
           <!-- <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              
            </ul>-->
            <!-- Example split danger button -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../LogOut.php">LogOut</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
    <form action="admin.php" method="post">
        <div class="jumbotron" align="center">
              <h2>Hello <?php echo $_SESSION["role"]; 
                            //  echo $_SESSION["admin"];
              ?></h2>
                <?php
                $saif=null;
                if(isset($_POST["saif"])) {
                  $_SESSION["open"]="open";
                  echo "<script>alert('Quiz Sesssion Open');</script>";
                  }
                ?>
                <input type="submit" name="saif" />
          <a class="btn btn-lg btn-primary" href="../user/view_result.php" role="button">View Result &raquo;</a>
          <a class="btn btn-lg btn-success" href="../mcq/add_mcq.php" role="button">Add MCQ &raquo;</a>
        	<a class="btn btn-lg btn-danger" href="../mcq/view_mcq.php" role="button">View MCQ &raquo;</a>
      	 <a class="btn btn-lg btn-primary" href="../user/view_user.php" role="button">View Users &raquo;</a>
        </div>
    </form>
	  
	 

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
