<?php include "database.php";

$pop = $db->query("SELECT * FROM artists WHERE gan = 1 ");
$hip_hop = $db->query("SELECT * FROM artists WHERE gan = 2 ");
$rock = $db->query("SELECT * FROM artists WHERE gan = 3 ");
$treditional = $db->query("SELECT * FROM artists WHERE gan = 4 ");


?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="">
<link rel="stylesheet" href="bootstrap.rtl.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="all.css" >
    <title>moein music</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');

.add{
 border: 0px !important ;
 padding-bottom: 5px;
}
.add:hover{
  padding-bottom: 3px;
 border-bottom: 3px   lightcoral  solid !important ;
 transition: 0.2s;
}
.addd{
 border: 0px !important ;

}
.addd:hover{

 border-bottom: 3px  lightblue solid !important ;
 transition: 0.2s;
}

body{
background: #FEFEFA;
}
</style>

</head>
<body>
    <!-- navbar : start  -->
    <nav class="navbar navbar-expand-lg" style="background-color: #FFC0CB; color:white">
  <div class="container-fluid">
    <h1 class="navbar-brand " href="#"> <p class=" d-inline">بیت موزیک </p>  <i class="fa-solid fa-cloud-music"></i></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button class="nav-link active button add" aria-current="page" href="#">   <p class=" d-inline">ثبت نام  </p>  <i class="fa-solid fa-user-plus "></i> </button>
        </li>
        <li class="nav-item ">
          <button class="nav-link active button " aria-current="page" href="#">  <P class=" d-inline">ورود</P> <i class="fa-solid fa-arrow-right-to-bracket mx-1"></i>
</button>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link  " href="artist.php">
             هنرمندان
             <i class="fa-solid fa-user-music"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ژانر ها
            <i class="fa-solid fa-list-music"></i>
         
          </a>
          <ul class="dropdown-menu">
            <li ><a class="dropdown-item addd" href=""><p class=" d-inline">پاپ</p></a></li>
            <li><a class="dropdown-item addd" href="index.php"><p class=" d-inline ">هیپ هاپ</p></a></li>
            <li><a class="dropdown-item addd" href="classic_index.php"><p class=" d-inline  ">راک</p></a></li>
            <li><a class="dropdown-item addd" href="p_rock_index.php"><p class=" d-inline ">سنتی</p></a></li>
            <li><a class="dropdown-item addd" href="p_countery_index.php"><p class=" d-inline ">کانتری</p></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="p_Instrumental_index.php">اهنگ های بی کلام  </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ترانه های خارجی <i class="fa-solid fa-earth-africa"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item addd" href="english_index.php">انگلیسی </a></li>
            <li><a class="dropdown-item addd" href="index.php">فارسی </a></li>
            <li><a class="dropdown-item addd" href="latin_index.php"> لاتین</a></li>
            <li><a class="dropdown-item addd" href="french_index.php"> فرانسوی</a></li>
            <li><a class="dropdown-item addd" href="Russian_index.php"> روسی</a></li>
            <li><a class="dropdown-item addd" href="arabic_index.php"> عربی</a></li>
      
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">ترند های روز دنیا</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="جستجو" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">جستجو</button>
      </form>
    </div>
  </div>
</nav>

