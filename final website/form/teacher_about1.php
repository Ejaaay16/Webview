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

  <title>About</title>  

  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="css/about.css">
  

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

        <div class="vcard">
            <div class="header">
                <div class="wave_bg">
                    <div class="wave-01"></div>
                    <div class="wave-02"></div>
                    <div class="wave-03"></div>
                </div>
                
                <div class="profile_pic_content">
                    <img class="profile_pic" src="joana.jpg">
                </div>
            </div>
            <div class="card_content">
                <div class="name">
                    <h4>Joana Grace Mabanan</h4>
                </div>
                <div class="info">
                    <h5 class="typed_text">
                        <i>Technological</i> University of the Philippines
                    </h5>

                    <h5 class="typed_text">
                        <i>Bachelor</i> Of Science Industrial Education Major in Industrial Arts
                    </h5>

                    <h5 class="typed_text">
                        <i>Researcher</i> 
                    </h5>
                </div>
                <div class="social">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.microsoft.com/en-us/microsoft-teams/log-in"><i class="fa-brands fa-microsoft" aria-hidden="true"></i></a>
                    <a href="https://www.google.com/intl/fil/gmail/about/#inbox"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
                </div>
                <a class="button">
                    Follow
                </a>
            </div>
        </div>


        <div class="vcard1">
            <div class="header1">
                <div class="wave_bg1">
                    <div class="wave-11"></div>
                    <div class="wave-22"></div>
                    <div class="wave-33"></div>
                </div>
                
                <div class="profile_pic_content1">
                    <img class="profile_pic1" src="ralph.jpg">
                </div>
            </div>
            <div class="card_content1">
                <div class="name1">
                    <h4>Ralph Christian Macabasag</h4>
                </div>
                <div class="info1">
                    <h5 class="typed_text1">
                        <i>Technological</i> University of the Philippines
                    </h5>

                    <h5 class="typed_text1">
                        <i>Bachelor</i> Of Science Industrial Education Major in Industrial Arts
                    </h5>

                    <h5 class="typed_text1">
                        <i>Web Developer</i> 
                    </h5>
                </div>
                <div class="social1">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.microsoft.com/en-us/microsoft-teams/log-in"><i class="fa-brands fa-microsoft" aria-hidden="true"></i></a>
                    <a href="https://www.google.com/intl/fil/gmail/about/#inbox"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
                </div>
                <a class="button1">
                    Follow
                </a>
            </div>
        </div>


        <div class="vcard2">
            <div class="header2">
                <div class="wave_bg2">
                    <div class="wave-111"></div>
                    <div class="wave-222"></div>
                    <div class="wave-333"></div>
                </div>
                
                <div class="profile_pic_content2">
                    <img class="profile_pic2" src="hanna.jpg">
                </div>
            </div>
            <div class="card_content2">
                <div class="name2">
                    <h4>Hannazeil Gascon</h4>
                </div>
                <div class="info2">
                    <h5 class="typed_text2">
                        <i>Technological</i> University of the Philippines
                    </h5>

                    <h5 class="typed_text2">
                        <i>Bachelor</i> Of Science Industrial Education Major in Industrial Arts
                    </h5>

                    <h5 class="typed_text2">
                        <i>Researcher</i> 
                    </h5>
                </div>
                <div class="social2">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.microsoft.com/en-us/microsoft-teams/log-in"><i class="fa-brands fa-microsoft" aria-hidden="true"></i></a>
                    <a href="https://www.google.com/intl/fil/gmail/about/#inbox"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
                </div>
                <a class="button2">
                    Follow
                </a>
            </div>
        </div>
        
        


        <div class="vcard3">
            <div class="header3">
                <div class="wave_bg3">
                    <div class="wave-1111"></div>
                    <div class="wave-2222"></div>
                    <div class="wave-3333"></div>
                </div>
                
                <div class="profile_pic_content3">
                    <img class="profile_pic2" src="edzil.jpg">
                </div>
            </div>
            <div class="card_content3">
                <div class="name3">
                    <h4>Edzil Jay Empeniado</h4>
                </div>
                <div class="info3">
                    <h5 class="typed_text3">
                        <i>Technological</i> University of the Philippines
                    </h5>

                    <h5 class="typed_text3">
                        <i>Bachelor</i> Of Science Industrial Education Major in Industrial Arts
                    </h5>

                    <h5 class="typed_text3">
                        <i>Researcher</i> 
                    </h5>
                </div>
                <div class="social3">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.microsoft.com/en-us/microsoft-teams/log-in"><i class="fa-brands fa-microsoft" aria-hidden="true"></i></a>
                    <a href="https://www.google.com/intl/fil/gmail/about/#inbox"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
                </div>
                <a class="button3">
                    Follow
                </a>
            </div>
        </div>
        



        <div class="vcard4">
            <div class="header4">
                <div class="wave_bg3">
                    <div class="wave-11111"></div>
                    <div class="wave-22222"></div>
                    <div class="wave-33333"></div>
                </div>
                
                <div class="profile_pic_content4">
                    <img class="profile_pic2" src="jemmel.jpg">
                </div>
            </div>
            <div class="card_content4">
                <div class="name4">
                    <h4>Jemmel Anne Arcilla</h4>
                </div>
                <div class="info4">
                    <h5 class="typed_text4">
                        <i>Technological</i> University of the Philippines
                    </h5>

                    <h5 class="typed_text4">
                        <i>Bachelor</i> Of Science Industrial Education Major in Industrial Arts
                    </h5>

                    <h5 class="typed_text4">
                        <i>Researcher</i> 
                    </h5>
                </div>
                <div class="social4">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.microsoft.com/en-us/microsoft-teams/log-in"><i class="fa-brands fa-microsoft" aria-hidden="true"></i></a>
                    <a href="https://www.google.com/intl/fil/gmail/about/#inbox"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
                </div>
                <a class="button4">
                    Follow
                </a>
            </div>
        </div>

</div>
        <div class="background"> 

            <script src="js/about.js"> </script>  
    
          </div>  
      


    </body>
</html>


