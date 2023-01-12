<?php 
session_start();
require_once "config/loginconfig.php";
$lgd_acc = $_GET['lgacc'];

$fname;
$fpath;
$emadd;

if (isset($_FILES['myFile'])) {
    $emadd = $lgd_acc;
   // $temp = explode(".", $_FILES["imageUpload"]["name"]);
    $fname = $_FILES["myFile"]["name"];
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"], "src/files/".$fname)){
        ?>
        <script>alert("Added! ")</script>
        <?php 
    }else{
        ?>
        <script>alert("NOT Added! ")</script>
        <?php
    }
    $mfile = "src/files/".$fname; 

$sqlins1 = "INSERT INTO `he_results`(`email`, `fpath`, `fname`) VALUES ('$emadd','$mfile','$fname')";
$stmtins1 = mysqli_prepare($link, $sqlins1);
mysqli_stmt_execute($stmtins1);
mysqli_stmt_close($stmtins1);
unset($_POST);
unset($_FILES);
header("location:teacher_he_results.php?lgacc=" . $lgd_acc);
}
//function getF($link, $lgd_acc){
    $result = $link -> query("SELECT * FROM he_results WHERE `email`= '" . $lgd_acc . "'");
    $rows = $result->fetch_all(MYSQLI_ASSOC);
	
	//function showstudents($rows, $link){
    function getF($rows){
        foreach($rows as $row){
            echo"<tr>
                 <td data-label=\"".$row['fname']."\"><a href=\"".$row['fpath']."\" id=\"review\"  class=\"file\">".$row['fname']."</a></td>
                   
                 </tr>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">

  <title>Home Economics</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" type="text/css" href="css/he_results.css">

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
 

      <div class="table-container">
       
        <table class="table" id="tbtb">
            <thead>
                <tr>
                    <th>Files Upload</th>

                    </tr>
                </thead>

                <tbody>
                    <?php 
                         getF($rows);
                    ?>
                    <tr>
                        <td data-label="Upload"  style="color:black !important;">
                            <form action="<?php echo "teacher_he_results.php?lgacc=" . $lgd_acc;?>" method="post" enctype="multipart/form-data">
                            <input type='hidden' name='post_id' value='".createPassword(64)."'>
                            <input type="file" id="myFile" name="myFile"/>
                            <input type="submit" id="mfUpload" style = "color: white;  padding: 5px; width: 150px; border-radius: 50px; margin-left: 100px;" value="Upload">
                        </td>
                    </tr>
                  <!--  <tr>
                        <td>
                       
                        </td>
                    </tr> -->
                    </tbody>
            </table>
            
        </div>

<script>

          
          
class DigitalClock {
    constructor (element) {
        this.element = element;
        
    }

        start() {

        this.update();

        setInterval(() => {
        this.update();    

        }, 500);
    }
    
    update() {
        const parts = this.getTimeParts();
        const minuteFormatted = parts.minute.toString().padStart(2, "0");
        const timeFormatted = `${parts.hour}:${minuteFormatted}`;
        const amPm = parts.isAm ? "AM" : "PM" ;


        this.element.querySelector(".clock-time").textContent = timeFormatted;
        this.element.querySelector(".clock-ampm").textContent = amPm;
        }

    

    getTimeParts() {
        const now = new Date();

        return {
            hour: now.getHours() % 12 || 12,
            minute: now.getMinutes(),
            isAm: now.getHours() < 12

        };

    }
}

const clockElement = document.querySelector(".clock");
const clockObject = new DigitalClock(clockElement);

clockObject.start(); 


function deleteRow(el) {
    // while there are parents, keep going until reach TR 
    while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
        el = el.parentNode;
    }

    // If el has a parentNode it must be a TR, so delete it
    // Don't delte if only 3 rows left in table
    if (el.parentNode && el.parentNode.rows.length > 3) {
        el.parentNode.removeChild(el);
    }
}
const tableID = "tbtb";
function addRow(tableID) {
    var table = document.getElementById(tableID);

    if (!table) return;

    var newRow = table.rows[1].cloneNode(true);

    // Now get the inputs and modify their names 
    var inputs = newRow.getElementsByTagName('input');

    for (var i=0, iLen=inputs.length; i<iLen; i++) {
        // Update inputs[i]
    }

    // Add the new row to the tBody (required for IE)
    var tBody = table.tBodies[0];
    tBody.insertBefore(newRow, tBody.lastChild);
}

function FnCall(){
	document.getElementById('review').innerHTML = document.getElementById('myFile').value;
    document.getElementById('review').href = document.getElementById('myFile').value;
}
/*$("#mfUpload").click(function {
    document.getElementById('review').innerHTML = "Yung file hehe";
})*/

var mybtn = document.getElementById("mfUpload");
mybtn.addEventListener("click",FnCall);

</script>
    

</body>
</html>    