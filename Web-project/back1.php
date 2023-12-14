<!---->
<?php
//session_start(); //session is enable just in this page
//
//
//if(isset($_POST['loginEmail'] ) && isset($_POST['loginPassword'])) {
//
//
//    $email = $_POST['loginEmail'];
//    $pass = $_POST['loginPassword'];
//
//    $db = new mysqli('localhost', 'root', '', 'cinema');
//    $qrestr = "SELECT * FROM users";
//    $result = $db->query($qrestr);
//    $row = $result->fetch_array();
//
//    for ($i = 0; $i < $result->num_rows; $i++) {
//            echo $row[0] . "  " . $row[1] . "  " . $row[2] . "  " .$row[3] . " <br> " ;
//
//        if (($row[1] == $email )&& ($row[2] == $pass)) {
//            $_SESSION['email'] = $email;
//            $_SESSION['password'] = $pass;
//
//            header('location:profile.html');
//        } else {
//            echo '<h2 style="color: red; position: absolute;top:70%;left:41%; font-size: 10px;"> incorrect password or email</h2>';
//        }
//
//    }
//    $db->close();
//
//
//}
//
//?>
<!---->
<!---->
<!---->
<!---->
<?php
//session_start(); //session is enable just in this page
//if(isset($_POST['emaill'] ) && isset($_POST['passs'])){
//    $email=$_POST['emaill'];
//    $pass=$_POST['passs'];
//    try {
//        $db = new mysqli('localhost', 'root', '', 'secws');
//        $qrestr="select * from members";
//        $result= $db->query($qrestr);
//        for($i=0;$i<$result->num_rows;$i=$i+1){
//            $row=$result->fetch_object();
//
//            if($row->emaill==$email && $row->password==sha1($pass))
//            {
//                $_SESSION['email']=$email;
//                $_SESSION['password']=$pass;
//                $_SESSION['y']=1;
//                header('location:../phps/index.php');
//            }
//            else{
////         echo '<h2 style="color: red; position: absolute;top:70%;left:41%; font-size: 10px;"> incorrect password or email</h2>';
//            }
//        }
//        $db->close();
//    }
//    catch (Exception $e){
//
//    }
//}
//
//?>
<?php
session_start();
$host = "localhost";
$user = "root";
$password="";
$db="cinema";

$data = mysqli_connect($host , $user , $password , $db);
if($data == false){
die("connection error");

}

if($_SERVER["REQUEST_METHOD"] == "POST"){
$Email = $_POST["loginEmail"];
$password = $_POST["loginPassword"];
$_SESSION['email']=$Email;
$sql = "select * from users where email = '".$_POST["loginEmail"]."'AND password = '".$_POST["loginPassword"]."' ";
$result = mysqli_query($data , $sql);
$row = mysqli_fetch_array($result);

if($row['email'] == "Zaina@Gmail.Com" && $row['password'] == "1234"){

$_SESSION['email'] = $row['email'];
header("location:profile.html?userEmail=".$_SESSION['email']."");
}
    if($row['email'] == "Toqa@Gmail.Com" && $row['password'] == "1010"){

        $_SESSION['email'] = $row['email'];
        header("location:UserProfile.php?userEmail=".$_SESSION['email']."");
    }

}
//$sql1 = "select * from users where Email = '".$Email."'AND password = '".$password."' ";
//$result1 = mysqli_query($data , $sql1);
//$row1 = mysqli_fetch_array($result1);
//if($row1['email'] == $Email && $row1["password"] == $password){
//header('location:profile.html');
//}
//
//else{
//echo "username or password incorrect";
//}

?>
