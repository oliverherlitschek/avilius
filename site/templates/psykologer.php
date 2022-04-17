<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="bg-lgrey">
  <?php if ($cover = $page->cover()->toFile()): ?>
<article class="w-100 card-80 s-card-60 flex flex-sb p-1 bg-cc bg-c s-p-15" style="background-image:url(<?= $cover->backgroundImage() ?>);">
  <h1 class="subheadline-scale c-white flex-end s-heading reveal">
    <?= $page->headline() ?>
  </h1>
</article>
<?php endif ?>

<article class="w-100 flex bg-white">
    <div class="w-full m-c pt-4 pb-4 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light"><?= $page->tagline()->widont() ?></h3>
    </div>
</article>


<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap s-reverse">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading">Der er mange gode grunde til at gå til&nbsp;psykolog.</h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small">Det kan være svært at vide, hvornår man skal opsøge psykologhjælp. Her er nogle af de helt almindelige oplevelser, følelser og problemer, vi ofte arbejder med i terapirummet.</p>
    </div>
  </div>
      <div class="mt-3 pb-2">
        <div class="fast-ticker">
          <?php foreach ($page->foryou()->split() as $if): ?>
            <div class="small h-60 pt-17 ta-c mono tag-pill bg-white pl-1 pr-1">
              <?= $if ?>
            </div>
            <div class="pl-1"></div>
          <?php endforeach ?>
        </div>
      </div>
</article>

<article class="w-100 pt-4 m-pt-2 c-purple bg-blue">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-50 s-w-100">
    <p class="mono smaller uc pb-15 s-smallest">Team</p>
  <h5 class="subheadline va-x m-heading s-subheading">Vores psykologer</h5>
  </div>
  <div class="w-50 s-w-100 mt-40 m-mt-1 s-m-0">
  <p class="body s-small">Individuelle problemer kræver individuelle løsninger. Vi er et hold af unge uddannede psykologer, der har hver vores erfaringer, metoder og præferencer. Sådan sikrer vi, at vi kan tilbyde den rette hjælp til alle, der kommer i terapi hos os.</p>
  </div>
</div>
</article>
<article class="w-100 pb-4 pt-2 c-purple bg-blue">
  <section class="track flex">
    <?php foreach ($page->children()->listed()->shuffle() as $psychologist): ?>
      <?php if ($cover = $psychologist->portrait()->toFile()): ?>
        <div class="w-third m-w-half bg-cc bg-c c-white flex br-3 br-30 ml-1 s-ml-15" style="background-image: url(<?= $cover->backgroundImage() ?>)">
          <a href="<?= $psychologist->url() ?>" class="w-100 p-1 flex flex-wrap flex-sb s-pt-15 s-pb-15 s-pl-15 s-pr-15" title="<?= $psychologist->firstname() ?>">
            <h3 class="subheading m-body"><span class="text-hover"><?= $psychologist->firstname() ?></span></h3>
            <div class="w-100 flex-end">
              <h3 class="c-white mono uc smaller ta-r s-smallest"><?= $psychologist->price() ?>,- per gang
              </h3>
            </div>
          </a>
        </div>
      <?php endif ?>
    <?php endforeach ?>
    <div class="w-2 h-1" style="display: block;opacity: 0;">&nbsp;&nbsp;</div>
  </section>
</article>

<!-- <article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0 bg-blue c-purple">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach($page->children()->listed()->limit(8)->shuffle() as $therapist): ?>
      <?php if ($therapist->testimonials()->isNotEmpty()): ?>
        <div class="m-c w-100 flex va-c">
          <div class="w-50 m-w-66 m-c mt-4 mb-4">
          <p class="uc mono smaller s-smallest mb-15">Tidligere klient hos <a href="<?= $therapist->url(); ?>" target="_blank" title="<?= $therapist->title(); ?>"><?= $therapist->firstname(); ?></a>:</p>
          <?php foreach($therapist->testimonials()->toStructure()->shuffle()->limit(1) as $text): ?>
            <p class="body m-c s-small"><?= $text->quote()->widont(); ?></p>
          <?php endforeach ?>
        </div>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </section>
</article>
 -->
<article class="w-100 pt-4 s-pt-2 s-pb-2">
<section class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading"><?= $page->comparisonheadline() ?></h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small"><?= $page->comparisontext()->widont() ?></p><br>
      <p>Stadig i tvivl? Det forstår vi godt. <span class="underline book-button">Skriv til os</span>!</p>
    </div>
  </section>
</article>

<article class="w-100 pb-2">
  <section class="w-full w-1400 m-c">
  <div class="tab tab-medium bb-black flex flex-sb va-c">
    <div class="w-50 body s-small"><a href="../individuelle-samtaler" target="_blank" title="Individuel terapi" class="underline">Samtaleterapi</a> er...</div><div class="w-50 body s-small">Psykologhjælp er...</div>
  </div>
  <?php foreach ($page->comparisons()->toStructure() as $comparison): ?>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large reveal">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0"><?= $comparison->individual() ?></div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0"><?= $comparison->group() ?></div>
  </div>
  <?php endforeach ?>
</section>
</article>


<article class="w-100 h-80 bt-grey">
  <a href="" title="Book et besøg" class="book-button text-hover">
    <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-purple flex flex-wrap flex-sb">
      <div class="w-half s-w-100 flex-end image-fill reveal">
            <img src="../media/Avilius-Space-2.jpg" class="m-c br-3 br-30">
  </div>
      <div class="w-third flex-end m-w-half s-w-100 s-mt-1 reveal-2">
        <p class="mono smaller uc pb-15 s-smallest">Trygge rammer</p>
  <h5 class="subheadline va-x m-heading s-subheading">Velkommen hjem.</h5>
      <p class="body mb-1 s-small">
      Vi arbejder bedst i hyggelige og hjemlige omgivelser. Derfor har vi indrettet vores praksis i en stor og rummelig lejlighed i midten af byen.</p>
      <p class="dash mb-1 s-small">Book et besøg&nbsp;&nbsp;&RightArrow;</p>
    </section>
  </a>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2 bg-purple c-white">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 s-w-100">
  <h3 class="subheadline c light va-x m-heading s-subheading">Kom i gang på 0,5.</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100">
  <p class="body light s-small">Det er en helt naturlig del af den menneskelige oplevelse at møde traumer, psykiske lidelser og mental mistrivsel i løbet af livet. Heldigvis kommer du hos os hurtigt i&nbsp;gang.</p>
  <div class="bb-white mt-1">
  <?php foreach ($page->howto()->toStructure() as $value): ?>
      <input type="checkbox" id="<?= $value->howtoname()->slug() ?>" hidden />
      <div class="accordion ac-large reveal">
    <label for="<?= $value->howtoname()->slug() ?>" class="tab tab-button tab-large bt-white va-c flex flex-sb pl-15 pr-15">
      <h3 class="c-white body s-small">
        <?= $value->howtoname() ?>
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="white"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="white"/>
        </g>
      </svg>
    </label>
      <div class="c-white pl-15 pr-15 pb-1 s-small">
        <?= $value->howtodescription()->toHtml() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div></div>
</div>
</article>



<article class="w-100 bg-brown">
  <section class="h-66 s-card-33 w-full w-1400 m-c va-c flex flex-wrap">
  <div class="w-100 m-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2">
  <p class="body regular ta-c mb-15 s-small">
    Er Avilius det rigtige for dig?
  </p>
    <p class="body light ta-c s-small mb-1">
    Skriv til os og fortæl, hvad du har brug for <span class="s-remove"><br></span>– så finder vi ud af det&nbsp;sammen.</p>
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