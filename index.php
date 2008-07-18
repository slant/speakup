<?php include('includes/header.php'); ?>

        <h2>SpeakUp! <?php echo date('Y') ?></h2>
        <p>Spend a week with 20-25 American university students in a relaxing resort environment.</p>
        <p>The Americans that will be participating in the camp are partners with Fokus, a Serbian nongovernmental organization. Fokus is committed to assisting the development of society through promoting Christian morals and values. Fokus is a student organization that encourages students today to dig deep, think big and live great.</p>

        <div class="video">
          <object width="425" height="350">
            <param name="movie" value="http://www.youtube.com/v/pw-p0QfL3s0"></param>
            <param name="wmode" value="transparent"></param>
            <embed src="http://www.youtube.com/v/pw-p0QfL3s0" type="application/x-shockwave-flash" width="425" height="350"></embed>
          </object>
        </div>

        <h2 class="speakupis_top">SpeakUp!</h2>
        <h2 class="speakupis_bottom">is a conversational English Camp</h2>
        <p>We offer the opportunity to use and improve the English you already know in the context of interaction with American university students.</p>

        <h2 class="speakupis_top">SpeakUp!</h2>
        <h2 class="speakupis_bottom">is engaging</h2>
        <p>By getting involved in activities, interactions, games and parties designed to help you converse, you will improve your communication and have fun doing it.</p>

        <h2 class="speakupis_top">SpeakUp!</h2>
        <h2 class="speakupis_bottom">is relevant</h2>
        <p>We offer the chance to converse about important ideas with others who are interested in sincere discussion. We address topics such as purpose and relationships from a Christian perspective. Yet everyone, regardless of personal beliefs, is welcome.</p>

        <h2 class="speakupis_top">SpeakUp!</h2>
        <h2 class="speakupis_bottom">is coming soon</h2>
        <p>We offer two weeks of camp:
        <?php
          echo date( 'F j', strtotime($config["dates"][0][0]) ) . "-" . date( 'j', strtotime($config["dates"][0][1]) ) . " and ";
          echo date( 'F j', strtotime($config["dates"][1][0]) ) . "-" . date( 'j', strtotime($config["dates"][1][1]) ) . "."
        ?>
        All camps will be held in <?php echo $config["location"] ?>.  Space is limited so if you think SpeakUp! is for you... <a href="application.php">apply</a> today.</p>

<?php include('includes/footer.php'); ?>