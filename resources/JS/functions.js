 function showCoInvestigatorDiv() {
        if (document.getElementById('coinvestigator').value === 'yes') {
            document.getElementById('coInvestigatorDiv').style.display = 'block';

        } else {
            document.getElementById('coInvestigatorDiv').style.display = 'none';
        }
    }
    function showNumberOfInvestigatorsDiv() {
        //if (document.getElementById('numberOfInvestigators').value == '3') {
        //document.getElementById('numberOfInvestigatorsDiv').style.display = 'block';
        //}

        var numberOfInvestigators = 5;
        //document.getElementById('numberOfInvestigators').value;
        var i = 0;
        while (i < numberOfInvestigators) {
            document.getElementById('numberOfInvestigatorsDiv').style.display === "block";
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
            document.getElementById('collaborationDiv').style.display = 'block';

        } else {
            document.getElementById('collaborationDiv').style.display = 'none';
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