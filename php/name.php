<?php 
include"database.php";
include"header.php";

$lan = $_POST["number"];
$user_chooses = $db->query("SELECT * FROM artists WHERE lan =  $lan");
$user_num = $db->query("SELECT * FROM artists WHERE lan =  $lan")->fetch_assoc();


?>
<head>

<link rel="stylesheet" href="all.css" type="text/css">
<style>

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
width: 12vh;
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
<body>
<div class="container">
    <div class="row">
        
<?php 
echo"<br>";
if($user_num["lan"] == 1){

    $lang = "  ایرانی ";

}elseif($user_num["lan"] == 2){
    $lang = "انگلیسی";
}

elseif($user_num["lan"] == 3){
    $lang = "فرانسه";
}
elseif($user_num["lan"] == 4){
    $lang = "روسی";
}
elseif($user_num["lan"] == 5){
    $lang = "لاتین";
}
elseif($user_num["lan"] == 6){
   $lang =  "عربی";
}
echo"<br>"
?>

<div class="container-fluid">
    <div class="row designdiv d-flex align-items-end">

<div class="col-7 p-1">
<form action="gan.php" method="POST">
<select class="sel text-center mx-3 " name="number">
    <option class=" op text-center" value="1" > pop / پاپ </option>
    <option class=" op text-center" value="2" > hippop / هیپ هاپ </option>
    <option class=" op text-center" value="3" > rock / راک </option>
    <option class=" op text-center" value="4" > treditional / سنتی </option>
  </select>
     <input type="hidden" value="<?php echo $lan; ?>" name="name">
  <button type="submit" class="btn  cl d-inline mx-3">جستجو </button>
</form>

</div>
<div class="col-5"></div>
 
    </div>
</div>

  <h2 class="mt-3">هنرمندان به زبان : <?php echo $lang; ?></h2>  
<div class="container-fluid mt-5" style="margin-top : 15vh !important">

<div class="row mt-5">
<?php foreach ($user_chooses as $user_choose) : ?>
<div class="col-3 ">

<a href="album.php?artists=<?php echo $user_choose["id"];  ?>" class="  link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
    <div class="card window  " style="margin: 3px;">
<img src="<?php echo $user_choose["pic"]; ?>" class="card-img-top" alt="<?php echo $user_choose["name"]; ?>" >
  
<div class="card-body  pink d-flex align-items-end " >

    <div class="row">
       <h5 class="card-title text text-center " ><?php echo $user_choose["name"]; ?></h5>  
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
<script src="all.js"></script>
</body>
