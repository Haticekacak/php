<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p> php ile farklı formatlarda string yazımı</p>
<?php
$h = "hatice";
$a =strtoupper($h); // hepsi büyük
$b = ucwords($h);    // baş harfler büyük
$c = strtolower($h); //  bütün harfler küçük
$d = ucfirst($h);    // sadece baş harfi büyük
echo $h;
?>
</body>
</html>