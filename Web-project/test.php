


<?php


if(isset($_POST['loginEmail'])&&isset($_POST['loginPassword'])) {



    $userSignPassword = $_POST['loginPassword'];
    $userSignEmail = $_POST['loginEmail'];



    $db = new mysqli('localhost', 'root', '', 'cinema');
    $qre="select * from users ";
    $res = $db -> query($qre);

    for($i=0;$i< $res ->num_rows;$i++){
        $row =$res -> fetch_array();
        if($row[1]==$userSignEmail and $row[2]==$userSignPassword)
        {
            $_SESSION['email']=$userSignEmail;
            $_SESSION['password']=$userSignPassword;
            $_SESSION['y']=1;
            header('location:index.php');
        }
//        echo "<p style='color: orange'> in valed</p>";

    }



}
?>
