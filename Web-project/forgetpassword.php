<?php

if(isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['newPass'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $newPass=$_POST['newPass'];

    try{
        $db=new mysqli('localhost','root','','cinema');
        $qryStr="select * from users ";
        $res=$db->query($qryStr);
        for($i=0; $i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->Email==$email&&$pass==$newPass){
                $up=" UPDATE `users` SET `password` ='$newPass' WHERE `email` = '$email' ; ";
                $res=mysqli_query($db,$up);
                header("location:emai.html");

            }
            else{
                header("location:forgetPassword.php");

            }


        }
        $db->close();
    }
    catch (Exception $e){
    }
}

?>



