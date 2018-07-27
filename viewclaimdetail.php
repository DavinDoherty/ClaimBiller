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
        <?php include("includes/header.html");?>
        <?php include("includes/nav.html");?>
        <div id="content">

        <div id="innerContainer">

        <?php   
                    $server="localhost";
                    $dbuser="root";
                    $password="";
                    $link=mysqli_connect($server,$dbuser,$password);
                    mysqli_select_db($link,"claimbiller");	
                    
                    $claimID = $_GET['claimID'];

                    $sql="SELECT * FROM claimheader WHERE claimID = $claimID ";

                    echo "<br><div style='margin-left:0px'><h4>CLAIM HEADER</h4></div>";

                    $result=mysqli_query($link,$sql);
                    $row=mysqli_fetch_array($result);
                   
                    $memberID=$row["memberID"];
                    $providerID=$row["providerID"];
                    $fromDOS=$row["fromDOS"];
                    $toDOS=$row["toDOS"];
                    $diagnosis1=$row["diagnosis1"];
                    $diagnosis2=$row["diagnosis2"];
                    $diagnosis3=$row["diagnosis3"];
                    $diagnosis4=$row["diagnosis4"];
                    $diagnosis5=$row["diagnosis5"];
                    $submittedDate=$row["submittedDate"];
                    $claimStatus=$row["claimStatus"];
                    $processedDate=$row["processedDate"];
                    $claimPaidDate=$row["claimPaidDate"];
                    $claimPaidAmt=$row["claimPaidAmt"];
                    $checkNbr=$row["checkNbr"];
                    $insurerComments=$row["insurerComments"];

                    echo "<table class='tbl_claimDetail' width='70%' cellspacing='0'>";
                        
                    echo"<tr>
                    <th>Claim ID</th>
                    <th>Member ID</th>
                    <th>Provider ID</th>
                    <th>From DOS</th>
                    <th>To DOS</th>
                    <th>Diagnosis1</th>
                    <th>Diagnosis2</th>
                    <th>Diagnosis3</th>
                    <th>Diagnosis4</th>
                    <th>Diagnosis5</th>
                    </tr>
                    <tr>
                    <td>$claimID</td>
                    <td>$memberID</td>
                    <td>$providerID</td>
                    <td>$fromDOS</td>
                    <td>$toDOS</td>
                    <td>$diagnosis1</td>
                    <td>$diagnosis2</td>
                    <td>$diagnosis3</td>
                    <td>$diagnosis4</td>
                    <td>$diagnosis5</td>
                    </tr>
                    </table><br>

                    <table class='tbl_claimDetail' width='50%' cellspacing='0'>
                    <tr>
                    <th>Submitted Date</th>
                    <th>Claim Status</th>
                    <th>Processed Date</th>
                    <th>Claim Paid Date</th>
                    <th>Claim Paid Amt</th>
                    <th>Check Numberr</th>
                    <th>Insurer Comments</th>
                    </tr>
                    <tr>
                    <td>$submittedDate</td>
                    <td>$claimStatus</td>
                    <td>$processedDate</td>
                    <td>$claimPaidDate</td>
                    <td>$claimPaidAmt</td>
                    <td>$checkNbr</td>
                    <td>$insurerComments</td>
                    </tr>
                    </table>";



                    
                    mysqli_close($link);
                    
                ?>

                
            </div>

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

