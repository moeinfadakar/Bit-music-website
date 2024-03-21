<?php 
include"database.php";
include"header.php";

$artists = $db->query("SELECT  * FROM artists ");
 
$id = $_GET["album-id"];

$albums = $db->query("SELECT * FROM albums ")->fetch_assoc();

?>
<head>
<link rel="stylesheet" href="style2.css" type="text/css">

</head>

<div class="container-fluid">
<div class="row">
<div class="col-3">

<?php include"admin_side.php" ?>

</div>
<div class="col-9">
<br><br>

<h1>ویرایش البوم ها:</h1>

<form action="admin_edit_album_process.php" method="POST" enctype="multipart/form-data">

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  اسم البوم  : </span>
  <input type="text" class="form-control" value="<?php echo $albums["name"]; ?>" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  لینک عکس  البوم : </span>
  <input type="file" class="form-control" value="<?php echo $albums["pic"]; ?>" aria-label="Sizing example input" name="pic" aria-describedby="inputGroup-sizing-default">
</div>
<!-- the selector: -->
<select class="form-select form-select-lg mb-3" aria-label="Large select example" name="artist_id">
<?php foreach($artists as $artist) :  ?>
  <option value="<?php echo $artist["id"]; ?>" name="<?php echo $artist["id"]; ?>"><?php echo $artist["name"]; ?></option>
  <?php endforeach; ?>
</select>
<input type="text" value="<?php echo $id; ?>" name="id">
<br>
    <button type="submit" class="btn btn-danger">تایید</button>

</form>

</div>


</div>
</div>





<?php include"footer.php"; ?>
