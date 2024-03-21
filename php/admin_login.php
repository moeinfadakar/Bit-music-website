<?php include"header.php";  ?>
<?php include"database.php"?>

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

<div class="container_fluid">
    <div class="row justify-content-center ">
<div class="col-3 ">

<div class="card">
  <div class="card-header">
    ورود به پنل مدیریت 
  </div>
<form action="admin_login_process.php" method="post">
<div class="card-body">

<div class="col">
    <label for="inputEmail4" class="form-label">نام کاربری</label>
    <input name="username" type="text" class="form-control" id="inputEmail4">
  </div>
  <br>
  <div class="col">
    <label for="inputPassword4" class="form-label">گذرواژه</label>
    <input name="password" type="password" class="form-control" id="inputPassword4">
  </div>
  <br>
  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">مرا به خاطر بسپار</label>
</div>
<br>
  <button type="submit" class="btn btn-dark">تایید</button>

</form>


</div>
  </div>
</div>

</div>
</div>




<?php include"footer.php"; ?>
