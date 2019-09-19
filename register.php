
<?php
	require_once("registration_model.php");
	if(isset($_POST["SubmitData"])){
		$registerObj= new Registration();
		$registerObj->register_user();
	}
?>
<html>
<head>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="register.css" rel="stylesheet" type="text/css">
</head>
<body>

   <div class="container">

    <form class="well form-horizontal" action="index.php" method="post"  id="contact_form" onsubmit="return validateForm()" name="myForm">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<div class="form-group">
  <label class="col-md-4 control-label">RollNO</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="rollno" placeholder="RollNO" class="form-control"  type="text"  required
                data-fv-notempty-message="The password is required" />
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="firstname" placeholder="First Name" class="form-control"  type="text"  required
                data-fv-notempty-message="The password is required" />
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lastname" placeholder="Last Name" class="form-control"  type="text" required
                data-fv-notempty-message="The password is required" />
    </div>
  </div>
</div>
 
 <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text"  required
                data-fv-notempty-message="The password is required" />
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password"  required
                data-fv-notempty-message="The password is required" />
    </div>
  </div>
</div>





<!-- Select Basic -->

<!-- Success message -->
<!--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="SubmitData" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	<input type="reset" class="btn btn-danger" value="Reset">
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->


    <script type="text/javascript">
     /* function validateForm() {
        var x = document.forms["myForm"]["rollno"].value;
         if (x == "") {
        alert("RollNo must be filled out");
        return false;
        }
        else
        var x = document.forms["myForm"]["firstname"].value;
         if (x == "") {
        alert("First Name must be filled out");
        return false;
        }
        else
        var x = document.forms["myForm"]["lastname"].value;
        if (x == "") {
        alert("Last Name must be filled out");
        return false;
        }
        else
        var x = document.forms["myForm"]["email"].value;
        if (x == "") {
        alert("E-Mail must be filled out");
        return false;
        }
        else
        var x = document.forms["myForm"]["password"].value;
        if (x == "") {
        alert("Password Name must be filled out");
        return false;
        }
      }*/
    </script>
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>