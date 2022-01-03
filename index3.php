<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script  src="js.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/glyphicones.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body style="overflow-x: hidden; font-family:'Ubuntu', sans-serif;">

    <section id="maine2" class="row container-fluide d-flex align-items-center w-100 text-center"
        style="background-image: url('images/4850037.png');">





        <div class="col-sm-6    text-center">
            <img src="images/mysec logo3.png " style="width: 100%;" title="hi">
        </div>
        <div class="col-sm-6 text-center pr-5" id="l1">

            <a href="index1.php" id="" class="mr-5 p-3" style="border: 2px solid #00B0FF; border-radius: 6px; color: black;" > HOME </a>
            <a href="index2.php" id="" style="color: black;"> NEW DATA </a>
            


        </div>




    </section>
    <form action="" method="GET">
        <div class="text-center">

             <input type="text" value="" name="name" id="n">
            <input TYPE="submit" name="search" value="SEARCH" id="se" >
           <a href="index3.php?cle=val#t" name=" ALL" class="btn" style=" text-decoration:none; color:black; ">   <input TYPE="button" name="" value="ALL" id="se" >
 </a>
 <input TYPE="submit" name="clear" value="CLEAR" id="se" >



        </div>
        </br></br></br></br>
        
    </form>

    <?php
// botton search
if (!empty($_GET['search'])) {

    
$name = $_GET['name'];    
$fc = fopen("countes.txt", "r");
    while (!feof($fc)) {
        $eng = fgets($fc);
        if ($eng != "") {
            $tab = explode("/", $eng);
            if ($name == $tab[0]) {
                $email = $tab[1];
                $passs = $tab[2];
?>
<div class=" container text-center" >
<table class="table " style="background-color:black color:white;" >
  <thead class="">
    <tr>
      
      <th scope="col">UserName/Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      
      <td> <?php  echo $email; ?></td>
      <td><?php  echo $passs; ?></td>
    </tr>
            </tbody>
    </table>
    <?php

?>

</div>


<?php





?>
            <script>
                document.getElementById('n').value = '<?php echo $name; ?>';
                           
            </script>



            <?php



            }



        }    }    fclose($fc);

}


// buton all

if (!empty($_GET["cle"])){

    ?>
    <div class="container d-flex align-items-center" id="t">
    
<table class="table">
<thead class="" style="background-color:black; color:white;">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">UserName/Email</th>
    <th scope="col">Password</th>
  </tr>
</thead>

  <?php 
$fc=fopen("countes.txt", "r");
while(!feof($fc)){

    $eng=fgets($fc);
    if ($eng != ""){
        $tab = explode("/", $eng);
        $n=$tab[0];
        $e=$tab[1];
        $p=$tab[2];
?>
<tbody>
  <tr>
    <td scope="row">  <?php  echo $n; ?>      </td>
    <td><?php  echo $e; ?></td>
    <td><?php  echo $p; ?></td>
  </tr>
</tbody>
<?php

    }



}
 fclose($fc);  





?>
</table>
</div>
<?php

}

if(!empty($_GET["clear"]))
{

//open file to write
$fc = fopen("countes.txt", "r+");
// clear content to 0 bits
ftruncate($fc, 0);
//close file
fclose($fc);
}
?>
</br>

</body>
<footer class=' text-center ' style='background-color:white; color:black'>

copyright &#169; 2022.
</footer>
</br>
</html>