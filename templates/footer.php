<?php
  $issueNo = rand(0,11);
  $issues = array(
    array('blue',"Blue","2005","first"),
    array('green',"Green","2006","second"),
    array('violet',"Violet","2007","third"),
    array('white',"White","2008","fourth"),
    array('aquamarine',"Aquamarine","2009","fifth"),
    array('red',"Red","2010","sixth","dark"),
    array('brown',"Brown","2011","seventh"),
    array('grey',"Grey","2012","eighth"),
    array('yellow',"Yellow","2013","ninth"),
    array('emerald',"Emerald","2014","tenth"),
    array('mauve',"Mauve","2015","eleventh"),
    array('ochre',"Ochre","2016","twelfth")
  );
?>

<footer class="footer-main">
  <div class="container">

    <section class="issue-rand">
      <div class="issue-image">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $issues[$issueNo][0] ?>.png" />
      </div>
      <a class="issue-link" href="<?= esc_url(home_url('/')); echo $issues[$issueNo][0]; ?>"></a>
      <div class="overlay"></div>
      <div class="issue-meta">
        <p>The <?php echo $issues[$issueNo][1] ?> Issue, our <?php echo $issues[$issueNo][3] ?>, was published in <?php echo $issues[$issueNo][2] ?>.</p>
      </div>
    </section>

    <section class="tagline">
      <h1>Innovation and art through fairy tales since 2005</h1>
    </section>

    <nav>
      <a class="nav-about">About</a>
      <a href="<?= esc_url(home_url('/')); ?>submit/">Submit</a>
      <a href="<?= esc_url(home_url('/')); ?>fairyland/">Fairyland</a>
      <a href="<?= esc_url(home_url('/')); ?>annual-journal/">Journal</a>
    </nav>

    <section class="newsletter">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="//fairytalereview.us9.list-manage.com/subscribe/post?u=e9d58a233ee6e7b1e2d17daac&amp;id=4e9a84060c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
            	<input type="email" placeholder="Subscribe to our newsletter" name="EMAIL" class="required email" id="mce-EMAIL">
              <input type="submit" value="enter" name="subscribe" id="mc-embedded-subscribe" class="button">
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
