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

        <div id="innerContainer">
               
                <div><font style="font-size:150%">Search For Provider To Delete</font><br>
                <div><h4><font style="color:red">This action should only be carried out for invalid entries.<br>
                If provider has terminated - update the provider's terminition date using the 'Edit Provider' option.</h4></font></div><br>
                
                <div id="editprovidersearch" >
                    <form action="providersearchID_delete.php" method="POST">
                        <label> Search by ID</label><br>
                        <input id="provID" name="provID" value="" >
                        <input id="submit" type="submit" value="Search"><br><br>

                       
                    </form>
                    
                </div>
                <div id="editprovidersearchName" >
                    <form action="providersearchName_delete.php" method="POST">
                        <label> Search by Name</label><br>
                        <input id="provFName" name="provFName" value="" placeholder="first name">
                        <input id="provLName" name="provLName" value="" placeholder="last name" >
                        <input id="submit" type="submit" value="Search">
                    </form>
        </div>
    </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>