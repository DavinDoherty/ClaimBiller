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

                <?php  session_start();
                    if(!isset($_SESSION['username']))
                    {
                        header("Location:index.php");
                    }
                ?>

    <div class="container" id="container">
        <?php include("includes/header.php");?>
        <?php include("includes/nav.html");?>
        <div id="content">

            <div id="innerContainer">
                

                    <div id="editprovidersearch" >
                        <form id="provIDsearch" action="submitprovsearchID.php" method="POST">
                        <div> <h3> PROVIDER<br></h3></div>
                        <input class="btn_nav2" type="button" style="margin-top:5px; " onclick="clearFunction('provIDsearch')" value="Clear">
                            <input id="provID" name="provID" placeholder="Search by ID" value="" style="margin-left:5px;" >
                            <input class="btn_nav2" id="submit" type="submit" value="Search">
                          
                        </form>
                            
                                <div id="editprovidersearchName" >
                                    <form id="provNameSearch" action="submitprovsearchName.php" method="POST">
                                    <input class="btn_nav2" type="button" style="margin-top:5px;" onclick="clearFunction('provNameSearch')" value="Clear">
                                    <input style="margin-top:2px; margin-left:5px;" id="provFName" name="provFName" value="" placeholder="First Name ">
                                    <input id="provLName" name="provLName" value="" placeholder="Last Name" >
                                    <input class="btn_nav2" id="submit" type="submit" value="Search">
                                   
                                </form>
                                </div>

                    </div>

                    <div id="editmembersearch" >
                        <form id="memberIDsearch" action="submitmembersearchID.php" method="POST">
                        <div style="margin-top:50px;"> <h3> MEMBER</h3></div>
                        <input class="btn_nav2" type="button" style="margin-top:5px;" onclick="clearFunction('memberIDsearch')" value="Clear">
                            <input  id="memberID" name="memberID" placeholder="Search by ID" value="" >
                            <input class="btn_nav2" id="submit" type="submit" value="Search">
                          
                        </form>
                            
                                <div id="editmembersearchName" >
                                    <form id="memberNameSearch" action="submitmembersearchName.php" method="POST">
                                    <input class="btn_nav2" type="button" style="margin-top:5px;" onclick="clearFunction('memberNameSearch')" value="Clear">
                                    <input style="margin-top:7px;" id="memberFName" name="memberFName" value="" placeholder="First Name ">
                                    <input id="memberLName" name="memberLName" value="" placeholder="Last Name" >
                                    <input class="btn_nav2" id="submit" type="submit" value="Search">
                                    
                                   
                                </form>
                                </div>

                    </div>
                    
                    
                    
                   
                        <br><br><button class="btn_nav2" style="width:100px;" onclick="history.go(-1);">Back </button>

                          <!--JS Clear Applicable Form-->
                        <script>
                        function clearFunction(formId) {
                                document.getElementById(formId).reset();
                        }
            </script>  
                   
                </div> <!--Inner Container-->
                
               
            </div> <!--Content Div-->

            <div id="footer" style="margin-left:-50px">
                <?php include("includes/footer.html");?>
            </div>
 
    </div> <!--Container Div-->


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

