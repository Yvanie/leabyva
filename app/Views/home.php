<?php
$logo    = 'Public/logo_LeabYva-removebg-preview.png';
$hero    = 'Public/Hero.jpg';
$office  = 'Public/about_us_1.png';
$method  = 'Public/method.png';
$proj1   = 'Public/projet1.png';
$proj2   = 'Public/projet2.png';
$proj3   = 'Public/projet3.png';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg-img">
    <div class="img-slot">
      <img src="<?= $hero ?>" alt="Leabyva — ambiance bureau digitale">
    </div>
  </div>
  <div class="hero-counter" data-fr="Défiler" data-en="Scroll">Défiler</div>
  <div class="hero-content">
    <div>
      <div class="chip" data-fr="Transformation Digitale" data-en="Digital Transformation">Transformation Digitale</div>
      <h1 class="hero-headline">
        <span class="hn" data-fr="Votre vision." data-en="Your vision.">Votre vision.</span>
        <span class="hi" data-fr="Notre code." data-en="Our code.">Notre code.</span>
        <span class="hn" data-fr="Vos résultats." data-en="Your results.">Vos résultats.</span>
      </h1>
    </div>
    <div class="hero-meta">
      <p class="hero-desc" data-fr="Leabyva Digital Works accompagne entreprises et startups dans leur transformation digitale avec des solutions modernes, performantes et rigoureusement sur mesure." data-en="Leabyva Digital Works guides companies and startups through digital transformation with modern, high-performance, rigorously tailored solutions.">Leabyva Digital Works accompagne entreprises et startups dans leur transformation digitale avec des solutions modernes, performantes et rigoureusement sur mesure.</p>
      <div class="hero-actions">
        <a class="btn-a" href="#" onclick="nav_go('cont');return false" data-fr="Démarrer →" data-en="Get started →">Démarrer →</a>
        <a class="btn-b" href="#" onclick="nav_go('port');return false" data-fr="Nos réalisations" data-en="Our work">Nos réalisations</a>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="mq">
  <div class="mq-tr">
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span><span data-fr="Développement Web" data-en="Web Development">Développement Web</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span><span data-fr="Apps Mobiles" data-en="Mobile Apps">Apps Mobiles</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span>UI / UX Design</span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span><span data-fr="Marketing Digital" data-en="Digital Marketing">Marketing Digital</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span><span data-fr="Intelligence Artificielle" data-en="Artificial Intelligence">Intelligence Artificielle</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span>Cloud &amp; DevOps</span>
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span>Data &amp; Analytics</span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span><span data-fr="Stratégie Digitale" data-en="Digital Strategy">Stratégie Digitale</span></span>
    <!-- dup -->
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span><span data-fr="Développement Web" data-en="Web Development">Développement Web</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span><span data-fr="Apps Mobiles" data-en="Mobile Apps">Apps Mobiles</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span>UI / UX Design</span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span><span data-fr="Marketing Digital" data-en="Digital Marketing">Marketing Digital</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span><span data-fr="Intelligence Artificielle" data-en="Artificial Intelligence">Intelligence Artificielle</span></span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span>Cloud &amp; DevOps</span>
    <span class="mq-i"><span class="mq-d" style="background:var(--c)"></span>Data &amp; Analytics</span>
    <span class="mq-i"><span class="mq-d" style="background:var(--m)"></span><span data-fr="Stratégie Digitale" data-en="Digital Strategy">Stratégie Digitale</span></span>
  </div>
</div>

<!-- EDITORIAL INTRO -->
<div class="ed-intro">
  <div class="ed-text">
    <div class="chip rv" data-fr="Qui sommes-nous" data-en="Who we are">Qui sommes-nous</div>
    <h2 class="big rv" style="transition-delay:.08s" data-fr="Une agence digitale africaine à portée mondiale." data-en="An African digital agency with worldwide reach.">Une agence digitale africaine à portée mondiale.</h2>
    <p class="sub rv" style="transition-delay:.16s" data-fr="Fondée à Abidjan, présente à Paris, Leabyva est le partenaire digital des entreprises qui veulent aller vite, aller loin et rester solides." data-en="Founded in Abidjan, based in Paris, Leabyva is the digital partner for companies that want to move fast, reach far, and stay solid.">Fondée à Abidjan, présente à Paris, Leabyva est le partenaire digital des entreprises qui veulent aller vite, aller loin et rester solides.</p>
    <div style="margin-top:36px" class="rv" style="transition-delay:.24s">
      <a class="btn-b" href="#" onclick="nav_go('about');return false" data-fr="Découvrir l'équipe →" data-en="Meet the team →">Découvrir l'équipe →</a>
    </div>
  </div>
  <!-- Image bureau -->
  <div class="ed-img rv" style="transition-delay:.2s">
    <img src="<?= $office ?>" alt="Équipe Leabyva — bureau" class="real-img">
  </div>
</div>

<!-- NUMBERS -->
<div class="nums">
  <div class="num-cell rv"><div class="n-val">+150</div><div class="n-lbl" data-fr="Projets livrés avec succès" data-en="Successfully delivered projects">Projets livrés avec succès</div></div>
  <div class="num-cell rv" style="transition-delay:.08s"><div class="n-val">8+</div><div class="n-lbl" data-fr="Années d'expertise terrain" data-en="Years of field expertise">Années d'expertise terrain</div></div>
  <div class="num-cell rv" style="transition-delay:.16s"><div class="n-val">12</div><div class="n-lbl" data-fr="Pays accompagnés" data-en="Countries served">Pays accompagnés</div></div>
  <div class="num-cell rv" style="transition-delay:.24s"><div class="n-val">98%</div><div class="n-lbl" data-fr="Taux de satisfaction client" data-en="Client satisfaction rate">Taux de satisfaction client</div></div>
</div>

<!-- SERVICES STRIP -->
<div class="svc-strip">
  <div class="svc-hd">
    <h2 class="rv" data-fr="Ce que nous faisons" data-en="What we do">Ce que nous faisons</h2>
    <p class="rv" style="transition-delay:.1s" data-fr="Six pôles d'expertise pour couvrir l'intégralité de votre transformation digitale." data-en="Six areas of expertise to cover your entire digital transformation.">Six pôles d'expertise pour couvrir l'intégralité de votre transformation digitale.</p>
  </div>
  <div class="svc-list">
    <div class="svc-row rv" onclick="nav_go('svc')">
      <span class="sr-num">01</span>
      <span class="sr-name" data-fr="Développement Web &amp; Mobile" data-en="Web &amp; Mobile Development">Développement Web &amp; Mobile</span>
      <span class="sr-desc" data-fr="Applications performantes, évolutives, React · Next.js · Flutter · Node.js" data-en="High-performance, scalable apps — React · Next.js · Flutter · Node.js">Applications performantes, évolutives — React · Next.js · Flutter · Node.js</span>
      <div class="sr-tags"><span class="sr-tag">React</span><span class="sr-tag">Next.js</span><span class="sr-tag">Flutter</span></div>
      <div class="sr-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="svc-row rv" style="transition-delay:.06s" onclick="nav_go('svc')">
      <span class="sr-num">02</span>
      <span class="sr-name">UI / UX Design</span>
      <span class="sr-desc" data-fr="Research · wireframes · prototypes · design system complet" data-en="Research · wireframes · prototypes · complete design system">Research · wireframes · prototypes · design system complet</span>
      <div class="sr-tags"><span class="sr-tag">Figma</span><span class="sr-tag">Design System</span></div>
      <div class="sr-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="svc-row rv" style="transition-delay:.12s" onclick="nav_go('svc')">
      <span class="sr-num">03</span>
      <span class="sr-name" data-fr="Stratégie &amp; Consulting Digital" data-en="Digital Strategy &amp; Consulting">Stratégie &amp; Consulting Digital</span>
      <span class="sr-desc" data-fr="Audit · feuille de route · accompagnement stratégique &amp; opérationnel" data-en="Audit · roadmap · strategic &amp; operational support">Audit · feuille de route · accompagnement stratégique &amp; opérationnel</span>
      <div class="sr-tags"><span class="sr-tag">Audit</span><span class="sr-tag">Roadmap</span></div>
      <div class="sr-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="svc-row rv" style="transition-delay:.18s" onclick="nav_go('svc')">
      <span class="sr-num">04</span>
      <span class="sr-name" data-fr="Marketing &amp; Growth Digital" data-en="Digital Marketing &amp; Growth">Marketing &amp; Growth Digital</span>
      <span class="sr-desc" data-fr="SEO technique · SEA · social media · e-mail marketing · analytics" data-en="Technical SEO · SEA · social media · email marketing · analytics">SEO technique · SEA · social media · e-mail marketing · analytics</span>
      <div class="sr-tags"><span class="sr-tag">SEO</span><span class="sr-tag">SEA</span><span class="sr-tag">Analytics</span></div>
      <div class="sr-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="svc-row rv" style="transition-delay:.24s" onclick="nav_go('svc')">
      <span class="sr-num">05</span>
      <span class="sr-name" data-fr="Intelligence Artificielle" data-en="Artificial Intelligence">Intelligence Artificielle</span>
      <span class="sr-desc" data-fr="LLM · RAG · chatbots · automatisation de processus · analyse prédictive" data-en="LLM · RAG · chatbots · process automation · predictive analytics">LLM · RAG · chatbots · automatisation de processus · analyse prédictive</span>
      <div class="sr-tags"><span class="sr-tag">LLM</span><span class="sr-tag">RAG</span><span class="sr-tag">Automation</span></div>
      <div class="sr-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="svc-row rv" style="transition-delay:.3s" onclick="nav_go('svc')">
      <span class="sr-num">06</span>
      <span class="sr-name">Cloud &amp; DevOps</span>
      <span class="sr-desc">AWS · GCP · Docker · Kubernetes · CI/CD · monitoring</span>
      <div class="sr-tags"><span class="sr-tag">AWS</span><span class="sr-tag">Docker</span><span class="sr-tag">K8s</span></div>
      <div class="sr-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
  </div>
</div>

<!-- PROCESS + IMAGE -->
<div class="process">
  <div class="proc-left">
    <div class="chip" data-fr="Notre méthode" data-en="Our method">Notre méthode</div>
    <h2 style="font-family:'Syne',sans-serif;font-size:clamp(28px,3.2vw,44px);font-weight:800;letter-spacing:-.03em;line-height:1.05" data-fr="Un processus rigoureux pour des résultats prévisibles." data-en="A rigorous process for predictable results.">Un processus rigoureux pour des résultats prévisibles.</h2>
    <div class="proc-steps">
      <div class="pstep rv"><span class="pstep-num">01</span><div><h4 data-fr="Découverte &amp; Cadrage" data-en="Discovery &amp; Scoping">Découverte &amp; Cadrage</h4><p data-fr="Analyse approfondie de vos objectifs, de votre marché et de votre audience cible." data-en="Deep analysis of your goals, market and target audience.">Analyse approfondie de vos objectifs, de votre marché et de votre audience cible.</p></div></div>
      <div class="pstep rv" style="transition-delay:.08s"><span class="pstep-num">02</span><div><h4 data-fr="Conception &amp; Prototypage" data-en="Design &amp; Prototyping">Conception &amp; Prototypage</h4><p data-fr="Wireframes et maquettes haute fidélité validés avant tout développement." data-en="High-fidelity wireframes and mockups validated before any development.">Wireframes et maquettes haute fidélité validés avant tout développement.</p></div></div>
      <div class="pstep rv" style="transition-delay:.16s"><span class="pstep-num">03</span><div><h4 data-fr="Développement Agile" data-en="Agile Development">Développement Agile</h4><p data-fr="Sprints de 2 semaines, démos régulières, communication transparente." data-en="2-week sprints, regular demos, transparent communication.">Sprints de 2 semaines, démos régulières, communication transparente.</p></div></div>
      <div class="pstep rv" style="transition-delay:.24s"><span class="pstep-num">04</span><div><h4 data-fr="Lancement &amp; Optimisation" data-en="Launch &amp; Optimization">Lancement &amp; Optimisation</h4><p data-fr="Déploiement progressif, suivi des KPIs et optimisation continue post-lancement." data-en="Progressive deployment, KPI monitoring and continuous post-launch optimization.">Déploiement progressif, suivi des KPIs et optimisation continue post-lancement.</p></div></div>
    </div>
  </div>
  <!-- Image équipe en action -->
  <div class="proc-right">
    <img src="<?= $method ?>" alt="Équipe Leabyva en action">
  </div>
</div>

<!-- WORK TEASER -->
<div>
  <div class="work-hd">
    <h2 class="rv" data-fr="Réalisations récentes" data-en="Recent work">Réalisations récentes</h2>
    <a class="btn-b rv" style="transition-delay:.1s" href="#" onclick="nav_go('port');return false" data-fr="Voir tout le portfolio →" data-en="See full portfolio →">Voir tout le portfolio →</a>
  </div>
  <div class="work-grid">
    <div class="wcard rv">
      <div class="wcard-img"><img src="<?= $proj1 ?>" alt="AfriPay"></div>
      <div class="wcard-info">
        <div class="wcard-cat" data-fr="Web · Fintech" data-en="Web · Fintech">Web · Fintech</div>
        <h3>AfriPay</h3>
        <p data-fr="Plateforme de paiement mobile panafricaine. 2M+ transactions/mois." data-en="Pan-African mobile payment platform. 2M+ transactions/month.">Plateforme de paiement mobile panafricaine. 2M+ transactions/mois.</p>
        <div class="wcard-tags"><span class="wcard-tag">Next.js</span><span class="wcard-tag">Node.js</span><span class="wcard-tag">AWS</span></div>
      </div>
      <div class="wcard-arrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="wcard rv" style="transition-delay:.1s">
      <div class="wcard-img"><img src="<?= $proj2 ?>" alt="MediConnect"></div>
      <div class="wcard-info">
        <div class="wcard-cat" data-fr="UI/UX · Santé" data-en="UI/UX · Health">UI/UX · Santé</div>
        <h3>MediConnect</h3>
        <p data-fr="App de téléconsultation. Note App Store 4.8 ★. +112% rétention." data-en="Teleconsultation app. App Store rating 4.8 ★. +112% retention.">App de téléconsultation. Note App Store 4.8 ★. +112% rétention.</p>
        <div class="wcard-tags"><span class="wcard-tag">Flutter</span><span class="wcard-tag">Figma</span></div>
      </div>
      <div class="wcard-arrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="wcard rv" style="transition-delay:.2s">
      <div class="wcard-img"><img src="<?= $proj3 ?>" alt="GreenFarm CI"></div>
      <div class="wcard-info">
        <div class="wcard-cat" data-fr="Marketing · AgriTech" data-en="Marketing · AgriTech">Marketing · AgriTech</div>
        <h3>GreenFarm CI</h3>
        <p data-fr="+380% trafic organique en 6 mois. Startup AgriTech ivoirienne." data-en="+380% organic traffic in 6 months. Ivorian AgriTech startup.">+380% trafic organique en 6 mois. Startup AgriTech ivoirienne.</p>
        <div class="wcard-tags"><span class="wcard-tag">SEO</span><span class="wcard-tag">Social Ads</span></div>
      </div>
      <div class="wcard-arrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
    <div class="wcard rv" style="transition-delay:.3s">
      <div class="wcard-img"><img src="<?= $proj2 ?>" alt="LogistIQ"></div>
      <div class="wcard-info">
        <div class="wcard-cat" data-fr="IA · Logistique" data-en="AI · Logistics">IA · Logistique</div>
        <h3>LogistIQ</h3>
        <p data-fr="Optimisation logistique par IA. -35% coûts opérationnels." data-en="AI logistics optimization. -35% operating costs.">Optimisation logistique par IA. -35% coûts opérationnels.</p>
        <div class="wcard-tags"><span class="wcard-tag">Python</span><span class="wcard-tag">TensorFlow</span></div>
      </div>
      <div class="wcard-arrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--c)" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
    </div>
  </div>
</div>

<!-- TESTIMONIALS -->
<div class="testi-section">
  <div class="testi-hd">
    <div>
      <div class="chip" data-fr="Témoignages" data-en="Testimonials">Témoignages</div>
      <h2 data-fr="Ce que disent nos clients" data-en="What our clients say">Ce que disent nos clients</h2>
    </div>
    <p style="font-size:14px;color:var(--ink2);font-weight:300;max-width:280px;text-align:right" data-fr="Glissez pour voir plus →" data-en="Swipe to see more →">Glissez pour voir plus →</p>
  </div>
  <div class="testi-track">
    <div class="tcard">
      <div class="t-stars">★★★★★</div>
      <p class="t-text" data-fr='"Leabyva a transformé notre plateforme en 3 mois. +280% de conversions. Une équipe d'une rare qualité, toujours proactive."' data-en='"Leabyva transformed our platform in 3 months. +280% conversions. A team of rare quality, always proactive."'>"Leabyva a transformé notre plateforme en 3 mois. +280% de conversions. Une équipe d'une rare qualité, toujours proactive."</p>
      <div class="t-author">
        <div class="t-av" style="background:linear-gradient(135deg,var(--c),var(--m))">KD</div>
        <div><div class="t-name">Kofi Diallo</div><div class="t-role" data-fr="CEO, Fintech Marketplace — Abidjan" data-en="CEO, Fintech Marketplace — Abidjan">CEO, Fintech Marketplace — Abidjan</div></div>
      </div>
    </div>
    <div class="tcard">
      <div class="t-stars" style="color:var(--m)">★★★★★</div>
      <p class="t-text" data-fr='"Approche stratégique irréprochable, exécution technique parfaite. Nous avons lancé en temps record. Je recommande sans réserve."' data-en='"Impeccable strategic approach, perfect technical execution. We launched in record time. I recommend without hesitation."'>"Approche stratégique irréprochable, exécution technique parfaite. Lancement en temps record."</p>
      <div class="t-author">
        <div class="t-av" style="background:linear-gradient(135deg,var(--m),#8B00FF)">MS</div>
        <div><div class="t-name">Marie Solange</div><div class="t-role" data-fr="Fondatrice, AgriTech — Dakar" data-en="Founder, AgriTech — Dakar">Fondatrice, AgriTech — Dakar</div></div>
      </div>
    </div>
    <div class="tcard">
      <div class="t-stars">★★★★★</div>
      <p class="t-text" data-fr='"Redesign app mobile : note App Store 3.1 → 4.8. Rétention doublée en 2 mois. Extraordinaire."' data-en='"Mobile app redesign: App Store rating 3.1 → 4.8. Retention doubled in 2 months. Extraordinary."'>"Redesign app mobile : note App Store 3.1 → 4.8. Rétention doublée en 2 mois. Extraordinaire."</p>
      <div class="t-author">
        <div class="t-av" style="background:linear-gradient(135deg,#00C4E8,#0055FF)">AB</div>
        <div><div class="t-name">Antoine Bernard</div><div class="t-role" data-fr="CTO, E-commerce — Paris" data-en="CTO, E-commerce — Paris">CTO, E-commerce — Paris</div></div>
      </div>
    </div>
    <div class="tcard">
      <div class="t-stars" style="color:var(--m)">★★★★★</div>
      <p class="t-text" data-fr='"Notre chiffre d'affaires digital a bondi de +220% la première année. Leabyva n'est pas un prestataire, c'est un vrai partenaire."' data-en='"Our digital revenue jumped +220% in the first year. Leabyva is not a vendor, they are a true partner."'>"Notre CA digital a bondi de +220% la première année. Leabyva est un vrai partenaire."</p>
      <div class="t-author">
        <div class="t-av" style="background:linear-gradient(135deg,#F59E0B,#EF4444)">OT</div>
        <div><div class="t-name">Oumar Touré</div><div class="t-role" data-fr="DG, Groupe Retail — Bamako" data-en="CEO, Retail Group — Bamako">DG, Groupe Retail — Bamako</div></div>
      </div>
    </div>
  </div>
</div>

<!-- CTA BAND -->
<div class="cta-band">
  <h2>
    <span data-fr="Prêt à bâtir quelque chose d'" data-en="Ready to build something ">Prêt à bâtir quelque chose d'</span><em data-fr="exceptionnel" data-en="exceptional">exceptionnel</em><span data-fr=" ?" data-en="?"> ?</span>
  </h2>
  <div class="cta-right">
    <p data-fr="Un échange de 30 minutes suffit pour cadrer votre projet, évaluer les options et définir les premières étapes. Sans engagement, sans jargon." data-en="A 30-minute conversation is enough to frame your project, evaluate options and define the first steps. No commitment, no jargon.">Un échange de 30 minutes suffit pour cadrer votre projet, évaluer les options et définir les premières étapes. Sans engagement, sans jargon.</p>
    <div class="cta-btns">
      <a class="btn-a" href="#" onclick="nav_go('cont');return false" data-fr="Prendre contact →" data-en="Get in touch →">Prendre contact →</a>
      <a class="btn-b" href="#" onclick="nav_go('port');return false" data-fr="Voir les réalisations" data-en="View our work">Voir les réalisations</a>
    </div>
  </div>
</div>

<!-- FOOTER HOME -->
<footer>
  <div class="ft">
    <div class="ft-brand"><div class="fl"><img src="<?= $logo ?>" alt="Leabyva"></div>
      <p data-fr="Votre partenaire stratégique pour une transformation digitale réussie." data-en="Your strategic partner for a successful digital transformation.">Votre partenaire stratégique pour une transformation digitale réussie.</p>
      <div class="ft-socs"><a class="ft-soc">in</a><a class="ft-soc">𝕏</a><a class="ft-soc">ig</a><a class="ft-soc">fb</a></div>
    </div>
    <div class="ft-col"><h5 data-fr="Services" data-en="Services">Services</h5><ul>
      <li><a href="#" onclick="nav_go('svc');return false" data-fr="Développement Web" data-en="Web Development">Développement Web</a></li>
      <li><a href="#" onclick="nav_go('svc');return false">UI / UX Design</a></li>
      <li><a href="#" onclick="nav_go('svc');return false" data-fr="Marketing Digital" data-en="Digital Marketing">Marketing Digital</a></li>
      <li><a href="#" onclick="nav_go('svc');return false" data-fr="Intelligence Artificielle" data-en="Artificial Intelligence">Intelligence Artificielle</a></li>
    </ul></div>
    <div class="ft-col"><h5 data-fr="Entreprise" data-en="Company">Entreprise</h5><ul>
      <li><a href="#" onclick="nav_go('about');return false" data-fr="À propos" data-en="About">À propos</a></li>
      <li><a href="#" onclick="nav_go('about');return false" data-fr="Équipe" data-en="Team">Équipe</a></li>
      <li><a href="#" onclick="nav_go('port');return false" data-fr="Réalisations" data-en="Portfolio">Réalisations</a></li>
      <li><a href="#" data-fr="Carrières" data-en="Careers">Carrières</a></li>
    </ul></div>
    <div class="ft-col"><h5>Contact</h5><ul>
      <li><a href="mailto:hello@leabyva.com">hello@leabyva.com</a></li>
      <li><a data-fr="Abidjan, Côte d'Ivoire" data-en="Abidjan, Ivory Coast">Abidjan, CI</a></li>
      <li><a>Paris, France</a></li>
      <li><a href="#" data-fr="Mentions légales" data-en="Legal notice">Mentions légales</a></li>
    </ul></div>
  </div>
  <div class="ft-bottom">
    <p data-fr="© 2025 Leabyva Digital Works. Tous droits réservés." data-en="© 2025 Leabyva Digital Works. All rights reserved.">© 2025 Leabyva Digital Works. Tous droits réservés.</p>
    <span class="ft-badge" data-fr="Fait avec" data-en="Made with">Fait avec <b>♥</b> par Leabyva</span>
  </div>
</footer>
