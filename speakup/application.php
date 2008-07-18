<?php $page_title = "Application"; ?>
<?php include('includes/header.php'); ?>

<?php if ($_SESSION['app_submitted'] == "yes") { ?>

<h2>Thank you!</h2>
<p>Thank you for submitting your application for SpeakUp! <?php echo date('Y'); ?>.</p>

<?php $_SESSION['app_submitted'] = ""; ?>

<?php } else { ?>

<p>This is the application for SpeakUp! 2007.  Please complete the application and click the 'Apply' button below.</p>

<form action="includes/process.php" method="post">
  <fieldset>
    <legend>Personal information</legend>
    <dl class="text_input">
      <dt>First name</dt>
      <dd><input type="text" name="first_name" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Last name</dt>
      <dd><input type="text" name="last_name" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Cell phone</dt>
      <dd><input type="text" name="cell_phone" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Other phone</dt>
      <dd><input type="text" name="other_phone" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Home address</dt>
      <dd><input type="text" name="home_address" /></dd>
    </dl>
    <dl class="text_input">
      <dt>e-mail address</dt>
      <dd><input type="text" name="email" /></dd>
    </dl>
    <dl class="text_input">
      <dt>What is the best way to contact you?</dt>
      <dd>
        <select name="prefered_contact_method" />
          <option value="e-mail">e-mail Address</option>
          <option value="cell_phone">Cell Phone</option>
          <option value="other_phone">Other Phone</option>
        </select>
      </dd>
    </dl>
  </fieldset>
  <fieldset>
    <legend>School information</legend>
    <dl class="text_input">
      <dt>Faculty</dt>
      <dd><input type="text" name="faculty" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Year of school</dt>
      <select name="year_of_school" />
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
      </select>
    </dl>
    <dl class="text_input">
      <dt>School address</dt>
      <dd><input type="text" name="school_address" /></dd>
    </dl>
    <dl class="text_input">
      <dt>City of school</dt>
      <dd><input type="text" name="city_of_school" /></dd>
    </dl>
  </fieldset>
  <fieldset>
    <legend>Emergency contact</legend>
    <p>Please provide the name, address and phone number of someone to be contacted in the event of an emergency during the time you are at SpeakUp!</p>
    <dl class="text_input">
      <dt>Name</dt>
      <dd><input type="text" name="emergency_contact_name" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Address</dt>
      <dd><input type="text" name="emergency_contact_address" /></dd>
    </dl>
    <dl class="text_input">
      <dt>Phone</dt>
      <dd><input type="text" name="emergency_contact_phone" /></dd>
    </dl>
  </fieldset>
  <fieldset>
    <legend>SpeakUp! <?php echo date('Y'); ?></legend>
    <dl class="text_input">
      <dt>Were you at Word Up last year?</dt>
      <dd>
        Yes <input type="radio" name="wordup_last_year" value="1" />
        No <input type="radio" name="wordup_last_year" value="0" />
      </dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    <dl class="text_input">
      <dt></dt>
      <dd><input type="" name="" /></dd>
    </dl>
    
  </fieldset>
  <fieldset>
    <legend>Essay</legend>
    <dl>
      <dt>Please write a short essay telling us how you hope to benefit from SpeakUp! and what benefits you can offer others.</dt>
      <dd><textarea name="essay"></textarea></dd>
    </dl>
  </fieldset>
  <input type="submit" class="button" name="apply" value="Apply for SpeakUp!">
</form>

<?php } ?>

<?php include('includes/footer.php'); ?>