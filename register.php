<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "users";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Formdan verileri alma ve doğrulama
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Şifreyi hashleme
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Kullanıcıyı veritabanına ekleme
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla tamamlandı.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
