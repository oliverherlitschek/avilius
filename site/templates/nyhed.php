<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="bg-lgrey">

<?php

if ($page->theme() == "baddfc") {
  $secondarycolor = '#eb2921';
} elseif ($page->theme() == "bbd663") {
  $secondarycolor = '#163c2d';
} elseif ($page->theme() == "c377e5") {
  $secondarycolor = '#e2ecfe';
} elseif ($page->theme() == "f0f1b4") {
  $secondarycolor = '#4200b0';
} else {
  $secondarycolor = '#933a26';
}
?>

<article class="w-100 h-66 s-card-33 p-1 s-pl-15 s-pr-15 s-pb-1 s-pt-2 pt-4 pb-2 flex flex-wrap flex-sb s-reverse" style="background-color:#<?= $page->theme() ?>;color: <?= $secondarycolor ?>;">

<?php if ($page->cover()->isNotEmpty()): ?>
    <div class="w-half flex-end s-w-100">
    <?php else: ?>
        <div class="w-full flex-end s-w-100">
      <?php endif ?>
    <h3 class="mono smaller reveal-2">Udgivet d.&nbsp;<?= $page->date()->toDate('%d/%m/%y') ?> af
      <?php if ($page->authorlink()->isNotEmpty()): ?>
        <a href="<?= $page->authorlink()->toPage()->url() ?>" target="_blank" class="underline"><?= $page->author() ?></a>
      <?php else: ?>
        <?= $page->author() ?>
      <?php endif ?></h3>
    <h1 class="subheadline thin m-heading s-body s-light reveal"><?= $page->title() ?></h1>
    <!-- for when we're ready to do content grouping:
    <div class="mt-15 reveal-2">
      <?php foreach ($page->tags()->split() as $tag): ?>
        <span class="tag-pill p-5 pl-10 pr-10 mt-15 mr-10 uc mono smallest" style="border: 1px solid <?= $secondarycolor ?>"><?= $tag ?></span>
      <?php endforeach ?>
    </div> -->
  </div>
  <?php if ($page->cover()->isNotEmpty()): ?>
    <div class="w-half s-w-full m-c flex-end pl-2 pr-2 pt-4 s-p-1 image-fill">
      <?php if ($cover = $page->cover()->toFile()): ?>
        <?php echo $cover->webp('m-c br-3 reveal-2', $cover->alt(), [1920, 1140, 640, 320]); ?>
      <?php endif ?>
  </div>
    <?php else: ?>
      <?php endif ?>
</article>

<article class="w-full m-c mt-4 mb-2 blog-content s-mt-2">
  <div class="w-full m-c reveal">
  	<?= $page->text()->toBlocks() ?>
  	<?php if ($page->references()->isNotEmpty()): ?>
  	<div class="w-50 m-c bt-lgrey mt-2 m-w-100">
	<p class="smaller mono uc mt-2 mb-15">Referencer</p>
	<ol>
		<?php foreach ($page->references()->toStructure() as $reference): ?>
			<a href="<?= $reference->url() ?>" title="<?= $reference->name() ?>">
				<li class="smaller c-grey mono ml-2">
					<?= $reference->name() ?>
				</li>
			</a>
		<?php endforeach ?>
	</ol>
</div>
<?php endif ?>
  </div>
</article>

<?php foreach ($page->siblings(false)->listed()->shuffle()->limit(1) as $post): ?>
<hr class="bg-black o-50 w-66 m-c m-w-full">
<article class="pt-4 pb-4 s-pt-2 s-pb-2">
  <section class="w-1400 m-c">
  <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="text-hover">
<div class="flex flex-sb va-c">  
  <div class="w-50 m-c reveal-2">
    <h4 class="mono smaller">
      Random artikel
    </h4>
    <h4 class="heading mb-15 s-small">
    <?= $post->title() ?>
  </h4>
    <h4 class="body light s-small">
    Læs mere&nbsp;<span class="dash">&RightArrow;</span></h4>
  </div>
  <?php if ($post->cover()->isNotEmpty()): ?>
    <div class="w-25 m-c image-fill reveal-2">
      <?php if ($cover = $post->cover()->toFile()): ?>
        <?php echo $cover->webp('m-c br-3 br-30 reveal-2', $cover->alt(), [1920, 1140, 640, 320]); ?>
      <?php endif ?>
    </div>
    <?php else: ?>
    <?php endif ?>
</div>
</a>
</section>
</article>
<?php endforeach ?>

<article class="w-100 bt-grey">
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