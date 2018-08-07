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

         
                if(isset($_POST["detailLine_1"]))
                {
                    $detailLine_1=$_POST["detailLine_1"];
                    $procCode_1=$_POST["procCode_1"];
                    $detailDOS_1=date($_POST["detailDOS_1"]);
                  
                  echo $detailLine_1." - ".$procCode_1." - ".$detailDOS_1;
                }
                  

                  if(isset($_POST["detailLine_2"]))
                  {
                      
                    $detailLine_2=$_POST["detailLine_2"];
                    
                    if($detailLine_2 > 0)
                    {
                        $procCode_2=$_POST["procCode_2"];
                        $detailDOS_2=date($_POST["detailDOS_2"]);
                        
                        echo $detailLine_2." - ".$procCode_2." - ".$detailDOS_2;
                      
                    }
                    
                }

                 
                  if(isset($_POST["detailLine_3"]))
                  { 
                      $detailLine_3=$_POST["detailLine_3"];
                      
                      if($detailLine_3 > 0)
                      {
                          $procCode_3=$_POST["procCode_3"];
                          $detailDOS_3=date($_POST["detailDOS_3"]);
                          echo $detailLine_3." - ".$procCode_3." - ".$detailDOS_3;
                         
                      }
              

                }

                 
                 
          
          
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

