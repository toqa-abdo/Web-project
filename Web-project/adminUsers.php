
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="AdmineStyle1.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="jquery.lettering.js"></script>
    <script>
$(document).ready(function() {
    $(".letter").lettering();}
);
    </script>
</head>

<body>
<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Admin's List</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

        <li>
            <a href="profile.html">
                <i class='bx bx-user' ></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>

        <li>
            <a href="adminUsers.php">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="links_name"> Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>

        <li>
            <a href="adminNow.php">
                <i class="fas fa-tv" aria-hidden="true"></i>
                <span class="links_name">Now playing</span>
            </a>
            <span class="tooltip">Now playing</span>
        </li>
        <li>
            <a href="adminCom.php">
                <i class="fas fa-wallet" aria-hidden="true"></i>
                <span class="links_name">Coming soon</span>
            </a>
            <span class="tooltip">Coming soon</span>
        </li>

        <li>
            <a href="adminMessage.html">
                <i class='bx bx-chat' ></i>
                <span class="links_name"> Messages</span>
            </a>
            <span class="tooltip"> Messages</span>
        </li>





        <li class="profile">
            <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                <div class="name_job">
                    <a target="_top"  href="SignUpPage.html" >
                        <i class='bx bx-log-out' ></i>
                        <span class="links_name"></span>
                    </a>
                    <i class='bx bx-log-out' ></i>
                    <span class="links_name"></span>
                </div>
            </div>
        </li>
    </ul>
</div>


<section class="Title">
    <h1>
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span>E</span>
        <span>R</span>
        <span>S</span>
        <span>T</span>
        <span>I</span>
        <span>C</span>
        <span>K</span>
        <span>E</span>
        <span>T</span>
        <span>S</span>
    </h1>
</section>



<section class="home-section">
    <div class="header-fixed">
        <table>
            <thead>
            <tr>
                <th>Film Name</th>
                <th>Date</th>
                <th>Show Time</th>
                <th>Email</th>

                <br>

            </tr>
            </thead>
            <tbody>
            <?php
            $db=new mysqli('localhost','root','','cinema');
            if($db->connect_error){
                die("connection Failed!".$db->connect_error);
            }

            $sql="select *from booking1";
            $result=$db->query($sql);




            if(!$result){
                die("Invalid Query!".$db->connect_error);
            }

            while($row=$result->fetch_assoc()){
                echo"  <tr>
            <td><pre>          ".$row["FilmName"]."</pre> </td>
            <td><pre>              ".$row["Date"]."</pre> </td>
            <td><pre>                   ".$row["ShowTime"]."</pre></td>
            <td><pre>                       ".$row["Email"]."  </pre></td>
            "?>


                <?php  echo"</td>"   ?>

                <?php
               echo" </tr>";
            }

            ?>



            </tbody>


        </table>
    </div>
    </div>

</section>
<br> <br>



<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });
    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)

    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }

</script>

<script>


    var add=document.getElementById("add");
    var ss=document.getElementById("ss");
    var s=document.getElementById("s");
    add.onmousemove=function() {
        ss.style.left='150px';
        ss.style.opacity='0';
        s.style.opacity='1';

    }
</script>



</body>
</html>