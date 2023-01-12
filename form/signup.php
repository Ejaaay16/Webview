<?php



//include "controller.php";


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

<title>Web-View Dashboard</title>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<link rel = "icon" href = 
"src/tup1.png" 
        type = "image/x-icon">
<body>
<?php echo "<input type=\"hidden\" name=\"todoacc\" id=\"todoacc\" value=\"".$temp2[0]."\">";?>



    <header>
        <div class="right_area">

    <a href="<?php echo "admin_about2.php?lgacc=" . $lgd_acc;?>" class="About_btn">About</a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target=_blank class="Gmail_btn">Gmail</a>
    <a href="<?php echo "admin_notes2.php?lgacc=" . $lgd_acc;?>" class="Notes_btn">Notes</a>
    <a href="<?php echo "add_prof.php?lgacc=" . $lgd_acc;?>" class="Register_btn">Registration</a>
    <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>

    <div class="left_area">
      <h3> Admin<span></span> </h3>
    </div>
   

        <div class="clock">
        <span class="clock-time"></span>
        <span class="clock-ampm"></span>

</div>


 </header>


 

 

<div class="main">
        <form action="<?php echo "register.php?lgacc=" . $lgd_acc ?>" method="post">
            
            <h2 class="first_title">Sign Up</h2>
            <p class="first_sub_title" id="sub_title">For the better and future</p>
            <hr />
        <div class="input">
            <input type="text" placeholder="First Name" class="first_name" name="fname" id="fname" required />
            <input type="text" placeholder="Last Name" class="last_name" name="sname" id="sname" required />
            <br />
            <input type="email" placeholder="Email Address" name="emadd" id="emadd" required />
            <br />
            <input type="password" placeholder="Password" name="pass" id="pass" required />
            <br />


            <select id="id1"  name="id1" id="id1">
            <option value = "">--ID--</option>
                <option value="TUPM-18">TUPM-18</option>
                <option value="TUPM-19">TUPM-19</option>
                <option value="TUPM-20">TUPM-20</option>
                <option value="TUPM-21">TUPM-21</option>
                <option value="TUPM-22">TUPM-22</option>
                <option value="TUPM-23">TUPM-23</option>
                <option value="TUPM-24">TUPM-24</option>
                <option value="TUPM-25">TUPM-25</option>
              </select>
              
            <select id="major1"  name="major1" id="major1">
            <option value="---">Course</option>
                <option value="BSIE-HE">BSIE-HE</option>
                <option value="BSIE-IA">BSIE-IA</option>
                <option value="BSIE-ICT">BSIE-ICT</option>
                <option value="BTVTED">BTVTED</option>
                
            </select>

            <select id="section1"  name="section1" id="section1">
            <option value="---">Section</option>
                <option value="4A">4A</option>
                <option value="4B">4B</option>
                <option value="4C">4C</option>
                <option value="4D">4D</option>
                <option value="4E">4E</option>
            </select>

           
           
           
            <select id="type"  name="type">
            <option value="---">Type</option>
                <option value="Admin">Admin</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
            </select>

        <label  id="birth" for="birthday">Date of Birth</label>
        <input type="date" id="dob" name="dob" min="1901-01-01">

        <p class="sub_title3" id="gender">Gender</p>
        
        <div class="female" id="sex">
            <label for="female">Female</label>
            <input type="radio" name="sex" id="fmale" value="female" />
        </div>

        <div class="male" id="sex">
            <label for="male">Male</label>
            <input type="radio" name="sex" id="lmale" value="male" />

        </div>




        <input type="submit" value="Sign Up" class="submit" />

        </form>

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
  <div class="scrollback" id="left">&larr;</div>
  <div class="scrollforward" id="right">&rarr;</div>

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
        <script src="js/signup.js"></script>  
        <script src="js/dashboard.js"> </script>  
        <script src="js/list.js"> </script>  
        <script src="js/calendar.js"> </script>  
   
      
      </div>  
</body>
</html>