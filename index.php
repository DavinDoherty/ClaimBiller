<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Medical Claim Biller</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/page_text.css">
    <link rel="stylesheet" href="css/forms.css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <div id="container">
        <?php include("includes/header.html");?>
        <?php include("includes/nav.html");?>
        <div id="content">
        
        <div id="login_home">

           <font color="red">PLEASE LOGIN:</font><br><br>
           <!-- <font size=5 color="red">REGISTERED USERS ONLY</font><br> -->
            
<form action="login_action.php" method="POST" class="w3-container" style="display: block;">
<table>

  <tr>
    <td id="username"> <input class="w3-input" type="text" placeholder="username" value="" name="username" required="required"<br><br></td>
    <td id="password"><input class="w3-input" type="password" placeholder="password" value="" name="password" required="required"<br><br></td>

  </tr>
  <tr>
  <td id="login"><input type="submit" value="Login" class="btn"></td>
</tr>
</table>

</form>


            
<!--
            <form action="login_action.php" method="POST" class="w3-container">
                  
                <div id="formLogin">
                    <div id="username">
                        Username: <input class="w3-input" type="text" name="username" required="required">
                    </div>
                    <div id ="password">
                        Password:<input class="w3-input" type="password" name="password" required="required">
                    </div>
                    
                </div>    
                </form>
-->          
        </div>

         <div id="footer">
        <?php include("includes/footer.html");?>
        </div>
        
    </div>
    
</body>
</html>

