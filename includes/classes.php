<?php

  include('config.php');
  include('messages.php');

  class Session {
    function __construct() {
      session_start();
    }
  }

  class Database {
    function __construct() {
      global $db;
      $link = mysql_connect($db['host'],$db['user'],$db['pass']);
      mysql_select_db($db['name'],$link);
    }

    function submitApplication() {
      $query =
        "INSERT INTO applications (" .
          "user_agent," .
          "ip_address," .
          "datetime," .
          "first_name," .
          "last_name," .
          "cell_phone," .
          "other_phone," .
          "home_address," .
          "email," .
          "preferred_contact_method," .
          "shirt_size," .
          "faculty," .
          "year_of_school," .
          "school_address," .
          "city_of_school," .
          "emergency_contact_name," .
          "emergency_contact_address," .
          "emergency_contact_phone," .
          "week_1," .
          "week_2," .
          "week_3," .
          "wordup_last_year," .
          "student_2007," .
          "min_english," .
          "attend_activities," .
          "christian_perspective," .
          "agreement," .
          "essay," .
          "comments" .
        ") VALUES (" .  
          "'" . $_SERVER['HTTP_USER_AGENT'] . "'," .
          "'" . $_SERVER['REMOTE_ADDR'] . "'," .
          "'" . date('Y-m-d H:i:s') . "'," .
          "'" . $_POST['first_name'] . "'," .
          "'" . $_POST['last_name'] . "'," .
          "'" . $_POST['cell_phone'] . "'," .
          "'" . $_POST['other_phone'] . "'," .
          "'" . $_POST['home_address'] . "'," .
          "'" . $_POST['email'] . "'," .
          "'" . $_POST['prefered_contact_method'] . "'," .
          "'" . $_POST['shirt_size'] . "'," .
          "'" . $_POST['faculty'] . "'," .
          "'" . $_POST['year_of_school'] . "'," .
          "'" . $_POST['school_address'] . "'," .
          "'" . $_POST['city_of_school'] . "'," .
          "'" . $_POST['emergency_contact_name'] . "'," .
          "'" . $_POST['emergency_contact_address'] . "'," .
          "'" . $_POST['emergency_contact_phone'] . "'," .
          "'" . $_POST['week_1'] . "'," .
          "'" . $_POST['week_2'] . "'," .
          "'" . $_POST['week_3'] . "'," .
          "'" . $_POST['wordup_last_year'] . "'," .
          "'" . $_POST['student_2007'] . "'," .
          "'" . $_POST['min_english'] . "'," .
          "'" . $_POST['attend_activities'] . "'," .
          "'" . $_POST['christian_perspective'] . "'," .
          "'" . $_POST['agreement'] . "'," .
          "'" . $_POST['essay'] . "'," .
          "'" . $_POST['comments'] . "'" .
        ")";

      $result = mysql_query($query);
    }

    function getApplications() {
      $query = "SELECT id, datetime, first_name, last_name FROM applications ORDER BY datetime DESC";
      $result = mysql_query($query);

      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $this->applications[$row['id']]['datetime'] = $row['datetime'];
        $this->applications[$row['id']]['first_name'] = $row['first_name'];
        $this->applications[$row['id']]['last_name'] = $row['last_name'];
      }
    }

    function getApplication($id) {
      $query = "SELECT * FROM applications where id = " . $id;
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        foreach ($row as $key => $value) {
          $this->fields[$key] = $value;
        }
      }
    }

    function detectOldApps() {
      $query = "SELECT * FROM applications WHERE YEAR(datetime) != YEAR(CURDATE())";
      $result = mysql_query($query);
      $this->counter = 0;

      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $this->counter++;
      }

      return $this->counter;
    }

    function purgeOldApps() {
      $query = "DELETE FROM applications WHERE YEAR(datetime) != YEAR(CURDATE())";
      $result = mysql_query($query);
    }
  }

  class Validation {
    function validateForm() {
      global $messages;

      unset($_SESSION['empty_errors']);
      unset($_SESSION['errors']);

      foreach ($messages['validation'] as $key => $value) {
        if ($_POST[$key] == "") {
          if ($key != "comments") {
            $_SESSION['empty_errors'][] = $key;
          }
        } elseif (!preg_match($messages['validation'][$key]['condition'],$_POST[$key]) && !in_array($key,array($_SESSION['errors']))) {
          $_SESSION['errors'][] = $key;
        }
      }

      if (count($_SESSION['errors']) > 0 || count($_SESSION['empty_errors']) > 0) {
        return false;
      } else {
        return true;
      }
    }
  }

  class Menu {
    function __construct() {
      $this->file = new File;
    }

    function generateMenu() {
      global $config;
      foreach ($config['sidemenu'] as $label => $url) {
        echo "          <li";
        if ($url == "application") { echo " class=\"application\""; }
        echo "><a href=\"" . $url . ".php\"";
        if ($url == $this->file->filename) { echo " class=\"activepage\""; }
        echo ">" . $label . "</a></li>\n";
      }
    }
  }

  class File {
    function __construct() {
      $this->filename = reset(explode(".",end(explode("/",$_SERVER['PHP_SELF']))));
    }
  }

  class Build {
    function Object($type) {
      switch ($type) {
        case 'menu':
          $menu = new Menu;
          $menu->generateMenu();
          break;
      }
    }
  }

  class User {

    function __construct() {
    }

    function authorize() {
      global $admin;
      if ($_POST['username'] == $admin['username'] && $_POST['password'] == $admin['password'])
        { return true; } else { return false; }
    }

  }

?>
