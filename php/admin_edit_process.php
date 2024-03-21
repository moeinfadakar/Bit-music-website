<?php include"database.php"; 

//parameters :
$id = $_POST["id"];
$name = $_POST["name"];
// if conditions :
if($_FILES["image"]["name" ] == '')
{ 

$update_musicc = $db->query("UPDATE artists SET name = '$name'  WHERE id = '$id' ;");
header("location: admin_add_artist.php");
}else{ // فایل ارسال شده 

if($_FILES["image"]["size"] > 10000000){

echo "خیلی حجم فایلت زیاده مشتی";
    header("location: admin_add_artist.php");

}
else
{


//add info to database : 
$picture_name = "imgs/singers/" . $picture = $_FILES["image"]["name"];
$update_music = $db->query("UPDATE artists SET name = '$name', pic = '$picture_name'  WHERE id = '$id' ;");

//move image file to folder : 
move_uploaded_file(  $_FILES["image"]["tmp_name"] , $picture_name );
header("location: admin_add_artist.php");
}


}
?>
