<?php 
session_start();
require_once "config/loginconfig.php";
$lgd_acc = $_GET['lgacc'];
?>


<!DOCTYPE html>

 <head>
    <meta charset="utf-8">  
    <title>Glossary</title>
    <link rel="stylesheet" href="css/glossary1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">

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
    
    <div class="wrapper">
        <headerDictionary id="Dictionary"></header>
        <div class="search">
          <input type="text" placeholder="Search a word" id="search" required spellcheck="false">
          <i class="fas fa-search"></i>
          <span class="material-icons">close</span>
        </div>
        <p class="info-text">Type any existing word and press enter to get meaning, example, synonyms, etc.</p>
        <ul>
          <li class="word">
            <div class="details">
              <p>__</p>
              <span>_ _</span>
            </div>
            <i class="fas fa-volume-up"></i>
          </li>
          <div class="content">
            <li class="meaning">
              <div class="details">
                <p>Meaning</p>
                <span>___</span>
              </div>
            </li>
            <li class="example">
              <div class="details">
                <p>Example</p>
                <span>___</span>
              </div>
            </li>
            <li class="synonyms">
              <div class="details">
                <p>Synonyms</p>
                <div class="list"></div>
              </div>
            </li>
          </div>
        </ul>
      </div>
  
    </div>
    <script src="js/glossary.js"></script>

  </body>
</html>
