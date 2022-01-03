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
    <script  src="js.js"></script>
    <link rel="stylesheet" href="css/glyphicones.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body style="background-color: black; overflow-x: hidden;">
<?php 

include_once "traitement.php"

?>

    <section id="maine2" class="row container-fluide d-flex align-items-center w-100 text-center"
        style="background-image: url('images/levi-midnight-GyhtzbOUeVI-unsplash.jpg-1.png');">





        <div class="col-sm-6    text-center">
            <img src="images/mysec logo2.png " style="width: 100%;">
        </div>
        <div class="col-sm-6 text-center pr-5" id="l1">

            <a href="index1.php" id="" class="mr-5 p-3" style="border: 2px solid white; border-radius: 6px;"> HOME </a>
            <a href="index3.php" id=""> SEARCH </a>


        </div>




    </section>
    <form action="" method="POST">
        <div class="text-center">

            <h4 style="color: white;">Name</h4>
            <input type="text" value="" name="name" id="ne" title="Unique ID">

        </div>
        </br></br></br></br>
        <div class=" row d-flex text-center">
            <div class="col">
                <h4 style="color: white;">UserName/Email</h4>
                <input type="text" value="" name="email" id="e"></br> </br></br></br>
            </div>

            <div class="col">
                <h4 style="color: white;">Password</h4>
                <input type="text" value="" name="pass" id="p"></br></br>
            </div>


        </div>
        <div class="row justify-content-md-center text-center">
            <div class="col col-lg-2">
                <input type="submit" name="save" class="btn btn-outline-light " value="save" style="width: 100px;" onclick="alterr()" /></br></br>
            </div>
            <div class="col-md-auto">
            </hr>
            </div>
            <div class="col col-lg-2">
                <button type="reset" class="btn btn-outline-light" style="width: 100px;">Annuler</button>
            </div>
          </div>
    </form>

    
<?php
if (!empty($_POST["save"])) {
    # code...

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if ($name!="" && $email!="" && $pass!="" ) {
  
  
    $fc=fopen("countes.txt","a");
$en="$name/$email/$pass";
fwrite($fc,$en);
fwrite($fc,"\r\n");
fclose($fc);
?>
<script>    alert("good"); </script>

<?php
}
     # code...
 
 


}  






?>

















</br></br>
</br>




</body>
<footer class=' text-center text-light '>

copyright &#169; 2022.
</footer>
</br>

</html>