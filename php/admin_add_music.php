<?php 
include"database.php";
include"header.php";

$musics = $db->query("SELECT * FROM musics");
?>



<div class="container_fluid">
    <div class="row">

<div class="col-3"><?php include"admin_side.php"; ?></div>
<div class="col-8">
<div class="row">
<br><br>
<h1>مدیریت اهنگ ها:</h1>
<br><br>
<table class="table table">

  <thead>
    <tr>
      <th scope="col">شماره</th>
      <th scope="col">نام</th>
      <th scope="col">عکس</th>
      <th scope="col">به روز رسانی</th>
      <th scope="col"> ای دی البوم </th>

      
    </tr>
  </thead>
  <tbody>

    <?php foreach ($musics as $music) : ?>
    <tr>
      <th scope="row"><?php echo $music["id"]; ?></th>
      <td>
        <h5><?php echo $music["name"]; ?></h5>
    </td>
      <td><img src="<?php echo $music["pic"]; ?>" alt="<?php $music["name"] ?>" width="100px" class=" img-fluid">
</td>
<td><button type="button" class="btn btn-danger"><a href="admin_remove_music.php?music-id=<?php echo $music["id"]; ?>" style="color:black;">حذف<i class="fa-solid fa-trash-can"></i></a></button>

<button type="button" class="btn btn-info"><a href="admin_edit_music.php?music-id=<?php echo $music["id"]; ?>" style="color:black;">ویرایش<i class="fa-solid fa-pen"></i></a></button></td>   
<td>
<h5><?php echo $music["album_id"]; ?></h5>
</td>
<td>
    <audio src="<?php echo$music["mp3"]; ?>" controls></audio>
</td>
</tr>


<?php endforeach; ?>
  </tbody>
</table>

</div>


<div class="row">
<br><br>
    <form action="admin_music.php" method="POST" enctype="multipart/form-data">

<h1>افزودن اهنگ :</h1>


<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">اسم اهنگ :</span>
  <input type="text" class="form-control" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">لینک کاور آهنگ : </span>
  <input type="file" class="form-control" aria-label="Sizing example input" name="cover" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ای دی آلبوم  : </span>
  <input type="text" class="form-control" aria-label="Sizing example input" name="album_id" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">لینک فایل اهنگ : </span>
  <input type="file" class="form-control" aria-label="Sizing example input" name="song" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  نام خواننده اهنگ : </span>
  <input type="text" class="form-control" aria-label="Sizing example input" name="sname" aria-describedby="inputGroup-sizing-default">
</div>

<button type="submit" class="btn btn-danger">تایید</button>

</form>

</div>
</div>
<div class="col-2"></div>
    
</div>
<?php include"footer.php"; ?>
