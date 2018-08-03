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
        
                    <button><a href="submitlookuptool.php">Lookup</a></button>

                    <table id="submitclmdetail" style="width:250px; border: 1px solid yellow;";>
                   <tr>
                            <td style="width:70%; border: 1px solid green;">
                            
                        
                                <div class="submitclaim" style="padding-top=10px;" >
                                    <form method="post" style="width:400px; border: 1px solid yellow;" action="processaddprovider.php" id="submitclmform" >
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
                                        
                                        
                                        <br><br><br><br>
                                        <div id="submitclaimbutton"> <input type="submit" name="submit" value="Submit" class="btn" ></div>

                                    </form>
                                </div>
                        </td>
                        <td>
                                <form method="post" style="width:400px; border: 1px solid yellow;" action="processaddprovider.php" id="submitclmform" >
                                    <tr>
                                        <td style="width:50%; border: 1px solid pink;">
                                                <label id="labelsize" for="providerID">Proc Code:</label>
                                        </td>
                                        <td>
                                                <input type = "text" style="min-width:150px; margin-top:5px;" name="providerID" autofocus ><br>
                                                <label id="labelsize" for="providerFName">Member ID:</label>
                                        </td>
                                        <td>
                                                <input type = "text" style="min-width:150px; margin-top:5px;" name="providerFName" ><br><br>
                                        </td>
                                </form>
                        </td>
                

                </tr>
                        </table>
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

