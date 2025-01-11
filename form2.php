<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classbook";

$name = isset($_POST["username"]) ? trim($_POST["username"]) : "";
$student_number = isset($_POST["student_number"]) ? trim($_POST["student_number"]) : "";

if (empty($name) || empty($student_number)) {
    die("Error: Both Username and Student ID are required.");
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM deneme WHERE username = ? AND student_number = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Statement preparation failed: " . $conn->error);
}

$stmt->bind_param("ss", $name, $student_number);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["username"] . "<br>";
        echo "Surname: " . $row["surname"] . "<br>";
        echo "Department: " . $row["department"] . "<br>";
        echo "Area: " . $row["area"] . "<br>";
        echo "Place: " . $row["place"] . "<br>";
        echo "Salary: " . $row["salary"] . "<br>";
        echo "Company: " . $row["company"] . "<br>";
        echo "Why: " . $row["why"] . "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();
?>
