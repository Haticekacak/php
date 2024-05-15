<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if else </title>
</head>
<body>
<p>if koşulu içerisindeki şart sağlandığında "ifadeler doğru " çıktısını alırız. </p><br>
<p>eğer şart sağlanmıyorsa " bu iki ifade birbirinden farklı" çıktısını alırız. </p><br>
 <?php

$degişken ="php öğreniyoruz";

if($degişken=="php öğreniyoruz"){
    echo "ifadeler doğru";
}else{
    echo "bu iki ifade birbirinden farklı";
}
?>
<p>|| =ifadesi veya anlamına gelmektedir. if koşulu içerisinde kullanıldığında iki ifadeden birini doğru koşoulu sağlaması yeterlidir.</p><br>
<?php
$degişken ="veya bağlacı";

if($degişken=="veya bağlacı" || $degişken=="bilgisayar"){
    echo "ifadeler doğru";
}else{
    echo "bu iki ifade birbirinden farklı";
}
?>

<p>" ? " if bloğunun yerine geçer  " : "ifadesinden sonra da else yanı koşullun sağlamadığı durumu yazarız</p><br>
<?php
$d = "kodluyoruz";
echo ($d="kodlayamıyoruz")? "kodlar çalıştı" : "maalesef çalışmadı";

?>
<p>eğer "d " değişkeni kodlayamıyoruza eşit olsaydı kodlar çalıştı yazısını alacaktık </p><br>


</body>
</html>