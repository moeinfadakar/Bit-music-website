<?php
include"database.php";
include"header.php";


$id = $_GET["music-id"];
$musics = $db->query("SELECT * FROM musics WHERE id = $id ");

?>
<div class="container-fluid">
    <div class="row">
<div class="col-3">
    <?php include"admin_side.php";  ?>
</div>
<div class="col-9">

<form action="admin_edit_music_process.php" method="POST" enctype="multipart/form-data">
<br>
<h1> ویرایش اهنگ ها :</h1>
<br>
<?php foreach ($musics as $music) : ?>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">اسم اهنگ :</span>
  <input type="text" class="form-control" value="<?php echo $music["name"]; ?>" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">لینک کاور آهنگ : </span>
  <input type="file" class="form-control" value="<?php echo $music["pic"]; ?>" aria-label="Sizing example input" name="cover" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ای دی آلبوم  : </span>
  <input type="text" class="form-control" value="<?php echo$music["album_id"];  ?>" aria-label="Sizing example input" name="album_id" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">لینک فایل اهنگ : </span>
  <input type="file" class="form-control" value="<?php echo$music["mp3"] ?>" aria-label="Sizing example input" name="song" aria-describedby="inputGroup-sizing-default">
</div>


<?php endforeach; ?>

<input type="hidden" name="id" value="<?php echo $id; ?>" > 

<button type="submit" class="btn btn-danger">تایید</button>

</form>

</div>

    </div>
</div>