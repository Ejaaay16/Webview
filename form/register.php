<?php
    session_start();
    require_once "config/loginconfig.php";

    if(isset($_GET['sue'])){
        $signup_err = "Email Address already taken please use another email address";
        echo "<script>
                    function myalert() {
                            alert('".$signup_err."');
                            }
                     myalert();
                </script>";
    }

    if (isset($_POST['fname'])) {
        $fname = $_POST['fname'];
        if (isset($_POST['sname'])) {
            $sname = $_POST['sname'];
        }
        if (isset($_POST['pass'])) {
            $pass = $_POST['pass'];
        }
        if (isset($_POST['emadd'])) {
            $emadd = $_POST['emadd'];
            $email = $emadd;
        }
        if (isset($_POST['type'])) {
            $type = $_POST['type'];  
        }
        if (isset($_POST['dob'])) {
            $dob = $_POST['dob'];  
        }
        if (isset($_POST['sex'])) {
            $sex = $_POST['sex'];  
        }
        
        if (isset($_POST['id1'])) {
            $id1 = $_POST['id1'];  
        }

        if (isset($_POST['major1'])) {
            $major1 = $_POST['major1'];  
        }

        if (isset($_POST['section1'])) {
            $section1 = $_POST['section1'];  
        }

        $check_duplicate_email = "SELECT `Email Address` FROM users WHERE  `Email Address`= '" . $emadd . "'";

        $result =mysqli_query($link,
        $check_duplicate_email);

        $count = mysqli_num_rows($result);

         if($count > 0){
            header("location: signup.php?sue=1");
         }
         else{
            $pass = md5($pass);
            $sqlins = "INSERT INTO `users`(`First Name`, `Last Name`, `Password`, `Email Address`, `Date of Birth`, `Gender`,`User_type`, `id`, `course`,`last_sec`) VALUES ('$fname','$sname','$pass','$emadd','$dob','$sex','$type','$id1','$major1','$section1')";
            $stmtins = mysqli_prepare($link, $sqlins);
            mysqli_stmt_execute($stmtins);
    
            header("location: signup.php?lgacc=" . $_GET['lgacc']);
         }

       /* if($email==''|| empty($email)){

         }*/

    }
    
    
?>