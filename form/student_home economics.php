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

  <title>Home Economics</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  

  <link rel="stylesheet" type="text/css" href="css/home economics.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">

  <link rel = "icon" href = 
  "src/tup1.png" 
        type = "image/x-icon">
</head>

<body>
  
    <header> 



        <div class="left_area">
          <h3> PADAYON<span></span> </h3>
    
        </div>
    
        <div class="right_area">
    
        <a href="<?php echo "student_about.php?lgacc=" . $lgd_acc;?>" class="About_btn">About</a>
            <a href="<?php echo "home.php?lgacc=" . $lgd_acc;?>"class="Menu_btn">Menu</a>
            <a href="<?php echo "student_glossary.php?lgacc=" . $lgd_acc;?>" class="Glossary_btn">Glossary</a>
            <a href="<?php echo "student_notes.php?lgacc=" . $lgd_acc;?>" class="Notes_btn">Notes</a>
            <a href="<?php echo "student_results.php?lgacc=" . $lgd_acc;?>" class="Records_btn">Records</a>
            <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>
        
        </div>
    
            <div class="clock">
            <span class="clock-time"></span>
            <span class="clock-ampm"></span>
    
        </div>
      </header>

  
<div class="box">
  <div class="ui-card">
    <img src="src/he.jpg" width="400" height="200"> 
    <div class="description">
        <h3>Home Economics</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "student_sts_prof_he.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card1">
    <img src="src/exam.jpg" width="400" height="200"> 
    <div class="description1">
        <h3>Practice Test</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "student_he_exam.php?lgacc=" . $lgd_acc;?>">Take a Test</a>
    </div>
  </div>

</div>
  
  <div class="background"> 

    <script src="js/dashboard.js"> </script>  

  </div>  

  </body>   
</html>