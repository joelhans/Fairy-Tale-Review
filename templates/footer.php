<?php
  $issueNo = rand(0,10);
  $issues = array(
    array('blue',"Blue","2005","first","white"),
    array('green',"Green","2006","second","white"),
    array('violet',"Violet","2007","third","white"),
    array('white',"White","2008","fourth","black"),
    array('aquamarine',"Aquamarine","2009","fifth","black"),
    array('red',"Red","2010","sixth","black"),
    array('brown',"Brown","2011","seventh","white"),
    array('grey',"Grey","2012","eighth","black"),
    array('yellow',"Yellow","2013","ninth","black"),
    array('emerald',"Emerald","2014","tenth","black"),
    array('mauve',"Mauve","2015","eleventh","black")
  );
?>

<footer class="content-info footer-primary-<?php echo $issues[$issueNo][0] ?> footer-secondary-<?php echo $issues[$issueNo][4] ?>">
  <div class="container">
    <section class="past-issues">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $issues[$issueNo][0] ?>.jpg" />
      <p>The <?php echo $issues[$issueNo][1] ?> Issue, our <?php echo $issues[$issueNo][3] ?>, published in <?php echo $issues[$issueNo][2] ?>.</p>

    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
