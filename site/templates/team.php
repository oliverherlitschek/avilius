<?php snippet('header') ?>
<?php snippet('nav') ?>
<main class="mt-2">
<article class="w-100 flex">
  <div class="flex flex-wrap ai-s team-wrapper">
    <div class="w-100 c-black p-1 s-small s-pl-15 s-pr-15 reveal" style="order: -1;">
        <?= $page->description()->kt()->nl2br()->widont() ?>
    </div>
    <?php foreach ($page->children()->listed()->shuffle() as $member): ?>
      <?php if ($portrait = $member->portrait()->toFile()): ?>
        <div class="w-50 bg-cc bg-c c-white flex team-member" style="background-image: url(<?= $portrait->url() ?>)">
          <a href="<?= $member->url() ?>" class="w-100 pl-1 pr-1 pb-1 pt-15 flex flex-wrap flex-sb s-pt-15 s-pb-15 s-pl-15 s-pr-15 reveal" title="<?= $member->title() ?>">
            <h3 class="heading light s-body"><?= $member->firstname() ?></h3>
            <!-- <div class="w-100 flex-end reveal-2">
              <h4 class="subheading light ta-r s-smallest s-mono s-uc">
                <?php foreach ($member->capacity() as $spots): ?>
                  <?php if ($spots == 0): ?>
                    0 ledige forløb
                  <?php elseif ($spots == 1): ?>
                    <span class="blink c-green">●</span>&nbsp;1 ledigt forløb
                  <?php else: ?>
                    <?= $member->capacity() ?> ledige forløb
                  <?php endif ?>
                <?php endforeach ?>
              </h4>
            </div> -->
          </a>
        </div>
      <?php endif ?>
    <?php endforeach ?>
</article>

<article class="w-100 bg-brown va-c">
  <div class="w-33 mt-4 mb-4 m-w-66 s-w-full s-mt-2 s-mb-2 reveal">
  <h4 class="body c-black regular ta-c mb-15 s-small">
    Svært at vælge?
  </h4>
    <h4 class="body c-black light ta-c s-small">
    Det forstår vi godt. Skriv til os, så finder vi ud af, hvem der passer bedst til dig.</h4>
    <a href="#" class="book-button">
    <button class="btn m-c mt-1 bg-lgreen ta-c mono small pl-1 pr-1 c-black">✏️ Skriv til os</button></a>
  </div>
</article>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>