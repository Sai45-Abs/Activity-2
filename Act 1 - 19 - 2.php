<html>
<body>
<form method="post" enctype="multipart/form-data">
Select File:
<input type="file" name="file">
<input type="submit" name="Upload" value="Upload">
</form>
<?php
if (isset($_POST["Upload"]))
{
$file=$_FILES["file"];
if ($file["size"]>2*1024*1024)
{
echo "File is too large.";
}
elseif(!in_array(pathinfo($file["name"],PATHINFO_EXTENSION),array("jpg","png","pdf","docx")))
{
echo "Invalid file type.";
}
else
{
move_uploaded_file($file["tmp_name"],"C:/wamp64/www/myphp/".$file["name"]);
echo "File uploaded successfully.";
}
}
?>
</body>
</html>