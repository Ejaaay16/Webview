<?php
     session_start();
     require_once "config/loginconfig.php";
     $lgd_acc = $_GET['lgacc'];
     $prof_em;

     $resultA = $link -> query("SELECT * FROM sts_prof_ia WHERE `st_email`= '".$lgd_acc."'");
     $rowsA = $resultA->fetch_all(MYSQLI_ASSOC);

     foreach($rowsA as $rowA){
        $prof_em = $rowA['exam'];
     }

     $result = $link -> query("SELECT * FROM ia_exam WHERE `email`= '".$prof_em."'");
     $rows = $result->fetch_all(MYSQLI_ASSOC);
     
     //function showstudents($rows, $link){
     function getF($rows){
         foreach($rows as $row){
             echo"<tr>
             <td data-label=\"".$row['link']."\"><a href=\"".$row['link']."\" id=\"review\"  class=\"file\">".$row['link']."</a></td>
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

  <title>Industrial Arts</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/student_ia_exam.css">

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
            <a href="<?php echo "student_industrial.php?lgacc=" . $lgd_acc;?>" class="Subject_btn">Subject</a>
            <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>
        
        </div>
    
            <div class="clock">
            <span class="clock-time"></span>
            <span class="clock-ampm"></span>
    
        </div>

      </header>
 

      <div class="table-container">
       
        <table class="table">
            <thead>
                <tr>
                    <th>Link Access</th>
                    

                    </tr>
                </thead>

                <tbody>
                <?php 
                         getF($rows);
                    ?>
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


        </script>
    

</body>
</html>    