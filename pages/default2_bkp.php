<script type="text/javascript">
    function showCoInvestigatorDiv() {
        if (document.getElementById('coinvestigator').value === 'yes') {
            document.getElementById('coInvestigatorDiv').style.display = 'block';

        } else {
            document.getElementById('coInvestigatorDiv').style.display = 'none';
        }
    }
    function fundingInfo() {
        if (document.getElementById('fundsource').value === 'grant') {
            document.getElementById('grantDiv').style.display = 'block';

        } else {
            document.getElementById('grantDiv').style.display = 'none';
        }
    }
    function showDiv() {
        document.getElementById('fundingDiv').style.display = "block";
        //document.getElementById('fundingInformationButton').style.display = "none";
    }
    function showCollaborationDiv() {
        if (document.getElementById('institutionalcategory').value === 'nonkenyan') {
            document.getElementById('collaborationDiv').style.display = "block";
        }

    }
    function showAcademicQualificationDiv() {
        document.getElementById('academicQualificationDiv').style.display = "block";
        //`document.getElementById('fundingInformationButton').style.display = "none";
    }
    function showProfessionalQualificationDiv() {
        document.getElementById('professionalQualificationDiv').style.display = "block";
        //`document.getElementById('fundingInformationButton').style.display = "none";
    }
</script>
<?php
$type = $_POST['articleType'];
$title = $_POST['articleTitle'];
?>
<!DOCTYPE html>
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
                    <form action="" method="post" accept-charset="UTF-8">
                        <div class="form-group">
                            <label for="articleType">Article Type</label>
                            <input type="text" name="articleType" class="form-control" id="articleType" aria-describedby="emailHelp" value="<?php echo $type ?>" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label for="articleTitle">Title</label>
                            <input type="text" name="articleTitle" class="form-control" id="articleTitle" value="<?php echo $title; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="principalInvestigator">Principal Investigator</label>
                            <input type="text" name="principalInvestigator" class="form-control" id="principalInvestigator" placeholder="principal Investigator" required>
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
                                          <!--<input type="text" name="fundsource" class="form-control" id="fundsource" placeholder="Source of funding" required>-->
                            <label for="coinvestigator">Add Coinvestigator:</label>
                            <select name="coinvestigator" class="form-control" id="coinvestigator" onclick="showCoInvestigatorDiv()">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div id="coInvestigatorDiv" style="display:none;" >
                            <div class="form-group">
                                <label for="grantsource">inve:</label>
                                <input type="text" name="grantsource" class="form-control" id="grantsource" placeholder="grand source" required>
                            </div>
                            <div class="form-group">
                                <label for="awardnumber">inve:</label>
                                <input type="text" name="awardnumber" class="form-control" id="awardnumber" placeholder="award number" required>
                            </div>
                            <div class="form-group">
                                <label for="grandrecipient">Inve:</label>
                                <input type="text" name="grandrecipient" class="form-control" id="grandrecipient" placeholder="grand recipient" required>
                            </div>
                        </div><!--closes invediv-->
                        <!--coInvestigators-->                    
                        <div class="form-group">
                            <label for="coInvestigatorButton"></label>
                            <input type="button" name="coInvestigatorButton" style="display:block;" class="form-control btn-primary" id="coInvestigatorButton" value="Add Co-Investigators" onclick="showcoInvestigatorDiv()" >
                        </div>
                        <!--Funding Information-->
                        <div class="form-group">
                            <label for="fundingInformation"></label>
                            <input type="button" name="fundingInformationButton" style="display:block;" class="form-control btn-primary" id="fundingInformationButton" value="Add Funding Informaton" onclick="showDiv()" >
                        </div>
                        <div id="fundingDiv"  style="display:none;" class="answer_list" > 

                            <div class="form-group">
                             <!--<input type="text" name="fundsource" class="form-control" id="fundsource" placeholder="Source of funding" required>-->
                                <label for="fundsource">Funding Source:</label>
                                <select name="fundsource" class="form-control" id="fundsource" onclick="fundingInfo()">
                                    <option value="self">Self</option>
                                    <option value="grant">Grant</option>
                                </select>
                            </div>
                            <div id="grantDiv" style="display:none;" >
                                <div class="form-group">
                                    <label for="grantsource">Source of Grant:</label>
                                    <input type="text" name="grantsource" class="form-control" id="grantsource" placeholder="grand source" required>
                                </div>
                                <div class="form-group">
                                    <label for="awardnumber">Award Number:</label>
                                    <input type="text" name="awardnumber" class="form-control" id="awardnumber" placeholder="award number" required>
                                </div>
                                <div class="form-group">
                                    <label for="grandrecipient">Grant Recipient:</label>
                                    <input type="text" name="grandrecipient" class="form-control" id="grandrecipient" placeholder="grand recipient" required>
                                </div>
                            </div><!--closes grantdiv-->
                        </div><!--closes funding div-->

                        <div class="form-group">
                            <label for="institutionalcategory">Institutional Category:</label>
                            <select name="institutionalcategory" class="form-control" id="institutionalcategory" onclick="showCollaborationDiv()">
                                <option value="kenyan">Kenyan Institution</option>
                                <option value="nonkenyan">Non Kenyan Institution</option>
                            </select>
                        </div>
                        <div id="collaboratingDiv" style="display:none;">
                            <div class="form-group">
                                <label for="collaboratinginstitution">Collaborating Institution</label>
                                <input type="text" name="collaboratinginstitution" class="form-control" id="collaboratinginstitution" placeholder="Collaborating Institution" required>
                            </div>
                        </div><!--end of collaboratingDiv -->
                        <div class="form-group">
                            <label for="studyType">Study Type</label>
                            <select name="studyType"  class="form-control" required>
                                <option value="Epidemiology">Epidemiology</option>
                                <option value="Sociology">Sociology</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="abstract">Abstract</label>
                            <textarea rows="2" name="abstract" class="form-control" id="abstract" placeholder="paste abstract here" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Provide Index Key words</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Key words here" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn-primary" id="next" value="Next">
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
