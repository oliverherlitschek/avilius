<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('price-ticker') ?>
<main>
<article class="w-100">
  <div class="slideshow-hero reveal">
    <div class="w-100">
      <div class="flex w-100 va-c card-80">
        <h2 class="headline-scale ta-c light w-66 as-c">Stresset?</h2>
      </div>
    </div>
    <div class="w-100">
      <div class="flex w-100 va-c card-80">
        <h2 class="headline-scale ta-c light w-66 as-c">Ondt i hjertet?</h2>
      </div>
    </div>
    <div class="w-100">
      <div class="flex w-100 va-c card-80">
        <h2 class="headline-scale ta-c light w-66 as-c">Bekymret?</h2>
      </div>
    </div>
    <div class="w-100">
      <div class="flex w-100 va-c card-80">
        <h2 class="headline-scale ta-c light w-66 as-c">Tankemylder?</h2>
      </div>
    </div>
  </div>
</article>

<article class="w-100 pt-4 pb-4 bg-brown m-pt-3 m-pb-3 s-pt-2 s-pb-4">
  <section class="w-full m-c flex flex-sb s-flex-wrap">
  <section class="w-half s-w-100">
    <h3 class="subheadline c-black light va-x s-body reveal">Vi vil gerne hjælpe. Sådan kommer du i&nbsp;gang:</h3>
    <div class="bb-black mt-2 s-m-0 reveal">
  <input type="checkbox" id="accordion-one" hidden />
  <div class="accordion ac-large s-ac-medium reveal">
    <label for="accordion-one" class="tab tab-large s-tab-medium bt-black va-c pl-1 pr-1 m-p-0">
      <h3 class="body tab-button s-small"><span class="mr-1 m-m-0">1.</span> Vi taler sammen og finder din første tid</h3>
    </label>
    <div class="pl-1 pr-1 pb-2 m-pl-15 m-pr-15 m-pb-1">
      <p class="s-small">Skriv til os via <a href="" class="book-button" title="Skriv til os">formularen</a>. Så vender vi tilbage indenfor et par dage med nogle tider, der passer dig. Måske har du på forhånd gjort dig tanker om, hvem du gerne vil snakke med – hvis ikke, kan vi hjælpe dig med at finde et godt match. Lær os bedre at kende <a href="../team" class="underline" title="Team" target="_blank">her</a>.</p>
    </div>
    </div>
    <input type="checkbox" id="accordion-one" hidden />
  <div class="accordion ac-large s-ac-medium reveal">
    <label for="accordion-one" class="tab tab-large s-tab-medium bt-black va-c pl-1 pr-1 m-p-0">
      <h3 class="body tab-button s-small"><span class="mr-1 m-m-0">2.</span> Vi mødes til din <span class="regular">gratis</span> forsamtale</h3>
    </label>
    <div class="pl-1 pr-1 pb-2 m-pl-15 m-pr-15 m-pb-1">
      <p class="s-small">Vi lærer hinanden at kende og sporer os ind på, hvad du har lyst til at bruge forløbet til og hvad din målsætning er. Det kan være, at du allerede ved det – og hvis ikke, finder vi ud af det sammen.<br><br>Forsamtalen varer én time og foregår i vores lokale på <a href="https://goo.gl/maps/p1CovkiFJoBvUKZJ6"  class="underline" title="Avilius på Google Maps" target="_blank">Vesterbrogade 35</a>. Bor du ikke i byen, tilbyder vi også onlineforløb. 
      </p>
    </div>
    </div>
    <input type="checkbox" id="accordion-one" hidden />
  <div class="accordion ac-large s-ac-medium reveal">
    <label for="accordion-one" class="tab tab-large s-tab-medium bt-black va-c pl-1 pr-1 m-p-0">
      <h3 class="body tab-button s-small"><span class="mr-1 m-m-0">3.</span> Vi aftaler, hvordan dit forløb skal se ud</h3>
    </label>
    <div class="pl-1 pr-1 pb-2 m-pl-15 m-pr-15 m-pb-1">
      <p class="s-small">Sammen aftaler vi dit videre forløb, så det passer til dig og din hverdag. Vi hjælper dig med at nå din målsætning — om det er ugentligt, månedligt eller ved behov er helt op til dig.<br><br>Vi glæder os til at møde dig!</p>
    </div>
    </div>
</div>
  </section>

  <section class="w-half sticky m-c image-fill s-w-100 s-pt-1">
        <div class="slideshow-profile-testimonials w-66 m-c s-w-100 reveal">
        <?php foreach (page('team')->children()->listed()->shuffle() as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
          <div class="m-c as-c">
            <a href="/team" title="Mød teamet">
            <img src="<?= $portrait->url() ?>" title="Mød os" class="m-c br-10 br-30">
            <h3 class="body ta-c mt-10"><span class="text-hover">Mød holdet</span><span class="small dash">&nbsp;&RightArrow;</span></h3>
            </a>
          </div>
           <?php endif ?>
          <?php endforeach ?>
        </div>
  </section>
</section>
</article>

<article class="w-100 m-c bg-white pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2">
  <div class="w-100 m-c as-c slideshow-testimonials reveal">
    <?php foreach ($page->testimonials()->toStructure() as $testimonial): ?>
    <div class="m-c as-c ta-c">
      <h3 class="subheading w-66 m-c lh-15 s-body s-w-full">"<?= $testimonial->quote()->widont() ?>"</h3>
      <p class="smaller mono uc a-underline mt-1 s-w-100">
    &mdash;&nbsp;<?= $testimonial->author()->kirbytextinline() ?></p>
  </div>
  <?php endforeach ?>
</div>
</article>

<article class="w-full mt-2 m-c flex flex-sb pb-3 s-flex-wrap s-mt-1">
    <section class="w-33 s-w-100 s-mb-1 reveal">
      <a href="../hvorfor" title="Hvorfor?">
        <div class="bg-purple w-100 br-30 br-10 bg-cc bg-c card-60 m-card-33 s-card-60" style="background-image: url(/media/Avilius-Space-1.jpg);">
        </div>
      <div class="w-100 mt-10">
        <h3 class="body regular s-small"><span class="text-hover">Hvorfor?</span></h3>
        <h3 class="body s-small">
        Vores generation trives ikke — og i Avilius prøver vi at finde ud af&nbsp;hvorfor.</h3>
      </div>
      </a>
    </section>
    <section class="w-66 s-w-100 reveal">
      <a href="/team" title="Team">
        <?php foreach (page('team')->children()->listed()->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->secondportrait()->toFile()): ?>
        <div class="bg-purple w-100 br-30 br-10 card-80 bg-cc bg-c flex va-c m-card-60 s-card-80" style="background-image: url(<?= $portrait->url() ?>)">
          </div>
          <?php endif ?>
          <?php endforeach ?>
      <div class="w-100 mt-10">
        <h3 class="body regular s-small"><span class="text-hover">Teamet</span></h3>
        <h3 class="body s-small">
        Vi er 18 kommende psykologer med hver vores historie og kompetencer. Kom og sig&nbsp;hej!</h3>
      </div>
      </a>
    </section>
</article>

<article class="w-100 bg-purple va-c flex-wrap">
  <div class="w-33 mt-4 mb-4 m-w-66 s-w-full s-mt-2 s-mb-2 reveal">
  <h4 class="body c-white regular ta-c mb-15 s-small">
    Er Avilius det rigtige for&nbsp;mig?
  </h4>
    <h4 class="body c-white light ta-c s-small">
    Vi sidder klar ved telefonerne til at svare på alle spørgsmål. Vælg en ledig tid nedenfor, så ringer vi til&nbsp;dig!</h4>
    <button class="call-button btn m-c mt-2 bg-lpurple ta-c mono small pl-1 pr-1 c-black">📞&nbsp;Se ledige tider</button>
  </div>
  <?php snippet('call') ?>
</article>

<article class="w-100 pt-4 bg-lgrey m-pt-2">
  <div class="w-full m-c flex flex-sb s-flex-wrap reveal">
  <div class="w-50 s-w-100">
  <h3 class="subheadline light va-x s-subheading">Trygge rammer</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body light s-small">Trivsel behøver ikke at foregå på en briks. Hos Avilius er du ikke patient, men menneske. Vores lejlighed på Vesterbro er lys, hjemlig og rummelig. Sådan arbejder vi bedst.</p>
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

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>