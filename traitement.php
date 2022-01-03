<?php


function login($user,$pass){
    $flage=0;

    if ($user=="MySec" && $pass=="2022" ) {
        
        $flage=1;
    }


return $flage;



}



function save($name,$email,$pass){

$fc=fopen("counts.txt","a");
$en="$name/$email/$pass";
fwrite($fc,$en);
fwrite($fc,"\r\n");
fclose($fc);



}


?>