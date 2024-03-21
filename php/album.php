<?php
include"header.php";
include "database.php";

$artist_id = $_GET["artists"];

$albums = $db->query("SELECT * FROM `albums` WHERE artist_id = $artist_id");
?>
<head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');


* {
    font-family: "Lalezar", system-ui;
  font-weight: 400;
  font-style: normal;
 
}
.title{
opacity: 0 !important;
height: 230px !important;
background:linear-gradient(to top, black, transparent,transparent);
}
.title:hover{
opacity: 1 !important;
color: white !important;
}


</style>

</head>

    <div class="container-fluid">
        <div class="row">
            <h1>البوم ها</h1>
            <hr>
            <?php if($albums->num_rows == 0) : ?>

    <div class="alert alert-info" role="alert">
        این خواننده فعلا البومی ندارد!
    </div>

            <?php else: ?>

            <?php foreach ($albums as $album) : ?>

                <div class="col-2">
                    <a href="musics.php?album=<?php echo $album["id"]; ?>" class="inline">
                        <div class="card window" style=" margin: 3px;">
                            <img src="<?php echo $album["pic"]; ?>" class="card-img-top" alt="<?php echo $album["name"]; ?>">
                            <div class="card-body title" style="margin-top: -220px">
                            <br><br><br><br><br><br>
                                <h5 class="card-title back text-center"><?php echo  $album["name"];?></h5>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach; ?>


            <?php endif ; ?>

        </div>
    </div>
<br><br><br><br><br><br><br>
<?php include"footer.php" ?>