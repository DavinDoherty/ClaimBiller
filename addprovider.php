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
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <div class="container" id="container">
    <?php include("includes/header.html");?>
        <?php include("includes/nav.html");?>
        <h2>ADD PROVIDER</h2>
		
		<div id="addagent">
            <form method="post" action="processaddprovider.php">
            
                <table>
                    <tr>
                    <td>PROVIDER ID:</td><td><input type="text" name="providerID" size="50" required="required"/></td>
                    </tr>
                    <tr>
                    <td>PROVIDER NAME:</td><td><input type="text" name="providerName" size="50"  required="required"/></td>
                    </tr>
                    <tr>
                    <td>EFFECTIVE DATE:</td><td><input type="text" name="providerEff" size="50"  required="required" /></td>
                    </tr>
                    <tr>
                    <td>TERM DATE:</td><td><input type="text" name="providerTerm" size="50"  /></td>
                    </tr>
                    <tr>
                    <td>SOCIAL SECURITY NUMBER:</td><td><input type="text" name="ssn" size="50"  required="required" /></td>
                    </tr>
                    <tr>
                    <td>CONTACT NUMBER:</td><td><input type="text" name="contactNbr" size="50"  required="required" /></td>
                    </tr>
                    <tr>
                    <td>EMAIL:</td><td><input type="text" name="providerEmail" size="50"  required="required" /></td>
                    </tr>
                   
                    
                    <tr>
                        <td><input type="submit" name="submit" value="Add Provider" /></td>
                    </tr>
                
                </table>
            </form>
		</div>
		
		
       
        
    </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

