<?php use Roots\Sage\Titles; ?>

<article class="page">

  <header class="page__header col__12">
    <h1><?= Titles\title(); ?></h1>
  </header>

  <div class="page__content col__8 off__2">
    <?php the_content(); ?>
  </div>

</article>
