<?php
require_once("registration_model.php");
 if (isset($_POST["LoginData"])) {
    //
      
      $rollno=$_POST["rollno"];
      $password=$_POST["password"];
      $registrationObj= new Registration();
      $registrationObj->signinUuser($rollno,$password);
    }

 
?>
<html>
<head>


<link href="navbar.css" rel="stylesheet" type="text/css">

 
</head>
<body>
<?php require_once("headers/headerIndex.php"); ?>
   <div class="container">

    <form class="well form-horizontal" action="login.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Login Here</b></h2></center></legend><br>

<div class="form-group">
  <label class="col-md-4 control-label">RollNO</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="rollno" placeholder="RollNo" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>


<!-- Select Basic -->

<!-- Success message -->
<!--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>-->

<!-- Button -->
<div class="form-group">
  <label

   class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="LoginData" value=" Login " >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	<input type="reset" class="btn btn-danger" value="Reset">
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
	

<?php include("headers/footer.php"); ?>