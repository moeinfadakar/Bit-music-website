<?php 
include"database.php";
include"header.php";

$id = $_GET["artist-id"];

$artists = $db->query("SELECT * FROM  artists WHERE id = $id ")->fetch_assoc();

?>

<div class="container-fluid">
<div class="row">
<div class="col-3">

<?php include"admin_side.php" ?>

</div>
<div class="col-9">
<br><br>
<form action="admin_edit_process.php" method="POST" enctype="multipart/form-data">



<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  اسم  جدید هنرمند : </span>
  <input type="text" class="form-control" value="<?php echo $artists["name"]; ?>" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  عکس جدید هنرمند :</span>
  <input type="file" class="form-control" <?php echo $artists["pic"]; ?> aria-label="Sizing example input" name="image" aria-describedby="inputGroup-sizing-default">
</div>

<input type="hidden"  value="<?php echo $id; ?>"  name="id" >
<br>
    <button type="submit" class="btn btn-danger">تایید</button>

</form>

</div>


</div>
</div>





<?php include"footer.php"; ?>
