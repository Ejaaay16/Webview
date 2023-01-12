<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>OTP Verification </title>  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/otp.css">

    <link rel = "icon" href = 
        "src/tup1.png" 
        type = "image/x-icon">

</head>
<body>
    <div class="col-form">
        <div class="form-container">
            <h3>Verify your account</h3>
            <h4>Please enter the otp code that we send to your account.</h4>

            <form action="otp.php" method="POST" autocomplete="off">
            <?php
                if(isset($_SESSION['message'])){
                    ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
                }
            ?>

            <?php
                if($errors > 0){
                foreach($errors AS $displayErrors){
                    ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                    }
                }
            ?>    

            <input type="number" name="otp" placeholder="OTP#">

            <input type="submit" name="button1" class="btn-Subm" value="Verify"/>
            
        </div>
    </div>
  <!--  <div id="container">
        <h2>Sign Up</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="otp.php" method="POST" autocomplete="off">
            <?php
            /*if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }*/
            ?>      
            <input type="number" name="otp" placeholder="Verification Code" required><br>
            <input type="submit" name="verify" value="Verify">
        </form>
    </div>-->
</body>
</html>