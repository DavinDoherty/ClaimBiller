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
    <?php header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache"); ?>
</head>
<body>

    <div class="container" id="container">
        <?php include("includes/header.html");?>
        <?php include("includes/nav.html");?>
        <div id="content">

         
                
                    <div><h3>SUBMIT NEW CLAIM</h3></div><br><br>
        
                    <div>Provider/Member Lookup Tool:</div>
                    <button><a href="submitlookuptool.php">Lookup</a></button>

                <form method="post" id="submitclmform" action="processsubmit.php" style="width:90%;" >
                            
                    <TABLE  style= "width:100%; margin-top: 0px;" >
                        <TD>
                        <TABLE style="margin-top:0px; width:90%;">
                            <TR>
                                <TD style="width:25%; margin-top: 0px;">
                                            <div style="margin-top:-200px; width:350px;"> 
                                                <label id="labelsize" for="providerID">Provider ID</label>
                                                <input type = "text" style="min-width:100px; margin-top:5px;" name="providerID" autofocus ><br>
                                                <label id="labelsize" for="providerFName">Member ID:</label>
                                                <input type = "text" style="min-width:100px; margin-top:5px;" name="memberID" ><br><br>
                                                
                                                <label id="labelsize" for="providerLName">From DOS: </label>
                                                <input type = "text" style="min-width:100px; margin-top:5px;" name="fromDOS" ><br>
                                                <label id="labelsize" for="providerLName">To DOS:</label>
                                                <input type = "text" style="min-width:150px;  margin-top:5px;" name="toDOS" ><br><br>
                                                
                                                <label id="labelsize" for="providerLName">Diagnosis1</label>
                                                <input type = "text" style="min-width:100px; margin-top:5px;" name="diagnosis1" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis2: </label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis2" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis3:</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis3" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis4</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis4" ><br>
                                                <label id="labelsize" for="providerLName">Diagnosis5</label>
                                                <input type = "text" style="min-width:100px;  margin-top:5px;" name="diagnosis5" ><br>
                                            </div>
                                </TD>
                                 <TD style="width:75%;">
                                <table style="margin-top:150px; margin-left:50px;">
                                  <div style="margin-top:0px;">
                                        <label for="line" style="width:50px; margin-top:5px; margin-left:5px;">Line</label> 
                                        <label  for="detailDOS" style="width:120px; margin-top:5px; margin-left:5px;">Detail DOS </label>
                                        <label  for="procCode" style="width:100px; margin-top:5px; margin-left:5px;">Proc Code </label>
                                        <label  for="mod1" style="width:50px; margin-top:5px; margin-left:5px;">Mod1</label>
                                        <label  for="mod2" style="width:50px; margin-top:5px; margin-left:5px;">Mod2</label>
                                        <label  for="amtBilled" style="width:150px; margin-top:5px; margin-left:5px;">Amt Billed</label><br>
                                        </tr>
                                        <tr>
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_1" value="1"  autofocus >
                                        <input type = "text" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_1" placeholder="YYYY-MM-DD">
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_1" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_1" placeholder="##">
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_1" placeholder="##">
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_1" placeholder="##.##" ><br>
                                        </tr>
                                        <tr>
                                        
                                        <input type = "text" id="ln2" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_2" tabindex="-1">
                                        <input type = "text" id="dos_2" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_2" placeholder="YYYY-MM-DD" oninput="lineNbrFunction2()">
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_2" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_2" placeholder="##">
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_2" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_2" placeholder="##.##"><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction2() {
                                            var x = document.getElementById("dos_2").value;
                                            document.getElementById("ln2").value = "2";
                                        }
                                        </script>
                                        <tr>
                                        <input type = "text" id="ln3" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_3" tabindex="-1">
                                        <input type = "text" id="dos_3" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_3" placeholder="YYYY-MM-DD" oninput="lineNbrFunction3()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_3" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_3"  placeholder="##">
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_3" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_3" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction3() {
                                            var x = document.getElementById("dos_3").value;
                                            document.getElementById("ln3").value = "3";
                                        }
                                        </script>
                                        <tr>
                                        <input type = "text" id="ln4" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_4" tabindex="-1">
                                        <input type = "text" id="dos_4" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_4" placeholder="YYYY-MM-DD" oninput="lineNbrFunction4()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_4" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_4" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_4" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_4" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction4() {
                                            var x = document.getElementById("dos_4").value;
                                            document.getElementById("ln4").value = "4";
                                        }
                                        </script>
                                        <tr>
                                        <input type = "text" id="ln5" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_5" tabindex="-1">
                                        <input type = "text" id="dos_5" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_5" placeholder="YYYY-MM-DD" oninput="lineNbrFunction5()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_5" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_5" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_5" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_5" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction5() {
                                            var x = document.getElementById("dos_5").value;
                                            document.getElementById("ln5").value = "5";
                                        }
                                        </script>
                                        <tr>
                                        <input type = "text" id="ln6" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_6" tabindex="-1">
                                        <input type = "text" id="dos_6" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_6" placeholder="YYYY-MM-DD" oninput="lineNbrFunction6()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_6" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_6" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_6" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_6" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction6() {
                                            var x = document.getElementById("dos_6").value;
                                            document.getElementById("ln6").value = "6";
                                        }
                                        </script>    
                                      <tr>
                                        <input type = "text" id="ln7" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_7" tabindex="-1">
                                        <input type = "text" id="dos_7" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_7" placeholder="YYYY-MM-DD" oninput="lineNbrFunction7()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_7" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_7" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_7" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_7" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction7() {
                                            var x = document.getElementById("dos_7").value;
                                            document.getElementById("ln7").value = "7";
                                        }
                                        </script>    
                                        <tr>
                                        <input type = "text" id="ln8" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_8" tabindex="-1">
                                        <input type = "text" id="dos_8" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_8" placeholder="YYYY-MM-DD" oninput="lineNbrFunction8()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_8" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_8" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_8" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_8" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction8() {
                                            var x = document.getElementById("dos_8").value;
                                            document.getElementById("ln8").value = "8";
                                        }
                                        </script>    
                                        <tr>
                                        <input type = "text" id="ln9" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_9" tabindex="-1">
                                        <input type = "text" id="dos_9" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_9" placeholder="YYYY-MM-DD" oninput="lineNbrFunction9()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_9" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_9" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_9" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_9" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction9() {
                                            var x = document.getElementById("dos_9").value;
                                            document.getElementById("ln9").value = "9";
                                        }
                                        </script>    
                                        <tr>
                                        <input type = "text" id="ln10" style="width:50px; margin-top:5px; margin-left:5px;" name="detailLine_10" tabindex="-1">
                                        <input type = "text" id="dos_10" style="width:120px; margin-top:5px; margin-left:5px;" name="detailDOS_10" placeholder="YYYY-MM-DD" oninput="lineNbrFunction10()" >
                                        <input type = "text" style="width:100px; margin-top:5px; margin-left:5px;" name="procCode_10" placeholder="#####" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod1_10" placeholder="##" >
                                        <input type = "text" style="width:50px; margin-top:5px; margin-left:5px;" name="procMod2_10" placeholder="##" >
                                        <input type = "text" style="width:150px; margin-top:5px; margin-left:5px;" name="amtBilled_10" placeholder="##.##" ><br>
                                        </tr>
                                        <script>
                                        function lineNbrFunction10() {
                                            var x = document.getElementById("dos_10").value;
                                            document.getElementById("ln10").value = "10";
                                        }
                                        </script>    
                                           <tr> 
                                           <div id="submitclaimbutton"> <input type="submit" name="submit" value="Submit" class="btn" ></div>
                                            </tr>
                                        
                                    </div>
                                   </table>
                                </TD>
                            </TR>
                        
                            </table>
                        </TD>
                    </TABLE>
                    <br><br><br><br>
                    
                

                
            </form>
           
             
            </div> <!--Content Div-->

            <div id="footer">
                <?php include("includes/footer.html");?>
            </div> <!--Footer Div-->
    
    </div> <!--Container Div-->


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

