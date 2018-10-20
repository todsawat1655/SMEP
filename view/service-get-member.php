<?php
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$SQL = "SELECT * FROM member";
$result = mysqli_query($conn, $SQL);
$response = array();
while ($row = mysqli_fetch_assoc($result)) {
  array_push($response, $row);

}
  echo json_encode($response);
} else {
  echo "เรียกผิด เรียกมาใหม่";
}
?>
