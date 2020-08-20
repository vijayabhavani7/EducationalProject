<?php
  // Creates a new session or resumes a previous one.
  session_start();

  // If the session_destroy worked successfully
  if (session_destroy()) {
    header("Location: ../pages/index.php");
  }
?>
