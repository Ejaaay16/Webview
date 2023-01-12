<?php
    include_once("connection.php");
    // Connection Created Successfully

    session_start();

    // Store All Errors
    $errors = [];

    // When Sign Up Button Clicked
    /*if (isset($_POST['signup'])) {
        $fname = mysqli_real_escape_string($link, $_POST['fname']);
        $lname = mysqli_real_escape_string($link, $_POST['lname']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $gender = mysqli_real_escape_string($link, $_POST['gender']);

        // check password length if password is less then 8 character so
        if (strlen(trim($_POST['password'])) < 8) {
            $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
        } else {
            // if password not matched so
            if ($_POST['password'] != $_POST['confirmPassword']) {
                $errors['password'] = 'Password not matched';
            } else {
                $password = md5($_POST['password']);
            }
        }
        // generate a random Code
        $code = rand(999999, 111111);
        // set Status
        $status = "Not Verified";

        // echo 'first name = ' .$fname . "<br> last name = " .$lname . "<br> email = " .$email . "<br> password = " .$password . "<br> gender = " .$gender . "<br>";

        // check email validation and save information
        $sql = "SELECT * FROM usersinfo WHERE email = '$email'";
        $res = mysqli_query($link, $sql) or die('query failed');
        if (mysqli_num_rows($res) > 0) {
            $errors['email'] = 'Email is Already Taken';
        }

        // count erros
        if (count($errors) === 0) {
            $insertQuery = "INSERT INTO usersInfo (firstName,lastName,email,password,gender,code,status)
            VALUES ('$fname','$lname','$email','$password','$gender',$code,'$status')";
            $insertInfo = mysqli_query($link, $insertQuery);

            // Send Varification Code In Gmail
            if ($insertInfo) {
                // Configure Your Server To Send Mail From Local Host Link In Video Description (How To Config LocalHost Server)
                $subject = 'Email Verification Code';
                $message = "our verification code is $code";
                $sender = 'From: ma382793@gmail.com';

                if (mail($email, $subject, $message, $sender)) {
                    $message = "We've sent a verification code to your Email <br> $email";

                    $_SESSION['message'] = $message;
                    header('location: otp.php');
                } else {
                    $errors['otp_errors'] = 'Failed while sending code!';
                }
            } else {
                $errors['db_errors'] = "Failed while inserting data into database!";
            }
        }
    }*/

    // if Verify Button Clicked
    if (isset($_POST['verify'])) {
        $_SESSION['message'] = "";
        $otp = mysqli_real_escape_string($link, $_POST['otp']);
        $otp_query = "SELECT * FROM users WHERE code = $otp";
        $otp_result = mysqli_query($link, $otp_query);
        mysqli_stmt_bind_result($stmt, $hashed_password, $email, $user_type);

        if (mysqli_num_rows($otp_result) > 0) {
            $fetch_data = mysqli_fetch_assoc($otp_result);
            $fetch_code = $fetch_data['code'];

            $update_status = "Verified";
            $update_code = 0;

            $update_query = "UPDATE users SET status = '$update_status' , code = $update_code WHERE code = $fetch_code";
            $update_result = mysqli_query($link, $update_query);

            if ($update_result) {
                header('location: login.php?');
            } else {
                $errors['db_error'] = "Failed To Insering Data In Database!";
            }
        } else {
            $errors['otp_error'] = "You enter invalid verification code!";
        }
    }

    // if login Button clicked so

    if (isset($_POST['login'])) {
        //if(isset($_REQUEST["button1"])){
        $temp = 0;
        if($_REQUEST["login"]=="Request Account"){
            $temp = 1;
        }
        if($temp == 1){
            $url = "request.php";
            header("location:" . $url);
        }
        else{
            // Define variables and initialize with empty values
            $email = $password = "";
            $email_err = $password_err = $login_err = "";
 
            // Processing form data when form is submitted
            if($_SERVER["REQUEST_METHOD"] == "POST"){
 
            // Check if username is empty
            if(empty(trim($_POST["email"]))){
                $email_err = "Please enter email.";
            } else{
                $email = trim($_POST["email"]);
            }
    
            // Check if password is empty
            if(empty(trim($_POST["password"]))){
                $password_err = "Please enter your password.";
            } else{
                $password = trim($_POST["password"]);
            }

    
            // Validate credentials
            if(empty($email_err) && empty($email_err)){
                // Prepare a select statement
                $sql = "SELECT `password`, `Email Address`, `user_type` FROM users WHERE `Email Address`= ?";
        
                if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                // Set parameters
                $param_email = $email;
            
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){               
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $hashed_password, $email, $user_type);
                        if(mysqli_stmt_fetch($stmt)){
                            if(md5($password) == $hashed_password){
                                // Password is correct, so start a new session
                            
                                // Store data in session variables
                                // Store data in session variables
                                $_SESSION["lgacc"] = $email; 
                                //$_SESSION["lgacc"] = $id;                           
                            
                                // Redirect user to welcome page
                                if($user_type == "Student"){
                                    $_SESSION["loggedin"] = true;
                                    $url = "home.php?lgacc=" . $email;
                                    header("location:" . $url);
                                }
                                elseif($user_type == "Teacher"){
                                    $_SESSION["loggedin2"] = true;
                                    header("location: Tdashboard.php?lgacc=" . $email);
                                }

                                elseif($user_type == "Admin"){
                                    $_SESSION["loggedin3"] = true;
                                    header("location: signup.php?lgacc=" . $email);
                                }


                            } else{
                                // Password is not valid, display a generic error message
                                $errors['email'] = "Invalid password.".$password."=".$hashed_password;
                            }
                        }
                    } else{
                    // Username doesn't exist, display a generic error message
                    $errors['email'] = "Invalid username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
}
            /*
            $email = mysqli_real_escape_string($link, $_POST['email']);
            $password = md5($_POST['password']);

            $emailQuery = "SELECT * FROM usersInfo WHERE email = '$email'";
            $email_check = mysqli_query($link, $emailQuery);

            if (mysqli_num_rows($email_check) > 0) {
                $passwordQuery = "SELECT * FROM usersInfo WHERE email = '$email' AND password = '$password'";
                $password_check = mysqli_query($link, $passwordQuery);
                if (mysqli_num_rows($password_check) > 0) {
                    $fetchInfo = mysqli_fetch_assoc($password_check);
                    $status = $fetchInfo['status'];
                    $name = $fetchInfo['firstName'] . " " . $fetchInfo['lastName'];
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $fetchInfo['email'];
                    $_SESSION['password'] = $fetchInfo['password'];
                    //if ($status === 'Verified') {
                        header('location: main.php');
                    /*} else {
                    $info = "It's look like you haven't still verify your email $email";
                    $_SESSION['message'] = $info;
                    header('location: otp.php');
                } else {
                $errors['email'] = 'Password did not matched'; }
            } else {
                 $errors['email'] = 'Invalid Email Address';
            }*/
    }
    }

    // if forgot button will clicked
    if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        $emailCheckQuery = "SELECT * FROM users WHERE `Email Address` = '$email'";
        $emailCheckResult = mysqli_query($link, $emailCheckQuery);

        // if query run
        if ($emailCheckResult) {
            // if email matched
            if (mysqli_num_rows($emailCheckResult) > 0) {
                $code = rand(999999, 111111);
                $updateQuery = "UPDATE users SET code = $code WHERE `Email Address` = '$email'";
                $updateResult = mysqli_query($link, $updateQuery);
                if ($updateResult) {
                    $subject = 'Email Verification Code';
                    $message = "our verification code is $code";
                    $sender = 'From: tupwebview@gmail.com';

                    if (mail($email, $subject, $message, $sender)) {
                        $message = "We've sent a verification code to your Email <br> $email";

                        $_SESSION['message'] = $message;
                        header('location: verifyEmail.php');
                    } else {
                        $errors['otp_errors'] = 'Failed while sending code!';
                    }
                } else {
                    $errors['db_errors'] = "Failed while inserting data into database!";
                }
            }else{
                $errors['invalidEmail'] = "Invalid Email Address";
            }
        }else {
            $errors['db_error'] = "Failed while checking email from database!";
        }
    }
if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($link, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM users WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($link, $verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE users SET code = 0";
            $run = mysqli_query($link,$newQuery);
            header("location: newPassword.php");
        }else{
            $errors['verification_error'] = "Invalid Verification Code";
        }
    }else{
        $errors['db_error'] = "Failed while checking Verification Code from database!";
    }
}

// change Password
if(isset($_POST['changePassword'])){
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);
    
    if (strlen($_POST['password']) < 8) {
        $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password_error'] = 'Password not matched';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE users SET password = '$password' WHERE `Email Address` = '$email'";
            $updatePass = mysqli_query($link, $updatePassword) or die("Query Failed");
            session_unset();
            session_destroy();
            header('location: login.php');
        }
    }
}