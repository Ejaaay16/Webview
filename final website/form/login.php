<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Web-View Login </title>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link rel = "icon" href = 
    "src/tup1.png" 
        type = "image/x-icon">
</head>
<body>
<main>
<div class="row">
    <div class="box">
        <div class="col-form">
            <div class="form-container">
                <i class="fa-solid fa-user-tie fa-2x" ></i> 
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <?php
                    if($errors > 0){
                    foreach($errors AS $displayErrors){ ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                         }
                    }
                ?>
                <input type="text" name="email" placeholder="Email"> 
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="login" class="btn-login" value="Login"/>
                <a href="forgot.php">Forgotten Password?</a>
                <input type="submit" name="login" class="btn-new"  value="Request Account"/>
            </div>
        </div>
    </div>
</div>
</main> 
  <div class="background">
  <script type="text/javascript" src="js/login.js"></script>
</div>    
</body>
</html>