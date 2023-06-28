<!-- delete.php -->
<?php
// Connect to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "tms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete the user record with the specified ID except id 1 (admin)
$id = $_POST["id"]; // Retrieve the id parameter from HTTP POST
// if ($id != 1) {
// }
$query = "DELETE FROM tblusers WHERE id = '$id'";
mysqli_query($conn, $query);

// Close the MySQL connection
mysqli_close($conn);

// Redirect back to the index page
header("Location: manage-users.php");
exit();
?>