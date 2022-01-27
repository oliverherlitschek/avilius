<?php snippet('header') ?>
<?php snippet('nav') ?>


<main>
<article class="w-100 flex bg-black h-66 bg-cc bg-c" style="background-image: url(<?= image('Grupper-Avilius-Hero-Resized.jpg')->url() ?>);">
  <div class="w-100 reveal flex-end">
    <div class="w-full p-15 pb-1">
      <h2 class="c-white headline-scale s-heading reveal-2"><?= $page->headline()->widont() ?></h2>
    </div>
  </div>
</article>

<article class="w-100 flex bg-lpurple">
    <div class="w-full m-c pt-2 pb-2 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light reveal"><?= $page->tagline()->widont() ?></h3>
    </div>
</article>

<article class="w-100 m-c pt-4 pb-1 p-1 flex flex-sb m-pt-2 s-flex-wrap">
    <section class="w-33 sticky s-no-stick s-w-100 pb-1 reveal">
        <h3 class="heading va-x s-subheading"><?= $page->sessionheadline()->widont() ?></h3>
        <p class="body light s-small"><?= $page->sessiontext()->widont() ?><br><br>Mangler du et forløb, der passer til&nbsp;dig?<br><br><a href="mailto:kontakt@avilius.dk?subject=Forslag til et gruppeforløb" title="Foreslå et gruppeforløb">Skriv til os</a></p>
    </section>
    <section class="w-50 s-w-100">
      <div class="bb-black">
      <?php foreach (page('grupper')->children()->listed() as $group): ?>
        <input type="checkbox" id="<?= $group->title()->slug() ?>" hidden />
        <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
        <div class="tab tab-large bt-black va-c pl-1 pr-15 pb-1 pt-1 s-pl-0 s-pr-0 s-pt-15 s-pb-15 reveal">
            <div class="mono smaller mr-1 uc s-smallest s-mr-15">
              <?php if ($group->dates()->isEmpty()): ?>
              Venteliste
              <?php else: ?>
              <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
          <?= $startdate->introdate() ?>
        <?php endforeach ?>
        <?php endif ?>
            </div>
            <h3 class="body tab-button s-small"><?= $group->title()->widont() ?></h3>
            <?php if ($pic = $group->cover()->toFile()): ?>
            <img src="<?= $pic->url() ?>" title="<?= $group->title() ?>" class="tab-button blog-thumb br-3 br-30 ml-1">
            <?php endif ?>
          </div>
      </a>
      <?php endforeach ?>
    </div>
    </section>
</article>

<?php foreach (page('grupper')->children()->listed()->limit(1) as $group): ?>
<article class="w-100 bg-lgrey pt-2 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb reveal">
    <div class="w-50 s-w-66">
      <?php if ($group->dates()->isEmpty()): ?>
        <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: Venteliste</p>
      <?php else: ?>
        <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
            <?= $startdate->introdate() ?>
        <?php endforeach ?></p>
      <?php endif ?>
    </div>
  </div>
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $group->title() ?></h4>
        <p class="body s-small">
          <?= $group->intro()->widont() ?><br><br>
        <span class="dash">Læs mere &RightArrow;</span></p>
      </div>
      <?php if ($hero = $group->cover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
  <div class="sticker mono uc ta-c va-c m-c spin bg-lgreen c-black smallest reveal-2">Nyt<br>forløb!</div>
</article>
<?php endforeach ?>

<article class="w-100 bg-lgrey pt-2 pb-1 p-1 flex flex-sb s-flex-wrap s-w-100 s-pt-2 s-p-15">
  <div class="w-33 s-w-100 reveal">
  <h3 class="heading s-w-100 va-x m-heading s-subheading"><?= $page->comparisonheadline()->widont() ?></h3>
  </div>
  <div class="w-66 s-w-full reveal">
  <p class="body light c-purple mb-1 s-small"><?= $page->comparisontext()->widont() ?></p>
  </div>
</article>

<article class="w-100 bg-lgrey pb-2">
  <div class="w-full m-c reveal">
  <div class="tab tab-medium bb-black flex flex-sb va-c">
    <div class="w-50 body s-small">Individuel terapi er...</div><div class="w-50 body s-small">Gruppeterapi er...</div>
  </div>
  <?php foreach ($page->comparisons()->toStructure() as $comparison): ?>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0"><?= $comparison->individual() ?></div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0"><?= $comparison->group() ?></div>
  </div>
  <?php endforeach ?></p>
</article>

<?php foreach (page('grupper')->children()->listed()->offset(1)->limit(1) as $group): ?>
<article class="w-100 bg-lgrey pt-1 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb reveal">
    <div class="w-50 s-w-66">
      <?php if ($group->dates()->isEmpty()): ?>
        <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: Venteliste</p>
      <?php else: ?>
        <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
            <?= $startdate->introdate() ?>
        <?php endforeach ?></p>
      <?php endif ?>
    </div>
    <div class="w-50 s-w-33">
      <p class="mono smaller uc ta-r s-smallest"><span class="blink c-dgreen">●</span>&nbsp;<?= $group->spots() ?></p>
    </div>
  </div>
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse reveal">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $group->title() ?></h4>
        <p class="body s-small">
          <?= $group->intro()->widont() ?><br><br>
        <span class="dash">Læs mere &RightArrow;</span></p>
      </div>
      <?php if ($hero = $group->cover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
</article>
<?php endforeach ?>

<article class="w-100 m-c bg-white pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 bg-lgrey">
  <div class="w-100 m-c as-c slideshow-testimonials reveal">
    <?php foreach ($page->children()->listed()->pluck('testimonials') as $testimonial): ?>
    <?php foreach ($testimonial->toStructure() as $testi): ?>
    <div class="m-c as-c ta-c mt-2 mb-2 s-m-0">
      <h3 class="subheading light w-66 m-w-66 m-c s-body">"<?= $testi->quote()->widont() ?>"</h3>
      <p class="smaller mono a-underline mt-1 s-smallest">
    &mdash;&nbsp;<?= $testi->author()->kirbytextinline() ?></p>
  </div>
  <?php endforeach ?>
  <?php endforeach ?>
</div>
</article>

<?php foreach (page('grupper')->children()->listed()->offset(2)->limit(1) as $group): ?>
<article class="w-100 bg-purple pt-1 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb c-white ">
    <div class="w-50 s-w-66">
      <?php if ($group->dates()->isEmpty()): ?>
        <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: Venteliste</p>
      <?php else: ?>
        <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
            <?= $startdate->introdate() ?>
        <?php endforeach ?></p>
      <?php endif ?>
    </div>
    <div class="w-50 s-w-33">
      <p class="mono smaller uc ta-r s-smallest"><span class="blink c-dgreen">●</span>&nbsp;<?= $group->spots() ?></p>
    </div>
  </div>
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse reveal">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $group->title() ?></h4>
        <p class="body s-small">
          <?= $group->intro()->widont() ?><br><br>
        <span class="dash">Læs mere &RightArrow;</span></p>
      </div>
      <?php if ($hero = $group->cover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
</article>
<?php endforeach ?>

<article class="w-100 bg-purple va-c flex-wrap">
  <div class="w-33 mt-4 mb-4 m-w-66 s-w-full m-c s-mt-1 s-mb-2 reveal">
  <h4 class="mono uc smaller c-white regular ta-c mb-15 s-smallest">
    Vidste du...
  </h4>
    <h4 class="body c-white light ta-c s-small">
      <?= $page->didyouknow()->widont() ?></h4>
  </div>
</article>

<article class="w-100 m-c pt-4 pb-2 p-1 m-pt-2 bg-purple">
    <section class="w-100 pb-1 c-white">
        <h3 class="heading va-x s-subheading">Næste holdstart</h3>
    </section>
    <section class="w-100">
      <div class="bb-white c-white">
      <?php foreach (page('grupper')->children()->listed() as $group): ?>
        <input type="checkbox" id="<?= $group->title()->slug() ?>" hidden />
        <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
        <div class="tab tab-large bt-white va-c pl-1 pr-15 pb-1 pt-1 s-pl-0 s-pr-0 s-pt-15 s-pb-15 reveal">
            <div class="mono smaller mr-1 uc s-smallest s-mr-15 w-quarter">

              <?php if ($group->dates()->isEmpty()): ?>
              Venteliste
              <?php else: ?>
              <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
          <?= $startdate->introdate() ?>
        <?php endforeach ?>
        <?php endif ?>
            </div>
            <h3 class="body tab-button s-small"><?= $group->title()->widont() ?></h3>
            <?php if ($pic = $group->cover()->toFile()): ?>
            <img src="<?= $pic->url() ?>" title="<?= $group->title() ?>" class="tab-button blog-thumb br-3 br-30 ml-1">
            <?php endif ?>
          </div>
      </a>
      <?php endforeach ?>
    </div>
    </section>
</article>

<article class="bg-brown pt-3 pb-4 s-pt-2 s-pb-2">
  <a href="../individuelle-samtaler" title="Individuelle samtaler" class="text-hover">
<div class="flex flex-sb va-c">  
  <div class="w-50 m-c reveal-2">
    <h4 class="heading mb-15 s-body">
    Ikke så glad for&nbsp;holdsport?
  </h4>
    <h4 class="body light s-small">
    Vi tilbyder også individuelle&nbsp;samtaler.<br><br>
    Læs mere&nbsp;<span class="dash">&RightArrow;</span></h4>
  </div>
  <div class="w-25 m-c image-fill reveal">
      <?php foreach (page('team')->children()->listed()->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-10 br-30">
          <?php endif ?>
      <?php endforeach ?>
  </div>
</div>
</a>
</article>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>