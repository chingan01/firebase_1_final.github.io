<?php
// 建立資料庫連接
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接是否成功
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 從表單中獲取使用者輸入的資料
$username = $_POST['username'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$sports = $_POST['sports'];
$time = $_POST['time'];

// 將資料插入到資料庫中
$sql = "INSERT INTO user_data (username, height, weight, sports, time) VALUES ('$username', '$height', '$weight', '$sports', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "資料已成功新增到資料庫";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 關閉資料庫連接
$conn->close();
?>
