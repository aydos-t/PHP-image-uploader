<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<style>
    * {
        font-size: 24px;
    }

    input, button {
        display: block;
        margin-bottom: 10px;
    }
</style>
<body>
    <h2>Single Upload</h2>
    <form action="core/upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>

    <h2>Multi Upload</h2>
    <form action="core/multiUpload.php" method="POST" enctype="multipart/form-data"l>
        <input type="file" name="images">
        <input type="file" name="images">
        <input type="file" name="images">
        <button type="submit">Upload</button>
    </form>
</body>
</html>