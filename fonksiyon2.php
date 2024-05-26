<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator benzeri yapı </title>
</head>
<body>
<?php

function  calculator($a,$b,$islem=""){
    $sonuc=0;
    $sayı=$a;
    $iknicisayı=$b;
if($islem=="+" ){$sonuc=$a+$b;}
    if($islem=="-" ){$sonuc=$a-$b;}
    if($islem=="/" ){$sonuc=$a/$b;}
    if($islem=="*" ){$sonuc=$a*$b;}
    echo $sonuc;
}
calculator(5,23);




?>
</body>
</html>