<?php

  include('classes.php');
  $session = new Session;

  if ($_POST['apply']) {

    $database = new Database;
    $validation = new Validation;

    if ($validation->validateForm()) {
      $database->submitApplication();
      unset($_SESSION['saved_form']);
      $_SESSION['app_submitted'] = "yes";
      unset($_SESSION['app_status']);
      header('Location: ../application.php');
    } else {
      $_SESSION['saved_form'] = $_POST;
      $_SESSION['app_submitted'] = "no";
      $_SESSION['app_status'] = "errors";
      header('Location: ../application.php');
    }

  } else {
    header('Location: ../application.php');
  }

?>