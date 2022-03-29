<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('cta') ?>
<main class="bg-brown c-purple mt-3">
<article class="w-full pt-1 m-c">
  <img class="w-100" src="/media/Avilius-Logo.svg" alt="Avilius">
</article>

<article class="w-full m-c flex flex-sb s-flex-wrap mt-1 pb-2">
  <section class="w-half s-w-100 card-80 m-card-60 s-card-80">
    <div class="w-100 br-3 bg-cc bg-c card-80 m-card-60 s-card-80" style="background-image: url(/media/Oscar-Lui-Bjerre-Avilius-Hero.jpg);"></div>
  </section>
  <section class="w-half s-w-100 card-80 m-card-60 s-card-80 flex flex-wrap flex-sb s-mt-1">
    <h1 class="subheadline m-heading">I Avilius laver vi SU-venlig terapi til unge som os&nbsp;selv.</h1>
    <div class="w-100 flex flex-wrap flex-end s-mt-4">
      <a href="/individuelle-samtaler" title="Individuel terapi" class="w-100">
        <div class="bg-white br-10 br-30 c-purple flex flex-sb h-60 w-100 p-10 pl-1 s-pl-15 mt-15">
          <h3 class="s-body"><span class="dash">Individuel terapi&nbsp;&nbsp;&RightArrow;</span></h3>
        </div>
      </a>

      <a href="/grupper" title="Gruppeforløb" class="w-100">
        <div class="bg-white br-10 br-30 c-purple flex flex-sb h-60 w-100 p-10 pl-1 s-pl-15 mt-15">
          <h3 class="s-body"><span class="dash">Gruppeforløb&nbsp;&nbsp;&RightArrow;</span></h3>
        </div>
      </a>

      <a href="/kaeresteterapi" title="Kæresteterapi" class="w-100">
        <div class="bg-white br-10 br-30 c-purple flex flex-sb h-60 w-100 p-10 pl-1 s-pl-15 mt-15">
          <h3 class="s-body"><span class="dash">Kæresteterapi&nbsp;&nbsp;&RightArrow;</span><span class="sold-out br-3 mono smallest uc ta-c bg-blue ml-15 c-black spin p-5">NYT!</span></h3>
        </div>
      </a>

  </div>
  </section>
</article>

<?php if($site->announcement()->isNotEmpty()): ?>
  <div class="bg-blue p-1 ta-c"><p class="a-underline"><?= $site->announcement()->kirbytextinline() ?></p></div>
  <?php else: ?>
    <article class="w-100 bt-grey">
</article>
<?php endif ?>

<article class="w-100 va-c flex-wrap">
  <div class="w-full w-1400 mt-4 mb-4 s-w-full m-c s-mt-2 s-mb-2">
  <h4 class="subheading ta-c mb-3 s-mt-2">
    Hvordan fungerer det?
  </h4>
  <div class="w-100 flex flex-wrap flex-sa">
    <h5 class="body w-third p-15 s-w-100 s-p-0 s-mb-1 s-small">
      <span class="mono smaller s-smallest">01</span><br>
      Mærk efter indeni. Hvad har du brug for? Klik lidt rundt her på siden og bliv inspireret.
    </h5>
    <h5 class="body w-third p-15 s-w-100 s-p-0 s-mb-1 s-small">
      <span class="mono smaller s-smallest">02</span><br>
      <span class="underline book-button">Skriv til os</span>! Man kan ikke automatisere omsorg, så vi læser din besked omhyggeligt.
    </h5>
    <h5 class="body w-third p-15 s-w-100 s-p-0 s-mb-1 s-small">
      <span class="mono smaller s-smallest">03</span><br>
      Vi kontakter dig efter 2-3 dage, når vi har fundet et forløb, der er perfekt til dig.
    </h5>
    </div>
</article>

<article class="w-full mt-2 m-c flex flex-sb pb-4 s-remove">
    <section class="w-third s-w-100 br-3 br-30 of-h bg-white">
      <a href="/individuelle-samtaler" title="Individuel terapi">
          <?php if ($portrait = $page->individuelphoto()->toFile()): ?>
        <div class="bg-brown w-100 card-60 m-card-33 bg-cc bg-c p-1" style="background-image: url(<?= $portrait->url() ?>);">
          <h3 class="c-white m-body"><span class="text-hover">Individuel terapi</span></h3>
        </div>
        <?php endif ?>
      <div class="w-100 p-1">
        <h5>
      <span class="mono smaller uc">Fra <?= $page->individuelprice() ?>,-</span><br>
      <?= $page->individueldescription()->kirbytextinline()->widont() ?>
      </h5>
      </div>
      </a>
    </section>
    
    <section class="w-third s-w-100 br-3 br-30 of-h bg-white">
      <a href="/grupper" title="Gruppeterapi">
          <?php if ($portrait = $page->gruppephoto()->toFile()): ?>
        <div class="bg-brown w-100 card-60 m-card-33 bg-cc bg-c p-1" style="background-image: url(<?= $portrait->url() ?>);">
          <h3 class="c-white m-body"><span class="text-hover">Gruppeterapi</span></h3>
        </div>
        <?php endif ?>
      <div class="w-100 p-1">
        <h5>
      <span class="mono smaller uc">Fra <?= $page->gruppeprice() ?>,-</span><br>
      <?= $page->gruppedescription()->kirbytextinline()->widont() ?>
      </h5>
      </div>
      </a>
    </section>

    <section class="w-third s-w-100 br-3 br-30 of-h bg-white">
      <a href="/kaeresteterapi" title="Kæresteterapi">
          <?php if ($portrait = $page->kaerestephoto()->toFile()): ?>
        <div class="bg-brown w-100 card-60 m-card-33 bg-cc bg-c p-1" style="background-image: url(<?= $portrait->url() ?>);">
          <h3 class="c-white m-body"><span class="text-hover">Kæresteterapi</span></h3>
        </div>
        <?php endif ?>
      <div class="w-100 p-1">
        <h5>
      <span class="mono smaller uc">Fra <?= $page->kaeresteprice() ?>,-</span><br>
      <?= $page->kaerestedescription()->kirbytextinline()->widont() ?>
      </h5>
      </div>
      </a>
    </section>

</article>

<?php foreach (page('team')->children()->listed()->shuffle()->limit('1') as $profile): ?>
  <?php if ($film = $profile->video()->toFile()): ?>
  <?php endif ?>
<?php endforeach ?>

<article class="w-100 h-80 bg-purple of-h m-remove">
  <video class="" id="vid" autoplay muted loop style="position: absolute;left:0px;top:0px;min-width:100vw;min-height:100vh;">
          <source src="<?= $film->url() ?>" type="video/mp4">
        </video>
  <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 c-white flex flex-wrap flex-sb">
    <div class="w-half flex-end">
      <a href="/individuelle-samtaler" title="Individuel terapi">
      <p class="mono smaller uc pb-15">Individuel terapi</p>
      <h5 class="subheadline va-x m-heading"><?= $page->individuelsplashheadline() ?></h5>
      <p class="body mb-1">
      <?= $page->individuelsplashdescription()->widont() ?></p>
      <p class="dash"><?= $page->individuelsplashcta() ?>&nbsp;&nbsp;&RightArrow;</p>
    </a>
    <div class="mute-video underline small mb-3 ta-r mr-15 c-white">&nbsp;<?= $profile->firstname() ?></div>
  </section>
</article>

<article class="w-100 video-portrait-container l-remove">
  <div id="playBtn">
  <svg height="26" width="26">
    <polygon points="0,0 26,13 0,26" fill="white" />
  </svg>
  </div>
  <?php if ($cover = $profile->secondportrait()->toFile()): ?>
  <video class="w-100" id="vid" preload="none" style="background: transparent url('<?= $cover->url() ?>') 50% 50% / cover no-repeat;">
          <source src="<?= $film->url() ?>" type="video/mp4">
        </video>
    <?php endif ?>
</article>
<article class="bg-white l-remove">
  <section class=" w-full w-1400 m-c pt-1 pb-2 flex flex-wrap flex-sb c-purple">
    <div class="w-100 flex-end">
      <a href="/individuelle-samtaler" title="Individuel terapi">
      <p class="mono smallest uc pb-15">Individuel terapi</p>
      <h5 class="va-x s-subheading"><?= $page->individuelsplashheadline() ?></h5>
      <p class="small mb-1">
      <?= $page->individuelsplashdescription()->widont() ?></p>
      <p class="dash small"><?= $page->individuelsplashcta() ?>&nbsp;&nbsp;&RightArrow;</p>
    </a>
  </section>
</article>

<script>
  document.getElementById("playBtn").addEventListener("click", function(){
    var vid = document.getElementById('vid');
    vid.play();
});
  </script>

<article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach(page('team')->children()->listed()->limit(8)->shuffle() as $therapist): ?>
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

<?php if ($portrait = $page->teamsplashphoto()->toFile()): ?>
<article class="w-100 h-80 bg-blue">
  <a href="../team" title="Team" class="text-hover">
    <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-purple flex flex-wrap flex-sb">
      <div class="w-half m-w-third s-w-100 image-fill">
        <img src="<?= $portrait->url() ?>" class="m-c br-3 br-30">
      </div>
      <div class="w-third flex-end m-w-half s-w-100 s-mt-1">
      <p class="mono smaller uc pb-15 s-smallest">Team</p>
  <h5 class="subheadline va-x m-heading s-subheading"><?= $page->teamsplashheadline() ?></h5>
      <p class="body mb-1 s-small">
      <?= $page->teamsplashdescription()->widont() ?></p>
      <p class="dash mb-1 s-small"><?= $page->teamsplashcta() ?>&nbsp;&nbsp;&RightArrow;</p>
    </section>
  </a>
</article>
<?php endif ?>

<article class="w-100 pt-4 m-pt-2 bg-brown c-purple">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-50 s-w-100">
    <p class="mono smaller uc pb-15 s-smallest">Gruppeforløb</p>
  <h5 class="subheadline va-x m-heading s-subheading"><?= $page->gruppesplashheadline() ?></h5>
  </div>
  <div class="w-50 s-w-100 mt-40 m-mt-1 s-m-0">
  <p class="body s-small"><?= $page->gruppesplashdescription()->widont() ?></p>
  </div>
</div>
</article>
<article class="w-100 pb-4 pt-2 bg-brown c-purple">
  <section class="track flex">
    <?php foreach (page('grupper')->children()->listed()->shuffle() as $gruppe): ?>
      <?php if ($cover = $gruppe->cover()->toFile()): ?>
        <div class="w-third m-w-half bg-cc bg-c c-white flex br-3 br-30 ml-1 s-ml-15" style="background-image: url(<?= $cover->url() ?>)">
          <a href="<?= $gruppe->url() ?>" class="w-100 p-1 flex flex-wrap flex-sb s-pt-15 s-pb-15 s-pl-15 s-pr-15" title="<?= $gruppe->title() ?>">
            <h3 class="s-small"><span class="text-hover"><?= $gruppe->title() ?></span></h3>
            <div class="w-100 flex-end">
              <h3 class="c-white mono uc smaller ta-r s-smallest"><span class="blink">●</span>&nbsp;<?php if ($gruppe->dates()->isEmpty()): ?>
              Venteliste
              <?php else: ?>
              <?php foreach ($gruppe->dates()->toStructure()->limit(1) as $startdate): ?>
                <?= $startdate->introdate() ?>
              <?php endforeach ?>
              <?php endif ?></span>
              </h3>
            </div>
          </a>
        </div>
      <?php endif ?>
    <?php endforeach ?>
    <div class="w-third s-w-66 bg-cc bg-c c-white flex br-10 br-30 ml-1 mr-1 s-ml-15 bg-white c-purple">
          <a href="/grupper" class="w-100 pl-1 pr-1 pb-1 pt-15 flex flex-wrap flex-sb s-pt-15 s-pb-15 s-pl-15 s-pr-15" title="Gruppeforløb">
            <div class="w-100 flex-end">
              <h3 class="body s-small"><span class="dash"><?= $page->gruppesplashcta() ?>&nbsp;&nbsp;&RightArrow;</span></h3>
            </div>
          </a>
        </div>
  </section>
</article>

<?php if ($portrait = $page->kaerestesplashphoto()->toFile()): ?>
<article class="w-100 h-80 bg-purple bg-cc bg-c s-card-60" style="background-image: url(<?= $portrait->url() ?>);">
  <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pt-1 s-pb-2 c-white flex flex-wrap flex-sb">
    <div class="w-33 m-w-half flex-end s-w-100">
      <a href="/kaeresteterapi" title="Kæresteterapi">
      <p class="mono smaller uc pb-15 s-smallest">Kæresteterapi</p>
      <h5 class="subheadline va-x m-heading s-subheading"><?= $page->kaerestesplashheadline()->widont() ?></h5>
      <p class="body mb-1 s-small">
      <?= $page->kaerestesplashdescription()->widont() ?></p>
      <p class="dash s-small"><?= $page->kaerestesplashcta() ?>&nbsp;&nbsp;&RightArrow;</p>
    </a>
  </section>
</article>
<?php endif ?>

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

<script>
  $("video").prop('muted', true);

$(".mute-video").click(function () {
    if ($("video").prop('muted')) {
        $("video").prop('muted', false);
        $(this).addClass('unmute-video');

    } else {
        $("video").prop('muted', true);
        $(this).removeClass('unmute-video');
    }
    console.log($("video").prop('muted'))
});
</script>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>