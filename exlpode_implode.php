<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET VE POST </title>
</head>
<body>
<p> explode: metini diziye çevirir </p><br>
<p> implode: diziyi metine çevirir </p><br>
<p> $d=explode(" ",$metin); bu kısımda metin değişkeninde bulunan boşlukları keserek diziye çevirdik </p>
<p>$m=implode("",$dizi); burada ise dizi değişkeninde bulunan bosluklar kesilerek metin haline getirdik </p>

<?php
$metin = "şimdi kaybolan yıllarımı verseler çeyrek asrı tam önüme serseler";
$d=explode(" ",$metin);
print_r($d);


$dizi =array("gel","limanıma","gemileri","yak","yazdım","ölüme","inat");
$m=implode("",$dizi);
echo $m;
?>

</body>
</html>
