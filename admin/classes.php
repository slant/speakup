<?php

  class User {

    function __construct() {
      global $admin;
    }

    function authorize() {
      if ($_POST['username'] == $admin['username'] && $_POST['password'] == $admin['password'])
        { return true; } else { return false; }
    }

  }

?>
