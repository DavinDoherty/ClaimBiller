<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Medical Claim Biller</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/page_text.css">
    <link rel="stylesheet" href="css/forms.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <div class="container" id="container">
        <?php include("includes/header.php");?>
        <?php include("includes/nav.html");?>
        <div id="content">

        <div id="innerContainer">

         <div id="editprovidersearch" >
                        <form id="memberIdSearch" action="generalqueryresultsmember.php" method="POST">
                        <div> <h4> Search Member Claim History:</h4></div>
                            <input id="memberID" name="memberID" placeholder="Member ID" value="" ><br>
                            <input id="submit" type="submit" value="Run">
                            <input type="button" onclick="clearFunction('memberIdSearch')" value="Clear">
                        </form>
                            
                             
                    </div>

            </div>

            <div id="editprovidersearch" >
                        <form id="paidAmtSearch" action="generalqueryresultstotalpaid.php" method="POST">
                        <div> <H4> View Total Billed Versus Paid:</H4></div>
                            <input id="fromDate" style="width:250px;" name="fromDate" placeholder="From Date (YYYY-MM-DD)" value="" ><br>
                            <input id="toDate" style="width:250px;" name="toDate" placeholder="To Date (YYYY-MM-DD)" value="" ><br>
                            <input id="submit" type="submit" value="Run">
                            <input type="button" onclick="clearFunction('paidAmtSearch')" value="Clear">
                        </form>
                            
                             
                    </div>

            </div>

            <script>
                function clearFunction(formId) {

                    
                        document.getElementById(formId).reset();
                    
                   
                }
            </script>

        </div> <!--Content Div-->

         <div id="footer">
        <?php include("includes/footer.html");?>
        </div>
        
    </div> <!--Container Div-->


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

