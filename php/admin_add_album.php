<?php 
include"database.php";
include"header.php";

$albums = $db->query("SELECT * FROM albums");




?>

<div class="container-fluid">
 <div class="row">

<div class="col-3">

<?php include"admin_side.php" ;?>

</div>
<div class="col-8">



<table class="table table">

  <thead>
    <tr>
      <th scope="col">شماره</th>
      <th scope="col">نام</th>
      <th scope="col">عکس</th>
      <th scope="col">به روز رسانی</th>
      <th scope="col"> ای دی ارتیست </th>

      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($albums as $album) : ?>
    <tr>
      <th scope="row"><?php echo $album["id"]; ?></th>
      <td><h5><?php echo $album["name"]; ?></h5></td>
      <td><img src="<?php echo $album["pic"]; ?>" alt="<?php $album["name"] ?>" width="100px" class=" img-fluid">
</td>
<td><button type="button" class="btn btn-danger"><a href="admin_remove_album.php?album-id=<?php echo $album["id"]; ?>" style="color:black;">حذف<i class="fa-solid fa-trash-can"></i></a></button>
<button type="button" class="btn btn-info"><a href="admin_edit_album.php?album-id=<?php echo $album["id"]; ?>" style="color:black;">ویرایش<i class="fa-solid fa-pen"></i></a></button></td>   
<td>
<h5><?php echo $album["artist_id"]; ?></h5>
</td>
</tr>


<?php endforeach; ?>
  </tbody>
</table>

</div>

<div class="container">
<div class="row">
<div class="col-4"></div>
<div class="col-4">

    <form action="admin_album.php" method="POST" enctype="multipart/form-data">

<h1>افزودن البوم :</h1>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  اسم البوم  : </span>
  <input type="text" class="form-control" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">  لینک عکس  البوم : </span>
  <input type="file" class="form-control" aria-label="Sizing example input" name="pic" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ای دی آرتیست : </span>
  <input type="text" class="form-control" aria-label="Sizing example input" name="artid" aria-describedby="inputGroup-sizing-default">
</div>

    <button type="submit" class="btn btn-danger">تایید</button>
</form>

</div>
<div class="col-4"></div>

</div>
</div>


</div>


    </div>
</div>


<div class="container">
  <div class="row">
<div class="col-4">



</div>
<div class="col-8"></div>


  </div>
</div>


<?php include"footer.php"; ?>




