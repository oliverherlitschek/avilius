<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="bg-brown">

<?php foreach($posts = $page->children()->listed()->flip()->limit(1) as $post): ?>
<?php

if ($post->theme() == "baddfc") {
  $secondarycolor = '#eb2921';
} elseif ($post->theme() == "bbd663") {
  $secondarycolor = '#163c2d';
} elseif ($post->theme() == "c377e5") {
  $secondarycolor = '#e2ecfe';
} elseif ($post->theme() == "f0f1b4") {
  $secondarycolor = '#4200b0';
} else {
  $secondarycolor = '#933a26';
}
?>
<article class="w-100 h-66 s-h-50 p-1 s-p-15 s-pt-2 pt-4 pb-2 flex flex-wrap flex-sb s-reverse" style="background-color:#<?= $post->theme() ?>;color: <?= $secondarycolor ?>;">

  <div class="w-half flex-end s-w-100">
    <a href="<?= $post->url() ?>" title="<?= $post->title() ?>">
    <h3 class="mono smaller reveal-2">Nyeste indlæg postet d.&nbsp;<?= $post->date()->toDate('%d/%m/%y') ?></h3>
    <h1 class="subheadline thin m-heading s-body s-light reveal"><?= $post->title() ?></h1>
    <h4 class="body light s-small mt-1">
    Læs artikel&nbsp;<span class="dash">&RightArrow;</span></h4>
    </a>
    <!-- for when we're ready to do content grouping
    <div class="mt-15 reveal-2">
      <?php foreach ($post->tags()->split() as $tag): ?>
        <span class="tag-pill p-5 pl-10 pr-10 mt-15 mr-10 uc mono smallest" style="border: 1px solid <?= $secondarycolor ?>"><?= $tag ?></span>
      <?php endforeach ?>
    </div> -->
  </div>
  <div class="w-half s-w-66 m-c flex-end pl-2 pr-2 pt-4 s-p-1 image-fill">
      <?php if ($cover = $post->cover()->toFile()): ?>
      <a href="<?= $post->url() ?>" title="<?= $post->title() ?>">
        <?php echo $cover->webp('m-c br-3 br-30 reveal-2', $cover->alt(), [1920, 1140, 640, 320]); ?>
      </a>
      <?php endif ?>
  </div>
</article>
<?php endforeach ?>

<article class="w-100 pt-2 pl-1 pr-1 pb-1 s-pl-15 s-pr-15">
    <h4 class="subheading">Nyeste indlæg</h4>
</article>

<article class="w-full m-c">
    <section class="w-100 flex flex-wrap flex-sb">
        <?php foreach ($page->children()->listed()->flip()->offset(1)->limit(8) as $post): ?>

          <?php if($post->card()->bool()): ?>

        <?php

        if ($post->theme() == "baddfc") {
          $secondarycolor = '#eb2921';
        } elseif ($post->theme() == "bbd663") {
          $secondarycolor = '#163c2d';
        } elseif ($post->theme() == "c377e5") {
          $secondarycolor = '#e2ecfe';
        } elseif ($post->theme() == "f0f1b4") {
          $secondarycolor = '#4200b0';
        } else {
          $secondarycolor = '#933a26';
        }
        ?>
        <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
        <div class="w-100 br-3 card-80 s-card-60 ta-c flex flex-wrap flex-sb va-c pt-15 pb-15 pl-1 pr-1 mb-1 br-30 reveal" style="background-color:#<?= $post->theme() ?>;color:<?= $secondarycolor ?>;">
          <h3 class="flex-start smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>

          <h3 class="body"><?= $post->title() ?></h3>
          <h3 class="flex-end smallest mono">af&nbsp;<?= $post->author() ?></h3>
        </div>
        </a>
        <?php else : ?>
          <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
            <?php if ($hero = $post->cover()->toFile()): ?>
        <div class="w-100 br-3 card-80 flex flex-wrap flex-sb va-c mb-1 s-mb-15 br-30 reveal-2 bg-cc bg-c video-portrait-container" style="background-image:url(<?= $hero->backgroundImage() ?>);">
          <?php endif ?>
          <div class="bg-white flex-end w-100 p-1">
          <h3 class="flex smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>
          <h3 class="small"><?= $post->title() ?></h3>
        </div>
        </div>
        </a>
          <?php endif ?>

      <?php endforeach ?>
      

      <div class="w-33 s-w-100 br-3 card-80 ta-c pt-15 pb-15 pl-1 pr-1 mb-1 s-mb-15 reveal-2 bg-purple c-white flex flex-wrap va-c" style="align-content: center;">
        <div class="">
          <h4 class="body regular ta-c mb-15 s-small">
          Leder du efter svar?
        </h4>
          <h4 class="body light ta-c s-small">
          Vi sidder klar med råd og vejledning til, hvordan du kan få det&nbsp;bedre.</h4>
          <button class="book-button c-purple h-60 br-10 br-30 m-c m-10 mt-1 bg-lpurple ta-c mono small s-smaller pl-1 pr-1">Skriv til os</button>
          </div>
          <h3 class="smallest mono mt-15"><a class="underline call-button">Jeg vil hellere ringes op</a></h3>
        </div>

        <?php snippet('call') ?>

      <?php foreach ($page->children()->listed()->flip()->offset(10) as $post): ?>

          <?php if($post->card()->bool()): ?>

        <?php

        if ($post->theme() == "baddfc") {
          $secondarycolor = '#eb2921';
        } elseif ($post->theme() == "bbd663") {
          $secondarycolor = '#163c2d';
        } elseif ($post->theme() == "c377e5") {
          $secondarycolor = '#e2ecfe';
        } elseif ($post->theme() == "f0f1b4") {
          $secondarycolor = '#4200b0';
        } else {
          $secondarycolor = '#933a26';
        }
        ?>
        <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
        <div class="w-100 br-3 card-80 s-card-60 ta-c flex flex-wrap flex-sb va-c pt-15 pb-15 pl-1 pr-1 mb-1 br-30 reveal" style="background-color:#<?= $post->theme() ?>;color:<?= $secondarycolor ?>;">
          <h3 class="flex-start smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>

          <h3 class="body w-100"><?= $post->title() ?></h3>
          <h3 class="flex-end smallest mono">af&nbsp;<?= $post->author() ?></h3>
        </div>
        </a>
        <?php else : ?>
          <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
            <?php if ($hero = $post->cover()->toFile()): ?>
        <div class="w-100 br-3 card-80 flex flex-wrap flex-sb va-c mb-1 br-30 reveal-2 bg-cc bg-c video-portrait-container" style="background-image:url(<?= $hero->backgroundImage() ?>);">
          <?php endif ?>
          <div class="bg-white flex-end w-100 p-1">
          <h3 class="flex smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>
          <h3 class="small"><?= $post->title() ?></h3>
        </div>
        </div>
        </a>
          <?php endif ?>

      <?php endforeach ?>

  </section>
</article>

<article class="w-100 bg-brown bt-grey">
  <section class="h-66 s-card-33 w-full w-1400 m-c va-c flex flex-wrap">
  <div class="w-100 m-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2">
  <p class="body regular ta-c mb-15 s-small">
    Er Avilius det rigtige for dig?
  </p>
    <p class="body light ta-c s-small mb-1">
    Skriv til os og fortæl, hvordan det går <span class="s-remove"><br></span>– så finder vi ud af det&nbsp;sammen.</p>
    <div class="w-100 m-c ta-c">
    <button class="book-button c-purple h-60 br-10 br-30 m-c m-10 bg-lpurple ta-c mono small s-smaller pl-1 pr-1">Skriv til os</button> <button class="call-button c-purple h-60 br-10 br-30 m-c m-10 s-m-0 bg-white ta-c mono small s-smaller pl-1 pr-1">Book et opkald ☎️</button>
  </div>
  </div>
</section>
  <?php snippet('call') ?>
</article>


</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>