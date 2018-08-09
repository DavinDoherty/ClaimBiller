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
                

                    <div><h5>SUBMIT NEW CLAIM</h5></div>
        
                    <button><a href="submitlookuptool.php">Lookup</a></button>

<form method="post" id="submitclmform" action="processadd.php" >
                  
<TABLE BORDER="3" CELLPADDING="10" CELLSPACING="10" style= "border: 1px solid green;" >
                    <TD>
                        <TABLE BORDER="3" CELLPADDING="3" CELLSPACING="3" style="margin-top:0px; width:500px; border: 1px solid red;">
                        <TD>
                        <div class="submitclaim"  >
                                    
                                        <label id="labelsize" for="providerID">Provider ID:</label>
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus ><br>
                                        <label id="labelsize" for="providerFName">Member ID:</label>
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerFName" ><br><br>
                                        
                                        <label id="labelsize" for="providerLName">From DOS</label>
                                        <input type = "text" style="min-width:150px; margin-top:5px;" name="providerLName" ><br>
                                        <label id="labelsize" for="providerLName">To DOS</label>
                                        <input type = "text" style="min-width:150px;  margin-top:5px;" name="providerLName" ><br><br>
                                        
                                        <label id="labelsize" for="providerLName">Diagnosis1</label>
                                        <input type = "text" style="min-width:100px; margin-top:5px;" name="providerLName" ><br>
                                        <label id="labelsize" for="providerLName">Diagnosis2</label>
                                        <input type = "text" style="min-width:100px;  margin-top:5px;" name="providerLName" ><br>
                                        <label id="labelsize" for="providerLName">Diagnosis3</label>
                                        <input type = "text" style="min-width:100px;  margin-top:5px;" name="providerLName" ><br>
                                        <label id="labelsize" for="providerLName">Diagnosis4</label>
                                        <input type = "text" style="min-width:100px;  margin-top:5px;" name="providerLName" ><br>
                                        <label id="labelsize" for="providerLName">Diagnosis5</label>
                                        <input type = "text" style="min-width:100px;  margin-top:5px;" name="providerLName" ><br>
                                        
                                        
                                       

                                 
                                </div>

                        </TD>
                       
                        </TABLE>

                    </TD>
                    <TD> 
                    <TABLE>
                                <TD>
                                        <tr>
                                        <label for="providerID" style="width:80px; margin-top:5px; margin-left:5px;">Line Nbr</label> 
                                        <label  for="providerID" style="width:150px; margin-top:5px; margin-left:5px;">Proc Code</label>
                                        <label  for="providerID" style="width:150px; margin-top:5px; margin-left:5px;">Detail DOS</label>
                                        <label  for="providerID" style="width:50px; margin-top:5px; margin-left:5px;">Mod1</label>
                                        <label  for="providerID" style="width:50px; margin-top:5px; margin-left:5px;">Mod2</label>
                                        <label  for="providerID" style="width:150px; margin-top:5px; margin-left:5px;">Amt Billed</label><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="providerID" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="providerID" autofocus ><br>
                                        </tr>
                            

                                </TD>
                            </TABLE>
                    
                    </TD>
                    </TABLE>
                    <br><br><br><br>
                                        <div id="submitclaimbutton"> <input type="submit" name="submit" value="Submit" class="btn" ></div>
</form>
</div>
               
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

