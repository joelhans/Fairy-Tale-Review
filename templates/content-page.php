<?php use Roots\Sage\Titles; ?>

<article class="page col__8">

  <header class="page__header col__12">
    <h1><?= Titles\title(); ?></h1>
  </header>

  <div class="page__content">
    <?php the_content(); ?>
  </div>

</article>
