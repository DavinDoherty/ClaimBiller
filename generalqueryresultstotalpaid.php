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

       <?php   

session_start();
if(!isset($_SESSION['username']))
{
    header("Location:index.php");
}

$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"claimbiller");	

$fromDate=$_POST['fromDate'];
$toDate=$_POST['toDate'];


$sql="SELECT SUM(d.amtBilled) As BilledAmt, SUM(d.insurerPaidAmt) As PaidAmt
      FROM claim_detail d
      JOIN claim_header h ON h.claimID = d.claimRef
      WHERE h.submittedDate BETWEEN '$fromDate' AND '$toDate'";

echo "<div style='margin-left:-30px'>Billed Vs Paid Results:</div><br>";


$result=mysqli_query($link,$sql);

if(mysqli_num_rows($result) > 0)
{
    echo "<table class='tbl_openclaims' width='45%' cellspacing='0'>";
    
    echo"<tr>
            <th>From Date </th>
            <th>To Date</th>
            <th>Total Billed</th>
            <th>Total Paid </th>
        </tr>";

    while($row=mysqli_fetch_array($result))
    {
        $totalBilled=number_format((float)$row["BilledAmt"], 2, '.', '');
        $totalPaid=number_format((float)$row["PaidAmt"], 2, '.', '');
       
        echo "<tr >
        <td style='min-width:40px;' align='center'>$fromDate</td>
        <td style='min-width:40px;'>$toDate</td>
        <td style='min-width:30px;'>$totalBilled</td>
        <td style='min-width:30px;'>$totalPaid</td>
       
        </tr>";
       
    }
    echo "</table>";
}
else
{
    echo"No Records Found";
}

mysqli_close($link);

?>

<br><button class="btn_nav2" onclick="history.go(-1);" style="margin-left:-30px;">Back </button>
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

