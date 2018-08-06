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

            <div id="innerContainer" style="border:1px solid blue;">
                

                    <div><h5>SUBMIT NEW CLAIM</h5></div>
        
                    <button><a href="submitlookuptool.php">Lookup</a></button><br>

                   <form method="post" style="width:60%; border: 1px solid yellow;" action="processaddprovider.php" id="submitclmform" >
                            <TABLE>
                                <TD>
                                        <tr>
                                        <label id="labelsize" for="providerID">Line Nbr</label> 
                                        <label id="labelsize" for="providerID">Proc Code</label>
                                        <label id="labelsize" for="providerID">Detail DOS</label>
                                        <label id="labelsize" for="providerID">Mod1</label>
                                        <label id="labelsize" for="providerID">Mod2</label>
                                        <label id="labelsize" for="providerID">Amt Billed</label><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus >
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus >
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus >
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus >
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus >
                                        </tr>
                                </TD>
                            </TABLE>
                    </form>
                  

                      

            </div> <!--Inner Content Div-->

            <div id="footer">
                <?php include("includes/footer.html");?>
            </div> <!--Footer Div-->
    
    </div> <!--Container Div-->


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

