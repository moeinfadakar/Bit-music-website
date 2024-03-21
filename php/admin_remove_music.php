<?php 
include"database.php";

$music = $_GET["music-id"];
$db->query("DELETE FROM musics WHERE id=$music");

header("location: admin_add_music.php");

?>