<?php 
include"database.php";

$album_id= $_GET["album-id"];
$db->query("DELETE FROM albums WHERE id=$album_id");

header("location: admin_add_album.php");

?>