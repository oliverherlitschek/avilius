<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main>
  <?php if ($cover = $page->cover()->toFile()): ?>
<article class="w-100 bg-brown card-80 s-card-60 flex flex-sb p-1 bg-cc bg-c s-p-15" style="background-image:url(<?= $cover->backgroundImage() ?>);">
  <h1 class="subheadline-scale c-white flex-end s-heading reveal">
    <?= $page->title() ?>
  </h1>
  <p class="smaller w-third ta-r mono c-white flex-end s-remove reveal-2">
    <?= $page->description() ?>
  </p>
</article>
<?php endif ?>

<article class="w-100 flex bg-white">
    <div class="w-full m-c pt-4 pb-4 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light"><?= $page->tagline()->widont() ?></h3>
    </div>
</article>

<article class="w-100 flex bg-white h-90 s-h-60" id="om">
  <section class="w-50 leaf flex va-c bg-lgrey reveal">
    <a href="#om" title="Om Avilius" class="mh-100 w-100 va-c c-purple s-small">Om Avilius</a>
  </section>
  <section class="w-50 leaf flex va-c bg-purple text-hover reveal-2">
    <a href="#faq" title="FAQ" class="mh-100 w-100 va-c c-white s-small">FAQ</a>
  </section>
</article>

<article class="w-100 pt-4 pb-4 bb-grey bg-lgrey s-pt-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <section class="w-33 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Intro</h3>
  </section>
  <section class="w-66 s-w-100">
  <p class="body light s-small"><?= $page->intro()->nl2br()->widont() ?></p>
  </section>
</div>
</article>

<article class="w-100 pt-4 bg-lgrey pb-2 p-1 s-p-15 s-pt-2">
  <div class="w-100 w-1400 m-c flex flex-sb s-flex-wrap">
  <section class="w-33 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Hjerterne bag Avilius.</h3>
  </section>
  <section class="w-66 s-w-100">
    <img src="/media/Jonas-Oliver-Avilius.jpg" class="w-100 br-3 reveal">
    <div class="flex flex-sb m-flex-wrap">
    <p class="mt-1 w-half m-w-100 m-mb-1 s-small reveal">
      <span class="m-regular mb-15"><a class="underline" href="https://www.linkedin.com/in/jonas-sch%C3%B8sler-2b0a87123/" title="Jonas Schøsler på LinkedIn" target="_blank">Jonas Schøsler</a></span> <span class="mono uc smaller">&nbsp;CEO</span><br><span class="m-remove"><br></span>
Der findes ikke noget mere meningsfuldt, end når jeg læser i vores feedback, at vi har haft afgørende betydning for et ungt menneskes liv. Derfor er jeg enormt optaget af vores mission om at gøre psykologisk hjælp tilgængeligt for alle. Det har aldrig været sværere at være ung, så psykologisk hjælp bør ikke være et privilegie for de&nbsp;få.
    </p>
    <p class="mt-1 w-half m-w-100 s-small reveal-2">
      <span class="m-regular mb-15"><a class="underline" href="https://www.linkedin.com/in/oliver-herlitschek-9a0776b8/" title="Oliver Herlitschek på LinkedIn" target="_blank">Oliver Herlitschek</a></span> <span class="mono uc smaller">&nbsp;COO</span><br><span class="m-remove"><br></span>
At gå i terapi er det bedste, jeg har gjort for mig selv. Mit vigtigste arbejde i Avilius er derfor at udvikle og formidle terapi, som er relaterbar for min generation og langsomt normalisere, hvad det egentlig handler om – nemlig at være nysgerrig og omsorgsfuld over for sig selv og sit&nbsp;liv.
    </p>
  </div>
  </section>
</div>
</article>

<article class="w-100 pt-4 bg-lgrey s-pt-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-50 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Velkommen hjem.</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body light s-small">
Vi arbejder bedst i hyggelige og hjemlige omgivelser. Derfor har vi indrettet vores praksis i en stor og rummelig lejlighed i midten af byen.
<br><br>
<a href="https://goo.gl/maps/x3hbESf3KqudedoN7" title="Avilius på Google Maps" target="_blank">
        <span class="dash">Avilius på Maps&nbsp;&nbsp;&RightArrow;</span>
      </a></p>
  </div>
</div>
</article>

<article class="w-100 pb-2 pt-2 bg-lgrey m-pb-2 s-pb-0 s-pt-1">
  <section class="track flex pl-1 s-pl-15">
    <?php foreach (page('hvorfor')->space()->toFiles() as $photo): ?>
    <div class="pr-1 s-pr-15 h-full">
      <?php echo $photo->webp('br-3 h-full', $photo->alt(), [1920, 1140, 640, 320]); ?>
    </div>
  <?php endforeach ?>
</section>
</article>

<article class="w-100 pt-4 bg-lgrey s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-33 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Avilius er&hellip;</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100">
  <p class="body light s-small">Vi er guidet af fem principper, vi forsøger at efterleve hver dag. Både i vores daglige arbejde med terapi, men også i udviklingen, ledelsen og driften i Avilius.</p>
  <div class="bb-black mt-1">
  <?php foreach ($page->values()->toStructure() as $value): ?>
      <input type="checkbox" id="<?= $value->valuename()->slug() ?>" hidden />
      <div class="accordion ac-large reveal">
    <label for="<?= $value->valuename()->slug() ?>" class="tab tab-button tab-large bt-black va-c flex flex-sb pl-15 pr-15">
      <h3 class="c-purple body s-small">
        <?= $value->valuename() ?>
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <?= $value->valuedescription()->toBlocks() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div></div>
</div>
</article>

<article class="w-100 flex bg-lgrey h-90 s-h-60" id="faq">
  <section class="w-50 leaf flex va-c bg-white reveal">
    <a href="#om" title="Om Avilius" class="mh-100 w-100 va-c c-purple s-small">Om Avilius</a>
  </section>
  <section class="w-50 leaf flex va-c bg-purple text-hover reveal-2">
    <a href="#faq" title="FAQ" class="mh-100 w-100 va-c c-white s-small">FAQ</a>
  </section>
</article>

<article class="w-100 pt-4 bg-purple s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-33 s-w-100">
  <h3 class="heading c-white light va-x s-subheading s-mb-1">Terapi og&nbsp;etik</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100 bb-white">
  <?php foreach ($page->therapy()->toStructure() as $value): ?>
      <input type="checkbox" id="<?= $value->question()->slug() ?>" hidden />
      <div class="accordion ac-large reveal">
    <label for="<?= $value->question()->slug() ?>" class="tab tab-button tab-large bt-white va-c flex flex-sb pl-15 pr-15">
      <h3 class="c-white body s-small">
        <?= $value->question() ?>
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#ffffff"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#ffffff"/>
        </g>
      </svg>
    </label>
      <div class="c-white pl-15 pr-15 pb-1 s-small">
        <?= $value->answer()->toBlocks() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</div>
</article>

<article class="w-100 pt-4 bg-purple s-pb-2 s-pt-0">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-33 s-w-100">
  <h3 class="heading c-white light va-x s-subheading s-mb-1">Økonomi og forretning</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100 bb-white">
  <?php foreach ($page->business()->toStructure() as $value): ?>
      <input type="checkbox" id="<?= $value->question()->slug() ?>" hidden />
      <div class="accordion ac-large reveal">
    <label for="<?= $value->question()->slug() ?>" class="tab tab-button tab-large bt-white va-c flex flex-sb pl-15 pr-15">
      <h3 class="c-white body s-small">
        <?= $value->question() ?>
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#ffffff"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#ffffff"/>
        </g>
      </svg>
    </label>
      <div class="c-white pl-15 pr-15 pb-1 s-small">
        <?= $value->answer()->toBlocks() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div>
  </div>
</article>

<article class="w-100 pt-4 bg-purple s-pb-2 s-pt-0">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-33 s-w-100">
  <h3 class="heading c-white light va-x s-subheading s-mb-1">Roadmap</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100 white">
    <div class="mb-1 c-white s-small">
      <?= $page->developmenttext()->kirbytext()->nl2br()->widont() ?>
      <p class="smaller uc mono mt-1"><span class="blink">●</span>&nbsp;Sidst opdateret: <?php echo date("F Y");?></p>
      <div class="c-white mb-1 mt-1 bt-white">
      <h4 class="uc mono smaller mb-15 mt-1">Done</h4>
        <div class="o-50"><?= $page->done()->nl2br() ?></div>
      </div>
      <div class="bb-white c-white mb-1 pb-1">
        <h4 class="uc mono smaller mb-15 mt-2">To-do (i vilkårlig rækkefølge)</h4>
        <?= $page->todo()->nl2br() ?>
      </div>
    </div>
  </div>
</article>

<article class="w-100 pt-4 bg-purple s-pb-2 s-pt-0">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-white light va-x s-subheading s-mb-1">Tak</h3>
    </div>
    <div class="w-66 mb-4 m-mb-2 s-w-100 c-white small">
        <?= $page->thankyou()->kirbytext()->nl2br()->widont() ?>
    </div>
  </div>
</article>


<article class="w-100 bg-brown">
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