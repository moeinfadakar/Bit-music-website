<?php  
session_start();
include"header.php"; 
?>
<?php  include"database.php"; 

$artists = $db->query("SELECT * FROM artists");
?>

<?php if($_SESSION["login"] != null & $_SESSION["login"] == true ): ?>


    <head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');


* {
    font-family: "Lalezar", system-ui;
  font-weight: 400;
  font-style: normal;
 
}


</style>

</head>



<!-- start "start add artist": -->
<div class="container_fluid">
<div class="row">
  <div class="col-3"><?php include"admin_side.php"; ?></div>





<div class="col-9">
<br><div class="row">
<h1 class="text-info">پنل مدیریت وب سایت</h1>
<div class="col-4 justify-content-center d-flex">
<div class="col-3">
<a href="admin_add_artist.php" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"> <button type="button" class="btn btn-danger ">مدیریت هنرمندان</button></a></div>
</div><div class="col-3">
<div class="col-4 justify-content-center d-flex"><a href="admin_add_album.php" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><button type="button" class="btn btn-warning"> مدیریت البوم ها</button> </a></div>
</div><div class="col-3">
<div class="col-4 justify-content-center d-flex"><a href="admin_add_music.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><button type="button" class="btn btn-success"> مدیریت اهنگ ها</button> </a></div>
</div>
</div>
</div>



<?php else:
    header("location: index.php");
     endif;
    ?>

<?php include"footer.php"; ?>