<?php
$logo  = 'Public/logo_LeabYva-removebg-preview.png';
$proj1 = 'Public/projet1.png';
$proj2 = 'Public/projet2.png';
$proj3 = 'Public/projet3.png';
?>

<div class="port-hd">
  <div class="chip" data-fr="Nos réalisations" data-en="Our work">Nos réalisations</div>
  <h1><em data-fr="Portfolio" data-en="Portfolio">Portfolio</em><br><span data-fr="&amp; Projets" data-en="&amp; Projects">&amp; Projets</span></h1>
  <p data-fr="150+ projets livrés pour des startups, PME et grandes entreprises en Afrique et en Europe." data-en="150+ projects delivered for startups, SMEs and large companies in Africa and Europe.">150+ projets livrés pour des startups, PME et grandes entreprises en Afrique et en Europe.</p>
</div>

<div class="pf-bar" id="pfbar">
  <button class="pfb on" onclick="pfFilter('all',this)" data-fr="Tous" data-en="All">Tous</button>
  <button class="pfb" onclick="pfFilter('web',this)" data-fr="Web &amp; Mobile" data-en="Web &amp; Mobile">Web &amp; Mobile</button>
  <button class="pfb" onclick="pfFilter('design',this)" data-fr="UI/UX Design" data-en="UI/UX Design">UI/UX Design</button>
  <button class="pfb" onclick="pfFilter('mkt',this)" data-fr="Marketing" data-en="Marketing">Marketing</button>
  <button class="pfb" onclick="pfFilter('ai',this)" data-fr="IA &amp; Data" data-en="AI &amp; Data">IA &amp; Data</button>
</div>

<div class="pj-masonry" id="pjgrid">
  <div class="pjc rv" data-cat="web">
    <div class="pjc-img"><img src="<?= $proj1 ?>" alt="AfriPay"></div>
    <div class="pjc-info"><div class="pjc-cat" data-fr="Web · Fintech" data-en="Web · Fintech">Web · Fintech</div><h3>AfriPay</h3><p data-fr="Plateforme de paiement mobile panafricaine. Architecture microservices. 2M+ transactions/mois." data-en="Pan-African mobile payment platform. Microservices architecture. 2M+ transactions/month.">Plateforme de paiement mobile panafricaine. Architecture microservices. 2M+ transactions/mois.</p><div class="pjc-ft"><div class="pjc-tags"><span class="pjc-tag">Next.js</span><span class="pjc-tag">Node.js</span><span class="pjc-tag">AWS</span></div><span class="pjc-yr">2024</span></div></div>
    <div class="pj-overlay">
            <a class="pj-overlay-btn" href="#single-port" onclick="nav_go('single-port');return false">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/></svg>
            </a>
          </div>
    <a href="#single-port" onclick="nav_go('single-port');return false" class="pjc-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>

  <div class="pjc rv" style="transition-delay:.08s" data-cat="design">
    <div class="pjc-img"><img src="<?= $proj2 ?>" alt="MediConnect"></div>
    <div class="pjc-info"><div class="pjc-cat" data-fr="UI/UX · Santé" data-en="UI/UX · Health">UI/UX · Santé</div><h3>MediConnect</h3><p data-fr="Application de téléconsultation. Design centré patient, WCAG AA. Note App Store : 4.8★" data-en="Teleconsultation application. Patient-centered design, WCAG AA. App Store rating: 4.8★">App de téléconsultation. Design centré patient. Note App Store : 4.8★</p><div class="pjc-ft"><div class="pjc-tags"><span class="pjc-tag">Flutter</span><span class="pjc-tag">Figma</span></div><span class="pjc-yr">2024</span></div></div>
    <a href="#single-port" onclick="nav_go('single-port');return false" class="pjc-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>

  <div class="pjc rv" style="transition-delay:.16s" data-cat="mkt">
    <div class="pjc-img"><img src="<?= $proj3 ?>" alt="GreenFarm CI"></div>
    <div class="pjc-info"><div class="pjc-cat" data-fr="Marketing · AgriTech" data-en="Marketing · AgriTech">Marketing · AgriTech</div><h3>GreenFarm CI</h3><p data-fr="+380% trafic organique en 6 mois. Stratégie SEO + social ads pour startup AgriTech." data-en="+380% organic traffic in 6 months. SEO + social ads strategy for AgriTech startup.">+380% trafic organique en 6 mois. Stratégie SEO + social ads.</p><div class="pjc-ft"><div class="pjc-tags"><span class="pjc-tag">SEO</span><span class="pjc-tag">Social Ads</span></div><span class="pjc-yr">2023</span></div></div>
    <a href="#single-port" onclick="nav_go('single-port');return false" class="pjc-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>

  <div class="pjc rv" style="transition-delay:.24s" data-cat="ai">
    <div class="pjc-img"><img src="<?= $proj2 ?>" alt="LogistIQ"></div>
    <div class="pjc-info"><div class="pjc-cat" data-fr="IA · Logistique" data-en="AI · Logistics">IA · Logistique</div><h3>LogistIQ</h3><p data-fr="Optimisation logistique IA pour transporteur panafricain. -35% de coûts opérationnels." data-en="AI logistics optimization for a pan-African carrier. -35% operating costs.">Optimisation logistique IA. -35% de coûts opérationnels.</p><div class="pjc-ft"><div class="pjc-tags"><span class="pjc-tag">Python</span><span class="pjc-tag">TensorFlow</span></div><span class="pjc-yr">2023</span></div></div>
    <a href="#single-port" onclick="nav_go('single-port');return false" class="pjc-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>

  <div class="pjc rv" style="transition-delay:.32s" data-cat="web">
    <div class="pjc-img"><img src="<?= $proj1 ?>" alt="EduConnect Africa"></div>
    <div class="pjc-info"><div class="pjc-cat" data-fr="Web · EdTech" data-en="Web · EdTech">Web · EdTech</div><h3>EduConnect Africa</h3><p data-fr="Plateforme e-learning pour 8 pays africains. 50K étudiants actifs, 1 200 cours." data-en="E-learning platform for 8 African countries. 50K active students, 1,200 courses.">E-learning pour 8 pays africains. 50K étudiants actifs.</p><div class="pjc-ft"><div class="pjc-tags"><span class="pjc-tag">React</span><span class="pjc-tag">PostgreSQL</span></div><span class="pjc-yr">2023</span></div></div>
    <a href="#single-port" onclick="nav_go('single-port');return false" class="pjc-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>

  <div class="pjc rv" style="transition-delay:.40s" data-cat="design">
    <div class="pjc-img"><img src="<?= $proj3 ?>" alt="WaveBank"></div>
    <div class="pjc-info"><div class="pjc-cat" data-fr="UI/UX · Néobanque" data-en="UI/UX · Neobank">UI/UX · Néobanque</div><h3>WaveBank</h3><p data-fr="Refonte UX néobanque. App Store 3.1 → 4.8 ★. Rétention utilisateurs +112%." data-en="Neobank UX overhaul. App Store 3.1 → 4.8 ★. User retention +112%.">Refonte UX néobanque. App Store 3.1 → 4.8★. Rétention +112%.</p><div class="pjc-ft"><div class="pjc-tags"><span class="pjc-tag">Figma</span><span class="pjc-tag">UX Research</span></div><span class="pjc-yr">2022</span></div></div>
    <a href="#single-port" onclick="nav_go('single-port');return false" class="pjc-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</div>

<!-- Logo wall -->
<div class="logo-wall rv">
  <p class="lw-title" data-fr="ILS NOUS FONT CONFIANCE" data-en="THEY TRUST US">ILS NOUS FONT CONFIANCE</p>
  <div class="lw-grid">
    <div class="lw-cell"><span class="lw-name">AfriPay</span></div>
    <div class="lw-cell"><span class="lw-name">MediConnect</span></div>
    <div class="lw-cell"><span class="lw-name">GreenFarm CI</span></div>
    <div class="lw-cell"><span class="lw-name">LogistIQ</span></div>
    <div class="lw-cell"><span class="lw-name">EduConnect</span></div>
    <div class="lw-cell"><span class="lw-name">WaveBank</span></div>
    <div class="lw-cell"><span class="lw-name">SolarTech</span></div>
    <div class="lw-cell"><span class="lw-name">ImmoPro CI</span></div>
    <div class="lw-cell"><span class="lw-name">DriveCI</span></div>
    <div class="lw-cell"><span class="lw-name">FoodXpress</span></div>
    <div class="lw-cell"><span class="lw-name">TravelAfrica</span></div>
    <div class="lw-cell"><span class="lw-name">HealthKe</span></div>
  </div>
</div>

<div class="cta-band" style="border-top:1px solid var(--line)">
  <h2 data-fr="Votre projet sera le prochain ?" data-en="Will your project be next?">Votre projet sera le prochain ?</h2>
  <div class="cta-right"><p data-fr="Rejoignez 150+ clients satisfaits en Afrique et en Europe." data-en="Join 150+ satisfied clients in Africa and Europe.">Rejoignez 150+ clients satisfaits en Afrique et en Europe.</p>
  <a class="btn-c" href="#" onclick="nav_go('cont');return false" data-fr="Démarrer mon projet →" data-en="Start my project →">Démarrer mon projet →</a></div>
</div>

<footer>
  <div class="ft">
    <div class="ft-brand"><div class="fl"><img src="<?= $logo ?>" alt="Leabyva"></div><p data-fr="Votre partenaire pour une transformation digitale réussie." data-en="Your partner for a successful digital transformation.">Votre partenaire pour une transformation digitale réussie.</p><div class="ft-socs"><a class="ft-soc">in</a><a class="ft-soc">𝕏</a><a class="ft-soc">ig</a><a class="ft-soc">fb</a></div></div>
    <div class="ft-col"><h5>Pages</h5><ul><li><a href="#" onclick="nav_go('home');return false" data-fr="Accueil" data-en="Home">Accueil</a></li><li><a href="#" onclick="nav_go('svc');return false">Services</a></li><li><a href="#" onclick="nav_go('about');return false" data-fr="À propos" data-en="About">À propos</a></li><li><a href="#" onclick="nav_go('cont');return false">Contact</a></li></ul></div>
    <div class="ft-col"><h5>Contact</h5><ul><li><a href="mailto:hello@leabyva.com">hello@leabyva.com</a></li><li><a>Abidjan, CI</a></li><li><a>Paris, France</a></li></ul></div>
    <div class="ft-col"><h5 data-fr="Légal" data-en="Legal">Légal</h5><ul><li><a data-fr="Mentions légales" data-en="Legal notice">Mentions légales</a></li><li><a data-fr="Confidentialité" data-en="Privacy">Confidentialité</a></li></ul></div>
  </div>
  <div class="ft-bottom"><p>© 2025 Leabyva Digital Works.</p><span class="ft-badge">Leabyva <b>♥</b></span></div>
</footer>
