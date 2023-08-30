<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "UPDATE `4` SET status = '0' where id = $user_id";

$result = mysqli_query($conn, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:http://localhost:82/classwork22/UPDATE/trash.php');
?>