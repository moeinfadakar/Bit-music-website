<?php include"database.php"; ?>
<?php
 
 //texts : 
 $id = $_POST["id"];
$name = $_POST["name"];
$album_id = $_POST["album_id"];

$cover_name = "imgs/singers/" . $_FILES["cover"]["name"];
$song_name = "imgs/singers/"  .  $_FILES["song"]["name"];

if($_FILES["cover"]["name"] == ''){

if($_FILES["cover"]["name"] > 10000000){

    echo"فایل شما حجمش زیادی بالاس";
}else{

    $update_cover = $db->query("UPDATE musics SET name = '$name', album_id = '$album_id', mp3 = '$song_name' WHERE id = '$id' ;");
    header("location: admin_add_music.php");
}
}elseif($_FILES["song"]["name"] == '' )
{
if($_FILES["song"]["name"] > 10000000 ){

    echo"فایل زیادی بزرگه";

}else{

$update_music = $db->query("UPDATE musics SET name = '$name', pic = '$cover_name', album_id = '$album_id'  WHERE id = '$id' ;");
    header("location: admin_add_music.php");

}

    
}else{// در اینجا فایل اضافه می شود :



$update_music = $db->query("UPDATE musics SET name = '$name', pic = '$cover_name', album_id = '$album_id', mp3 = '$song_name'  WHERE id = '$id' ;");

move_uploaded_file($_FILES["song"]["tmp_name"], $song_name);
move_uploaded_file($_FILES["cover"]["tmp_name"], $cover_name);

// header("location: admin_add_music.php");

}
?>