<?php snippet('header') ?>
<?php snippet('nav') ?>
<main class="bg-brown">
<article class="w-full m-c pt-2 reveal">
  <h2 class="headline-scale light">Har du brug for<br>nogen at tale med?</h2>
</article>

<article class="w-full mt-2 m-c flex flex-sb pb-3 s-flex-wrap s-mt-15 s-pb-2">
    <section class="w-half s-w-100 reveal-2">
      <a href="/grupper" title="Gruppeforløb">
        <div class="bg-brown w-100 br-30 br-10 bg-cc bg-c card-60 reveal-2" style="background-image: url(/media/Grupper-Avilius-Hero-Resized.jpg);">
        </div>
      <div class="w-100 mt-10">
        <h3 class="body regular flex flex-sb s-small"><span class="text-hover">Gruppeforløb</span><span>Fra 200,-</span></h3>
        <h3 class="body s-small">
        Livet er en holdsport. Sammen tackler vi de udfordringer, vi allesammen oplever — fra kærlighed og hjerteflimmer til præstationspres og&nbsp;retningsløshed.</h3>
      </div>
      <div class="sticker mono uc ta-c va-c m-c spin bg-lgreen c-black smallest">Nye<br>Forløb!</div>
      </a>
    </section>
    <section class="w-half s-w-100 s-mt-2 reveal-2">
      <a href="/individuelle-samtaler" title="Individuelle samtaler">
        <?php foreach (page('team')->children()->listed()->not('team/michelle-dait')->not('team/ragnhild-mohn')->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
        <div class="bg-brown w-100 br-30 br-10 card-80 bg-cc bg-c flex va-c s-card-110" style="background-image: url(<?= $portrait->resize(1500, null, 70)->url() ?>)">
          </div>
          <?php endif ?>
          <?php endforeach ?>
      <div class="w-100 mt-10">
        <h3 class="body regular flex flex-sb s-small"><span class="text-hover">Individuelle samtaler</span><span>Altid 399,-</span></h3>
        <h3 class="body s-small">
        Tal med en kommende psykolog om lige det, du har lyst til. Her får du kompetent hjælp til SU-venlige&nbsp;priser.</h3>
      </div>
      </a>
    </section>
</article>

<article class="w-100 m-c bg-white pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2">
  <div class="w-100 m-c as-c slideshow-testimonials reveal">
    <?php foreach ($site->testimonials()->toStructure() as $testimonial): ?>
    <div class="m-c as-c ta-c">
      <h3 class="subheading w-66 m-w-66 m-c lh-15 s-body">"<?= $testimonial->quote()->widont() ?>"</h3>
      <p class="smaller mono uc a-underline mt-1">
    &mdash;&nbsp;<?= $testimonial->author()->kirbytextinline() ?></p>
  </div>
  <?php endforeach ?>
</div>
</article>

<article class="w-100 pt-4 pb-4 bg-purple m-pt-2 m-pb-2">
<section class="w-full flex flex-sb m-c s-flex-wrap reveal">
    <section class="w-33 sticky s-w-100 s-no-stick">
        <div class="w-100">
        	<?php if ($portrait = $site->eventphoto()->toFile()): ?>
        	<img src="<?= $portrait->url() ?>" title="" class="w-100 br-3 m-c">
        	<?php endif ?>
        </div>
      </a>
    </section>
    <section class="w-66 ta-c c-white sticky s-no-stick s-w-100 s-mt-1">
    	<a href="/avilius-talks" title="Avilius Talks">
      	<p class="small m-smaller mono"><?= $site->eventdate()->toDate('%d/%m/%y') ?></p>
      	<h2 class="headline m-subheadline s-heading thin"><span class="light text-hover">Avilius Talks:</span><br><?= $site->guest() ?></h2>
      	<p class="body light mt-1 w-66 m-w-full m-c s-w-100 s-small"><?= $site->eventdescription()->kt() ?></p>
      	</a>
      	<?php if($site->toggle()->bool()): ?>
        <a href="<?= $site->eventlink() ?>" target="_blank" title="Find billetter på Billetto">
      	<button class="button btn m-c mt-2 bg-white ta-c mono small pl-1 pr-1 c-black">Find billetter</button>
        </a>
          <?php else : ?>
            <a href="<?= $site->eventlink() ?>" target="_blank" title="Lyt til podcast">
          <button class="button btn m-c mt-2 bg-white ta-c mono small pl-1 pr-1 c-black">🎙&nbsp;Lyt til podcast</button>
        </a>
      <?php endif ?>
    </section>
</section>
</article>

<article class="w-100 pt-4 m-pt-2">
	<div class="w-full m-c flex flex-sb s-flex-wrap reveal">
  <div class="w-50 s-w-100">
  <h3 class="subheadline light va-x s-subheading">Mød os</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body light s-small">Vi er 18 kommende psykologer med hver vores historier og kompetencer. <a href="/team" class="underline" title="Mød teamet">Kom og sig hej</a>.</p>
  </div>
</div>
</article>

<article class="w-100 pb-4 pt-2 m-pb-2 s-pt-1">
	<div class="w-100 room-slider pl-1 s-p-0 reveal">
	  	<?php foreach (page('team')->children()->listed()->shuffle() as $member): ?>
	  		<div class="room-slider-img mr-1 flex flex-wrap s-mr-15">
          <a href="<?= $member->url() ?>" title="<?= $portrait->title() ?>" class="text-hover">
	          <?php if ($portrait = $member->portrait()->toFile()): ?>
	          	<img src="<?= $portrait->resize(1000, null, 70)->url() ?>" class="br-10 br-30">
	          <?php endif ?>
	          <p class="body mt-10 ta-c s-mr-15 s-small"><span class="text-hover"><?= $member->firstname() ?></span></p>
          </a>
	    	</div>
	    <?php endforeach ?>
	</div>
</article>

<article class="w-100 bg-white va-c flex-wrap">
  <div class="w-33 mt-4 mb-4 m-w-66 s-w-full m-c s-mt-2 s-mb-2 reveal">
  <h4 class="body c-black regular ta-c mb-15 s-small">
    Er Avilius det rigtige for mig?
  </h4>
    <h4 class="body c-black light ta-c s-small">
    Vi sidder klar ved telefonerne til at svare på alle spørgsmål. Vælg en ledig tid nedenfor, så ringer vi til&nbsp;dig!</h4>
    <button class="call-button btn m-c mt-1 bg-lgreen ta-c mono small pl-1 pr-1 c-black">📞&nbsp;Se ledige tider</button>
  </div>
  <?php snippet('call') ?>
</article>

<article class="w-100 bg-lpurple flex flex-sb c-purple m-flex-wrap">
  <div class="p-1 m-w-full"><h4 class="ta-l body light a-underline"><span class="regular">Selvudvikling, updates og god stemning</span> ovre på&nbsp;<a href="https://www.instagram.com/avilius.dk" target="_blank" title="Avilius på Instagram">Instagram</a>.</h4></div>
  <div class="p-1 m-w-full"><h4 class="ta-l body light"><a href="https://www.instagram.com/avilius.dk" target="_blank" title="Avilius på Instagram">@avilius.dk&nbsp;&RightArrow;</a></h4></div>
</article>

<?php if($site->announcement()->isNotEmpty()): ?>
  <div class="announcement bg-lgreen smaller mono ta-c" style="display:block;position:fixed;bottom:0;left:0;width:100%;height:auto;min-height:40px;padding:15px;z-index:99999;"><p class="a-underline mono"><?= $site->announcement()->kirbytextinline() ?></p></div>
  <?php else: ?>
<?php endif ?>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>