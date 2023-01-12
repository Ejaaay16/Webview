<?php
  session_start();

  require_once "config/loginconfig.php";
	$lgd_acc = $_GET['lgacc'];
?>
<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">

  <title>Register</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" type="text/css" href="css/add_prof.css">

  <link rel = "icon" href = 
  "src/tup1.png" 
        type = "image/x-icon">
</head>

<body>
  
    <header> 



        <div class="left_area">
          <h3> ADMIN<span></span> </h3>
    
        </div>
    
        <div class="right_area">
    
    <a href="<?php echo "admin_about2.php?lgacc=" . $lgd_acc;?>" class="About_btn">About</a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target=_blank class="Gmail_btn">Gmail</a>
    <a href="<?php echo "signup.php?lgacc=" . $lgd_acc;?>" class="Menu_btn">Menu</a>
    <a href="<?php echo "admin_notes2.php?lgacc=" . $lgd_acc;?>" class="Notes_btn">Notes</a>
    <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>

        
        </div>
    
            <div class="clock">
            <span class="clock-time"></span>
            <span class="clock-ampm"></span>
    
        </div>
      </header>

  
<div class="box">
  <div class="ui-card">
    <img src="src/agri.jpg" width="400" height="200"> 
    <div class="description">
        <h3>Agri-Fishery Arts</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_afa_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div>

  <div class="ui-card1">
    <img src="src/he.jpg" width="400" height="200"> 
    <div class="description1">
        <h3>Home Economics</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_he_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div>

  <div class="ui-card2">
    <img src="src/automotive.jpg" width="400" height="200"> 
    <div class="description2">
        <h3>Industrial Arts</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_ia_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div>

  <div class="ui-card3">
    <img src="src/ict.jpg" width="400" height="200"> 
    <div class="description3">
        <h3>Information Communication Technology</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_ict_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div>

  <div class="ui-card4">
    <img src="src/techno.jpg" width="400" height="200"> 
    <div class="description4">
        <h3>Technopreneurship</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_techno_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div>

  <div class="ui-card5">
    <img src="src/thesis.png" width="400" height="200"> 
    <div class="description5">
        <h3>Professional Industrial Education</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_pie_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div>

  <div class="ui-card6">
    <img src="src/math.jpg" width="400" height="200"> 
    <div class="description6">
        <h3>General Education</h3>
        <p>College of Industrial Education</p>
        <a href="<?php echo "admin_Gened_prof.php?lgacc=" . $lgd_acc;?>">Assign</a>
    </div>
  </div> 

  
</div>
  <div class="background"> 

        <script src="js/dashboard.js"> </script>  

      </div>  
  
  


</body>
</html>
