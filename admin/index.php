<?php
  include('../includes/config.php');
  include('../includes/classes.php');

  $session = new Session;
  $database = new Database;

  if ($_SESSION['authorized'] == true && $_GET['action'] == "logout") {
    session_destroy();
    header("Location: http://gotospeakup.com/admin");
  }

  if ($_SESSION['authorized'] == true && $_GET['action'] == "purge") {
    $database->purgeOldApps();
    header("Location: http://gotospeakup.com/admin");
  }

  if ($_POST['username'] && $_POST['password']) {
    $user = new User;
    if ($user->authorize()) { $_SESSION['authorized'] = 1; }
    unset($_POST['username']);
    unset($_POST['password']);
    if ($_SESSION['authorized'] == true) { Header("Location: index.php"); }
  }

// echo "<p>POST Data:<br />\n"; print_r($_POST);
// echo "\n</p>\n<p>SESSION Data: </br >\n"; print_r($_SESSION); echo "</p>";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 STRICT//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

  <head>
    <title>SpeakUp! <?php echo date('Y'); ?> - Administration</title>
    <link type="text/css" rel="stylesheet" href="stylesheets/default.css" />
  </head>
  <body>

<?php if ($_SESSION['authorized'] != 1) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label>username:</label> <input type="text" name="username" /><br />
      <label>password:</label> <input type="password" name="password" /><br /><br />
      <input type="submit" name="submit" value="Login" />
    </form>
<?php
  } else {

    // View an application
    if ($_GET['appid']) {
      $database->getApplication($_GET['appid']);

      foreach ($database->fields as $key => $value) {
        echo "<b>" . $key . "</b>: " . $value . "<br />\n";
      }

    // View all applications if no application ID has been specified
    } else {
      echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?action=logout\">logout</a>";

      $oldapps = $database->detectOldApps();
      if ($oldapps != 0) {
        echo " | <a href=\"" . $_SERVER['PHP_SELF'] . "?action=purge\">purge apps older than " . date( 'Y',strtotime($settings['current_year']) ) . " (" . $oldapps . ")</a><br />";
      }

      $database->getApplications();
      echo "<h3>" . count($database->applications) . " total applications</h3>\n";

      foreach ($database->applications as $key => $value) {
        echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?appid=" . $key . "\">" . $value['first_name'] . " " . $value['last_name'] . "</a> (" . date("F j, Y",strtotime($value['datetime'])) . ")<br />\n";
      }
    }
  }

?>

  <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
  </script>
  <script type="text/javascript">
  _uacct = "UA-251833-11";
  urchinTracker();
  </script>

  </body>
</html>
