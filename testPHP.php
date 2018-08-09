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

<form method="post" id="submitclmform" action="testPHP2.php?rowCount=1" style="width:90%;" >
      
        <TABLE  style= "border: 1px solid green; width:100%;" >
        <TD>
            <TABLE style="margin-top:0px; width:90%; border: 5px solid red;">
                <TR style="border: 2px solid blue;">
                    <TD style="width:25%;border: 2px solid yellow;">
                    
                                
                                   
                    </TD>
                     <TD style="width:75%;border: 5px solid pink;">
                    <table style="margin-top:150px; margin-left:50px; border: 0px solid black;">
                      <div style="margin-top:0px; border: 5px solid black;">
                            <label for="providerID" style="width:50px; margin-top:5px; margin-left:5px;">Line</label> 
                            <label  for="providerID" style="width:120px; margin-top:5px; margin-left:5px;">Detail DOS </label>
                            <label  for="providerID" style="width:100px; margin-top:5px; margin-left:5px;">Proc Code </label>
                           
                            </tr>
                            <tr>
                            <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_1" value="1" autofocus >
                            <input type = "text" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_1" placeholder="YYYY-MM-DD">
                            <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_1" placeholder="#####" ><br>
             
                            </tr>
                            <tr>
                            
                            <input type = "text" id="ln2" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_2" >
                            <input type = "text" id="dos_2" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_2" oninput="lineNbrFunction2()">
                            <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_2" ><br>
                           
                            </tr>
                            <script>
                            function lineNbrFunction2() {
                                var x = document.getElementById("dos_2").value;
                                document.getElementById("ln2").value = "2";
                            }
                            </script>
                            <tr>
                            <input type = "text" id="ln3" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_3" >
                            <input type = "text" id="dos_3" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_3" oninput="lineNbrFunction3()" >
                            <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_3" autofocus ><br>
                           </tr>
                            <script>
                            function lineNbrFunction3() {
                                var x = document.getElementById("dos_3").value;
                                document.getElementById("ln3").value = "3";
                            }
                            </script>
                           
                            
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

