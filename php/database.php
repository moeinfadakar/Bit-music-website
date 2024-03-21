<?php 
$db = new mysqli ("localhost","root","","music_website");

if($db->connect_error){

    echo" خطا میده ها ";
    echo $db->connect_error;

}else{


    $db -> query("SET CHARACTER SET utf8");

}



?>