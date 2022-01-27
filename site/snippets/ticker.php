<article class="ticker-wrap bg-lgreen body c-black">
<div class="ticker pt-10">
    <?php foreach ($site->quotes()->toStructure()->shuffle() as $quote): ?>
  <div class="ml-3 mt-15">
  <?= $quote->text()->smartypants() ?>
  </div>
<?php endforeach ?>
</div>
</article>