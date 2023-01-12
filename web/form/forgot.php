<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Forgot Password </title>  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/forgot.css">

    <link rel = "icon" href = 
    "src/tup1.png" 
    type = "image/x-icon">
</head>

<body>
    <div class="col-form">
        <div class="form-container">
            <h3>Reset Password</h3>
            <h4>Please Enter your email address to reset your password</h4>
            <div id="line"></div>
            <form action="forgot.php" method="POST" autocomplete="off">
                <?php
                    if ($errors > 0) {
                    foreach ($errors as $displayErrors) {
                ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                        }
                    }
                ?>
            <input type="text" name="email" placeholder="Email Address">
       
            <input type="submit" name="forgot_password" value="Check"/>
            <!--<input type="submit" name="button2" class="btn-Subm" value="Submit"/>-->
            </form>
        </div>
        </div>
<!--
    <div id="container">
        <h2>Email Check</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="forgot.php" method="POST" autocomplete="off">
            <?php
           /* if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }*/
            ?>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="submit" name="forgot_password" value="Check">
        </form>
    </div>-->
</body>

</html>