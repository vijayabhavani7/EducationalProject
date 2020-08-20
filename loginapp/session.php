<?php
  // Include config.php for connecting
  include('config.php');
  // Create a new session or resume a previous one.
  session_start();

  // If there is no previous session.
  if (!isset($_SESSION['login_user'])) {
    // Redirect to header.php
    header("location: ../loginapp/login.php");
    exit;
  }

  // If there is a previous session then get the value of login_user
  // value.
  $user_check = $_SESSION['login_user'];

  // Query his username.
  $ses_sql = mysqli_query(
    $db, "select username from login where " .
    "id = '$user_check' ");

  // Get the result row.
  $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

  // Set a new variable with username.
  $login_session = $row['username'];
?>
