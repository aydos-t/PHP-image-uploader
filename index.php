<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<style>
    * {
        font-size: 26px;
    }

    input, button {
        display: block;
        margin-bottom: 10px;
    }
</style>
<body>
    <form action="core/upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>
</body>
</html>