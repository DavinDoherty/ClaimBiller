<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Medical Claim Biller</title>
    <meta charset="utf-8">
  <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/page_text.css">
    <link rel="stylesheet" href="css/forms.css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

                <?php  session_start();
                    if(!isset($_SESSION['username']))
                    {
                        header("Location:index.php");
                    }
                ?>

    <div class="container" id="container">
    
        <?php include("includes/header.html");?>
            <?php include("includes/nav.html");?>

            <div id="innerContainer">

                <?php   
                    $server="localhost";
                    $dbuser="root";
                    $password="";
                    $link=mysqli_connect($server,$dbuser,$password);
                    mysqli_select_db($link,"claimbiller");	
                    
                    $provFName = $_POST['provFName'];
                    $provLName = $_POST['provLName'];

                    $sql="SELECT * FROM provider WHERE (providerFName LIKE '$provFName%' AND providerLName LIKE '$provLName%') ";
                    
                    echo "<br><br><div style='margin-left:50px'>MATCHING PROVIDERS FOUND</div>";

                    $result=mysqli_query($link,$sql);
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        echo "<table class='tbl_selectProv' width='50%' cellspacing='0'>";
                        
                        echo"<tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Effective</th>
                        <th>Termed</th>
                        <th style='text-align:center;'>Select</th>

                        </tr>";

                        while($row=mysqli_fetch_array($result))
                        {
                            $providerID=$row["providerID"];
                            $providerFName=$row["providerFName"];
                            $providerLName=$row["providerLName"];
                            $providerEff=$row["providerEff"];
                            $providerTerm=$row["providerTerm"];
                            
                            echo "<tr >
                            <td style='width:8%' align='center'>$providerID</td>
                            <td style='min-width:8%'>$providerFName</td>
                            <td style='min-width:10%'>$providerLName</td>
                            <td style='min-width:10%'>$providerEff</td>
                            <td style='min-width:10%'>$providerTerm</td>
                            <td style='min-width:40px'><button class='btn4'><a href='confirmdeleteprovider.php?providerID=$providerID'>DELETE</a></button></td>
                            
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
           
     </div>	
       
               
    </div>
    <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

