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
</head>
<body>

    <div class="container" id="container">
        <?php include("includes/header.php");?>
        <?php include("includes/nav.html");?>
        <div id="content">

        <div id="innerContainer">

         <div id="memberHistorySearch" >
                        <form id="memberIdSearch" action="generalqueryresultsmember.php" method="POST">
                        <div> <h4> Search Member Claim History:</h4></div>
                            <input id="memberID" type="text" name="memberID" placeholder="Member ID" value=""><br>
                            <input class="btn_nav2"  id="submit" type="submit" value="Run">
                            <input class="btn_nav2" type="button" onclick="clearFunction('memberIdSearch')" value="Clear" style="margin-top:15px;">
                        </form>
                    </div>

            </div>

            <div id="billedVersusPaid" >
                        <form id="paidAmtSearch" action="generalqueryresultstotalpaid.php" method="POST">
                        <div> <H4> View Total Billed Versus Paid: </H4></div>
                            <input id="fromDate" type="text" name="fromDate" data-toggle="tooltip" data-placement="bottom" title="Must be YYYY-MM-DD Format" placeholder="From Date" value="" ><br>
                            <input id="toDate" type="text" name="toDate" data-toggle="tooltip" data-placement="bottom" title="Must be YYYY-MM-DD Format" placeholder="To Date" value="" style="margin-top:5px;" ><br>
                            <input class="btn_nav2" id="submit" style="margin-top:10px;"  type="submit" value="Run">
                            <input class="btn_nav2" type="button" style="margin-top:15px;" onclick="clearFunction('paidAmtSearch')" value="Clear">
                        </form>
                             
                    </div>

            </div>
            
            <!--JS Clear Applicable Form-->
            <script>
                function clearFunction(formId) {
                        document.getElementById(formId).reset();
                }
            </script>  
             
             <!--JS Date Tooltip-->
             <script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();   
                    });
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

