<?php include('includes/header.php'); ?>
<?php $week_count = 0; ?>

<h2>Dates</h2>
<p>SpeakUp! will be held two separate weeks.  If accepted you will only be able to attend one week.  Arrival will be on Sunday afternoon and the last event will be on Friday evening.  Departure will be on Saturday morning.</p>

<ul>
  <?php foreach($settings['dates'] as $range => $dates) { ?>
  <?php $week_count++; ?>
	<li><b>Week <?php echo $week_count; ?></b> will be held <?php echo date( 'F jS', strtotime($dates[0]) ) . "-" . date( 'jS', strtotime($dates[1]) ); ?></li>
	<?php } ?>
</ul>

<h2>Location</h2>
<p>SpeakUp! will be held in <?php echo $settings['location'] ?></p>

<h2>Cost</h2>
<p>The cost of <?php echo $settings['cost']; ?> Euro will cover all lodging, two meals each day, one day-long excursion and all SpeakUp! supplies.  The first and the last meal of the day will be provided.  These will be substantial meals served buffet style.  No mid-day meal will be provided.</p>
<p>You will be responsible for arranging your own transportation to and from the camp.  You will also want to bring some extra spending money for your personal food and entertainment needs.</p>

<h2>Application Process</h2>
<p>In order to be accepted to SpeakUp! you must complete an application on this website.  You will be asked to indicate which week of camp you prefer to attend.  We cannot guarantee that you will receive your first preference.  After your application has been received you will be contacted.  If you are accepted, we will communicate with you further information you may need to know and answer any questions you may have.  If you have any questions you need answered before you are ready to apply, please contact Fokus.</p>

<b>FOKUS</b><br />
Francuska 25/7<br />
11000 Beograd<br />
Tel: O11-2628-056<br />
Fax: 011-2628-878<br />
speakup@fokus.org.yu

<?php include('includes/footer.php'); ?>