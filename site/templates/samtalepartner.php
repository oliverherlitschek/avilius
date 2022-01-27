<?php snippet('header') ?>
<?php snippet('nav') ?>
<main>
<article class="w-100 flex bg-brown h-66 s-team-hero">
  <div class="w-50 flex flex-wrap reveal">
  	<div class="w-full m-c s-pt-15 s-pl-15 s-pr-15">
    <h2 class="headline-scale pt-2 s-pt-15"><?= $page->firstname() ?></h2>
  </div>
   <div class="w-full m-c flex flex-end flex-sb mb-15 s-mb-15 s-pt-15 s-pl-15 s-pr-15">
      <h3 class="body light m-small s-smallest s-uc s-mono">
        Sidst booket:
        <?php foreach ($page->lastbooked() as $days): ?>
  <?php if ($days == 0): ?>
      I dag!
    <?php elseif ($days == 1): ?>
      1 dag siden
    <?php else: ?>
      <?= $page->lastbooked() ?> dage siden
    <?php endif ?>
<?php endforeach ?>
      </h3>
      <!-- <h3 class="body light m-small s-smallest s-uc s-mono"><span class="blink c-dgreen">●</span>&nbsp;
        <?php foreach ($page->capacity() as $spots): ?>
          <?php if ($spots == 0): ?>
            0 ledige forløb
          <?php elseif ($spots == 1): ?>
            1 ledigt forløb
          <?php else: ?>
            <?= $page->capacity() ?> ledige forløb
          <?php endif ?>
        <?php endforeach ?>
      </h3> -->
  </div>
  </div>
  <?php if ($page->video()->isNotEmpty()): ?>
    <div class="bg-brown w-50 video-portrait-container flex va-c">
      <p class="underline small mb-15 c-white" id="playbtn">Afspil</p>
      <div class="mute-video underline small mb-15 ta-r mr-15 c-white s-remove reveal-2"></div>
      <?php if ($film = $page->video()->toFile()): ?>
        <video class="video-portrait" id="vid" height="100%" autoplay loop>
          <source src="<?= $film->url() ?>" type="video/mp4">
        </video>
      <?php endif ?>
    </div>
    <?php else: ?>
    	<?php if ($portrait = $page->secondportrait()->toFile()): ?>
    		<div class="bg-brown pic-fallback w-50 flex va-c bg-cc bg-c" style="background-image: url(<?= $portrait->url() ?>);">
    		</div>
      	<?php endif ?>
    <?php endif ?>
</article>

<script>
  playbtn.onclick = e => {
  vid.play(); // grants full access to the video
  setTimeout(()=> vid.play().catch(console.error), 5000);
  }
  </script>

<article class="w-full m-c mt-4 mb-4 flex flex-sb m-mb-2 m-mt-2 s-flex-wrap s-mt-1">
  <div class="w-half sticky m-c image-fill m-w-33 m-m-0 s-w-100 s-no-stick s-flex-order-2 reveal">
      <?php if ($portrait = $page->portrait()->toFile()): ?>
        <img src="<?= $portrait->url() ?>" title="" class="m-c br-3 m-w-100">
      <?php endif ?>
  </div>
  <div class="w-half sticky m-w-66 s-no-stick s-w-100 s-mb-1 reveal">
      <div class="pl-1 pr-1 m-p-0 s-small">
        <?= $page->description()->kt()->nl2br()->widont() ?>
        <div class="mt-2">
          <p class="body mb-10"><?= $page->firstname() ?> har særlig erfaring med:</p>
        <?php foreach ($page->experience()->toStructure()->shuffle() as $entry): ?>
        <span class="smaller mono tag-pill p-5 pl-10 pr-10 bg-lgrey mb-10 mr-10"><?= $entry->headline() ?></span>
        <!-- <div class="tab tab-small bt-grey va-c pr-1">
          <h3 class="smaller mono"><?= $entry->headline() ?></h3>
        </div> -->
      <?php endforeach ?>
    </div>
    </div>
  </div>
</article>
<?php if ($page->testimonials()->isNotEmpty()): ?>
<article class="w-full m-c mb-4 flex flex-sb m-mb-2 s-flex-wrap s-mb-2 reveal">
  <div class="w-half m-c as-c slideshow-profile-testimonials m-w-66 s-w-100">
    <?php foreach ($page->testimonials()->toStructure() as $testimonial): ?>
    <div class="m-c as-c">
      <h3 class="subheading w-66 m-c m-w-100 s-body">"<?= $testimonial->quote()->widont() ?>"</h3>
    <p class="mono small w-66 m-c mt-1 m-w-100 s-mt-15 s-mb-2 s-smaller">&mdash;&nbsp;<?= $testimonial->author()->widont() ?></p>
  </div>
  <?php endforeach ?>
</div>
  <div class="w-half m-c image-fill m-w-33 s-w-100">
      <?php if ($portrait = $page->secondportrait()->toFile()): ?>
        <img src="<?= $portrait->url() ?>" title="" class="m-c br-3">
      <?php endif ?>
</article>
<?php endif ?>

<article class="w-100 card-60 p-1 bg-lpurple flex flex-sb flex-wrap s-pl-15 s-pr-15">
  <div class="w-50 reveal">
  <h3 class="subheadline c-purple light s-body">Hvad koster det?</h3>
  </div>
  <div class="w-50 reveal">
  <h3 class="subheadline c-purple light s-body ta-r">Kun 399,-</h3>
  </div>
  <div class="w-100 flex-end ta-r s-ta-l reveal">
  <h4 class="body w-100 c-purple light s-small">Og så er første samtale gratis. <a href="../hvorfor" target="_blank" class="underline">Læs hvorfor</a>.</h4>
  </div>
</article>

<article class="w-100 pt-4 bg-lgrey m-pt-2">
  <div class="w-full m-c flex flex-sb s-flex-wrap">
  <div class="w-50 s-w-100 reveal">
  <h3 class="subheadline light va-x s-subheading">Trygge rammer</h3>
  </div>
  <div class="w-50 s-w-100 reveal">
  <p class="body light s-small">Din samtale med <?= $page->firstname() ?> kommer til at foregå i vores hyggelige lokaler på Vesterbro – et fordomsfrit og hjemligt rum med højt til loftet, hvor det kun handler om dig.</p>
  </div>
</div>
</article>

<article class="w-100 pb-4 pt-2 bg-lgrey m-pb-2 s-pt-1">
  <div class="w-100 room-slider m-room-slider pl-1 s-pl-0 reveal">
    <?php foreach (page('hvorfor')->space()->toFiles() as $photo): ?>
    <div class="room-slider-img m-room-slider-img mr-1 s-mr-15">
      <img src="<?= $photo->url() ?>" class="br-3">
    </div>
  <?php endforeach ?>
</div>
</article>

<article class="w-100 bg-brown va-c flex flex-wrap">
  <div class="w-66 mt-4 mb-4 s-m-1 s-w-100 reveal">
  <h4 class="body regular ta-c mb-15 s-small">
    Interesseret i at tale med <?= $page->firstname() ?>?
  </h4>
    <h4 class="body light ta-c s-small">
    Vi vender tilbage  inden for et par&nbsp;dage.</h4>
    <button class="book-button btn m-c mt-1 bg-lgreen ta-c mono small pl-1 pr-1">✏️ Skriv til os</button>
  </div>
  <p class="smaller flex-end mb-1 ta-c w-100">Er du i tvivl? Vi kan også <span class="underline call-button">ringe dig op</span>.</p>
  <?php snippet('call') ?>
</article>

<article class="w-full m-c mt-4 mb-4 flex flex-sb va-c s-mb-2 s-mt-2 m-two-up">
  <?php foreach ($page->siblings(false)->listed()->shuffle()->limit(2) as $therapist): ?>
  <div class="w-33 m-c image-fill reveal">
      <a href="<?= $therapist->url() ?>" title="<?= $therapist->title() ?>" class="text-hover">
          <?php if ($portrait = $therapist->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-10 br-30">
          <?php endif ?>
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover"><?= $therapist->firstname() ?></span></h3>
      </a>
  </div>
  <?php endforeach ?>
</article>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('price-ticker') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>

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