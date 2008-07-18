<?php

$patterns = array(
  "validates_alpha_of" => "/[a-zA-Z]/",
  "validates_numericality_of" => "/[0-9]/",
  "validates_binary_of" => "/^[01]+$/",
  "validates_email_of" => "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",
  "validates_safe_characters_of" => "/^([_a-zA-Z0-9.,| ])*$/",
  "validates_acceptance_of" => "/^1$/"
  );

$messages = array(
  "validation" => array(
    "first_name" => array(
      "label" => "First name",
      "condition" => $patterns['validates_alpha_of'],
      "message" => "First name may only be letters"
      ),
    "last_name" => array(
      "label" => "Last name",
      "condition" => $patterns['validates_alpha_of'],
      "message" => "Last name may only be letters"
      ),
    "cell_phone" => array(
      "label" => "Cell phone",
      "condition" => $patterns['validates_numericality_of'],
      "message" => "Cell phone may contain only numbers"
      ),
    "home_address" => array(
      "label" => "Home address",
      "condition" => $patterns['validates_safe_characters_of'],
      "message" => "Home address may contain only letters, numbers, periods and commas"
      ),
    "email" => array(
      "label" => "email address",
      "condition" => $patterns['validates_email_of'],
      "message" => "email format must be username@domain.com in lower case"
      ),
    "preferred_contact_method" => array(
      "label" => "Preferred contact method",
      "condition" => $patterns['validates_alpha_of'],
      "message" => "Prefered contact method must be Cell phone, Other phone or email"
      ),
    "shirt_size" => array(
      "label" => "Shirt size",
      "condition" => $patterns['validates_alpha_of'],
      "message" => "Shirt size must be S, M, L or X"
      ),
    "faculty" => array(
      "label" => "Faculty",
      "condition" => $patterns['validates_alpha_of'],
      "message" => "Faculty may only be letters"
      ),
    "year_of_school" => array(
      "label" => "Year of school",
      "condition" => $patterns['validates_numericality_of'],
      "message" => "Year of school must be 1, 2, 3 or 0"
      ),
    "school_address" => array(
      "label" => "School address",
      "condition" => $patterns['validates_safe_characters_of'],
      "message" => "School address may contain only letters, numbers, periods and commas"
      ),
    "city_of_school" => array(
      "label" => "City of school",
      "condition" => $patterns['validates_numericality_of'],
      "message" => "City of school must be Belgrade, Novi Sad or Nis"
      ),
    "emergency_contact_name" => array(
      "label" => "Emergency contact name",
      "condition" => $patterns['validates_alpha_of'],
      "message" => "Emergency contact name may only be letters"
      ),
    "emergency_contact_address" => array(
      "label" => "Emergency contact address",
      "condition" => $patterns['validates_safe_characters_of'],
      "message" => "Emergency contact address may contain only letters, numbers, periods and commas"
      ),
    "emergency_contact_phone" => array(
      "label" => "Emergency contact phone",
      "condition" => $patterns['validates_numericality_of'],
      "message" => "Emergency contact phone may contain only numbers"
      ),
    "wordup_last_year" => array(
      "label" => "WordUp last year",
      "condition" => $patterns['validates_binary_of'],
      "message" => "WordUp! Last year must be 1 or 0"
      ),
    "student_2007" => array(
      "label" => "Student in 2007",
      "condition" => $patterns['validates_acceptance_of'],
      "message" => "You must be a student in 2007 in order to be accepted to SpeakUp!"
      ),
    "min_english" => array(
      "label" => "Minimum english",
      "condition" => $patterns['validates_binary_of'],
      "message" => "Minimum English must be 1 or 0"
      ),
    "attend_activities" => array(
      "label" => "Attend activities",
      "condition" => $patterns['validates_acceptance_of'],
      "message" => "You must agree to attend all SpeakUp! activities"
      ),
    "christian_perspective" => array(
      "label" => "Christian perspective acknowledgement",
      "condition" => $patterns['validates_acceptance_of'],
      "message" => "You must acknowledge your understanding that topics will be approached from a Christian perspective"
      ),
    "agreement" => array(
      "label" => "Guidelines and policies agreement",
      "condition" => $patterns['validates_acceptance_of'],
      "message" => "You must accept the terms of the guidelines and policies"
      ),
    "essay" => array(
      "label" => "Essay",
      "condition" => $patterns['validates_safe_characters_of'],
      "message" => "Essay may contain only letters, numbers, periods and commas"
      ),
    "comments" => array(
      "label" => "Comments",
      "condition" => $patterns['validates_safe_characters_of'],
      "message" => "Comments may contain only letters, numbers, periods and commas"
      )
    )
  );

?>
