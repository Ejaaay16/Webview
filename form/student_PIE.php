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

  <title>Professional Industrial Education</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/pie.css">

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
    <img src="src/child.jpeg" width="400" height="200"> 
    <div class="description">
        <h3>The Child and Adolescent</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed1.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card1">
    <img src="src/teaching.jpg" width="400" height="200"> 
    <div class="description1">
        <h3>The Teaching Profession</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed2.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card2">
    <img src="src/foundation.jpg" width="400" height="200"> 
    <div class="description2">
        <h3>Foundation of Technology and Education</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed3.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card3">
    <img src="src/facilitating.png" width="400" height="200"> 
    <div class="description3">
        <h3>Facilitating Learner and Centered Teaching</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed4.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card4">
    <img src="src/curriculum.png" width="400" height="200"> 
    <div class="description4">
        <h3>Building and Enhancing New Literacies Accross the Curriculum</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed6.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card5">
    <img src="src/etech.jpg" width="400" height="200"> 
    <div class="description5">
        <h3>Technology for Teaching and Learning</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed5.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card6">
    <img src="src/learning1.jpg" width="400" height="200"> 
    <div class="description6">
        <h3>Assessment of Learning 1</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed7.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card7">
    <img src="src/school.png" width="400" height="200"> 
    <div class="description7">
        <h3>The Teacher and the Community School Culture</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed8.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card8">
    <img src="src/methods.jpg" width="400" height="200"> 
    <div class="description8">
        <h3>Methods of Research</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed9.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>
    
  <div class="ui-card9">
    <img src="src/sped.jpg" width="400" height="200"> 
    <div class="description9">
        <h3>Foundation of Special and Inclusive Education</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed10.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  
  <div class="ui-card10">
    <img src="src/evaluation.png" width="400" height="200"> 
    <div class="description10">
        <h3>Curriculum Development and Evaluation</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed11.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card11">
    <img src="src/learning2.jpg" width="400" height="200"> 
    <div class="description11">
        <h3>Assessment of Learning 2</h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed12.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card12">
    <img src="src/statistics.jpg" width="400" height="200"> 
    <div class="description12">
        <h3>Statistics for Educational Research </h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed13.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  

  <div class="ui-card13">
    <img src="src/thesis.png" width="400" height="200"> 
    <div class="description13">
        <h3>Thesis Writing </h3>
        <p>Professional Industrial Education</p>
        <a href="<?php echo "student_profed14.php?lgacc=" . $lgd_acc;?>">View Content</a>
    </div>
  </div>

  <div class="ui-card14">
    <img src="src/exam.jpg" width="400" height="200"> 
    <div class="description14">
        <h3>Practice Test</h3>
        <p>General Education</p>
        <a href="<?php echo "student_pie_exam.php?lgacc=" . $lgd_acc;?>">Take a Test</a>
    </div>
  </div>


</div>
  <div class="background"> 

        <script src="js/dashboard.js"> </script>  

      </div>  
  
  


</body>
</html>
