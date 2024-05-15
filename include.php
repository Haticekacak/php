<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>include</title>
</head>
<body>
<p>bir sayfanın başka bir sayfaya entegre olmasını sağlar </p><br>
<p>include2 sayfasında oluşturduğumuz php kodları bu sayfaya dahil olduğu için aynı kodlar burada da çalışacaktır</p><br>
<p> require_once ve include_once komutları dda kullanılabilir aynı işlemi gerçekleştirirler</p>
<?php
include ("include2.php");

?>
</body>
</html>