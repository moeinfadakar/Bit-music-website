<?php
include "header.php";
include "database.php";

$album_id = $_GET["album"];
$albums = $db->query("SELECT * FROM albums WHERE id= $album_id")->fetch_assoc();
$artist_id = $albums["artist_id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();



$musics = $db-> query("SELECT * FROM musics WHERE album_id = $album_id ");

?>
<head>

 <link rel="stylesheet" href="style_player.css" type="text/css">

<style>

@import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');


* {
    font-family: "Lalezar", system-ui;
  font-weight: 400;
  font-style: normal;
 
}
.botton{
background-color: lightpink;
height: 18vh;

}





</style>

</head>
<br>
<div class="container-fluid">
<div class="row">

<div class="col-3">

    <!-- <?php  foreach ($musics as $music) :  ?>


  <button type="button" class="btn btn-light m-1" onclick="play_music('<?php echo $music["mp3"]; ?>')"  >
      <div class="row">
<div class="col-8">

  <p><?php echo $music["name"] ?></p>
    <p><?php echo $artist["name"] ?></p>

</div>
<div class="col-4">

  <img class="w-100" src="<?php echo $music["pic"]; ?>" alt="<?php  ?>">

</div>
      </div>
    </button>
  
<?php endforeach; ?> -->


<br>
</div>  
<br>
<!-- end side of first ;-->

<div class="col-12 d-flex justify-content-center alex">


<div class="container-fluid">
<div class="row">

<div class="col-1"></div>
<div class="col-10 ">
<div class="color text-center rounded">
<!-- part 1 : image -->
<div class="row text-center">
<div class="col-4"></div>
<div class="col-4">
<img src="<?php echo $music["pic"]; ?>" height="100" class="rounded" alt="...">

</div>
<div class="col-4"></div>

  
</div>
<!-- part 2 : name -->
<div class="row">

<h1>This is <?php echo $artist["name"]; ?></h1>
</div>
<!-- part3 audio -->
<div class="row">
<audio src="<?php echo $music["mp3"];  ?>" id="audio" controls></audio>
</div>
<div class="col-12">


<?php  foreach ($musics as $music) :  ?>
  
<div class="row height">
<li  class="btn btn-light m-1 botton" onclick="play_music('<?php echo $music["mp3"]; ?>')"  >
      <div class="row">
<div class="col-8">

  <p><?php echo $music["name"] ?></p>
    <p><?php echo $artist["name"] ?></p>

</div>
<div class="col-4">

  <img class="w-25" src="<?php echo $music["pic"]; ?>" alt="<?php  ?>">

</div>
      </div>
</li>


</div>

<?php endforeach; ?>

</div>



</div>
</div>
<div class="col-1"></div>


</div>

</div>



</div> 


  















  <!-- end of player -->
</div>
</div>
</div>
<script></script>
<script>
function play_music(music_path){

    let music_player = document.getElementById("audio");
    music_player.setAttribute("src",music_path);
   music_player.play();
  
}
// PRESS THE MENU BUTTON TO TRIGGER ANIMATION
// PRESS PLAY BUTTON TO LISTEN THE DEMO SONG

// As seen on: "https://dribbble.com/shots/2144866-Day-5-Music-Player-Rebound/"

// THANK YOU!

var audio = document.getElementById('audio');
var playpause = document.getElementById("play");


function togglePlayPause() {
   if (audio.paused || audio.ended) {
      playpause.title = "Pause";
      audio.play();
   } else {
      playpause.title = "Play";
      audio.pause();
   }
}



</script>



<?php include "footer.php"; ?>