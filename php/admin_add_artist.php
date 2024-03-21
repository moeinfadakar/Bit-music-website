<?php session_start();
 include"header.php";
include"database.php" ;

$artists = $db->query("SELECT * FROM artists");


?>
<?php if ( $_SESSION["login"] != null && $_SESSION["login"] ==  true) : ?>


<hr>
<div class="container-fluid">
<div class="row">

<div class="col-3">
  <?php include"admin_side.php";?>
</div>
<div class="col-8">
    <h1>مدیریت هنرمندان :</h1>

<table class="table table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">عکس</th>
      <th scope="col">به روز رسانی</th>

      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($artists as $artist) : ?>
    <tr>
      <th scope="row"><?php echo $artist["id"]; ?></th>
      <td><h5><?php echo $artist["name"]; ?></h5></td>
      <td><img src="<?php echo $artist["pic"]; ?>" alt="<?php $artist["name"] ?>" width="100px" class=" img-fluid">
</td>
<td><button type="button" class="btn btn-danger"><a href="admin.remove.artist.php?artist-id=<?php echo $artist["id"]; ?>" style="color:black;">حذف<i class="fa-solid fa-trash-can"></i></a></button>
<button type="button" class="btn btn-info"><a href="admin_edit_artist.php?artist-id=<?php echo $artist["id"]; ?>" style="color:black;">ویرایش<i class="fa-solid fa-pen"></i></a></button></td>   
    </tr>
<?php endforeach; ?>
  </tbody>
</table>




</div>

</div>

<div class="row">
  <div class="col-4"></div>
  <div class="col-4">

  <h3>افزودن هنرمند :</h3>
<form action="admin.artist.php" method="POST" enctype="multipart/form-data">

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  اسم هنرمند : </span>
  <input type="text" class="form-control" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  عکس هنرمند :</span>
  <input type="file" class="form-control" aria-label="Sizing example input" name="image" aria-describedby="inputGroup-sizing-default">
</div>

    <button type="submit" class="btn btn-danger">تایید</button>

</form>

  </div>
  <div class="col-4"></div>

<br>
<?php endif; ?>

</div>



<?php include"footer.php";  ?>