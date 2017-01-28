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
        <title>Register</title>
        <link rel="shortcut icon" href="../resources/Images/maseno20university.png"  type="image/x-icon"/>
        <!-- Latest compiled and minified CSS -->
        <link href="../resources/CSS/Style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Latest compiled and minified JavaScript -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">

function showAcademicQualificationDiv() {
   document.getElementById('academicQualificationDiv').style.display = "block";
   //`document.getElementById('fundingInformationButton').style.display = "none";
}
function showProfessionalQualificationDiv() {
   document.getElementById('professionalQualificationDiv').style.display = "block";
   //`document.getElementById('fundingInformationButton').style.display = "none";
}

</script>

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
                    <form action="default2.php" method="post" accept-charset="UTF-8">
					
					
					<div class="form-group">
                            <label for="salutation">Salutation</label>
                            <select name="salutation" required="required" class="form-control">
							<option value="Mr.">Mr.</option>
							<option value="Ms.">Ms.</option>
							<option value="Dr.">Dr.</option>
							<option value="Prof.">Prof</option>
							</select>
                        </div>
					
					<div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name">
                        </div>
					
					<div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="tel" name="phonenumber" class="form-control" id="phonenumber" placeholder="Phone Number" autocomplete="on">
                        </div>
						
						<div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
					
					<div class="form-group">
                            <label for="academicqualificationButton"></label>
                            <input type="button" name="academicqualificationButton" style="display:block;" class="form-control btn-primary" id="academicqualificationButton" value="Add Academic Qualification" onclick="showAcademicQualificationDiv()" >
                        </div>
					
					
					<div id="academicQualificationDiv" style="display:none;">
					   <div class="form-group">
                            <label for="highestacademicqualification">Highest Academic Qualification</label>
                            <input type="text" name="highestacademicqualification" class="form-control" id="highestacademicqualification" placeholder="Highest Academic Qualification">
                        </div>
						<div class="form-group">
                            <label for="highestacademicqualification">Specialization</label>
                            <input type="text" name="highestacademicqualification" class="form-control" id="highestacademicqualification" placeholder="Specialization">
                        </div>
						<div class="form-group">
                            <label for="institution">Institution</label>
                            <input type="text" name="institution" class="form-control" id="institution" placeholder="Institution">
                        </div>
					</div>
					
					<div class="form-group">
                            <label for="professionalQualificationButton"></label>
                            <input type="button" name="professionalQualificationButton" style="display:block;" class="form-control btn-primary" id="professionalQualificationButton" value="Add Professional Qualification" onclick="showProfessionalQualificationDiv()" >
                        </div>
					
					
					<div id="professionalQualificationDiv" style="display:none;">
					   <div class="form-group">
                            <label for="professionalQualification">Professional Job</label>
                            <input type="text" name="professionalQualification" class="form-control" id="professionalQualification" placeholder="">
                        </div>
						<div class="form-group">
                            <label for="jobInstitution">Institution of Work</label>
                            <input type="text" name="jobInstitution" class="form-control" id="jobInstitution" placeholder="Institution">
                        </div>
					</div>
					
					
					
                        <div class="form-group">
                            <input type="submit" class="form-control btn-primary" id="login" value="Next">

                        </div>
                </div>
               
            </div>
        </div>
        
    </body>
</html>
