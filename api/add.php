<?php 
require_once '../dbconfig.php'; // The mysql database connection script
$info = (array)json_decode(file_get_contents("php://input")); 
if(count($info) > 0)
{
 
$task = mysqli_real_escape_string($mysqli, $info['task']);


$status = "0";
$created = time();
$query="INSERT INTO tasks(task,status,created)  VALUES ('$task', '$status', '$created')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
echo $json_response = json_encode($result);
}
?>

