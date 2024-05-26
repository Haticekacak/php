<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fonksiyonlar</title>
</head>
<body>
<p>fonksiyon isimleri büyük ve küçük harflere duyarlıdır</p>
<p>tanımladığımız bir fonksiyona ulaşmak için o fanksiyonu çağırmamız gerekmektedir</p>

 <?php

function plas($a,$b)
{
$numberone=$a;
$numbertwo=$b;
$result=$numberone + $numbertwo;
echo $result;
}
plas(24,25); // fonksiyonu burada çağırdık ve işmel yapmasını istediğimiz değerleri gönderdik

?>
</body>
</html>