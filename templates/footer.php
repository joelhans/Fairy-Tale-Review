<?php
  $issueNo = rand(0,11);
  $issues = array(
    array('blue',"Blue","2005","first","dark"),
    array('green',"Green","2006","second","light"),
    array('violet',"Violet","2007","third","light"),
    array('white',"White","2008","fourth","dark"),
    array('aquamarine',"Aquamarine","2009","fifth","dark"),
    array('red',"Red","2010","sixth","dark"),
    array('brown',"Brown","2011","seventh","light"),
    array('grey',"Grey","2012","eighth","dark"),
    array('yellow'
    ,"Yellow"
    ,"2013"
    ,"ninth",
    "dark",
    "Emily Carr, Betsy Cornwell, Espido Freire trans. Toshiya Kamei, Carmen Giménez Smith, Joshua Helms, Ben Loory, Peter Markus, Zachary Mason, Lincoln Michel, Shawn Andrew Mitchell, Theresa O'Donnell, Nick Francis Potter, Brandi Wells, ",
    "Sandra Doller, Anna Maria Hong, Kim Hyesoon trans. Don Mee Choi, Dawn Manning, Janet McNally, Ben Pelhan, Shelley Puhak, Marthe Reed, Li Sung, Changming Yuan",
    "",
    ""
    ),
    array(
      'emerald',
      "Emerald",
      "2014",
      "tenth",
      "dark",
      "Christopher Barzak, Carrie Bennett, Jaydn DeWald, Cate Fricke, Molly Giles, Su-Yee Lin, Kat Meads, Carrie Messenger, Stephanie Nash, Daniel A. Olivas, Brendan Park, Lindsay Stern, Anca L. Szilágyi, Gabriel Thibodeau, Carolyn Turgeon, Katie Wudel",
      "Grace Bauer, Anat Benzvi, Michael Hurley, Kim Kyung Ju trans. Jake Levine and Jung Hi-Yeon, Cybele Knowles, Sarah Kortemeier, Lindsay Lusby, Katie Manning, Sarah Sarai, Emma Sovich, Lee Upton, Candice Wuehle, Abigail Zimmer",
      "Matthew Mercier, Beth Steidle",
      "Andrea Baker"
    ),
    array(
      'mauve',
      "Mauve",
      "2015",
      "eleventh",
      "dark",
      "Matt Bell, Wyatt Bonikowski, Molly Faerber, Mary Lavallee, Sequoia Nagamatsu, Helen Phillips, Tim Raymond, Elizabeth Frankie Rollins, Emily Temple, Kellie Wells, Rebecca Wolff",
      "Emma Bolden, Traci Brimhall, Lucas Church, Claire Cronin, Lenny DellaRocca, Majda Gama, Elizabeth Gross, Kirsten Holt, Christina Kloess, Alicia Rebecca Myers, Christian Rees, Richard Siken, Mai Der Vong, Caleb Washburn, Elise Winn, Rachel Zavecz ",
      "Monica Drake",
      ""
    ),
    array(
      'ochre',
      "Ochre",
      "2016",
      "twelfth",
      "light",
      "Courtney Bird, Jaydn DeWald, Zachary Doss, Kristen Gleason, Kelsie Hahn, Carlea Holl-Jensen, Muriel Leung, Carmen Maria Machado, Aimee Pokwatka, Rachel Richardson, Jasmine Sawers, Ira Sukrungruang",
      "Caroline Cabrera, Christopher Citro, Rachel Edelman, Rachel Flynn, Rodney Gomez, Laura Grothaus, Coop Lee, Lindsay Lusby, Rebecca Macijeski,  Christopher Nelson, Rebecca Perea-Kane, Broc Rossell, Cecily Schuler, Kim Welliver, Gabrielle Williams, Allyson Young",
      "Jaclyn Dwyer",
      "Karen Green and Marta Pelrine-Bacon",
      ""
    )
  );
?>

<section class="issue-past issue-primary-<?php echo $issues[$issueNo][0] ?> issue-secondary-<?php echo $issues[$issueNo][4] ?>">
<section class="container">
  <section class="issue-image">
    <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $issues[$issueNo][0] ?>.png" />
  </section>
  <section class="issue-text">
    <p><a href="<?= esc_url(home_url('/')); echo $issues[$issueNo][0]; ?>">The <?php echo $issues[$issueNo][1] ?> Issue</a>, our <?php echo $issues[$issueNo][3] ?>, was published in <?php echo $issues[$issueNo][2] ?>.</p>
    <h3>Fiction</h3>
    <p><?php echo $issues[$issueNo][5] ?></p>
    <h3>Poetry</h3>
    <p><?php echo $issues[$issueNo][6] ?></p>
    <?php if (isset($issues[$issueNo][7]) && $issues[$issueNo][7] !== '') : ?>
    <h3>Nonfiction</h3>
    <p><?php echo $issues[$issueNo][7] ?></p>
    <?php endif; ?>
    <?php if (isset($issues[$issueNo][8]) && $issues[$issueNo][8] !== '') : ?>
    <p>Plus artwork from <?php echo $issues[$issueNo][8] ?></p>
    <?php endif; ?>
  </section>
</section>
</section>

<footer class="footer-main">
  <div class="container-wide">

    <section class="tagline">
      <h1>Innovation and art through fairy tales since 2005</h1>
    </section>

    <section class="newsletter">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="//fairytalereview.us9.list-manage.com/subscribe/post?u=e9d58a233ee6e7b1e2d17daac&amp;id=4e9a84060c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
    	      <h2>Subscribe to our mailing list</h2>
            <div class="mc-field-group">
            	<!-- <label for="mce-EMAIL">Email Address </label> -->
            	<input type="email" value="email address" name="EMAIL" class="required email" id="mce-EMAIL">
              <input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button">
            </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e9d58a233ee6e7b1e2d17daac_4e9a84060c" tabindex="-1" value=""></div>
          </div>
        </form>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
    </section>

  </div>
</footer>

<section class="footer-image">
  <span>Illustration by <a href="http://www.erikarier.com/">Erika Rier</a></span>
</section>
