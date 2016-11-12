<?php
/**
 * Template Name: Issue page
 */
?>

<?php use Roots\Sage\Titles; ?>

<?php
  // $issueNo = rand(0,11);
  // global $post; echo $post->post_name;
  $issues = array(
    array('blue',"Blue","2005","first","dark","Kim Addonizio, Joshua Beckman & Matthew Rohrer, Aimee Bender, Mary Caponegro, Norman Lock, Stacey Richter, Marjorie Sandor, Donna Tartt, Marina Warner","Julie Choffel, Monica Fambrough, Sarah Hannah, Brent Hendricks, Sarah Veglahn","Kate Bernheimer & Francine Prose & Kiki Smith & Wendy Weitman & Jack Zipes","Kiki Smith",""),
    array('green',"Green","2006","second","light","Brian Baldi, Jedediah Berry, Wendy Brenner, Ayse Papatya Bucak, Rikki Ducornet, Stacey Levine, Joyelle McSweeney, Kat Meads, Lydia Millet, Stacey Richter","Jeanne Marie Beaumont, Paula Bohince, Ann JÄderlund trans. Johannes Goransson, Daniel Khalastchi, Andrew Morgan, Aimee Nezhukumatathil, Arthur Rimbaud trans. Donna Tartt, Carmen Giminez Smith","Cate Marvin","Rikki Ducornet",""),
    array('violet',"Violet","2007","third","light","Lucy Corin, Tracy Daugherty, Espido Freire, Lily Hoang, Natania Rosenfeld, Aurelie Sheehan, Kieran Suckling","Kim Addonizio, Don Mee Choi, Sarah Hannah, Anna Maria Hong, Kim Hyesoon, Jeffrey Levine, Lisa Olstein, David Petruzelli, Richard Siken, Lee Upton, Julie Marie Wade","Kieran Suckling","",""),
    array('white',"White","2008","fourth","dark",
    "Greg Bills, Sarah Blackman, Nick Bredie & Nora Lange, Jennifer Calkins, Eve Gil, Maria Tatar",
    "Lindsay Coleman, Nik De Dominic, Molly Dowd, ",
    "",
    "",
    ""),
    array('aquamarine',"Aquamarine","2009","fifth","dark",
    "",
    "",
    "",
    "",
    ""),
    array('red',"Red","2010","sixth","dark",
    "",
    "",
    "",
    "",
    ""),
    array('brown',"Brown","2011","seventh","light",
    "",
    "",
    "",
    "",
    ""),
    array('grey',"Grey","2012","eighth","dark","Matt Bell, Wyatt Bonikowski, Maile Chapman, Mimi Chubb, Tara Goedjen, Sara Gong, Aireanne Hjelle, Shane Jones, Krystal Languell, Stacey Levine, Oksana Marafioti, Adam McOmber, Christopher Merkner, David James Poissant, Gretchen Steele Pratt, Matthew Salesses, Kevin Sampsell, J.A. Tyler, Lee Upton, Laura Van Den Berg, Rob Walsh, Jillian Weise, and Kellie Wells","Seth Abramson, Molly Bendall, Brittany Cavallaro, Ashley Elizabeth Hudson, Benjamin Nadler, Andi Olsen/Lance Olsen/Davis Schneiderman, Elizabeth Clark Wessel, and Deborah Woodard","","Desiree Holman, Jessica Joslin, and John Dermot Woods","Guest edited by Alissa Nutting"
    ),
    array('yellow',"Yellow","2013","ninth","dark","Emily Carr, Betsy Cornwell, Espido Freire trans. Toshiya Kamei, Carmen Giménez Smith, Joshua Helms, Ben Loory, Peter Markus, Zachary Mason, Lincoln Michel, Shawn Andrew Mitchell, Theresa O'Donnell, Nick Francis Potter, and Brandi Wells","Sandra Doller, Anna Maria Hong, Kim Hyesoon trans. Don Mee Choi, Dawn Manning, Janet McNally, Ben Pelhan, Shelley Puhak, Marthe Reed, Li Sung, and Changming Yuan","","","Guest edited by Lily Hoang"
    ),
    array('emerald',"Emerald","2014","tenth","dark","Christopher Barzak, Carrie Bennett, Jaydn DeWald, Cate Fricke, Molly Giles, Su-Yee Lin, Kat Meads, Matthew Mercier, Carrie Messenger, Stephanie Nash, Daniel A. Olivas, Brendan Park, Beth Steidle, Lindsay Stern, Anca L. Szilágyi, Gabriel Thibodeau, Carolyn Turgeon, and Katie Wudel","Grace Bauer, Anat Benzvi, Michael Hurley, Kim Kyung Ju trans. Jake Levine and Jung Hi-Yeon, Cybele Knowles, Sarah Kortemeier, Lindsay Lusby, Katie Manning, Sarah Sarai, Emma Sovich, Lee Upton, Candice Wuehle, and Abigail Zimmer","","Andrea Baker"
    ),
    array('mauve',"Mauve","2015","eleventh","dark","Matt Bell, Wyatt Bonikowski, Monica Drake, Molly Faerber, Mary Lavallee, Sequoia Nagamatsu, Helen Phillips, Tim Raymond, Elizabeth Frankie Rollins, Emily Temple, Kellie Wells, and Rebecca Wolff","Emma Bolden, Traci Brimhall, Lucas Church, Claire Cronin, Lenny DellaRocca, Majda Gama, Elizabeth Gross, Kirsten Holt, Christina Kloess, Alicia Rebecca Myers, Christian Rees, Richard Siken, Mai Der Vong, Caleb Washburn, Elise Winn, and Rachel Zavecz ","",""
    ),
    array('ochre',"Ochre","2016","twelfth","light","Courtney Bird, Jaydn DeWald, Zachary Doss, Jaclyn Dwyer, Kristen Gleason, Kelsie Hahn, Carlea Holl-Jensen, Muriel Leung, Carmen Maria Machado, Aimee Pokwatka, Rachel Richardson, Jasmine Sawers, Ira Sukrungruang","Caroline Cabrera, Christopher Citro, Rachel Edelman, Rachel Flynn, Rodney Gomez, Laura Grothaus, Coop Lee, Lindsay Lusby, Rebecca Macijeski,  Christopher Nelson, Rebecca Perea-Kane, Broc Rossell, Cecily Schuler, Kim Welliver, Gabrielle Williams, Allyson Young","","Karen Green and Marta Pelrine-Bacon",""
    )
  );
?>

<section class="container">
<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

    <header class="page-header">
      <h1><?= Titles\title(); ?></h1>
    </header>

    <div class="entry-content">

      <section class="issue-meta">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $post->post_name; ?>.png" />
        <a href="<?php echo get_post_meta($post->ID, 'issue_wsup_physical', true); ?>">Buy a copy</a>
        <a href="<?php echo get_post_meta($post->ID, 'issue_wsup_pdf', true); ?>">Buy a PDF</a>
        <a class="detail" href="<?php echo get_post_meta($post->ID, 'issue_jstor', true); ?>">Read on JSTOR <span>Free, requires library access</span></a>
        <a class="detail" href="<?php echo get_post_meta($post->ID, 'issue_wsup_institution', true); ?>">Buy a copy <span>For institutions</span></a>
      </section>

      <section class="issue-description">
        <p>The
          <!-- name --> <?php echo ucwords($post->post_name); ?>
          Issue, our
          <!-- number --> <?php echo get_post_meta($post->ID, 'issue_number', true); ?>,
           was published in
          <!-- year --> <?php echo get_post_meta($post->ID, 'issue_year', true); ?>.
        </p>
        <?php the_content(); ?>
      </section>

    </div>

  </article>

<?php endwhile; ?>
</section>
