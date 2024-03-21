<?php

include"database.php";

// add artist to the database :

// first part: artist name : 
$name = $_POST["name"];
$art = $_POST["artid"];
// artist picture:
$image_name = "imgs/singers/" . $_FILES["pic"]["name"];

// insert into database :
$send_artist = $db->query("INSERT INTO albums(name,pic,artist_id) VALUES('$name','$image_name','$art')");

header("location: admin_add_album.php");

// second part : move uploaded file : 
move_uploaded_file( $_FILES["pic"]["tmp_name"] , $image_name );
?>

<h1><?php echo $_FILES["pic"]["tmp_name"]; ?></h1>
