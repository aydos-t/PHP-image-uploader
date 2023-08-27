<?php

$image = $_FILES["image"];

$types = ["image/jpeg", "image/png"];

if (!in_array($image["type"], $types)) {
    die('Incorrect file type');
}

$fileSize = $image["size"] / 1000000;
$maxSize = 1;

if ($fileSize > $maxSize) {
    die('Incorrect file size');
}
?>

<pre>
    <?php print_r($image); ?>
</pre>

<?php 
if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

$extension = pathinfo($image["name"], PATHINFO_EXTENSION);
$fileName = time() . ".$extension";

move_uploaded_file($image["tmp_name"] , "../uploads/" . $fileName)
?>