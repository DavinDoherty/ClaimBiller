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

            <?php include("includes/header.php");?>
            <?php include("includes/nav.html");?><br>
            
            <div id="content">

        <div id="innerContainer">
               
                <div><h4>Search For Provider To Edit</h4></div><br>
                
                <div id="editprovidersearch" >
                    <form action="providersearchID.php" method="POST">
                        <label> Search by ID</label><br>
                        <input id="provID" name="provID" value="" >
                        <input id="submit" type="submit" value="Search"><br><br>

                       
                    </form>
                    
                </div>
                <div id="editprovidersearchName" >
                    <form action="providersearchName.php" method="POST">
                        <label> Search by Name</label><br>
                        <input id="provFName" name="provFName" value="" placeholder="first name">
                        <input id="provLName" name="provLName" value="" placeholder="last name" >
                        <input id="submit" type="submit" value="Search">
                    </form>
        </div>
</div>
</div>
        <div id="footer">
        <?php include("includes/footer.html");?>
        </div>

    

</body>
</html>