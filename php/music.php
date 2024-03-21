<?php
include "header.php";
include "database.php";

//  getting the data : 

$album_id = $_GET["album"];
$albums = $db->query("SELECT * FROM albums WHERE id= $album_id")->fetch_assoc();
$artist_id = $albums["artist_id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();
$musics = $db-> query("SELECT * FROM music WHERE album_id = $album_id ");
?>

<div class="container_fluid">
    <div class="row">
        <!-- in this part, page divided to 2 side  :  -->
<div class="col-2">
<!-- in this page you can see a play list: -->
<div class="row">
<!-- name of artist and music: -->
<div class="col-8">

<p><?php echo $music["name"] ?></p>
    <p><?php echo $artist["name"] ?></p>

</div>
<div class="col-4">

<!-- here you can see the photo of  artist : -->

<img class="w-100" src="<?php echo $music["image"]; ?>" alt="<?php  ?>">

</div>

</div>




</div>
<div class="col-10">
<!-- in this part you can play your music: -->
<div class="container">
  <div class="iphone neu">
    <div class="title">
      <div><i class="fas fa-chevron-left"></i></div>
      <div>NOW PLAYING</div>
      <div><i class="fas fa-ellipsis-v"></i></div>
    </div>
    <div class="album-cover">
      <div class="album-overlay"></div>
      <img src="" alt="">
      <h2 class="song-title">
    
      </h2>
      <h3 class="artist-title">
        Childish Gambino
      </h3>
    </div>
    <div class="buttons">
          <button class="btn lg red neu"><i class="fas fa-heart"></i></button>
          <button class="btn lg neu"><i class="fas fa-backward"></i></button>
          <button class="btn lg neu"><i class="fas fa-play"></i></button>
          <button class="btn lg neu"><i class="fas fa-forward"></i></button>
      </div>
    <div class="track neu">
      <div></div>
    </div>
    <div class="lyrics">
      <i class="fas fa-angle-up"></i>
      <span>LYRICS</span>
    </div>
  </div>
</div>

</div>
    </div>
</div>







<script>
function play_music(music_path){

    let music_player = document.getElementById("music-player");
    music_player.setAttribute("src",music_path);
    music_player.play();
  
}


</script>



<?php include "footer.php"; ?>