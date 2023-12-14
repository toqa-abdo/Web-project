<?php
session_start();
if(isset($_POST['update_password']))
{
    $emaill= $_SESSION['email'];
    if($_POST['new']==$_POST['conform']){
        $p=$_POST['new'];

        $d = new mysqli('localhost', 'root', '', 'cinema');
        $q = "UPDATE `users` SET `password`='$p' WHERE `email`= 'emaill' ";
        $con=$d->query($q);
        header("location:emai.html");
    }
    else{

    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update password</title>
    <link rel="stylesheet" href="pgs_style.css" />
<!--    <link href="../styles/new_password.css" rel="stylesheet">-->
</head>

    <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="newpass.php" method="post" class="sign-in-form">
                        <h2 class="title">Update Password</h2>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input name="new" type="password" placeholder="Enter New Password" required="required" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="conform" placeholder="Enter confirm Password" required="required" />
                        </div>

                        <div>
<!--                        <input type="submit" value="change" class="btn solid" />-->
                            <button name="update_password"  class="btn">Password update</button>

                        </div>
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

    </div>


</body>
</html>

<!---->





<!---->
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Title</title>-->
<!--    <link href="../styles/new_password.css" rel="stylesheet">-->
<!--</head>-->
<!--<body style="background-color: #0f1829;" >-->
<!--<div id="star">-->
<!---->
<!---->
<!---->
<!--    <div class="big_contaner">-->
<!--        <div id="box3">-->
<!--            <div id="container_loading">-->
<!--                <div id="logo">-->
<!--                    <img src="../image_new_pass/logo.png">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="contaner">-->
<!---->
<!--            <div id="main">-->
<!--                <div id="box1"> </div>-->
<!--                <div id="box2">-->
<!---->
<!--                    <div id="text">-->
<!--                        <form action="new_password.php" method="post">-->
<!--                            <div class="input-container">-->
<!--                                <input name="new" type="password" />-->
<!--                                <label>New Password</label>-->
<!--                            </div>-->
<!--                            <div class="input-container">-->
<!--                                <input name="conform" type="password" />-->
<!--                                <label>Conform New Password</label>-->
<!--                            </div>-->
<!--                            <button name="update_password"  class="btn">Password update</button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                    <img style="position: fixed; width: 170px; height: 170px  ;top:78%; left: 2%;" src="../image_new_pass/password.png">-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <script type="text/javascript" src="../scripts/particles.js"></script>-->
<!--    <script type="text/javascript" src="../scripts/star.js"></script>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->