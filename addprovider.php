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
        <?php include("includes/nav.html");?><br>
        <div style="margin-left:50px"><h4>ADD NEW PROVIDER</h4></div><br>
        
      <?php  session_start();
                    if(!isset($_SESSION['username']))
                    {
                        header("Location:index.php");
                    }
        ?>
        
		<div id="addprovider" >
            <form method="post" action="processaddprovider.php" class="inputForm">
                <label for="providerID">Provider ID</label><br>
                <input type = "text" id="providerID" name="providerID" autofocus ><br>
                <label for="providerFName">Provider First Name</label><br>
                <input type = "text" id="providerFName" name="providerFName" ><br>
                <label for="providerLName">Provider Last Name</label><br>
                <input type = "text" id="providerLName" name="providerLName" ><br>
                <label for="providerEff">Provider Effective Date (YYYY-MM-DD)</label><br>
                <input type = "text" id="providerEff" name="providerEff" ><br>
                <label for="providerTerm">Provider Termination Date (YYYY-MM-DD)</label><br>
                <input type = "text" id="providerTerm" name="providerTerm" ><br>
                <label for="ssn">Social Security Number</label><br>
                <input type = "text" id="ssn" name="ssn" ><br>
                <label for="contactNbr">Contact Number</label><br>
                <input type = "text" id="contactNbr" name="contactNbr" ><br>
                <label for="providerEmail">Provider Email</label><br>
                <input type = "text" id="providerEmail" name="providerEmail" ><br>
                <br><br>
                <input type="submit" name="submit" value="Add Provider" class="btn" >

            </form>
		</div>
        
    </div>
                <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

