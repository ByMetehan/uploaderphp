<html>
<head>
<title>File Uploader</title><meta charset="utf-8">
</head>
<body> <center>
<?php
$dizn = 'uploads/';
$uploads = $dizn . basename($_FILES['dosya']['name']);
 
if (move_uploaded_file($_FILES['dosya']['tmp_name'], $uploads))
{
    echo '<img src="ok.jpg" width="100"><br>';
echo "Your File Has Been Uploaded..<br>";
 
} else {
    echo "Your file couldnt be loaded!\n";
}
?>
</center>
</body>
</html>
