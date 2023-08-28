<?php

$image = $_FILES["image"];

$types = ["image/jpeg", "image/png"];

if (!in_array($image["type"], $types)) {
    die('Incorrect file type');
}

$fileSize = $image["size"] / 3000000;
$maxSize = 3;

if ($fileSize > $maxSize) {
    die('Incorrect file size');
}

/* ?>

 <pre>
     <?php print_r($image); ?>
 </pre>

 <?php 
*/

if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

$extension = pathinfo($image["name"], PATHINFO_EXTENSION);
$fileName = time() . ".$extension";

move_uploaded_file($image["tmp_name"], "../uploads/" . $fileName);

echo "Image successfully uploaded!";
?>