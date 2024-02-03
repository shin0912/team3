<?php
$servername = "localhost";
$username = "admin";
$password = "54321";
$dbname = "midterm_project_v3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢查連線
if ($conn->connect_error) {
	die("連線失敗: " . $conn->connect_error);
} else {
	// echo "成功";
}
