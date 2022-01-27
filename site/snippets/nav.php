<nav>
    <h1 class="body ellipsis c-white exclusion nav-fix s-small reveal-fade ellipsis w-33">
      <a href="/" title="Avilius">Avilius</a><span class="s-remove ellipsis">
      <?php if($page->isHomePage()): ?>
      <?php elseif($page->isChildOf('blog')): ?>
          <a href="/blog" title="Blog"><span class="underline text-hover">&mdash;&nbsp;Blog</span></a>
      <?php elseif($page->is('avilius-talks')): ?>
          &mdash;&nbsp;Talks
          <?php else: ?>
     &mdash;&nbsp;<?= $page->title() ?>
      <?php endif ?></span>
    </h1>
    <div class="smaller uc mono c-white exclusion nav-fix-right w-66 ta-r s-remove reveal-fade">
      <a href="/individuelle-samtaler" title="Samtaleterapi" class="ml-1 s-ml-15"><span class="text-hover">Samtaleterapi</span></a>
      <a href="/grupper" title="Grupper" class="ml-1 s-ml-15"><span class="text-hover">Grupper</span></a>
      <a href="/hvorfor" title="Hvorfor?" class="ml-1 s-ml-15"><span class="text-hover">Hvorfor?</span></a>
      <a href="#" title="Skriv til os" class="ml-1 s-ml-15 book-button"><span class="blink c-white">●</span>&nbsp;<span class="text-hover">Skriv til os</span></a>
</div>
<div class="thin uc mono c-white exclusion mobile-nav mobile-menu-btn">
      <p><button class="text-hover smaller" style="">&#9776;</button></p>
</div>
<div class="mobile-expand bg-white flex flex-wrap flex-sb va-c">
    <div class="thin uc mono c-black mobile-nav mobile-menu-btn">
      <p><button class="text-hover small">&times;</button></p>
  </div>
  <div class="small body c-black w-100 p-15">
    <a href="/" title="Avilius">
    Avilius</a>
  </div>
  <div class="smaller uc mono c-black bt-lgrey w-100 p-15">
    <a href="../grupper" class="w-100 h-full" title="Grupper">
    Grupper</a>
  </div>
  <div class="smaller uc mono c-black bt-lgrey w-100 p-15">
    <a href="../individuelle-samtaler" class="w-100 h-full" title="Samtaleterapi">
    Samtaleterapi</a>
  </div>
  <div class="smaller uc mono c-black bt-lgrey w-100 p-15">
    <a href="../avilius-talks" class="w-100 h-full" title="Avilius Talks">
    Avilius Talks</a>
  </div>
  <div class="smaller uc mono c-black bt-lgrey w-100 p-15">
    <a href="../team" class="w-100 h-full" title="Team">
    Team</a>
  </div>
  <div class="smaller uc mono c-black bt-lgrey w-100 p-15">
    <a href="../hvorfor" class="w-100 h-full" title="Hvorfor?">
    Hvorfor?</a>
  </div>
  <div class="smaller uc mono c-black bt-lgrey w-100 p-15">
    <a href="../blog" class="w-100 h-full" title="Blog">
    Blog</a>
  </div>
  <div class="smaller uc book-button mobile-menu-btn mono c-purple bg-lpurple ta-c w-100 p-15" title="Skriv til os"><span class="m-c"><span class="blink c-purple">●</span>&nbsp;Skriv til os</span>
  </div>
</div>
</nav>