<?php

  # Side navigation menu links
  $config['sidemenu'] = array(
  # "Text of link"       => "target file",
    "SpeakUp! Overview" => "index",
    "Comments from " . ($settings['current_year'] - 1) => "comments",
    "Guidelines and Policies" => "expectations",
    "Details" => "details",
    "Application" => "application"
    );


  # Once an array has been created for a year, change this setting
  # to that year to move the entire app to that year. This allows
  # for quickly rolling the app back to a previous year. 

  $settings['current_year'] = "2008";


  # Begin year config blocks - contains data specific to each year

  $year['2008'] = array(
    "dates" => array(
      array( "2008-07-13", "2008-07-18" ),
      array( "2008-07-20", "2008-07-25" )
      ),
    "location" => "TBA, Montenegro",
    "cost" => "100"
    );

  $year['1969'] = array(
    "dates" => array(
      array( "1969-04-05", "1969-4-25"),
      array( "1969-05-05", "1969-5-20"),
      ),
    "location" => "That One Place",
    "cost" => "1,000,000"
    );

  # End year config block


  # These point the config array to year specific data - DO NOT MODIFY!!!
  $settings['dates'] = $year[$settings['current_year']]['dates'];
  $settings['location'] = $year[$settings['current_year']]['location'];
  $settings['cost'] = $year[$settings['current_year']]['cost'];

?>