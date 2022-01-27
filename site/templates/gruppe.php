<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('price-ticker') ?>
<main>
<article class="w-100 card-80 flex bg-white s-flex-wrap">
  <?php if ($portrait = $page->portrait()->toFile()): ?>
    <div class="bg-white w-50 flex va-c bg-cc bg-c portrait p-1 s-w-100 s-h-50 s-p-15" style="background-image:url(<?= $portrait->url() ?>);">
      <div class="flex flex-sb s-flex-wrap s-reverse flex-end w-100 c-white reveal-2">
        <div class="w-66 s-w-100">
      <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: 

        <?php foreach ($page->dates()->toStructure()->limit(1) as $startdate): ?>
          <?= $startdate->introdate() ?><span class="s-remove"> kl. <?= $startdate->introtime() ?></span>
        <?php endforeach ?>

      </p>
    </div>
    <div class="w-33 s-w-100">
      <p class="mono smaller uc ta-r s-smallest s-ta-l s-mb-10"><span class="blink c-dgreen">●</span>&nbsp;<?= $page->spots() ?></p>
    </div>
      </div>
    </div>
  <?php endif ?>
  <div class="w-50 flex flex-wrap reveal s-w-100">
    <div class="w-full m-c pt-2 flex-end s-pt-1">
      <p class="uc mono smaller"><?= $page->length() ?></p>
      <h2 class="subheadline light s-subheading"><?= $page->title() ?></h2>
      <p class="body pt-15 s-small"><?= $page->description()->kirbytextinline()->nl2br()->widont() ?></p>
    </div>
    <div class="w-full m-c flex flex-wrap flex-end mb-15 mt-1 reveal">
      <h4 class="ta-r w-100 subheading"><?= $page->price() ?>,-</h4>
      <p class="ta-r w-100 uc smallest mono mt-15 mb-1"><?= $page->conditions() ?></p>
      <div class="w-100 flex s-flex-wrap flex-sb">
        <p class="small w-half s-w-100 as-c">Tilmelding via mail:</p>
        <a href="mailto:<?= $page->email() ?>?subject=Jeg er interesseret i gruppeforløbet <?= $page->title() ?>" title="Skriv en email til <?= $page->therapist() ?>">
        <button class="w-half s-w-100 btn bg-lgreen mono small pl-1 pr-1 c-black s-mt-15">✉️&nbsp;<?= $page->email() ?></button>
        </a>
      </div>

    </div>
    </div>
</article>

<article class="ticker-wrap bg-lpurple body c-white">
  <section class="ticker-intro h-100 flex p-1 s-p-15"><p class="smaller uc mono s-smallest">
    Til dig, der...
  </p>
  </section>
<div class="fast-ticker pt-10">

<?php foreach ($page->foryou()->toStructure()->shuffle() as $foryou): ?>
          <div class="ml-2 s-ml-1 mt-15 s-small">
            ...<?= $foryou->if() ?>
          </div>
        <?php endforeach ?>
</div>
</article>

<?php if ($page->dates()->isEmpty()): ?>
<article class="w-100 m-c pl-1 pr-1 pt-2 bg-brown">
    <h3 class="w-66 s-w-100 body m-c s-small ta-c">OBS: Vi har ingen planlagte forløb pt. Skriv dig op via email-knappen herover – så hører du fra os, så snart vi har et fyldt hold.</h3>
</article>
<?php else: ?>
<article class="w-100 m-c pt-4 pb-1 p-1 s-pt-2 s-p-15 flex flex-sb m-pt-2 bg-brown s-flex-wrap">
    <section class="w-33 sticky s-no-stick s-w-100">
        <h3 class="heading va-x s-subheading">Næste holdstart</h3>
    </section>
    <section class="w-50 s-w-100">
      <div class="bb-black">
        <?php foreach ($page->dates()->toStructure() as $date): ?>
      <input type="checkbox" id="<?= $date->introdate()->slug() ?>" hidden />
      <div class="accordion ac-medium">
    <label for="<?= $date->introdate()->slug() ?>" class="flex flex-sb tab tab-medium bt-black va-c">
      <h3 class="w-33 body tab-button s-small">
        <?= $date->introdate() ?>
      </h3>
      <h3 class="w-50 body tab-button s-small ta-r">
        kl. <?= $date->introtime() ?>
      </h3>
    </label>
      <div class="pb-1 pt-1 pb-1 s-small">
        <?= $date->remainingdates()->kirbytextinline()->nl2br() ?>
      </div>
    </div>
    <?php endforeach ?>
    </div>
    </section>
</article>

<?php endif ?>

<article class="w-100 bg-brown pt-2 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb">
    <div class="w-50 s-w-66">
      <p class="mono smaller uc s-smallest">Gruppeleder(e)</p>
    </div>
  </div>
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $page->therapist() ?></h4>
        <p class="body s-small">
          <?= $page->therapistintro()->kirbytextinline()->nl2br()->widont() ?><br><br>
        </p>
      </div>
      <?php if ($hero = $page->therapistcover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
</article>

<article class="w-100 bg-brown pt-3 pb-4 s-pt-2 s-pb-1">
<section class="w-full m-c flex flex-sb s-flex-wrap">
  <div class="w-33 sticky s-w-100 s-no-stick">
    <h3 class="heading s-w-100 va-x m-heading s-subheading">Program</h3>
  <p class="body light c-purple mb-1 s-small"><?= $page->programdescription()->nl2br()->widont() ?><br><br>
Forløbet foregår hos Avilius på <a href="https://goo.gl/maps/x3hbESf3KqudedoN7" title="Avilius på Google Maps" target="_blank">Vesterbrogade&nbsp;35</a>.&nbsp;📍</p></div>
    <div class="w-50 s-w-100">
    <div class="bb-black mt-1 s-m-0">
<?php foreach ($page->program()->toStructure()->sortBy('number', 'asc') as $session): ?>
  <input type="checkbox" id="<?= $session->number()->slug() ?>" hidden />
  <div class="accordion ac-large s-ac-medium">
    <label for="<?= $session->number()->slug() ?>" class="tab tab-large s-tab-medium bt-black va-c pl-1 pr-1 m-pl-15 s-p-0 reveal">
      <?php if ($session->number()->isNotEmpty()): ?>
      <h3 class="body tab-button s-small"><span class="mr-1 m-m-0"><?= $session->number() ?>.</span>&nbsp;<?= $session->headline() ?></h3>
      <?php else: ?>
      <h3 class="body tab-button s-small"><?= $session->headline() ?></h3>
      <?php endif ?>
    </label>
    <div class="pl-1 pr-1 pb-2 m-pl-15 m-pr-15 m-pb-1 s-m-0 s-small s-pl-15 s-pr-15 s-pb-1">
      <?= $session->description()->kt()->nl2br() ?>
    </div>
    </div>
<?php endforeach ?>
</div>
  </div>
  </section>
</article>

<article class="w-100 va-c flex-wrap">
  <div class="w-33 mt-4 mb-4 m-w-66 s-w-full s-mb-2 s-mt-2 reveal">
  <h4 class="body regular ta-c mb-15 s-small">
    Er <?= $page->title() ?> det rigtige forløb for&nbsp;dig?
  </h4>
    <h4 class="body light ta-c s-small">
    Vi sidder klar ved telefonerne til at svare på alle spørgsmål. Vælg en ledig tid nedenfor, så ringer vi til&nbsp;dig!</h4>
    <button class="call-button btn m-c mt-2 bg-lgreen ta-c mono small pl-1 pr-1 c-black">📞&nbsp;Se ledige tider</button>
  </div>
  <?php snippet('call') ?>
</article>

<?php if ($page->testimonials()->isNotEmpty()): ?>
<article class="w-100 m-c bg-lpurple pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 bg-white">
  <div class="w-100 m-c as-c slideshow-testimonials reveal">
    <?php foreach ($page->testimonials()->toStructure() as $testimonial): ?>
    <div class="m-c as-c ta-c">
      <h3 class="subheading w-66 m-w-66 m-c lh-15 s-body c-purple">"<?= $testimonial->quote()->widont() ?>"</h3>
      <p class="smaller mono uc a-underline mt-1 c-purple">
    &mdash;&nbsp;<?= $testimonial->author()->kirbytextinline() ?></p>
  </div>
  <?php endforeach ?>
</div>
</article>
<?php endif ?>

<article class="bg-brown pt-3 pb-4 s-pt-2 s-pb-2">
  <a href="../grupper" title="Gruppeforløb" class="text-hover">
<div class="flex flex-sb va-c">  
  <div class="w-50 m-c">
    <h4 class="heading mb-15 s-body">
    Er du i tvivl?
  </h4>
    <p class="body light s-small">
    Vi har måske et gruppeforløb, der passer bedre til&nbsp;dig.<br><br>
    Læs mere&nbsp;<span class="dash">&RightArrow;</span></p>
  </div>
  <div class="w-25 m-c image-fill reveal">
    <img src="<?= image('grupper/Grupper-Avilius-Hero-Resized.jpg')->resize(500, null, 70)->url() ?>" class="br-10 br-30">
  </div>
</div>
</a>
</article>


</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>