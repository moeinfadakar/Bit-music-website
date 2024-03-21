<?php

include"database.php";

// add artist to the database :

// first part: artist name : 
$name = $_POST["name"];

// artist picture:
$image_name = "imgs/singers/" . $_FILES["image"]["name"];

// insert into database :
$send_artist = $db->query("INSERT INTO artists(name,pic) VALUES('$name','$image_name')");

header("location: admin_add_artist.php");

// second part : move uploaded file : 
move_uploaded_file( $_FILES["image"]["tmp_name"] , $image_name );
?>

<h1><?php echo $_FILES["image"]["tmp_name"]; ?></h1>

