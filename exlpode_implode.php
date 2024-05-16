<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET VE POST </title>
</head>
<body>
<p>diziyi metine veya metini dizye çevirmemizi sağlayan bir yapıdır</p>
<?php
$metin = "şimdi kaybolan yıllarımı verseler çeyrek asrı tam önüme serseler"
$d=explode(" ",$metin);
print_r($d);
?>
<p>boşluk içeren kısımlerı keserek metnimizi diziye çevirecek</p>

</body>
</html>
