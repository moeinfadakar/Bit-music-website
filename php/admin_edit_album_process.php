<?php include"database.php"; 


$album_id = $_POST["id"];
$name = $_POST["name"];
$artist_id=$_POST["artist_id"];
if($_FILES["pic"]["name"] == '' ){

    $update = $db->query("UPDATE albums SET name = '$name', artist_id = '$artist_id' WHERE id = $album_id  ;");

}else{

    if($_FILES["pic"]["size"] > 10000000 ){

echo"فایل خیلی سنگینه مشتییی";
header("location: admin_edit_album.php");

    }else{

        // update the pic : 
$picture_name = "imgs/singers/"  .   $_FILES["pic"]["name"];
$update_pic = $db->query("UPDATE albums SET name = '$name', pic = '$picture_name' , artist_id = '$artist_id' WHERE id = $album_id  ;");

// sec part: move it to the main file : 
move_uploaded_file(  $_FILES["pic"]["tmp_name"] , $picture_name );
header("location: admin_edit_album.php");



    }




}

?>
