<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/glyphicones.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body style="font-family:'Ubuntu', sans-serif;">
    <?php
include_once "traitement.php";


?>
<div class="sticky-top">
 <nav class="navbar navbar-expand-sm   pr-10 sticky-top" id="NV">

<a class="navbar-brand " href="#" style="padding-top:4px ; padding-bottom:4px ;"> <img
        src="images/mysec logo.png" id="logo"> </a>

<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
    style=" color:black;">
    <img src="images/icons8-menu-48.png"/>
</button>

<div class="collapse navbar-collapse justify-content-end text-center" id="collapsibleNavbar">
    <ul class="navbar-nav  " style="padding-right:15PX;">
        <li class="nav-item " id="BORD"> <a class="nav-link" href="index2.html" id="ln">LOG IN</a> </li>
        &#160;&#160;&#160;&#160;
        <li class="nav-item"> <a class="nav-link" href="#AU" id="lnk">ABOUT US</a> </li>
        &#160;&#160;&#160;&#160;
    </ul>
</div>
</nav>
</div>


    <section class="container-fluide d-flex align-items-center" id="maine" style="background-image: url('images/Artboard\ 1.png');">

       

        <div class=" row container-fluide text-center px-4 " style="width: 100%;">
           <div class="col-lg-6"></div>
        <div class="col-lg-6 col-sm-12 flex-fill bd-highlight "> 
        <p style=" float: right;  color: white ; " class="display-4 text-end "> MySec Will <span style="color:#00aeff;">keep</span> your passwords safe for 10years <span style="color:#00aeff;">FREE!!!</span></p>
        </div>
        </div>
    </section>




    <section class="container text-center">
        </br></br></br>


        <p class="display-4" style="font-family: 'Ubuntu', sans-serif;">The <span style="color:#00aeff;">Best</span> Choise To Save Your Passwords With <span style="color:#00aeff;">Simple</span> Methods </p>
        </br>
        </br>
        <div class="row d-md-flex align-items-center">
            <div class="col-lg-6">
                <img src="images/undraw_Security_re_a2rk (1).png" style="width: 100%;">
            </div>
            <div class="col-lg-6">
                <p style="width: 100%;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque vero nulla velit. Ipsam quas veniam veritatis culpa ab aut cum, voluptatum modi necessitatibus similique rerum ullam earum corrupti amet eius?
                </p>
            </div>

        </div>

    </section>
    </br></br></br>
<center>
    <section class=" container row align-items-center text-center  " id="AU" style="height:500px">
        <p style="width: 100%; font-size: 200% ; color:#00aeff;">ABOUT US</p>
        <p style="font-size: large;" class="display-4"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere sed excepturi
            pariatur, aspernatur fuga sapiente autem atque beatae? Quos exercitationem provident corrupti quibusdam
            iusto, vero doloribus iure nam in sequi? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repellendus ratione sint itaque dolore quaerat amet molestiae atque sit fuga temporibus corporis ab, ex,
            nostrum cupiditate animi minus architecto, quis fugit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam suscipit eligendi modi quibusdam ipsa corrupti fugiat dolorum eos omnis? Sunt magni nobis minus. Maxime laborum omnis est, id molestiae consequuntur!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sequi incidunt cumque asperiores debitis, quas reprehenderit quibusdam deserunt, suscipit aperiam iusto quia rerum in facilis. Voluptates et repudiandae fugiat mollitia!
        </p>


    </section>
    </center>
    </br></br></br>



    <footer class=" py-5" style="background-image: url('images/Artboard\ 1.png'); background-position: center;
      background-repeat: no-repeat;
      background-size: cover;" >





        </br>

        <div class="d-md-flex align-items-center bd-highlight" style="background-color:bl;">
            <div class="px-3 flex-fill bd-highlight w-100 " >
                <form action="" method="POST" class="">
                    <div class="form-group ">
                        <label>Login:</label>
                        <input name="login" type="text" class="form-control  " value="" placeholder="Login " style="width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input name="pass" type="password" class="form-control  " value="" style="width: 75%;">
                    </div>


                    <div></div>
                    <input type="submit" name="log" class="btn btn-outline-light " value="Connexion" />
                    <button type="reset" class="btn btn-outline-light">Annuler</button>

                </form>
</br>
                <?php

if (!empty($_POST['log'])) {

    $name = $_POST['login'];
    $pass = $_POST['pass'];

    if ($name == 'MySec' && $pass == '2022') {
?>
                    <script> window.location="index2.php";   </script>
              <?php
    }

    if ($name == '' && $pass == '') {
?>
                <p class='text-danger'> </p>
                <?php

    }

    else {
?>
                <p class='text-danger'> incorrect password or user name</p>
                <?php
    }






# code...
}



?>


            </div>

            <div class="p-2 flex-fill bd-highlight w-100 text-start" >
                <h3 style="color: white;">JOIN US</h3></BR><img src="images/—Pngtree—social media icons set logo_3588882.png" style="width: 200px;"> 
                <img src="images/2.png" style="width: 30%;"> 
                </br></br><p style="font-size: 30px; color: white;" > &#169;2022</p>
            </div>
        </div>
        
    </footer>
    
</body>

</html>