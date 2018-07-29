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
            
                <div id="login_home">

                    <font color="red">PLEASE LOGIN:</font><br>
                    <!-- <font size=5 color="red">REGISTERED USERS ONLY</font><br> class="w3-container"  -->
                        
                        <form action="login_action.php" method="POST" class="form-group" style="display: block; margin-top: 15px;">
                        <table>

                        <tr>
                            <td id="username"> <input class="w3-input" type="text" placeholder="username" value="" name="username" required="required" autofocus></td>
                        </tr>
                        <tr>
                            <td id="password"><input class="w3-input" type="password" placeholder="password" value="" name="password" required="required"></td>

                        </tr>
                        <tr>
                        <td id="login"><input type="submit" value="Login" class="btn"></td>
                        </tr>
                        </table>

                        </form>
                        

                </div><!--login-home div-->
                
                
            </div> <!--content div-->
                <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
        
    </div> <!--container div-->
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

