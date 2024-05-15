<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach döngüsü</title>
</head>
<body>
<p> foreach sadece diziler içim oluşturulmuş bir döngüdür</p>

<?php

$dizi = array("çilek","erik","muz","kayısı","portakal");
foreach ($dizi as $meyve){ // dizi içerisindeki elemanı tek tek ekrana yazdırmak için foreach kullanırız
    echo "<p>" .$meyve. "</p>";
}




?>



</body>
</html>