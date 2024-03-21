<?php
 include"header.php";
 include"database.php";
// include"name.php";




$artists = $db->query("SELECT * FROM `artists`");
?>
<head>

 
<style>
   @import url('https://fonts.googleapis.com/css2?family=Jomhuria&display=swap');
   body , .butn, .pink, .cl {
  font-family: "Jomhuria", serif;
  font-weight: 400;
  font-style: normal;
}
.sel{
height: 8vh !important;
width: 40vh !important;
background-color: lightpink;
border-top-right-radius: 40px;
border-bottom-right-radius: 40px;
border-bottom-left-radius: 40px;
border-top-left-radius: 40px;
margin: 10px !important;
border: none !important;
}
.op{
height: 4vh !important;
background: lightpink;
border: 0px;
width: 8vh !important;
}
.op:hover{
height: 4vh !important;
background-color: lightcoral !important;
border: 0px;

}
.designdiv{
    
    border-radius: 40px;
    margin: 10px;
}
.cl{
width: 14vh;
height: 8vh;
background: lightpink;
margin: 10px !important;
border-radius: 40px;
}
.cl:hover{

background: lightcoral;

}
.pink{
    background: linear-gradient(to top , black , transparent ,transparent);
margin-top: -30vh;
height: 30vh;
color: white !important;
padding: 10px;
}
.pink:hover{

}
.butn{
width: 40px;
height: 40px;
background-color: black;
border-radius: 40px;
}
.butn:hover{
transform: scale(.9,.9);
transition: .5s;background-color: lightcoral;
}





</style>

</head>

<div class="container">
    <div class="row">
        
    <div class="container-fluid">
    <div class="row designdiv d-flex align-items-end">

<div class="col-8 p-1">
<form action="name.php" method="POST">
<select class="sel text-center mx-3 " name="number">

    <option class=" op text-center" value="1" > فارسی / Persian </option>
    <option class=" op text-center" value="2" >  انگلیسی/ English </option>
    <option class=" op text-center" value="3" > فرانسه  / French </option>
    <option class=" op text-center" value="4" >  روسی / Russian </option>
    <option class=" op text-center" value="5" >  لاتین / Latin </option>
    <option class=" op text-center" value="6" > عربی  /  Arabic</option>
  </select>
  <button type="submit" class="btn  cl d-inline mx-3">جستجو    </button>
</form>

</div>
<div class="col-4"></div>
   

    </div>
</div>




<div>    
</div>





<br>




<div class="container mt-5" style="margin-top : 10vh !important">

<div class="row mt-5">
<?php foreach ($artists as $artist) : ?>
<div class="col-3 ">

<a href="album.php?artists=<?php echo $artist["id"];  ?>" class="  link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
    <div class="card window  " style="margin: 3px;">
<img src="<?php echo $artist["pic"]; ?>" class="card-img-top" alt="<?php echo $artist["name"]; ?>" >
  
<div class="card-body  pink d-flex align-items-end " >

    <div class="row">
       <h5 class="card-title text text-center " ><?php echo $artist["name"]; ?></h5>  
    </div>
    
    <div class="row w-100 d-flex justify-content-center">
        <div role="button" class="butn mx-1 py-2"><i class="fa-light fa-heart"></i></div>
    <div role="button" class="butn mx-1 py-2"><i class="fa-light fa-circle-info"></i></div>
</div>

    <br>
</div>
</div>
</a>
<br><br><br>

<br><br>

<br>

</div>
<?php endforeach; ?>

</div>
</div>
    </div>
</div>

<?php include"footer.php" ?>