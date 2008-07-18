<?php

  include('includes/settings.php');
  include('includes/classes.php');

  $session = new Session;
  $file = new File;
  $build = new Build;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 STRICT//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

  <head>
    <title>SpeakUp! <?php echo date('Y'); ?><?php if ($page_title) { echo " - " . $page_title; } else { $returned_keys = array_keys($config['sidemenu'], $file->filename); echo " - " . $returned_keys[0]; } ?></title>
    <link type="text/css" rel="stylesheet" href="stylesheets/default.css" />
  </head>

  <body>
    <h1>SpeakUp! <?php echo date('Y'); ?></h1>
    <div id="strip" style="background: url('images/bg_<?php echo $file->filename; ?>.jpg') no-repeat;"></div>
    <div id="container">
      <div id="sidemenu">
        <ul>
<?php $build->Object('menu'); ?>
        </ul>
      </div>
      <div id="body" class="<?php echo $file->filename; ?>">