<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/css/bootstrap.rtl.css"> 
    <title>Document</title>
</head>
<body>
<div>
<?php
    include("Layout/topBanner.php");
    ?>
    <?php
    include("Layout/header.php");
      ?>
</div>
<div>

  <div style="width:100%;margin:0;padding:0;">
    <?php
    include("Layout/banner.php");
    ?>
  </div>
  <div class="row">
  <div class="col">col</div>
  <div class="col">col</div>
  <div class="col">col</div>
  <div class="col">col</div>
</div>
<div style="height:250px;background-color:darkblue;width:85%;margin:30px auto;border-radius:30px;"></div>
<div style="height:100px;background-color:lightblue;width:75%;margin:20px auto;border-radius:30px;"></div>
<div style="height:100px;background-color:blue;width:75%;margin:20px auto;border-radius:30px;"></div>

<div class="row">
    <div class="col-sm-3" style="background-color:lavender;height:250px">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavenderblush;height:250px">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavender;height:250px">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavenderblush;height:250px">.col-sm-3</div>
  </div>

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">دسته بندی فروشگاه اینترنتی</h1>
    <div class="row">
    <div class="col-sm-3" style="background-color:lavender;height:150px">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavenderblush;height:150px">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavender;height:150px">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavenderblush;height:150px">.col-sm-3</div>
  </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
</div>

</div>
      <?php     
    include("Layout/footer.php");
     ?>
    <script src="JS/script.js"></script> 
</body>
</html>