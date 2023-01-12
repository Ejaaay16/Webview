<?php
    require_once "config/loginconfig.php";

    session_start();

    $lgd_acc = $_GET['lgacc'];
    $param_tchr;
    $param_emadd;
    $param_crs;
    $param_sec;
    $param_id;
    $param_sub;

    if(isset($_POST['teacher1'])){
        
        $param_tchr = $_POST['teacher1'];
        if(isset($_POST['emadd'])){
            
            $param_emadd = $_POST['emadd'];
            if(isset($_POST['major1'])){
                
                $param_crs = $_POST['major1'];
                if(isset($_POST['section1'])){
                    
                    $param_sec = $_POST['section1'];
                    if(isset($_POST['id1'])){
                        
                        $param_id = $_POST['id1'];
                        if(isset($_POST['sub1'])){
                            
                            $param_sub = $_POST['sub1'];

                            $resultA = $link -> query("SELECT `Email Address`, `id`, `last_sec` FROM users WHERE `course`= '".$param_crs."'");
                            $rowsA = $resultA->fetch_all(MYSQLI_ASSOC);

                            foreach($rowsA as $rowA){
                                if($rowA['last_sec'] == $param_sec){
                                    
                                    $temp_id = explode("-", $rowA['id']);
                                    $id = $temp_id[0]."-".$temp_id[1];
                                    if($param_id == $id){
                                        $resultB = $link -> query("SELECT * FROM sts_prof_ia WHERE `st_email`= '".$rowA['Email Address']."'");
                                        $rowsB = $resultB->fetch_all(MYSQLI_ASSOC);
                                        $cntr = 0;
                                        foreach($rowsB as $rowB){
                                            $cntr = $cntr + 1;
                                        }
                                        if($cntr > 0){
                                            $sqlup1 = "UPDATE `sts_prof_ia` SET `".$param_sub."` = '".$param_emadd."' WHERE `st_email` = '".$rowA['Email Address']."'";
                                            $stmtup1 = mysqli_prepare($link, $sqlup1);
                                            mysqli_stmt_execute($stmtup1);
                                            mysqli_stmt_close($stmtup1);
                                            unset($_POST);
                                            //header("location:home.php?lgacc=" . $lgd_acc);
                                        }else{
                                            $sqlup2 = "INSERT INTO `sts_prof_ia`(`st_email`, `".$param_sub."`) VALUES('".$rowA['Email Address']."', '".$param_emadd."')";
                                            $stmtup2 = mysqli_prepare($link, $sqlup2);
                                            mysqli_stmt_execute($stmtup2);
                                            mysqli_stmt_close($stmtup2);
                                            unset($_POST);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
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
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/tup_prof.css">
</head>

<link rel = "icon" href = 
"src/tup1.png" 
        type = "image/x-icon">
<body>



    <header>
        <div class="right_area">

     <a href="<?php echo "admin_about2.php?lgacc=" . $lgd_acc;?>"  class="About_btn">About</a>
    <a href="<?php echo "signup.php?lgacc=" . $lgd_acc;?>"class="Menu_btn">Menu</a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target=_blank class="Gmail_btn">Gmail</a>
    <a href="<?php echo "admin_notes2.php?lgacc=" . $lgd_acc;?>" class="Notes_btn">Notes</a>
    <a href="<?php echo "add_prof.php?lgacc=" . $lgd_acc;?>"class="Register_btn">Registration</a>
    <a href="<?php echo "logout.php?lgacc=" . $lgd_acc;?>" class="Logout_btn">Logout</a>

    <div class="left_area">
      <h3> Admin<span></span> </h3>
    </div>
   

        <div class="clock">
        <span class="clock-time"></span>
        <span class="clock-ampm"></span>

</div>


 </header>


 
 <div class="box">
 

    <div class="main">
    <form action="<?php echo "admin_ia_prof.php?lgacc=" . $lgd_acc;?>" method="POST">
            <h2 class="first_title">Registration</h2>
            <p class="first_sub_title" id="sub_title">Industrial Arts</p>
            <hr />
            <div class="input">
           
            
            <!--
            <select  id="teacher" name="teacher" onchange="document.getElementById('teacher1').value=this.options[this.selectedIndex].text">
                <option value = "">Select</option>
                <option value="01">LITA MARLYN</option>
                <option value="02">DELBO, VANESSA</option>
                <option value="03">ROSIE, JHONNA FAITH M</option>
                <option value="04">PACER, MELCHOR GUANZON</option>
                <option value="05">TENEDERO, CYNIC J</option>
                <option value="06">HINGADA, JOHN ACE</option>
                <option value="07">RODIL, MARY SHEENALYN PASCUAL</option>
                <option value="08">SUCOB, EDUARDO</option>
            </select> -->
            <input type="hidden" name="teacher1" id="teacher1" value="">

            <br />
            <input type="email" placeholder="Email Address" name="emadd" id="emadd" required />
            <br />
            
            <select  id="major" placeholder="Major" name="major" onchange="document.getElementById('major1').value=this.options[this.selectedIndex].text">
                <option value = "">--Course and Major--</option>
                <option value="BSIE-IA">BSIE-IA</option>
                <option value="BSIE-ICT">BSIE-ICT</option>
                <option value="BSIE-HE">BSIE-HE</option>
                <option value="BTVTED">BTVTED</option>
            </select>
            <input type="hidden" name="major1" id="major1" value="">

            <select  id="section" placeholder="Section" name="section" onchange="document.getElementById('section1').value=this.options[this.selectedIndex].text">
                <option value = "">--Section--</option>
                <option value="4A">4A</option>
                <option value="4B">4B</option>
                <option value="4C">4C</option>
                <option value="4D">4D</option>
                <option value="4E">4E</option>
            </select>
            <input type="hidden" name="section1" id="section1" value="">

            <select  id="id" placeholder="Batch" name="id" onchange="document.getElementById('id1').value=this.options[this.selectedIndex].text">
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
            <input type="hidden" name="id1" id="id1" value="">

            <select  id="sub" placeholder="Subject" name="sub" onchange="document.getElementById('sub1').value=this.options[this.selectedIndex].value">
                <option value = "">--Subject--</option>
                <option value="auto">1.Automotive</option>
                <option value="cons">2.Construction Technique</option>
                <option value="eae">3.Electrical and Electronics</option>
                <option value="gad">4.Graphics and Arts Design</option>
                <option value="mw">5.Metal Works</option>
                <option value="ref">6.Ref and Aircon</option>
                <option value="wood">7.Woodworking</option>
                <option value="exam">8.Practice Test</option>
                <option value="results">9.Results</option>
            </select>
            <input type="hidden" name="sub1" id="sub1" value="">
            
            <input type="submit" value="Submit" class="submit">
            </form>
            </div>
        
</div>

<div class="background"> 

<script src="js/dashboard.js"> </script>  
<script>  
     /*$("#teacher").change(function(){
              $("#teacher1").attr('value', "HELLO");
              //fasterPreview( this );
            });*/
     /*$( "#teacher" )
     .change(function () {
     var str = "";
     $( "select option:selected" ).each(function() {
     str += $( this ).text() + " ";
     });
     $('#teacher1').attr('value', str);
     })
     .change();*/
</script>

</div> 

</body>
</html>