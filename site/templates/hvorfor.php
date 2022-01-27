<?php snippet('header') ?>
<?php snippet('nav') ?>
<main>
<article class="w-100 bg-black">
  <div class="w-66 m-c p-4 m-w-full s-w-100 s-pl-1 s-pr-1">
  <h2 class="subheading c-white light s-body reveal">
    Fordi vores generation ikke trives. Unges mentale sundhed er dalende — så vi har taget sagen i egen hånd.<br><br>For fremtidens skyld.
  </h2>
  </div>
</article>

<article class="w-100 pt-2 bg-lgrey pb-2 p-1 flex flex-sb s-flex-wrap">
  <div class="w-33 s-w-100 reveal">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Hvorfor Avilius?</h3>
  </div>
  <div class="w-66 s-w-100 reveal">
  <p class="body light c-purple mb-1 s-small">Alt for mange unge ender i et limbo, når det handler om deres mentale sundhed. De har ikke råd til at opsøge hjælp udenom det offentlige sundhedssystem – men er heller ikke behandlingskrævende nok til at få hjælp hos lægen. Og så er de bange for at snakke om deres problemer, fordi det er tabubelagt at have rod i sindet og ondt i sjælen. Det gør vi op med i Avilius.</p>
  <div class="tab tab-medium bb-black flex flex-sb va-c">
    <div class="w-50 body">Fordi:</div><div class="w-50 body">Avilius tilbyder:</div>
  </div>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Privat terapi er for dyrt</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">SU-venlige priser</div>
  </div>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Mangel på relevant perspektiv</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Ung-til-ung rådgivning</div>
  </div>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Overdreven fokus på lidelser</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Naturlig, kontinuerlig selvudvikling</div>
  </div>

  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Systemet hjælper for sent</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Tid og råd til at tage tingene i opløbet</div>
  </div>
  </div>
</article>

<article class="w-100 pt-2 pb-2 p-1 flex flex-sb flex-wrap">
  <div class="w-50 m-w-33 s-w-100 reveal">
  <h3 class="subheadline light va-x s-subheading">Vores metoder</h3>
  </div>
  <div class="w-50 mb-4 m-w-66 m-mb-2 s-w-100 reveal">
  <p class="body light s-small">Menneskehjernen er et komplekst væsen. At løse og udforske personlige problematikker kræver næsten altid en unik metode. Alligevel møder vi i vores generation mange af de samme udfordringer. Vi har fundet frem til fem fremgangsmåder, der virker i kampen mod&nbsp;mistrivsel:</p>
  </div>
  <?php foreach ($page->values()->toStructure() as $value): ?>
  <div class="tab-largest flex flex-sb w-100 va-c bb-black s-flex-wrap reveal">
    <h3 class="subheading w-33 s-w-100 s-pt-15"><?= $value->valuename() ?></h3>
    <p class="small w-66 m-pt-1 m-pb-1 s-w-100 s-pt-15"><?= $value->valuedescription()->widont() ?></p>
  </div>
  <?php endforeach ?>
</article>

<article class="w-100 pt-2">
	<div class="w-full m-c flex flex-sb s-flex-wrap">
  <div class="w-50 s-w-100 reveal">
  <h3 class="subheadline light va-x s-subheading">Trygge rammer</h3>
  </div>
  <div class="w-50 s-w-100 reveal">
  <p class="body light s-small">Trivsel behøver ikke at foregå på en briks. Hos Avilius er du ikke patient, men menneske. Vores lejlighed på Vesterbro er lys, hjemlig og rummelig. Sådan arbejder vi bedst.</p>
  </div>
</div>
</article>

<article class="w-100 pb-2 pt-2 bg-white m-pb-2 s-pt-1 reveal">
  <div class="w-100 room-slider m-room-slider pl-1 s-pl-0">
    <?php foreach (page('hvorfor')->space()->toFiles() as $photo): ?>
    <div class="room-slider-img m-room-slider-img mr-1 s-mr-15">
      <img src="<?= $photo->url() ?>" class="br-3">
    </div>
  <?php endforeach ?>
</div>
</article>

<article class="w-100 pt-4 pb-4 m-c bg-brown m-pt-2 m-pb-2">
	<section class="w-full m-c">
        <h3 class="subheadline s-subheading">Hvem står bag?</h3>
    </section>
    <div class="w-full m-c flex flex-sb flex-wrap">
    <?php foreach ($page->children()->limit(7)->shuffle() as $staff): ?>
    <section class="w-33 mt-2 s-mt-1 s-w-half reveal">
        <a href="<?= $staff->url() ?>" title="<?= $staff->title() ?>">
        <div class="bg-purple br-30 br-10 bg-cc bg-c card-80 m-card-60" style="background-image: url(<?= $staff->image()->url() ?>);"> 
        </div>
      <div>
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover"><?= $staff->firstname() ?></span></h3>
      </div>
      </a>
    </section>
    <?php endforeach ?>
    <?php foreach ($page->children()->offset(7)->limit(1) as $staff): ?>
    <section class="w-66 mt-2 s-mt-1 s-w-half reveal-fade">
        <a href="<?= $staff->url() ?>" title="<?= $staff->title() ?>">
        <div class="bg-purple br-30 br-10 bg-cc bg-c card-80 m-card-60" style="background-image: url(<?= $staff->image()->url() ?>);"> 
        </div>
      <div>
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover"><?= $staff->firstname() ?></span></h3>
      </div>
      </a>
    </section>
    <?php endforeach ?>
</div>
</article>

<article class="w-100 m-c pt-4 pb-1 p-1 flex flex-sb bg-black m-pt-2 s-flex-wrap">
    <section class="w-50 sticky s-no-stick s-w-100">
        <h3 class="subheadline c-white va-x s-subheading">Advisory Board</h3>
    </section>
    <section class="w-50 s-w-100">
      <div class="bb-white">
      <?php foreach ($page->boardmembers()->toStructure()->shuffle() as $boardmember): ?>
      <input type="checkbox" id="<?= $boardmember->boardmembername()->slug() ?>" hidden />
      <div class="accordion ac-large">
    <label for="<?= $boardmember->boardmembername()->slug() ?>" class="tab tab-large bt-white va-c">
      <h3 class="c-white body tab-button s-small">
        <?= $boardmember->boardmembername() ?>
      </h3>
    </label>
      <div class="c-white pl-1 pr-1 pb-1 s-small s-pl-0 s-pr-0">
        <?= $boardmember->boardmemberdescription()->kirbytext() ?>
      </div>
    </div>
    <?php endforeach ?>
    </div>
    </section>
</article>

<article class="w-100 pt-2 pb-1 bg-black p-1 flex flex-sb s-flex-wrap">
  <div class="w-50 sticky s-no-stick s-w-100">
  <h3 class="subheadline c-white light va-x s-subheading">Etik&nbsp;og henvisning</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body c-white light s-small">Vi er en gruppe af studerende — ikke psykologer. Derfor kender vi vigtigheden af at kunne identificere, når en klients problematik er for alvorlig for vores kompetencer.<br><br>Ugentlig supervision med Faezeh Zand, autoriseret psykolog og post-doc. ved Institut for Psykologi på Københavns Universitet, sikrer at alle cases bliver behandlet forsvarligt — eller henvist til psykiater, psykolog eller læge efter behov.</p>
  </div>
</article>

<article class="w-100 pt-2 pb-1 bg-black p-1 flex flex-sb s-flex-wrap">
  <div class="w-50 sticky s-no-stick s-w-100">
  <h3 class="subheadline c-white light va-x s-subheading">Finansiering</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body c-white light s-small">Avilius startede i august 2019 som et selvfinansieret projekt, supporteret af et par SU-lån til at betale regningerne. I maj 2020 vandt vi 25.000 kr. til en fundraising-konkurrence supporteret af <a href="https://www.tuborgfondet.dk/" title="Tuborgfondet" target="_blank" class="underline">Tuborgfondet</a>.<br><br>I dag har virksomheden en sund økonomi, der er dedikeret til at udvikle Avilius til gavn for unges mentale trivsel :)</p>
  </div>
</article>

<article class="w-100 pt-2 pb-1 bg-black p-1 flex flex-sb s-flex-wrap">
  <div class="w-50 sticky s-no-stick s-w-100">
  <h3 class="heading c-white light va-x s-subheading">Tak</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="small mono c-white light s-smaller"><?= $page->thankyou() ?></p>
  </div>
</article>

<article class="bg-black">
<article class="w-full m-c pt-4 pb-4 flex flex-sb va-c bg-black m-two-up m-pt-2 m-pb-2">
  <div class="w-33 m-c image-fill reveal">
    <a href="../individuelle-samtaler" title="Individuelle samtaler" class="text-hover">
      <?php foreach (page('team')->children()->listed()->not('team/michelle-dait')->not('team/ragnhild-mohn')->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-10 br-30">
          <?php endif ?>
      <?php endforeach ?>
        <h3 class="body c-white ta-c mt-10 s-small"><span class="text-hover">Individuelle samtaler</span></h3>
      </a>
  </div>

  <div class="w-33 m-c image-fill reveal">
    <a href="../grupper" title="Gruppeforløb" class="text-hover">
            <img src="<?= image('grupper/Grupper-Avilius-Hero-Resized.jpg')->url() ?>" class="br-10 br-30">
        <h3 class="body c-white ta-c mt-10 s-small"><span class="text-hover">Gruppeforløb</span></h3>
      </a>
  </div>
</article>
</article>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>