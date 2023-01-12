<?php
  session_start();

	require_once "config/loginconfig.php";
	$lgd_acc = $_GET['lgacc'];
  $temp2 = explode(".", $lgd_acc);
$temp3 = $temp2[0].$temp2[1];
$temp2 = explode("@", $temp3);
	$sql = "SELECT * FROM admin WHERE `Email Address` = ?";
?>


<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">

  <title>Notes</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/note.css">

  <link rel = "icon" href = 
  "src/tup1.png" 
        type = "image/x-icon">
</head>

<body>
<?php echo "<input type=\"hidden\" name=\"todoacc\" id=\"todoacc\" value=\"".$temp2[0]."\">";?>
    <header style="background:#424242;"> 



        <div class="left_area">
          <h3 style="color:#1e90ff; -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black"; >TEACHER <span></span> </h3>
    
        </div>
    
        <div class="right_area">
    
        <a href="<?php echo "teacher_about1.php?lgacc=" . $lgd_acc;?>"  class="About_btn">About</a>
        <a href="<?php echo "Tdashboard.php?lgacc=" . $lgd_acc;?>"class="Menu_btn">Menu</a>
        <a href="<?php echo "teacher_glossary1.php?lgacc=" . $lgd_acc;?>" class="Glossary_btn">Glossary</a>
        <a href="<?php echo "teacher_record.php?lgacc=" . $lgd_acc;?>" class="Records_btn">Records</a>
        <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>
        
        </div>
    
            <div class="clock">
            <span class="clock-time"></span>
            <span class="clock-ampm"></span>
    
        </div>
      </header>
      
    <div class="box">
      <div id="app">
        <button class="add-note" type="button">+</button>
      </div>
  




</div>
  <div class="background"> 

        <script src="js/notes.js"> </script>  

      </div>  
  
  


</body>
</html>
