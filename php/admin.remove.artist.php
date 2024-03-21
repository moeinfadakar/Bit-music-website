<?php 
include"database.php";

$artist_id= $_GET["artist-id"];
$db->query("DELETE FROM artists WHERE id=$artist_id");

header("location: admin_add_artist.php");

?>