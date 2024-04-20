<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

$id = $_GET['id'];

$delete_query = mysqli_query($con, "DELETE FROM users WHERE Id=$id") or die("Error occurred");

if ($delete_query) {
    $_SESSION['success'] = "User deleted successfully!";
    header("Location: adminusers.php");
}
?>
