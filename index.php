<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />

    <title>Document</title>
  </head>
  <body>
    <?php
$db = mysqli_connect("localhost", "root", "", "ad-banner");

$result = mysqli_query($db, "SELECT * FROM images");

$imgArray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $imgArray[] = $row['img'];

}
?>
    <div>
      <div class="control-wrap">
      <button
        class="controlbtn"
        onclick="document.location = './uploadpage.php'"
      >
        Upload Page
      </button>
      <button
        class="controlbtn"
        onclick="saveBtn()"
      >
        Save Layout
      </button>
      <button
        class="controlbtn"
        onclick="resetBtn()"
      >
        Reset Layout
      </button>
      </div>

    </div>
    <div class="container">
      <div class="title-warp">
        <h1 class="title">Drag and drop</h1>
      </div>

      <div class="grid">
        <div class="item long" data-id="1">
          <div class="item-content">
            <div class="box-num">1</div>
            <img src="./img/<?php echo $imgArray[0]; ?>" />
          </div>
        </div>
        <div class="item big" data-id="2">
          <div class="item-content">
            <div class="box-num">2</div>
            <iframe
              width="560"
              height="56.25%"
              src="https://www.youtube.com/embed/E4DyxZ6YKr8?controls=0;autoplay=0"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        <div class="item long" data-id="3">
          <div class="item-content">
            <div class="box-num">3</div>
            <img src="./img/<?php echo $imgArray[1]; ?>" />
          </div>
        </div>
        <div class="item tall" data-id="4">
          <div class="item-content">
            <div class="box-num">4</div>
            <img src="./img/<?php echo $imgArray[2]; ?>" />
          </div>
        </div>
        <div class="item tall" data-id="5">
          <div class="item-content">
            <div class="box-num">5</div>
            <img src="./img/<?php echo $imgArray[3]; ?>" />
          </div>
        </div>
        <div class="item long" data-id="6">
          <div class="item-content">
            <div class="box-num">6</div>
            <img src="./img/<?php echo $imgArray[4]; ?>" />
          </div>
        </div>
        <div class="item" data-id="7">
          <div class="item-content">
            <div class="box-num">7</div>
            <img src="./img/<?php echo $imgArray[5]; ?>" />
          </div>
        </div>
        <div class="item" data-id="8">
          <div class="item-content">
            <div class="box-num">8</div>
            <img src="./img/<?php echo $imgArray[6]; ?>" />
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
  <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
  <script src="./grid.js"></script>
</html>
