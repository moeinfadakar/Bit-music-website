<?php include "header.php" ?>
<?php include "database.php"; 

$persian_artists = $db->query("SELECT * FROM artists WHERE  lan = 1 AND  gan =1 AND show_id = 1");

?>


<head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');

.alter{
 
}
.alter:hover{
    transform: scale(1.1,1.1);
    transition: 0.5s;
}


#inline{
  
  color: black ;

}

* {
    font-family: "Lalezar", system-ui;
  font-weight: 400;
  font-style: normal;
 

}
.back-ground{
    background: linear-gradient(to bottom , green , white , red);
}
.if{
  color: black;
}

</style>

</head>

<!-- end : navbar -->
<!-- start:crousel  -->
<div class="container-fluid mt-4">
<div class="row">
<div class="col-1">

</div>
<div class="col-10 " >

<h3 class="text-center">هنرمندان برتر </h3>
<hr>
<div id="carouselExampleCaptions" class="carousel slide end">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner end">
    <div class="carousel-item active">
      <img src="homayon.jpg" class="d-block rad   ax" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>همایون شجریان</h3>
        <p>جدید ترین  اهنگ های همایون شجریان</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="col-1">
</div>
<!-- end -->
<br>
<div class="container mt-4">

<h2 class="text-center">تازه ترین اهنگ ها</h2>
<hr>
<div class="row">
<div class="col-3">


<div class="card box d-flex justify-content-center" style="width:90%">
  <img src="shajarian.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">تصنیف دل بردی</h5>
    <p class="card-text">محمد رضا شجریان</p>
  </div>
</div>

</div>





</div>

</div>

</div>
</div>


<br>

<div class="container text-center">
<h2> هنرمندان </h2>
<hr>
  <div class="row d-flex justify-content-center ">
    <?php foreach($persian_artists as $persian_artist) :   ?>
     <div class="col-3 alter"><a href="" class="if">
<div class="text-center">
  <img src="<?php echo $persian_artist["pic"]; ?>" class="rounded" alt="<?php echo $persian_artist["name"]; ?>" width="100" >
  <p class="h5"><?php echo $persian_artist["name"];  ?></p>
</div></a>
<br>
</div> 

<?php endforeach;  ?>
</div>
      </div>


    </div>
 
    
  </div>
</div>
<br><br>

<br>
<div class="container">
<h3 class="text-center">البوم برتر </h3>
<hr>
<div class="row">
<div class="col-3">

<div class="card mb-3 box d-flex justify-content-center" style="width:90%">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="shajarian.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">  محمد رضا شجریان </h5>
<p class="card-text">دل بسته ام به تو</p>       
      </div>
    </div>
  </div>
</div>

</div>
</div>  
</div>



<?php include"footer.php" ?>