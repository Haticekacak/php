<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Döngüler</title>
</head>
<body>
<?php

$dizi = array("asus","hp","casper","lenovo");
for($i=0;$i<count($dizi);$i++){
    echo $dizi[$i];
}
?>
<p> count methodu ile dizinin bütün elemeanlarını saydırıp döngü içerisinde tuttuk</p><br><br<br>


<select>
<?php
for($i=2000;$i<2025;$i++){
    echo '<option>'.$i. '<option>';
}


?>
</select>
</body>
</html>