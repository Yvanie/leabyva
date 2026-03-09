<?php $logo = 'Public/logo_LeabYva-removebg-preview.png'; ?>
<!-- ═══════════ NAV ═══════════ -->
<nav id="nav">
  <a class="nav-logo" href="#" onclick="nav_go('home');return false">
    <img src="<?= $logo ?>" alt="Leabyva Digital Works">
  </a>
  <div class="nav-pills">
    <a class="npill on" data-p="home"  href="#" onclick="nav_go('home');return false"    data-fr="Accueil"      data-en="Home">Accueil</a>
    <a class="npill"    data-p="svc"   href="#" onclick="nav_go('svc');return false"     data-fr="Services"     data-en="Services">Services</a>
    <a class="npill"    data-p="about" href="#" onclick="nav_go('about');return false"   data-fr="À propos"     data-en="About">À propos</a>
    <a class="npill"    data-p="blog"  href="#" onclick="nav_go('blog');return false"    data-fr="Actualités"   data-en="News">Actualités</a>
    <a class="npill"    data-p="port"  href="#" onclick="nav_go('port');return false"    data-fr="Réalisations" data-en="Portfolio">Réalisations</a>
    <a class="npill"    data-p="cont"  href="#" onclick="nav_go('cont');return false"    data-fr="Contact"      data-en="Contact">Contact</a>
  </div>
  <div class="nav-end">
    <div class="lang-dropdown">
      <button class="lang-toggle" onclick="toggleLangDropdown()">
        <span id="current-lang">FR</span>
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="lang-menu" id="lang-menu">
        <button class="lbtn on" onclick="setLang('fr'); toggleLangDropdown()">FR - Français</button>
        <button class="lbtn"    onclick="setLang('en'); toggleLangDropdown()">EN - English</button>
      </div>
    </div>
    <button class="tbtn" onclick="toggleTheme()" id="tbtn" title="Toggle theme">
      <svg id="tico" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
    </button>
    <a class="ncta" href="#" onclick="nav_go('cont');return false" data-fr="Démarrer un projet" data-en="Start a project">Démarrer un projet</a>
  </div>
  <button class="hbg" id="hbg" onclick="toggleDrawer()">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile drawer -->
<div class="drawer" id="drawer">
  <a class="npill" href="#" onclick="nav_go('home');toggleDrawer();return false" data-fr="Accueil" data-en="Home">Accueil</a>
  <a class="npill" href="#" onclick="nav_go('svc');toggleDrawer();return false" data-fr="Services" data-en="Services">Services</a>
  <a class="npill" href="#" onclick="nav_go('about');toggleDrawer();return false" data-fr="À propos" data-en="About">À propos</a>
  <a class="npill" href="#" onclick="nav_go('blog');toggleDrawer();return false" data-fr="Actualités" data-en="News">Actualités</a>
  <a class="npill" href="#" onclick="nav_go('port');toggleDrawer();return false" data-fr="Réalisations" data-en="Portfolio">Réalisations</a>
  <a class="npill" href="#" onclick="nav_go('cont');toggleDrawer();return false" data-fr="Contact" data-en="Contact">Contact</a>
  <div class="lang-dropdown" style="margin-top:16px">
    <button class="lang-toggle" onclick="toggleLangDropdownMobile()">
      <span id="current-lang-mobile">FR</span>
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
    </button>
    <div class="lang-menu" id="lang-menu-mobile">
      <button class="lbtn on" onclick="setLang('fr'); toggleLangDropdownMobile(); toggleDrawer()">FR - Français</button>
      <button class="lbtn"    onclick="setLang('en'); toggleLangDropdownMobile(); toggleDrawer()">EN - English</button>
    </div>
  </div>
</div>
