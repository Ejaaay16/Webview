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

  <title>General Education</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/GeneralEduc.css">

  <link rel = "icon" href = 
  "src/tup1.png" 
        type = "image/x-icon">
</head>

<body>
  
<header style="background:#424242;"> 



        <div class="left_area">
          <h3>TEACHER<span></span> </h3>
    
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

  <div class="ui-card" width="400" height="200">
    <img src="src/understanding.png"> 
    <div class="description">
        <h3>Understanding Self</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen1.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card1">
    <img src="src/readings.jpg" width="400" height="200"> 
    <div class="description1">
        <h3>Readings in Philippine History</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen2.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card2">
    <img src="src/contemporary.jpg" width="400" height="200"> 
    <div class="description2">
        <h3>The Contemporary World</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen3.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card3">
    <img src="src/math.jpg" width="400" height="200"> 
    <div class="description3">
        <h3>Mathematics in the Modern World</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen4.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card4">
    <img src="src/communication.png" width="400" height="200"> 
    <div class="description4">
        <h3>Purposive Communication</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen5.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card5">
    <img src="src/art.jpg" width="400" height="200"> 
    <div class="description5">
        <h3>Art Appreciation</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen6.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card6">
    <img src="src/science.jpg" width="400" height="200"> 
    <div class="description6">
        <h3>Science Technology and Society</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen7.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card7">
    <img src="src/ethics.jpg" width="400" height="200"> 
    <div class="description7">
        <h3>Ethics</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gen8.php?lgacc=" . $lgd_acc;?>">Upload File</a>
    </div>
  </div>

  <div class="ui-card8">
    <img src="src/exam.jpg" width="400" height="200"> 
    <div class="description8">
        <h3>Practice Test</h3>
        <p>General Education</p>
        <a href="<?php echo "teacher_gened_exam.php?lgacc=" . $lgd_acc;?>">Upload Exam</a>
    </div>
  </div>

</div>
  <div class="background"> 

        <script src="js/dashboard.js"> </script>  

      </div>  
  
  


</body>
</html>
