<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form method="post" enctype="multipart/form-data">
    Select Image to upload:
    <input type="file" name="image"/>
    <br><br>
    <input type="submit" value="Upload Image" name="submit"/>
</form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $image = $_FILES['image'];

    $imagename = $image['name'];
    $temp_name = $image['tmp_name'];
    $size = $image['size'];
    $error = $image['error'];

    $dir = "uploads/";

    if(!is_dir($dir))
    {
        mkdir($dir, 0777, true);
    }

    if($error == 0)
    {
        $path = $dir . $imagename;

        if(move_uploaded_file($temp_name, $path))
        {
            echo "<h3>Image Uploaded Successfully.</h3>";
        }
        else
        {
            echo "<h3>Failed to Upload Image.</h3>";
        }
    }
    else
    {
        echo "<h3>Please Select an Image.</h3>";
    }
}
?>