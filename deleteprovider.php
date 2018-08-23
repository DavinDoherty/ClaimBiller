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
    
</head>
<body>

    <div class="container" id="container">
    
        <?php include("includes/header.php");?>
            <?php include("includes/nav.html");?>

            <div id="content"> 
            
            <div id="innerContainer">
            <br>
            <div><h4>CONFIRM DELETE PROVIDER</h4></div>

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
                    
                    $providerID = $_GET['providerID'];

                    echo $providerID;

                    $sql="DELETE FROM provider WHERE providerID = $providerID ";
                    
                    $retval=mysqli_query($link, $sql);
                    if(! $retval)
                    {
                        die('Could not delete provider:'.mysql_error());
                    }
                    else
                    {
                        header("Location: http://localhost/claimbiller/providerdeletedsuccess.php");
                        exit;
                    }
                    mysqli_close($link);
                  
                    ?>

            </div>	
       
                </div>
   
                <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
    </div>

</body>
</html>

