<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Giriş başarılı. Hoş geldiniz, " . $row['username'] . "!";
        
        header("refresh:2;url=index.html"); //giriş yaptıktan 2 saniye sonra index.html sayfasına yönlendirir.
    } else {
        echo "Hatalı şifre.";
    }
} else {
    echo "Kullanıcı bulunamadı.";
}

$conn->close();
?>
