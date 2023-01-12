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

  <title>Industrial Arts</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" type="text/css" href="css/Tindustrial.css">

  <link rel = "icon" href = 
  "src/tup1.png" 
        type = "image/x-icon">
</head>

<body>
  
    <header> 



        <div class="left_area">
          <h3> TEACHER<span></span> </h3>
    
        </div>
    
        <div class="right_area">
    
        <a href="<?php echo "teacher_about1.php?lgacc=" . $lgd_acc;?>"  class="About_btn">About</a>
        <a href="<?php echo "Tdashboard.php?lgacc=" . $lgd_acc;?>"class="Menu_btn">Menu</a>
        <a href="<?php echo "teacher_glossary1.php?lgacc=" . $lgd_acc;?>" class="Glossary_btn">Glossary</a>
        <a href="<?php echo "teacher_notes1.php?lgacc=" . $lgd_acc;?>" class="Notes_btn">Notes</a>
        <a href="<?php echo "teacher_record.php?lgacc=" . $lgd_acc;?>" class="Records_btn">Records</a>
        <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>
        
        </div>
    
            <div class="clock">
            <span class="clock-time"></span>
            <span class="clock-ampm"></span>
    
        </div>
      </header>

  
<div class="box">
  <div class="ui-card">
    <img src="src/automotive.jpg"> 
    <div class="description">
        <h3>Automotive</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_auto.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card1">
    <img src="src/construction.jpg" width="400" height="200"> 
    <div class="description1">
        <h3>Construction Technique</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_cons.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card2">
    <img src="src/electronics.jpg" width="400" height="200"> 
    <div class="description2">
        <h3>Electrical and Electronics</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_elec.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card3">
    <img src="src/exam.jpg" width="400" height="200"> 
    <div class="description3">
        <h3>Practice Test</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_ia_exam.php?lgacc=" . $lgd_acc;?>">Upload Exam</a>
    </div>
  </div>

  <div class="ui-card4">
    <img src="src/graphics.jpg" width="400" height="200"> 
    <div class="description4">
        <h3>Graphics and Arts Design</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_graphics.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card5">
    <img src="src/metal.jpg" width="400" height="200"> 
    <div class="description5">
        <h3>Metal Works</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_metal.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card6">
    <img src="src/refrigeration.jpg" width="400" height="200"> 
    <div class="description6">
        <h3>Ref and Aircon</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_ref.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card7">
    <img src="src/woodworking.jpg" width="400" height="200"> 
    <div class="description7">
        <h3>Woodworking</h3>
        <p>Technology Livelihood Education</p>
        <a href="<?php echo "teacher_wood.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>
</div>
  <div class="background"> 

        <script src="js/dashboard.js"> </script>  

      </div>  
  
  


</body>
</html>
