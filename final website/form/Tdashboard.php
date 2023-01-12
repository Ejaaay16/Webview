<?php
session_start();

require_once "config/loginconfig.php";
$lgd_acc = $_GET['lgacc'];
$emadd = $lgd_acc;
$temp2 = explode(".", $emadd);
$temp3 = $temp2[0].$temp2[1];
$temp2 = explode("@", $temp3);



$sql = "SELECT `First Name`, `Last Name`, `Image` FROM users WHERE `Email Address` = ?";

if($stmt = mysqli_prepare($link, $sql)){
  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "s", $param_id);
  // Set parameters
  $param_id = $lgd_acc;

  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $fname, $lname, $img_dir); 
      
  if(mysqli_stmt_fetch($stmt)){
    function setnm($fname, $lname){ 
      echo "$fname $lname";
    }
    function setimg($img_dir){
      echo "$img_dir";
    }
  }else{
  }
mysqli_stmt_close($stmt);
}

if (isset($_FILES['camera-btnA'])) {
  $emadd = $lgd_acc;
  $temp = explode(".", $_FILES["camera-btnA"]["name"]);
  $temp2 = explode(".", $emadd);
  $temp3 = $temp2[0].$temp2[1];
  $temp2 = explode("@", $temp3);
  $fname = $temp2[0].".".$temp[1];
  
  if(move_uploaded_file($_FILES["camera-btnA"]["tmp_name"], "src/pfps/".$fname)){
    ?>
    <script>alert("Added!")</script>
    <?php 
  }else{
    ?>
    <script>alert("NOT Added!")</script>
    <?php
  }
    $mfile = "src/pfps/".$fname;
    $sqlins1 = "UPDATE `users` SET `Image` = '".$mfile."' WHERE `Email Address` = '".$lgd_acc."'";
    $stmtins1 = mysqli_prepare($link, $sqlins1);
    mysqli_stmt_execute($stmtins1);
    mysqli_stmt_close($stmtins1);
    unset($_POST);
    unset($_FILES);
    header("location:Tdashboard.php?lgacc=" . $lgd_acc);

}

?>



<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">

  <title>TEACHER DASHBOARD</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/Tdashboard.css">

  <link rel = "icon" href = 
  "src/tup1.png" 
        type = "image/x-icon">
</head>

<body>
  
<?php echo "<input type=\"hidden\" name=\"todoacc\" id=\"todoacc\" value=\"".$temp2[0]."\">"; ?>
  <input type="checkbox" id="check">

  <header> 

    <label for="check">
      <i class="fa-solid fa-bars" id="sidebar_btn"></i>
    </label>

    <div class="left_area">
      <h3>Teacher<span></span> </h3>

    </div>

    <div class="right_area">

    <a href="<?php echo "teacher_about1.php?lgacc=" . $lgd_acc;?>"  class="About_btn">About</a>
    <a href="<?php echo "teacher_glossary1.php?lgacc=" . $lgd_acc;?>" class="Glossary_btn">Glossary</a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target=_blank class="Gmail_btn">Gmail</a>
    <a href="https://docs.google.com/forms/u/0/?tgif=d" target=_blank class="Gforms_btn">Gforms</a>
    <a href="https://forms.office.com/Pages/DesignPageV2.aspx?subpage=creationv2" target=_blank class="Mforms_btn">Mforms</a>
    <a href="<?php echo "teacher_notes1.php?lgacc=" . $lgd_acc;?>" class="Notes_btn">Notes</a>
    <a href="<?php echo "teacher_record.php?lgacc=" . $lgd_acc;?>" class="Records_btn">Records</a>
    <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>
    
    </div>

        <div class="clock">
        <span class="clock-time"></span>
        <span class="clock-ampm"></span>

</div>
  </header>

  <div class="sidebar">
    <div class="menu">
    <center>
   
    <div class="upload">
      <img id = "img_pfp" name = "img_pfp" src="<?php setimg($img_dir); ?>" width= 100  height= 100 alt="">
      <div class="round">
        <form action= "<?php echo "home.php?lgacc=" . $lgd_acc;?>" method = "post" enctype="multipart/form-data">
        <input type="file" id="camera-btnA" name="camera-btnA">
        <i class="fa fa-camera" id="camera-btn" style = "color: #ffff; margin-top:7px;" ></i></input>
        <input type="submit" id="mfUpload" value="Upload" style = "display: none;">
        </form>
        </div>
    </div>
    
    
    <h4><?php setnm($fname, $lname);?></h4>  
    </center>  
    <a href="<?php echo "teacher_AFA.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-sun-plant-wilt"></i><span>Agri-Fishery Arts</a></span>
    <a href="<?php echo "teacher_he.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-shirt"></i><span>Home Economics</span></a>
    <a href="<?php echo "Tindustrial.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-screwdriver-wrench"></i><span>Industrial Arts</span></a>
    <a href="<?php echo "teacher_information.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-computer"></i><span>Information Communication Technology</a></span>
    <a href="<?php echo "teacher_technopreneur.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-building"></i><span>Technopreneurship</a></span>
    <a href="<?php echo "teacher_Professional.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-person-chalkboard"></i><span>Professional Industrial Education</a></span>
    <a href="<?php echo "teacher_GeneralEduc.php?lgacc=" . $lgd_acc;?>"><i class="fa-solid fa-chalkboard"></i><span>General Education</a></span>
  
</div>
</div>
    
    <body onload="init();">

        
<div class="calendarheight">
<div class="outerborder">
<div style="height: 10px"></div>
<table>
<tr><div class="month">
  <div class="monthcenter"></div>
  </div>
  <div class="yearshow"></div>
</tr>
<div style="height: 10px"></div>
<tr style="padding-bottom: 10px;">
  <div class="weekdaybg">
  <div class="weekday" ID="sun">Sun</div>
  <div class="weekday" ID="mon">Mon</div>
  <div class="weekday" ID="tue">Tue</div>
  <div class="weekday" ID="wed">Wed</div>
  <div class="weekday" ID="thu">Thu</div>
  <div class="weekday" ID="fri">Fri</div>
  <div class="weekday" ID="sat">Sat</div>
  </div>
</tr>
<tr>
  <td class="day" ID="one1"></td>
  <td class="day" ID="one2"></td>
  <td class="day" ID="one3"></td>
  <td class="day" ID="one4"></td>
  <td class="day" ID="one5"></td>
  <td class="day" ID="one6"></td>
  <td class="day" ID="one7"></td>
</tr>
<tr>
  <td class="day" ID="two1"></td>
  <td class="day" ID="two2"></td>
  <td class="day" ID="two3"></td>
  <td class="day" ID="two4"></td>
  <td class="day" ID="two5"></td>
  <td class="day" ID="two6"></td>
  <td class="day" ID="two7"></td>
</tr>
<tr>
  <td class="day" ID="three1"></td>
  <td class="day" ID="three2"></td>
  <td class="day" ID="three3"></td>
  <td class="day" ID="three4"></td>
  <td class="day" ID="three5"></td>
  <td class="day" ID="three6"></td>
  <td class="day" ID="three7"></td>
</tr>
<tr>
  <td class="day" ID="four1"></td>
  <td class="day" ID="four2"></td>
  <td class="day" ID="four3"></td>
  <td class="day" ID="four4"></td>
  <td class="day" ID="four5"></td>
  <td class="day" ID="four6"></td>
  <td class="day" ID="four7"></td>
</tr>
<tr>
  <td class="day" ID="five1"></td>
  <td class="day" ID="five2"></td>
  <td class="day" ID="five3"></td>
  <td class="day" ID="five4"></td>
  <td class="day" ID="five5"></td>
  <td class="day" ID="five6"></td>
  <td class="day" ID="five7"></td>
</tr>
<tr class="extraweek">
  <td class="day" ID="six1"></td>
  <td class="day" ID="six2"></td>
  <td class="day" ></td>
  <td class="day"></td>
  <td class="day"></td>
  <td class="day"></td>
  <td class="day"></td>
</tr>
</table>
  <div style="height: 10px"></div>
</div>
</div>

<div style="height: 10px"></div>



<div class="monthscroll">
  <div class="scrollback">&larr;</div>
  <div class="scrollforward">&rarr;</div>

 <div class="searchdate">
  <input class="imonth" placeholder="mm"></input>
  <input class="iyear" placeholder="yyyy"></input>
  <div class="monthsearch">Go</div>
 </div>

</div>



<div class="wrapper">
      <div class="task-input">
        <img src="bars-icon.svg" alt="icon">
        <input type="text" placeholder="Add a new task">
      </div>
      <div class="controls">
        <div class="filters">
          <span class="active" id="all">All</span>
          <span id="pending">Pending</span>
          <span id="completed">Completed</span>
        </div>
        <button class="clear-btn">Clear All</button>
      </div>
      <ul class="task-box"></ul>
    </div>


  <div class="background"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
       <script src="js/dashboard.js"> </script>  
        <script src="js/list.js"> </script>  
        <script src="js/calendar.js"> </script>  
  
        <script>
           function fasterPreview( uploader ) {
              if ( uploader.files && uploader.files[0] ){
                  //$('#img_pfp').attr('src', 
                  //window.URL.createObjectURL(uploader.files[0]) );
                $("#mfUpload").click();
               }
            }

            $("#camera-btnA").change(function(){
              $("#mfUpload").click();
              //fasterPreview( this );
            });
          </script>



      </div>  
  
  


</body>
</html>
