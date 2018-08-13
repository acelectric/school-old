<?php
  if(isset($_GET["p"])) {
    $p = $_GET["p"];
  }

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    程式推廣｜
    <?php
      if($p == "learn") {
        echo "學程式";
      } else if ($p == "train") {
        echo "練程式";
      } else if ($p == "teach") {
        echo "實用教學";
      } else {
        echo "未知頁面";
      } 
    ?>
    
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <!-- popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>


  <style>
  body {
    font-family: "微軟正黑體";
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="?p=learn" style="font-size: 30px;">程式推廣</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="font-size: 25px">
      <ul class="navbar-nav">
        <li class="nav-item <?php if($p == "learn"){echo "active";}?>">
          <a class="nav-link" href="?p=learn">學程式
            <?php if($p == "learn"){echo '<span class="sr-only">(current)</span>';} ?>
          </a>
        </li>
        <li class="nav-item <?php if($p == "train"){echo "active";}?>">
          <a class="nav-link" href="?p=train">練題目
          <?php if($p == "train"){echo '<span class="sr-only">(current)</span>';} ?>
          </a>
        </li>
        <li class="nav-item <?php if($p == "teach"){echo "active";}?>">
          <a class="nav-link" href="?p=teach">實用教學
          <?php if($p == "teach"){echo '<span class="sr-only">(current)</span>';} ?>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <?php 
    if($p == "learn") {
      include "learn.php";
    } else if ($p == "train") {
      include "train.php";
    } else if ($p == "teach") {
      include "teach.php";
    } else {
      echo "未知頁面";
    } 
    
  ?>

  <hr>

</body>

</html>