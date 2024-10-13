<?php
include('./database/db.connect.php');
session_start();
function adminLogin($username, $password)
{
  global $conn; // Access the $conn variable from the global scope
  try {
    $sql = "SELECT * FROM admin WHERE (username = ? OR email = ?) AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      // If admin login is successful
      header('location: admin/adminDashboard.php');
      echo "<script>
             alert('Login Success. Admin login successful.');
            </script>";
      exit();
    } else {
      echo "Invalid admin credentials.";
    }
  } catch (mysqli_sql_exception $e) {
    error_log("Login Failed: " . $e->getMessage());
    echo "Error during admin login.";
  }
}
function insertAdmin(){}
function viewAdmin(){}
function updatetAdmin(){}
function deleteAdmin(){}

?>