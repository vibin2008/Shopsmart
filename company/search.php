<?php
header('Content-Type: application/json');

$txt = $_POST['text'] ?? '';

$conn = new mysqli("localhost","root","Vibin@#123","shopsmart");
if ($conn->connect_error) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT company FROM company WHERE company LIKE ?;";
$stmt = $conn->prepare($sql);

$search = "%".$txt."%";
$stmt->bind_param("s", $search);
$stmt->execute();

$result = $stmt->get_result();
$res = [];

if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        $res[] = $row['company'];
    }
}

echo json_encode($res);
?>
