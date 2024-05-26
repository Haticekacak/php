<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sql bağlantısı </title>
</head>
<body>
<?php
// mysql de varsayılan olarak bilgiler bu şekilde gelir daha sonra değiştirebilirsiniz
// kullanıcı  sunucuyu ,adımız ve şifremizi tanımladık
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
die("Bağlantı hatası : ".$conn->connect_error);
}
echo "Bağlantı başarılı!";
?>
</body>
</html>