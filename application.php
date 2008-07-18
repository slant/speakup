<?php include('includes/header.php'); ?>
<?php include('includes/messages.php'); ?>

<?php if ($_SESSION['app_submitted'] == "yes") { ?>

<h2>Thank you!</h2>
<p>Thank you for submitting your application for SpeakUp! <?php echo $settings['current_year']; ?>.</p>

<?php
  unset($_SESSION['app_submitted']);
  unset($_SESSION['app_status']);
?>

<?php } else { ?>

<p>This is the application for SpeakUp! <?php echo $settings['current_year']; ?>.  Please complete the application and click the 'Apply' button below.</p>

<?php
  if ($_SESSION['app_status'] == "errors") {
    echo "<div id=\"errors\">\n";
    echo "<h3>The following errors have occured:</h3>\n";
    if (count($_SESSION['empty_errors']) > 0) {
      echo "<ul>\n";
      foreach ($_SESSION['empty_errors'] as $key) {
        echo "<li>'" . $messages['validation'][$key]['label'] . "' cannot be left blank</li>\n";
      }
      echo "</ul>\n";
    }
    if (count($_SESSION['errors']) > 0) {
      echo "<ul>\n";
      foreach ($_SESSION['errors'] as $key) {
        echo "<li>" . $messages['validation'][$key]['message'] . "</li>\n";
      }
      echo "</ul>\n";
    }
    echo "</div>\n";
  }
?>

<form action="includes/process.php" method="post">
  <fieldset>
    <legend>Personal information</legend>
    <dl class="text_input">
      <dt>First name</dt>
      <dd><input type="text" name="first_name"<?php if ($_SESSION['saved_form']['first_name']) {echo " value=\"" . $_SESSION['saved_form']['first_name'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Last name</dt>
      <dd><input type="text" name="last_name"<?php if ($_SESSION['saved_form']['last_name']) {echo " value=\"" . $_SESSION['saved_form']['last_name'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Cell phone</dt>
      <dd><input type="text" name="cell_phone"<?php if ($_SESSION['saved_form']['cell_phone']) {echo " value=\"" . $_SESSION['saved_form']['cell_phone'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Other phone</dt>
      <dd><input type="text" name="other_phone"<?php if ($_SESSION['saved_form']['other_phone']) {echo " value=\"" . $_SESSION['saved_form']['other_phone'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Home address</dt>
      <dd><input type="text" name="home_address"<?php if ($_SESSION['saved_form']['home_address']) {echo " value=\"" . $_SESSION['saved_form']['home_address'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>email address</dt>
      <dd><input type="text" name="email"<?php if ($_SESSION['saved_form']['email']) {echo " value=\"" . $_SESSION['saved_form']['email'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>What is the best way to contact you?</dt>
      <dd>
        <select name="preferred_contact_method">
          <option value="email"<?php if ($_SESSION['saved_form']['preferred_contact_method'] == "email") {echo " selected=\"selected\"";} ?>>email Address</option>
          <option value="cell_phone"<?php if ($_SESSION['saved_form']['preferred_contact_method'] == "cell_phone") {echo " selected=\"selected\"";} ?>>Cell Phone</option>
          <option value="other_phone"<?php if ($_SESSION['saved_form']['preferred_contact_method'] == "other_phone") {echo " selected=\"selected\"";} ?>>Other Phone</option>
        </select>
      </dd>
    </dl>
    
    <dl class="text_input">
      <dt>Shirt size</dt>
      <dd>
        <select name="shirt_size">
          <option value="S"<?php if ($_SESSION['saved_form']['shirt_size'] == "S") {echo " selected=\"selected\"";} ?>>Small</option>
          <option value="M"<?php if ($_SESSION['saved_form']['shirt_size'] == "M") {echo " selected=\"selected\"";} ?>>Medium</option>
          <option value="L"<?php if ($_SESSION['saved_form']['shirt_size'] == "L" || !isset($_SESSION['saved_form'])) {echo " selected=\"selected\"";} ?>>Large</option>
          <option value="X"<?php if ($_SESSION['saved_form']['shirt_size'] == "X") {echo " selected=\"selected\"";} ?>>Extra Large</option>
        </select>
      </dd>
    </dl>
  </fieldset>
  <fieldset>
    <legend>School information</legend>
    <dl class="text_input">
      <dt>Faculty</dt>
      <dd><input type="text" name="faculty"<?php if ($_SESSION['saved_form']['faculty']) {echo " value=\"" . $_SESSION['saved_form']['faculty'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Year of school</dt>
      <dd>
        <select name="year_of_school">
          <option value="1"<?php if ($_SESSION['saved_form']['year_of_school'] == "1") {echo " selected=\"selected\"";} ?>>1st</option>
          <option value="2"<?php if ($_SESSION['saved_form']['year_of_school'] == "2") {echo " selected=\"selected\"";} ?>>2nd</option>
          <option value="3"<?php if ($_SESSION['saved_form']['year_of_school'] == "3") {echo " selected=\"selected\"";} ?>>3rd</option>
          <option value="4"<?php if ($_SESSION['saved_form']['year_of_school'] == "4") {echo " selected=\"selected\"";} ?>>4th</option>
          <option value="0"<?php if ($_SESSION['saved_form']['year_of_school'] == "0") {echo " selected=\"selected\"";} ?>>Other</option>
        </select>
      </dd>
    </dl>
    <dl class="text_input">
      <dt>Address (while at school)</dt>
      <dd><input type="text" name="school_address"<?php if ($_SESSION['saved_form']['school_address']) {echo " value=\"" . $_SESSION['saved_form']['school_address'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>City of school</dt>
      <dd>
        <select name="city_of_school">
          <option value="1"<?php if ($_SESSION['saved_form']['city_of_school'] == "1") {echo " selected=\"selected\"";} ?>>Belgrade</option>
          <option value="2"<?php if ($_SESSION['saved_form']['city_of_school'] == "2") {echo " selected=\"selected\"";} ?>>Novi Sad</option>
          <option value="3"<?php if ($_SESSION['saved_form']['city_of_school'] == "3") {echo " selected=\"selected\"";} ?>>Nis</option>
        </select>
      </dd>
    </dl>
  </fieldset>
  <fieldset>
    <legend>Emergency contact</legend>
    <p>Please provide the name, address and phone number of someone to be contacted in the event of an emergency during the time you are at SpeakUp!</p>
    <dl class="text_input">
      <dt>Name</dt>
      <dd><input type="text" name="emergency_contact_name"<?php if ($_SESSION['saved_form']['emergency_contact_name']) {echo " value=\"" . $_SESSION['saved_form']['emergency_contact_name'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Address</dt>
      <dd><input type="text" name="emergency_contact_address"<?php if ($_SESSION['saved_form']['emergency_contact_address']) {echo " value=\"" . $_SESSION['saved_form']['emergency_contact_address'] . "\"";} ?> /></dd>
    </dl>
    <dl class="text_input">
      <dt>Phone</dt>
      <dd><input type="text" name="emergency_contact_phone"<?php if ($_SESSION['saved_form']['emergency_contact_phone']) {echo " value=\"" . $_SESSION['saved_form']['emergency_contact_phone'] . "\"";} ?> /></dd>
    </dl>
  </fieldset>
  <fieldset>
    <legend>SpeakUp! <?php echo $settings['current_year']; ?></legend>
    <p>Please rank each week in order of your preference.  Mark the most desired week as '1' and the least desired week as '2'.</p>
    <table id="week_pref_table">
      <tr>
        <th></th>
        <th></th>
        <th>1</th>
        <th>2</th>
        <th></th>
      </tr>
      <tr>
        <td>
        <td class="label"><?php echo date( 'F j', strtotime($config["dates"][0][0]) ) . "-" . date( 'j', strtotime($config["dates"][0][1]) ) ?></td>
        <td class="week_preference"><input type="radio" name="week_1" value="1"<?php if ($_SESSION['saved_form']['week_1'] == "1") {echo " checked=\"checked\"";} ?> /></td>
        <td class="week_preference"><input type="radio" name="week_1" value="2"<?php if ($_SESSION['saved_form']['week_1'] == "2") {echo " checked=\"checked\"";} ?> /></td>
        <td>
      </tr>
      <tr>
        <td>
        <td class="label"><?php echo date( 'F j', strtotime($config["dates"][1][0]) ) . "-" . date( 'j', strtotime($config["dates"][1][1]) ) ?></td>
        <td class="week_preference"><input type="radio" name="week_2" value="1"<?php if ($_SESSION['saved_form']['week_2'] == "1") {echo " checked=\"checked\"";} ?> /></td>
        <td class="week_preference"><input type="radio" name="week_2" value="2"<?php if ($_SESSION['saved_form']['week_2'] == "2") {echo " checked=\"checked\"";} ?> /></td>
        <td>
      </tr>
    <table>
      <tr class="first">
        <td>Were you at SpeakUp! last year?</td>
        <td class="radio">
          Yes <input type="radio" name="wordup_last_year" value="1"<?php if ($_SESSION['saved_form']['wordup_last_year'] == "1") {echo " checked=\"checked\"";} ?> />
          No <input type="radio" name="wordup_last_year" value="0"<?php if ($_SESSION['saved_form']['wordup_last_year'] == "0") {echo " checked=\"checked\"";} ?> />
        </td>
      </tr>
      <tr>
        <td>Are you, or will you be a university student as of the Fall <?php echo date('Y'); ?> semester?</td>
        <td class="radio">
          Yes <input type="radio" name="student_2007" value="1"<?php if ($_SESSION['saved_form']['student_2007'] == "1") {echo " checked=\"checked\"";} ?> />
          No <input type="radio" name="student_2007" value="0"<?php if ($_SESSION['saved_form']['student_2007'] == "0") {echo " checked=\"checked\"";} ?> />
        </td>
      </tr>
      <tr>
        <td>Do you speak a minimum level of English?</td>
        <td class="radio">
          Yes <input type="radio" name="min_english" value="1"<?php if ($_SESSION['saved_form']['min_english'] == "1") {echo " checked=\"checked\"";} ?> />
          No <input type="radio" name="min_english" value="0"<?php if ($_SESSION['saved_form']['min_english'] == "0") {echo " checked=\"checked\"";} ?> />
        </td>
      </tr>
      <tr>
        <td>Do you agree to attend all SpeakUp! activities if accepted?</td>
        <td class="radio">
          Yes <input type="radio" name="attend_activities" value="1"<?php if ($_SESSION['saved_form']['attend_activities'] == "1") {echo " checked=\"checked\"";} ?> />
          No <input type="radio" name="attend_activities" value="0"<?php if ($_SESSION['saved_form']['attend_activities'] == "0") {echo " checked=\"checked\"";} ?> />
        </td>
      </tr>
      <tr>
        <td>Do you understand that the topics and ideas discussed at SpeakUp! will be from a Christian perspective?</td>
        <td class="radio">
          Yes <input type="radio" name="christian_perspective" value="1"<?php if ($_SESSION['saved_form']['christian_perspective'] == "1") {echo " checked=\"checked\"";} ?> />
          No <input type="radio" name="christian_perspective" value="0"<?php if ($_SESSION['saved_form']['christian_perspective'] == "0") {echo " checked=\"checked\"";} ?> />
        </td>
      </tr>
      <tr>
        <td>Have you read and do you agree to abide by the <a href="expectations.php">SpeakUp! guidelines and policies</a>?</td>
        <td class="radio">
          Yes <input type="radio" name="agreement" value="1"<?php if ($_SESSION['saved_form']['agreement'] == "1") {echo " checked=\"checked\"";} ?> />
          No <input type="radio" name="agreement" value="0"<?php if ($_SESSION['saved_form']['agreement'] == "0") {echo " checked=\"checked\"";} ?> />
        </td>
      </tr>
    </table>
  </fieldset>
  <fieldset>
    <legend>Essay</legend>
    <dl>
      <dt><p style="text-align: center;">Please write a brief essay telling us why you want to attend SpeakUp!.</p></dt>
      <dd><textarea name="essay"><?php if ($_SESSION['saved_form']['essay']) {echo $_SESSION['saved_form']['essay'];} ?></textarea></dd>
      <p style="font-size: 10px; text-align: center;">(1000 character limit)
    </dl>
  </fieldset>
  <fieldset>
    <legend>Other comments</legend>
    <dl>
      <dt><p style="text-align: center;">Is there anything else that you want us to know?</p></dt>
      <dd><textarea name="comments"><?php if ($_SESSION['saved_form']['comments']) {echo $_SESSION['saved_form']['comments'];} ?></textarea></dd>
      <p style="font-size: 10px; text-align: center;">(1000 character limit)
    </dl>
  </fieldset>
  <input type="submit" class="button" name="apply" value="Apply for SpeakUp!">
</form>

<?php } ?>

<?php include('includes/footer.php'); ?>