<?php

include"database.php";

// add artist to the database :

// first part :
// name : 
$name = $_POST["name"]; // name
// cover : 
$cover = $_FILES["cover"]; // cover of music
// album id : 
$album_id = $_POST["album_id"]; // this music belong to
// mp3file : 
$song = $_FILES["song"];// the music link
// cover : 
$singer = $_POST["sname"]; // singer name

// artist picture:
$cover_name = "imgs/singers/" . $_FILES["cover"]["name"];
$song_name = "imgs/singers/" . $_FILES["song"]["name"];

// insert into database :
$send_music = $db->query("INSERT INTO `musics`(name,pic,album_id,mp3) VALUES('$name','$cover_name','$album_id','$song_name')");

// header("location: admin_add_music.php");

// second part : move uploaded file : 
move_uploaded_file( $_FILES["cover"]["tmp_name"] , $cover_name );
move_uploaded_file( $_FILES["song"]["tmp_name"] , $song_name );

header("location: admin_add_music.php");

?>


<h1><?php echo $_FILES["song"]["tmp_name"]; ?></h1>
<h1><?php echo $_FILES["cover"]["tmp_name"]; ?></h1>
