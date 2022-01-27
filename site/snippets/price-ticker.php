<article class="price-ticker bg-lgreen body s-small c-black flex va-c bt-lgrey">
	<div class="pt-10 flex h-60 w-full va-c m-c">
	    <?php if($page->is('individuelle-samtaler')): ?>
	    	<p class="w-50">Individuel samtale:</p>
	    	<p class="w-50 ta-r">399,- <span class="mono smaller s-smallest s-remove">inkl. gratis forsamtale</span></p>
	    <?php elseif($page->isChildOf('team')): ?>
	    	<p class="w-50">Individuel samtale<span class="s-remove"> m. <?php if ($name = $page->firstname()): ?><?= $name->kirbytextinline() ?><?php endif ?></span>:</p>
	    	<p class="w-50 ta-r">399,- <span class="mono smaller s-smallest s-remove">inkl. gratis forsamtale</span></p>
	    <?php elseif($page->is('grupper')): ?>
	    	<p class="w-50">Gruppeforløb:</p>
	    	<p class="w-50 ta-r"><span class="mono smaller s-smallest">Fra</span> 200,- <span class="mono smaller s-smallest">per gang</span></p>
	    <?php elseif($page->isChildOf('grupper')): ?>
	    	<p class="w-50"><?= $page->length() ?>:</p>
	    	<p class="w-50 ta-r"><?= $page->price() ?>,-</p>
	    <?php endif ?>
	</div>
</article>