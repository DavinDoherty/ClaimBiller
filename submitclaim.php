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

            <div id="innerContainer" style="width:100%;">
                

                    <div><h5>SUBMIT NEW CLAIM</h5></div>
        
                    <button><a href="submitlookuptool.php">Lookup</a></button>

<form method="post" id="submitclmform" action="processsubmit.php" style="width:90%;" >
                  
<TABLE  style= "border: 1px solid green; width:100%;" >
                    <TD>
                        <TABLE style="margin-top:0px; width:90%; border: 5px solid red;">
                            <TR style="border: 2px solid blue;">
                                <TD style="width:25%;border: 2px solid yellow;">
                                
                                            
                                                <label id="labelsize" for="providerID">Provider ID:</label>
                                                <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus ><br>
                                                <label id="labelsize" for="providerFName">Member ID:</label>
                                                <input type = "text" style="min-width:150px; margin-top:5px;" name="memberID" ><br><br>
                                                
                                                <label id="labelsize" for="providerLName">From DOS</label>
                                                <input type = "text" style="min-width:150px; margin-top:5px;" name="fromDOS" ><br>
                                                <label id="labelsize" for="providerLName">To DOS</label>
                                                <input type = "text" style="min-width:150px;  margin-top:5px;" name="toDOS" ><br><br>
                                                
                                                <label id="labelsize" for="providerLName">Diagnosis1</label>
                                                <input type = "text" style="min-width:100px; margin-top:5px;" name="diagnosis1" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis2</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis2" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis3</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis3" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis4</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis4" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis5</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis5" ><br>
                                                                                    
                                        
                                    

                                </TD>
                                 <TD style="width:75%;border: 5px solid pink;">
                                <table style="margin-top:150px; margin-left:50px; border: 0px solid black;">
                                  <div style="margin-top:0px; border: 5px solid black;">
                                        <label for="providerID" style="width:80px; margin-top:5px; margin-left:5px;">Line Nbr </label> 
                                        <label  for="providerID" style="width:150px; margin-top:5px; margin-left:5px;">Proc Code </label>
                                        <label  for="providerID" style="width:150px; margin-top:5px; margin-left:5px;">Detail DOS </label>
                                        <label  for="providerID" style="width:50px; margin-top:5px; margin-left:5px;">Mod1</label>
                                        <label  for="providerID" style="width:50px; margin-top:5px; margin-left:5px;">Mod2</label>
                                        <label  for="providerID" style="width:150px; margin-top:5px; margin-left:5px;">Amt Billed</label><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="detailLine_1" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="procCode_1" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="detailDOS_1" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_1" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_1" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_1" autofocus ><br>
                                        </tr>
                                        <tr>
                                        
                                        <input type = "text" id="ln2" style="width:80px; margin-top:5px; margin-left:5px;" name="detailLine_2" autofocus >
                                        <input type = "text" id="dos_2" style="width:150px; margin-top:5px; margin-left:5px;" name="detailDOS_2" oninput="lineNbrFunction()">
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="procCode_2" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_2" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_2" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_2" autofocus ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction() {
                                            var x = document.getElementById("dos_2").value;
                                            document.getElementById("ln2").value = "2";
                                        }
                                        </script>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="detailLine_3" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="detailDOS_3" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="procCode_3" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_3" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_3" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_3" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="detailLine_4" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="detailDOS_4" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="procCode_4" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_4" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_4" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_4" autofocus ><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:80px; margin-top:5px; margin-left:5px;" name="detailLine_5" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="detailDOS_5" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="procCode_5" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_5" autofocus >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_5" autofocus >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_5" autofocus ><br>
                                                                                    
                                        
                                    </div>
                                    </table>
                                </TD>
                            </TR>
                        </TABLE>

                    </TD>
                   
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

