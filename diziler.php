<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dizi içerisinde dizi oluşturmak</title>
</head>
<body>
<?php
$ajanlar = array("viper"=>array("zehir perdesi","buble","viperin ini"),"omen","jett","raze","sage")

// ajanlar adında tanımladığımız liste içerisinde viper adında bir liste daha bulunmakta

?>

<p> <?php  echo $ajanlar["viper"][2];?></p>
// ajanlar dizisi içerisindeki viper dizisinin 2. indeksindeki elemanı çağırır


</body>
</html>