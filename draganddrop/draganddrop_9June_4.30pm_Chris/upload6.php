<?php
$db = mysqli_connect("localhost", "root", "", "ad-banner");
$msg = "";
$result = mysqli_query($db, "SELECT * FROM images");
if (mysqli_num_rows($result) === 0) {
    $sql = "INSERT INTO images VALUES (1,'tm1.jpg'), (2,'tm2.jpg'), (3,'tm3.png'), (4,'tm4.png'), (5,'tm5.png'),(6,'tm6.jpg'),(7,'tm7.jpg');";

    mysqli_query($db, $sql);
}
if (isset($_POST['upload'])) {

    // Get image name
    $image = $_FILES['image6']['name'];

    // image file directory
    $target = "img/" . basename($image);
    //$target = "img/abc.jpg";
    $sql = "UPDATE images SET img='$image' WHERE id='6'";
    // execute query
    if ($image != null) {
        mysqli_query($db, $sql);
    }

    if (move_uploaded_file($_FILES['image6']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header("Location: uploadpage.php?uploadsuccess");

    } else {
        $msg = "Failed to upload image";
        header("Location: uploadpage.php?uploadfailed");

    }
}
echo $msg
?>
