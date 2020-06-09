<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./uploadpage.css" />
    <title>Upload Page</title>
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
    <!-- Upload start -->
    <div class="uploadsection">
        <form method="post" enctype="multipart/form-data" action="./upload1.php">
            Box 1:
        <input
            type="file"
            name="image1"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button class="upload-btn" name="upload">Upload</button>
        </form>

        <form method="post" enctype="multipart/form-data" action="./upload2.php">
            Box 2:
        <input
            type="file"
            name="image2"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button name="upload">Upload</button>
        </form>


        <form method="post" enctype="multipart/form-data" action="./upload3.php">
            Box 3:
        <input
            type="file"
            name="image3"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button name="upload">Upload</button>
        </form>

        <form method="post" enctype="multipart/form-data" action="./upload4.php">
            Box 4:
        <input
            type="file"
            name="image4"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button name="upload">Upload</button>
        </form>

        <form method="post" enctype="multipart/form-data" action="./upload5.php">
            Box 5:
        <input
            type="file"
            name="image5"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button name="upload">Upload</button>
        </form>

        <form method="post" enctype="multipart/form-data" action="./upload6.php">
            Box 6:
        <input
            type="file"
            name="image6"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button name="upload">Upload</button>
        </form>

        <form method="post" enctype="multipart/form-data" action="./upload7.php">
            Box 7:
        <input
            type="file"
            name="image7"
            accept="image/x-png,image/gif,image/jpeg"
        />
        <button name="upload">Upload</button>
        </form>
        <div>
        <button onclick="document.location = './index.php'">Back to Homepage</button>
        </div>
    </div>

    <!-- Upload end -->
</body>
</html>