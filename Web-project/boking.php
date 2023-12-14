<?php

//
//$db=new mysqli('localhost','root','','cinema');

$con=mysqli_connect("localhost","root","","cinema");
$sql="select * from movies";
//$query_run=mysqli_query($con,$query);

$result = mysqli_query($con , $sql);
$row = mysqli_fetch_array($result);

$id="select title from movies where id" ;
if($id == "id"){


    $email_user = $_SESSION['email'];
    $movie_name = "select title from movies where id='id'" ;
    $date = "select show_date from movies where id='id'" ;;
    $hour = "select show_time from movies where id='id'" ;;

    $sqll = "INSERT INTO `booking` (`email-user`, `movie-name`, `date`, `hour`) 
              VALUES ('" . $email_user . "', '" . $movie_name . "', '" . $date . "','" . $hour . "'); ";
    $con->query($sqll);
    $con->commit();
    $con->close();
    header('location:coomingsoon.html');
}



//if($con->connect_error){
//    die("connection Failed!".$con->connect_error);
//
//
//
//    $email = $_POST[my];
//    $movie_name = $_POST[mycard.cdetail.h2];
//    $date = $_POST[my];
//    $hour = $_POST['t1'];
//
//
//    $db = new mysqli('localhost', 'root', '', 'cinema');
//    $sqll = "INSERT INTO `booking` (`email`, `movie-name`, `date`, `hour`)
//              VALUES ('" . $email . "', '" . $movie_name . "', '" . $date . "','" . $hour . "'); ";
//    $db->query($sqll);
//    $db->commit();
//    $db->close();
//    header('location:index.html');
//}

?>















//$db=new mysqli('localhost','root','','cinema');
//if($db->connect_error){
//    die("connection Failed!".$db->connect_error);
//}
//
//$sql="select *from booking";
//$result=$db->query($sql);
//
//
//
//
//if(!$result){
//    die("Invalid Query!".$db->connect_error);
//}
//
//
//
//while($row=$result->fetch_assoc()){
//    echo"  <tr>
//            <td>".$row["email-user"]." </td>
//            <td>".$row["movie-name"]." </td>
//            <td>".$row["date"]."</td>
//            <td>".$row["time"]."</td>
//            <td>"?>
<!--<!--    <div >-->-->
<!--<!--        <img src="Images/-->--><?////=$row['Photo']?><!--<!--">-->-->
<!--<!--    </div>-->-->
<!---->
<!--    --><?php // echo"</td>"   ?>
<!---->
<!--    <td><div class="wrapper">-->
<!---->
<!--            <div class="button">-->
<!--                <div class="icon"><i class="fa fa-book" aria-hidden="true"></i></div>-->
<!--<!--                -->--><?php ////echo" <a href='Booking.php?id=".$row['Trip Time']."'> <span>Booking</span></a>"?>
<!--            </div>-->
<!--        </div></td>-->
<!--    --><?php
//    echo" </tr>";
//}

