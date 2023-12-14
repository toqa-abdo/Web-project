<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../ws1/vendor/autoload.php';


$rand=rand(10,1000);
session_start();
if(isset($_POST['send'])){
    $_SESSION["ran"]=$rand;
    $e=$_POST['ep'];
    $db = new mysqli('localhost', 'root', '', 'cinema');
    $qrestr="select * from users";
    $result= $db->query($qrestr);
    for($i=0;$i<$result->num_rows;$i++){
        $row=$result->fetch_object();

        if($row->email==$e){
// Instantiation and passing `true` enables exceptions
            $_SESSION["EMAIL"]=$e;
// Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host = 'smtp.googlemail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   // Enable SMTP authentication
                $mail->Username = 'rawannnsalemm@gmail.com';                     // SMTP username
                $mail->Password = 'rawanrawanrawan';                               // SMTP password
                $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                //Recipients
                $mail->setFrom('rawannnalemm@gmail.com', 'Adminstration');
                $mail->addAddress('zainaabusamra3@gmail.com');               // Name is optional
                $mail->Subject = 'Change Password';
                $mail->Body = '<p>Dear </p><p> To be able to change the password </p>
<p>for your account on the site StarCinema</p>
Please enter random code = '.$rand.',</p>
            <p>if you dont want to change your password ,</p>
            <p>just ignore this email</p>
            <p>With Regards. </p>
            <p>Webmaster</p>   <p></p>';

                $mail->AltBody=',,,';
                $mail->send();

            }
            catch (Exception $e) {
            }
        }
    }
}

if(isset($_POST['check'])){
    if( $_SESSION["ran"]==$_POST['random'])
    {
        header("location:newpass.php");
    }
}


?>






<!---->
<!---->
<?php
//
//require '\xampp\htdocs\zainaweb\ws1/vendor/autoload.php';
////require '../vendor/autoload.php';
//$message_sent = false;
//$valid = true;
//$empty_name = true;
//$empty_email = true;
//$empty_msg = true;
//$valid_email = false;
//function test_input($data) {
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}
//if(isset($_POST['submit_m']))
//{
//    $userName = test_input($_POST['name']);
//    $userEmail = test_input($_POST['email']);
////    $userEmail = 'zainaabusamra3@gmail.com';
//    $userMsg = test_input($_POST['message']);
//    if (!empty($userName)) $empty_name = false;
//    if (!empty($userEmail)) $empty_email = false;
//    if (!empty($userMsg)) $empty_msg = false;
//    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) $valid_email = true;
//    $valid = ($valid_email and !$empty_name and !$empty_email and !$empty_msg);
//
//    if($valid){
//// Instantiation and passing `true` enables exceptions
//        $mail = new PHPMailer(true);
//
//
//        //Server settings
//        $mail->SMTPDebug = 0;                      // Enable verbose debug output
//        $mail->isSMTP();                                            // Send using SMTP
//        $mail->Host = 'smtp.googlemail.com';                    // Set the SMTP server to send through
//        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
//        $mail->Username = 'rawannnsalemm@gmail.com';                     // SMTP username
//        $mail->Password = 'rawanrawanrawan';                               // SMTP password
//        $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
//        $mail->Port = 587;                                    // TCP port to connect to
//        $mail->SMTPOptions = array(
//            'ssl' => array(
//                'verify_peer' => false,
//                'verify_peer_name' => false,
//                'allow_self_signed' => true
//            )
//        );
//        //Recipients
//        $mail->setFrom('rawannnalemm@gmail.com', 'Adminstration');
//        $mail->addAddress(" $userEmail");               // Name is optional
//
//        $mail->Subject = 'send massage';
////        $mail->Body  = "From: ".$userName . "\r\n";
//        $mail->Body = "Email: ".$userEmail. "\r\n";
////        $mail->Body = "Message: ".$userMsg. "\r\n";
//
//        $mail->AltBody = ',,,';
//        $mail->send();
//        ?>
<!--        <script>     alert("Mail sent successfully");-->
<!--        </script>-->
<!--        --><?php
//    }
//
//    else
//    {
//        ?>
<!--        <script type="text/javascript">-->
<!--            alert("Mail not sent.")-->
<!--        </script>-->
<!--        --><?php
//    }
//
//}
//?>

<?php
//if (isset($_POST['send'])) {
//    $fromEmail = 'rawannnsalemm@gmail.com';
//    $toEmail = $_POST['ep'];
////    $subjectName = $_POST['subject'];
////    $message = $_POST['message'];
//
//    $to = $toEmail;
//    $subject = 'verification';
//    $headers = "MIME-Version: 1.0" . "\r\n";
//    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
//    $message = '<!doctype html>
//			<html lang="en">
//			<head>
//				<meta charset="UTF-8">
//				<meta name="viewport"
//					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
//				<meta http-equiv="X-UA-Compatible" content="ie=edge">
//				<title>Document</title>
//			</head>
//			<body>
//
//			</body>
//			</html>';
//    $result = @mail($to, $subject, $message, $headers);
//
//    echo '<script>alert("Email sent successfully !")</script>';
//    echo '<script>window.location.href="index.php";</script>';
//}
//?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="pgs_style.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form  action="check.php" method="post" class="sign-in-form" >
                <h2 class="title">Forget Password</h2>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="email" name="ep"  placeholder="Enter your email" required="required" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input name="random"  placeholder="Enter verification code" type="text" />
                </div>
                <button name="send"  class="btn">Send</button>
                <button  name="check"  class="btn">Checked</button>
            </form>

        </div>
    </div>




    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    If you forget password you can change the password by enter old password then enter new one and sure it
                </p>

            </div>
            <img src="images/undraw1.svg" class="image" alt="" />
        </div>

    </div>
</div>


</body>
</html>




<!--<!DOCTYPE html>-->
<!--<html lang="en"><head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Landing Page Design With Animation Using Only HTML &amp; CSS | Waves Animation, Dropdown Menu, Multiple Circle Rotation</title>-->
<!--    <style>-->
<!---->
<!--        .logo{-->
<!--            padding: 41px;-->
<!---->
<!--        }-->
<!---->
<!--        *{-->
<!--            font-family: 'Poppins',sans-serif;-->
<!--            margin: 0;-->
<!--            padding: 0;-->
<!--            box-sizing: border-box;-->
<!--            scroll-behavior: smooth;-->
<!--        }-->
<!--        body{-->
<!--            min-height: 100vh;-->
<!--            font-family: Space Grotesk;-->
<!--            background: linear-gradient(110deg,#0f1829,#050812);-->
<!--            overflow-x: hidden;-->
<!---->
<!--        }-->
<!---->
<!--        .big_contaner{-->
<!--            width: 100%;-->
<!--            height: 95vh;-->
<!--            max-width: 1200px;-->
<!--            position: absolute;-->
<!--            top:50%;-->
<!--            left: 50%;-->
<!--            transform: translate(-50%,-50%);-->
<!--            overflow: hidden;-->
<!--            border-radius: 10px;-->
<!--            box-shadow: 0 0 20px #96dbe4;-->
<!--            box-shadow: 0 0 20px #96dbe4;-->
<!--            box-shadow: 0 0 20px #96dbe4;-->
<!--        }-->
<!---->
<!--        .div1{-->
<!---->
<!---->
<!--            display: flex;-->
<!--            justify-content: center;-->
<!--            align-items: center;-->
<!--            background: black;-->
<!--            position: relative;-->
<!--            color:white;-->
<!--            border-radius:9px ;-->
<!--            animation: exampl  ;-->
<!--        }-->
<!---->
<!---->
<!--        /*@keyframes exampl {*/-->
<!--        /*from{left:100% }*/-->
<!--        /*    to{left: 0px}*/-->
<!--        /*    }*/-->
<!---->
<!--        .big_contaner span{-->
<!--            position: absolute;-->
<!--            width: 4px;-->
<!--            height: 4px;-->
<!--            top:50%;-->
<!--            left:50%;-->
<!--            background: white;-->
<!--            border-radius: 50%;-->
<!--            box-shadow: 0px 0px 0px 4px rgba(255,255,255,0.1), 0 0 20px rgba(255,255,255,1);-->
<!--            animation: s 3s linear infinite;-->
<!--        }-->
<!---->
<!--        .big_contaner span:before{-->
<!--            content:'';-->
<!--            position: absolute;-->
<!--            transform: translateY(-50%);-->
<!--            top:50%;-->
<!--            width: 300px;-->
<!--            height: 1px;-->
<!--            background:linear-gradient(90deg,#fff,transparent);-->
<!--        }-->
<!--        @keyframes s {-->
<!--            0%{-->
<!--                transform: rotate(315deg) translateX(0);opacity:1;-->
<!--            }-->
<!---->
<!---->
<!--            70%{-->
<!--                opacity:1;-->
<!---->
<!--            }-->
<!---->
<!---->
<!---->
<!--            100%{-->
<!--                transform: rotate(315deg) translateX(-1000px);-->
<!--                opacity:0;-->
<!--            }}-->
<!---->
<!--        .big_contaner span:nth-child(1){-->
<!--            top:0px;-->
<!--            right:0;-->
<!--            animation-delay:0s;-->
<!--            animation-duration: 2s;-->
<!--            left: initial;-->
<!--        }-->
<!---->
<!--        .big_contaner span:nth-child(2){-->
<!--            top:0px;-->
<!--            right:80px;-->
<!--            left: initial;  animation-delay:0.2s;-->
<!--            animation-duration: 3s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!---->
<!--        .big_contaner span:nth-child(3){-->
<!--            top:80px;-->
<!--            right:0px;-->
<!--            left: initial;  animation-delay:0.4s;-->
<!--            animation-duration: 2s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!---->
<!--        .big_contaner span:nth-child(4){-->
<!--            top:0px;-->
<!--            right:180px;-->
<!--            left: initial;  animation-delay:0.6s;-->
<!--            animation-duration: 1.5s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!--        .big_contaner span:nth-child(5){-->
<!--            top:0px;-->
<!--            right:400px;-->
<!--            left: initial;  animation-delay:0.8s;-->
<!--            animation-duration: 2.5s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!---->
<!--        .big_contaner span:nth-child(6){-->
<!--            top:0px;-->
<!--            right:600px;-->
<!--            left: initial;  animation-delay:1.0s;-->
<!--            animation-duration: 3s;-->
<!---->
<!--        }-->
<!---->
<!--        .big_contaner span:nth-child(7){-->
<!--            top:300px;-->
<!--            right:0px;-->
<!--            left: initial;  animation-delay:1.2s;-->
<!--            animation-duration: 1.75s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!--        .big_contaner span:nth-child(8){-->
<!--            top:0px;-->
<!--            right:700px;-->
<!--            left: initial;  animation-delay:1.4s;-->
<!--            animation-duration: 1.25s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!--        .big_contaner span:nth-child(9){-->
<!--            top:0px;-->
<!--            right:1000px;-->
<!--            left: initial;  animation-delay:0.75s;-->
<!--            animation-duration: 2.25s;-->
<!---->
<!--        }-->
<!---->
<!---->
<!---->
<!---->
<!--        .big_contaner span:nth-child(10){-->
<!--            top:0px;-->
<!--            right:450px;-->
<!--            left: initial;  animation-delay:2.75s;-->
<!--            animation-duration: 2.25s;-->
<!---->
<!--        }-->
<!--        .contaner{-->
<!--            width: 100%;-->
<!--            height: 100%;-->
<!--            overflow: auto;-->
<!---->
<!--        }-->
<!---->
<!--        .wrapper{-->
<!--            position: relative;-->
<!--            height: 100%;-->
<!--            overflow: hidden;-->
<!---->
<!--        }-->
<!---->
<!--        .content{-->
<!--            display: flex;-->
<!--            flex-wrap: wrap;-->
<!--            justify-content: space-between;-->
<!--            position: absolute;-->
<!--            top:40%;-->
<!--            left:15% ;-->
<!---->
<!--            width: 50%;-->
<!---->
<!---->
<!---->
<!--        }-->
<!---->
<!---->
<!--        .img{-->
<!--            position: absolute;-->
<!--            width: 500px;-->
<!--            height: 500px;-->
<!--            background: radial-gradient(520px,  white, transparent 50%);-->
<!--            margin-top: -50px;-->
<!--            top:20%;-->
<!--            right: 10%;-->
<!---->
<!--        }-->
<!--        .email-icon{-->
<!--            position: absolute;-->
<!--            top: 50%;-->
<!--            left: 50%;-->
<!--            transform: translate(-50%, -50%);-->
<!--            height: 160px;-->
<!--            width: 160px;-->
<!---->
<!--        }-->
<!--        .social-icons{-->
<!--            height: 100%;-->
<!--            animation: rotation 60s linear infinite;-->
<!--        }-->
<!--        @keyframes rotation {-->
<!--            100%{-->
<!--                transform: rotate(360deg);-->
<!--            }-->
<!--        }-->
<!--        .social-icons img{-->
<!--            position: absolute;-->
<!--            height: 90px;-->
<!--            width: 90px;-->
<!--        }-->
<!--        .social-icons img:nth-child(1){-->
<!--            top: 0;-->
<!--            left: 42%;-->
<!--        ;-->
<!--        }-->
<!--        .social-icons img:nth-child(2){-->
<!--            top: 25%;-->
<!--            right: 0;-->
<!--        }-->
<!--        .social-icons img:nth-child(3){-->
<!--            top: 70%;-->
<!--            left: 70%;-->
<!--        }-->
<!--        .social-icons img:nth-child(4){-->
<!--            top: 25%;-->
<!--            left: 0;-->
<!--            height: 110px;-->
<!--            width: 110px;-->
<!--        }-->
<!--        .social-icons img:nth-child(5){-->
<!--            top: 70%;-->
<!--            left: 10%;-->
<!--            height: 120px;-->
<!--            width: 120px;-->
<!--        }-->
<!---->
<!--        .text-center{-->
<!--            color:#fff;-->
<!--            text-transform:uppercase;-->
<!--            font-size: 23px;-->
<!--            margin: -70px 0 80px 0;-->
<!--            display: block;-->
<!--            text-align: center;-->
<!--        }-->
<!--        .box{-->
<!--            position:absolute;-->
<!--            left:50%;-->
<!--            top:50%;-->
<!--            transform: translate(-50%,-50%);-->
<!--            background-color: rgba(0, 0, 0, 0.89);-->
<!--            border-radius:3px;-->
<!--            padding:70px 100px;-->
<!--        }-->
<!--        .input-container{-->
<!--            position:relative;-->
<!--            margin-bottom:25px;-->
<!--        }-->
<!--        .input-container label{-->
<!--            position:absolute;-->
<!--            top:0px;-->
<!--            left:0px;-->
<!--            font-size:16px;-->
<!--            color:#fff;-->
<!--            pointer-event:none;-->
<!--            transition: all 0.5s ease-in-out;-->
<!--        }-->
<!--        .input-container input{-->
<!--            border:0;-->
<!--            border-bottom:1px solid #555;-->
<!--            background:transparent;-->
<!--            width:100%;-->
<!--            padding:8px 0 0px 0;-->
<!--            font-size:16px;-->
<!--            color:#fff;-->
<!--        }-->
<!--        .input-container input:focus{-->
<!--            border:none;-->
<!--            outline:none;-->
<!--            border-bottom:1px solid #e74c3c;-->
<!--        }-->
<!--        .btn{-->
<!--            color:#fff;-->
<!--            background-color:#4682B4;-->
<!--            outline: none;-->
<!--            border: 0;-->
<!--            color: white;-->
<!--            padding:10px 20px;-->
<!--            text-transform:uppercase;-->
<!--            margin-top:50px;-->
<!--            border-radius:2px;-->
<!--            cursor:pointer;-->
<!--            position:relative;-->
<!--        }-->
<!--        /*.btn:after{-->
<!--            content:"";-->
<!--            position:absolute;-->
<!--            background:rgba(0,0,0,0.50);-->
<!--            top:0;-->
<!--            right:0;-->
<!--            width:100%;-->
<!--            height:100%;-->
<!--        }*/-->
<!--        .input-container input:focus ~ label,-->
<!--        .input-container input:valid ~ label{-->
<!--            top:-12px;-->
<!--            font-size:12px;-->
<!---->
<!--        }-->
<!---->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<div class="big_contaner">-->
<!--    <div class="div1">-->
<!--        <section>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--        </section></div>-->
<!---->
<!--    <div class="contaner">-->
<!---->
<!--        <div class="wrapper">-->
<!---->
<!--            <header>-->
<!--                <div class="logo">-->
<!--                    <img src="../imags/logo.png" alt="">-->
<!--                </div>-->
<!---->
<!--            </header>-->
<!---->
<!--            <div class="content">-->
<!---->
<!--                <form  action="forget_password.php" method="post">-->
<!--                    <div class="input-container">-->
<!--                        <input name="ep" type="text" />-->
<!--                        <label>Enter your Email</label>-->
<!--                    </div>-->
<!--                    <div class="input-container">-->
<!--                        <input name="random" type="text" />-->
<!--                        <label>Enter vervication code</label>-->
<!--                    </div>-->
<!--                    <button name="send"  class="btn">Send</button>-->
<!--                    <button  name="check"  class="btn">Checked</button>-->
<!--                </form>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="img">-->
<!--                <div class="social-icons">-->
<!--                    <img src="../image_forget/earth.png" alt="">-->
<!--                    <img src="../image_forget/neptune%20(1).png" alt="">-->
<!---->
<!--                    <img src="../image_forget/planet.png" alt="">-->
<!--                    <img src="../image_forget/neptune%20(2).png" alt="">-->
<!--                    <img src="../image_forget/saturn.png" alt="">-->
<!---->
<!--                </div>-->
<!--                <img class="email-icon" src="../image_forget/2156067.png" alt="">-->
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!--        <div style="position: absolute; top:80%; left: 5%; border-radius: 50%;  background: radial-gradient(120px, #96dbe4  , transparent 60%); "; >-->
<!--            <img style="width: 100px;height: 100px;" src="../imags/mail%20(1).png">-->
<!--        </div>-->
<!---->
<!---->
<!--        </script>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->


