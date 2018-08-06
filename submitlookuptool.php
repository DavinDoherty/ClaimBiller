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
                

                    <div id="editprovidersearch" >
                        <form action="submitprovsearchID.php" method="POST">
                        <div> <label> PROVIDER</label><br></div>
                            <input id="provID" name="provID" placeholder="Search by ID" value="" >
                            <input id="submit" type="submit" value="Search">
                        </form>
                            
                                <div id="editprovidersearchName" >
                                    <form action="submitprovidersearchName.php" method="POST">
                                    <input id="provFName" name="provFName" value="" placeholder="First Name ">
                                    <input id="provLName" name="provLName" value="" placeholder="Last Name" >
                                    <input id="submit" type="submit" value="Search">
                                   
                                </form>
                                </div>

                    </div>

                    
                
            </div> <!--Content Div-->

            <div id="footer">
                <?php include("includes/footer.html");?>
            </div>
    </div>
    </div> <!--Container Div-->


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

