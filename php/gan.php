<?php include"database.php"; ?>
<?php include"header.php"; ?>
<?php 

$lan_id = $_POST["name"];
$gan_id = $_POST["number"];
$user_gans = $db->query("SELECT * FROM artists WHERE gan = $gan_id AND lan = $lan_id");

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
    border: solid pink 3px;
    border-radius: 40px;
    margin: 10px;
}
.cl{
width: 30vh;
height: 8vh;
background: lightpink;
margin: 10px !important;
border-radius: 40px;
}
.cl:hover{
width: 30vh;
height: 8vh;
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

<div class="container mt-5" style="margin-top : 45vh !important">

<div class="row mt-5">
<?php foreach ($user_gans as $user_gan) : ?>
<div class="col-3 ">

<a href="album.php?artists=<?php echo $user_gan["id"];  ?>" class="  link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
    <div class="card window  " style="margin: 3px;">
<img src="<?php echo $user_gan["pic"]; ?>" class="card-img-top" alt="<?php echo $user_gan["name"]; ?>" >
  
<div class="card-body  pink d-flex align-items-end " >

    <div class="row">
       <h5 class="card-title text text-center " ><?php echo $user_gan["name"]; ?></h5>  
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
<?php include"footer.php"; ?>