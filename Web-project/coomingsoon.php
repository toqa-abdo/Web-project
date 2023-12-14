<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>nowplaying</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="p.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="post">
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">User's List</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">


            <!--   <li>
                   <i class='bx bx-search' ></i>
                   <input type="text" placeholder="Search...">
                   <span class="tooltip">Search</span>
               </li>  -->
            <li>
                <a href="UserProfile.php">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="mov.html" class="active">
                    <i class='fas fa-tape' ></i>
                    <span class="links_name">Coming soon</span>
                </a>
                <span class="tooltip">Coming soon</span>
            </li>
            <li>
                <a href="coomingsoon.php">
                    <i class='fa fa-ticket' ></i>
                    <span class="links_name">now playing</span>
                </a>
                <span class="tooltip">now playing</span>
            </li>
            <li>
                <a href="food.html">
                    <i class='fas fa-pizza-slice' ></i>
                    <span class="links_name">food&drinks</span>
                </a>
                <span class="tooltip">food&drinks</span>
            </li>

            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <a target="_top"  href="index.php" >
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

</form>

<!--image slider start-->

<div class="slider">
    <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
            <img src="Fimg/GLORIOUS.jpg" alt="">
        </div>
        <div class="slide">
            <img src="Fimg/f4.jpg" alt="">
        </div>
        <div class="slide">
            <img src="Fimg/BULLET%20TRAIN.jpg" alt="">
        </div>
        <div class="slide">
            <img src="Fimg/DCLEAGUE%20OF%20SUPER%20PETS.jpg" alt="">
        </div>
        
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
</div>

<!--image slider end-->

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
    }, 5000);
</script>
<br/> <br/><br/><br/> <br/><br/>
<div align="center"> <h1> OUR FILMS</h1></div>
<br/>
<!--///////////-->
<div class="container">


    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/f4.jpg">
        </div>
        <div class="cdetail">
            <h2> BLACK ADAMA</h2>
            <br/>
            <p> Interesting action movie will be shown in 13/Aug/2022 at 5:00pm </p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="1">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/doraemon%20f.jpg">
        </div>
        <div class="cdetail">
            <h2> DORAEMON</h2>
            <br/>
            <p>Fun cartoon movie will be shown  in 14/Aug/2022 at 4:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="2">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/slr%20f.jpg">
        </div>
        <div class="cdetail">
            <h2> SLR</h2> <br/>
            <p>Interesting action movie will be shown in 1/Aug/2022 at 6:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="3">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/maid%20in%20malacanang%20f.jpg">
        </div>
        <div class="cdetail">
            <h2> MAID IN MALACANANG</h2> <br/>
            <p>Interesting action movie will be shown in  6/Aug/2022 at 5:00pm</p><br>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="4">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/BULLET%20TRAIN.jpg">
        </div>
        <div class="cdetail">
            <h2> BULLET TRAIN</h2> <br/>
            <p>Interesting action movie will be shown in 9/Aug/2022 at 9:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="5">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/DC%20league%20of%20superpets.jpg">
        </div>
        <div class="cdetail">
            <h2> DC LEAGUE OF SUPERPETS</h2> <br/>
            <p>Interesting action movie will be shown in 5/Aug/2022 at 8:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="6">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/GLORIOUS.jpg">
        </div>
        <div class="cdetail">
            <h2> GLORIOUS</h2> <br/>
            <p>Fun cartoon movie will be shownin 22/Aug/2022 at 9:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="7">Book a Ticket</a>
        </div>
    </div>
    <!--*********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/f3.jpg">
        </div>
        <div class="cdetail">
            <h2> THE BOB'S OF BERGERS</h2> <br/>
            <p>Interesting action movie will be shown in 20/Aug/2022 at 6:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="8">Book a Ticket</a>
        </div>
    </div>
    <!-- ********-->
    <div class="mycard">
        <div class="cimg">
            <img src="Fimg/f2.jpg">
        </div>
        <div class="cdetail">
            <h2> BIRDS OF BRYE</h2> <br/>
            <p>Fun cartoon movie will be shown in 7/Aug/2022 at 4:00pm</p><br/>
            <a href="popup"  onclick="toggle()" action="back1.php"  method="post" id="9">Book a Ticket</a>
        </div>
    </div>
    <!--*********-->
</div>
<!-- pppp-->
<div id="popup">
    <h2> Price:$15 </h2><br/>
    <h4>Are you sure to book a ticket</h4><br/>
    <a href="#" onclick="toggle()"> Yes!</a>
</div>
<script type="text/javascript">
    function toggle(){
        var b1= document.getElementById('1');
        b1.classList.toggle('active');

        var popup= document.getElementById('popup');
        popup.classList.toggle('active');

        var b2= document.getElementById('2');
        b2.classList.toggle('active');
        var b3= document.getElementById('3');
        b3.classList.toggle('active');
        var b4= document.getElementById('4');
        b4.classList.toggle('active');
        var b5= document.getElementById('5');
        b5.classList.toggle('active');
        var b6= document.getElementById('6');
        b6.classList.toggle('active');
        var b7= document.getElementById('7');
        b7.classList.toggle('active');
        var b8= document.getElementById('8');
        b8.classList.toggle('active');
        var b9= document.getElementById('9');
        b9.classList.toggle('active');
    }

</script>
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

</body>
</html>
