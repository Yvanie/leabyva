<?php
$logo  = 'Public/logo_LeabYva-removebg-preview.png';
$bImage = 'Public/projet1.png';
?>

<div class="pg-hero" style="min-height: 70vh; position: relative; display: flex; align-items: flex-end; padding-bottom: 60px;">
  <!-- Background Image with Overlay -->
  <div style="position: absolute; inset: 0; background: url('<?= $bImage ?>') center/cover; opacity: 0.35; z-index: -2;"></div>
  <div style="position: absolute; inset: 0; background: linear-gradient(to top, var(--bg), transparent 80%); z-index: -1;"></div>

  <div style="max-width: 1280px; margin: 0 auto; width: 100%; position: relative; z-index: 1;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 32px;">
      <div style="max-width: 700px;">
        <div style="font-family: 'Syne', sans-serif; font-size: 13px; color: var(--c); font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
          <span style="display:inline-block;width:6px;height:6px;background:var(--m);border-radius:50%;"></span>
          <span data-fr="Web · Fintech" data-en="Web · Fintech">Web · Fintech</span>
        </div>
        
        <h1 style="font-size: clamp(40px, 6vw, 72px); font-weight: 800; line-height: 1.05; margin-bottom: 24px; letter-spacing: -0.02em;">AfriPay</h1>
        <p style="font-size: 18px; color: var(--ink2); font-weight: 300; line-height: 1.6; max-width: 500px;" data-fr="Plateforme de paiement mobile panafricaine." data-en="Pan-African mobile payment platform.">Plateforme de paiement mobile panafricaine.</p>
      </div>
      
      <div style="background: var(--p2); border: 1px solid var(--line); border-radius: 16px; padding: 32px; min-width: 280px; backdrop-filter: blur(10px);">
        <div style="margin-bottom: 20px;">
          <div style="font-size: 11px; color: var(--ink3); text-transform: uppercase; font-weight: 700; letter-spacing: .1em; margin-bottom: 6px;" data-fr="Client" data-en="Client">Client</div>
          <div style="font-size: 16px; font-weight: 600; color: var(--ink);">AfriPay Corp.</div>
        </div>
        <div style="margin-bottom: 20px;">
          <div style="font-size: 11px; color: var(--ink3); text-transform: uppercase; font-weight: 700; letter-spacing: .1em; margin-bottom: 6px;" data-fr="Date" data-en="Date">Date</div>
          <div style="font-size: 16px; font-weight: 600; color: var(--ink);">2024</div>
        </div>
        <div style="margin-bottom: 24px;">
          <div style="font-size: 11px; color: var(--ink3); text-transform: uppercase; font-weight: 700; letter-spacing: .1em; margin-bottom: 6px;" data-fr="Expertises" data-en="Expertise">Expertises</div>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="background: var(--p3); border: 1px solid var(--line); padding: 4px 10px; border-radius: 4px; font-size: 12px; color: var(--ink2);">Next.js</span>
            <span style="background: var(--p3); border: 1px solid var(--line); padding: 4px 10px; border-radius: 4px; font-size: 12px; color: var(--ink2);">Node.js</span>
            <span style="background: var(--p3); border: 1px solid var(--line); padding: 4px 10px; border-radius: 4px; font-size: 12px; color: var(--ink2);">AWS</span>
          </div>
        </div>
        <a href="https://primus-aten.com/" target="_blank" rel="noopener" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 12px; background: var(--c); color: #000; font-weight: 700; font-size: 13px; text-decoration: none; border-radius: 6px; transition: opacity .2s;" data-fr="Visiter le site →" data-en="Visit website →">Visiter le site →</a>
      </div>
    </div>
  </div>
</div>

<div style="max-width: 1280px; margin: 0 auto; padding: 60px 24px 100px;">
  <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: start;">
    
    <div>
      <h2 style="font-family: 'Syne', sans-serif; font-size: 32px; font-weight: 700; color: var(--ink); margin-bottom: 24px;" data-fr="Le défi" data-en="The challenge">Le défi</h2>
      <p style="font-size: 17px; color: var(--ink2); line-height: 1.8; font-weight: 300; margin-bottom: 24px;" data-fr="Concevoir une architecture scalable capable de supporter plus de 2 millions de transactions mensuelles tout en garantissant des temps de réponse inférieurs à 200ms sur l'ensemble du continent africain." data-en="Design a scalable architecture capable of supporting more than 2 million monthly transactions while guaranteeing response times of less than 200ms across the African continent.">Concevoir une architecture scalable capable de supporter plus de 2 millions de transactions mensuelles tout en garantissant des temps de réponse inférieurs à 200ms sur l'ensemble du continent africain.</p>
      
      <h2 style="font-family: 'Syne', sans-serif; font-size: 32px; font-weight: 700; color: var(--ink); margin: 48px 0 24px;" data-fr="Notre solution" data-en="Our solution">Notre solution</h2>
      <p style="font-size: 17px; color: var(--ink2); line-height: 1.8; font-weight: 300; margin-bottom: 24px;" data-fr="Mise en place d'une architecture micro-services hébergée sur AWS, couplée à un frontend ultra-rapide en Next.js. Intégration de pipelines CI/CD automatisés assurant des déploiements sans interruption de service." data-en="Implementation of a micro-services architecture hosted on AWS, coupled with an ultra-fast frontend in Next.js. Integration of automated CI/CD pipelines ensuring deployments without service interruption.">Mise en place d'une architecture micro-services hébergée sur AWS, couplée à un frontend ultra-rapide en Next.js. Intégration de pipelines CI/CD automatisés assurant des déploiements sans interruption de service.</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
      <div style="aspect-ratio: 4/5; border-radius: 12px; overflow: hidden; background: var(--p3);">
        <img src="<?= $bImage ?>" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;" alt="">
      </div>
      <div style="aspect-ratio: 4/5; border-radius: 12px; overflow: hidden; background: var(--p3); transform: translateY(32px);">
        <img src="Public/projet2.png" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;" alt="">
      </div>
    </div>

  </div>

  <div style="margin-top: 100px; padding-top: 40px; border-top: 1px solid var(--line); display: flex; justify-content: space-between; align-items: center;">
    <a href="#port" onclick="nav_go('port');return false" style="display: inline-flex; align-items: center; gap: 8px; color: var(--ink); font-weight: 700; text-decoration: none; font-size: 14px; transition: color .2s;" data-fr="← Tous les projets" data-en="← All projects">← Tous les projets</a>
    <a href="#contact" onclick="nav_go('cont');return false" style="padding: 10px 24px; border-radius: 4px; background: transparent; border: 1px solid var(--c); color: var(--c); font-weight: 700; font-size: 13px; text-decoration: none; text-transform: uppercase; letter-spacing: .05em; transition: all .2s;" data-fr="Démarrer un projet similaire" data-en="Start a similar project">Démarrer un projet similaire</a>
  </div>
</div>

<div class="cta-band">
    <div class="cta-band-glow"></div>
    <div class="s-label rev" style="justify-content:center;margin-bottom:20px" data-fr="Prêt pour le prochain niveau ?" data-en="Ready for the next level?">Prêt pour le prochain niveau ?</div>
    <h2 class="rev" style="transition-delay:.1s;font-family:'Syne',sans-serif;font-size:clamp(36px,4.5vw,60px);font-weight:800;letter-spacing:-.03em;max-width:700px;margin:0 auto 20px;position:relative;">
      <span data-fr="Créons un " data-en="Let's create an ">Créons un </span><span class="grad" data-fr="impact" data-en="impact">impact</span><br>
      <span data-fr="remarquable ensemble." data-en="remarkable together.">remarquable ensemble.</span>
    </h2>
    <div class="cta-band-btns rev" style="transition-delay:.3s">
      <a class="btn-main" href="#cont" onclick="nav_go('cont');return false" data-fr="Nous contacter →" data-en="Contact us →">Nous contacter →</a>
    </div>
  </div>

<footer>
  <div class="ft">
    <div class="ft-brand"><div class="fl"><img src="<?= $logo ?>" alt="Leabyva"></div><p data-fr="Votre partenaire stratégique pour une transformation digitale réussie." data-en="Your strategic partner for a successful digital transformation.">Votre partenaire stratégique pour une transformation digitale réussie.</p><div class="ft-socs"><a class="ft-soc">in</a><a class="ft-soc">𝕏</a><a class="ft-soc">ig</a><a class="ft-soc">fb</a></div></div>
    <div class="ft-col"><h5>Pages</h5><ul><li><a href="#" onclick="nav_go('home');return false" data-fr="Accueil" data-en="Home">Accueil</a></li><li><a href="#" onclick="nav_go('svc');return false">Services</a></li><li><a href="#" onclick="nav_go('about');return false" data-fr="À propos" data-en="About">À propos</a></li><li><a href="#" onclick="nav_go('port');return false" data-fr="Réalisations" data-en="Portfolio">Réalisations</a></li></ul></div>
    <div class="ft-col"><h5>Contact</h5><ul><li><a href="mailto:hello@leabyva.com">hello@leabyva.com</a></li><li><a>Abidjan, CI</a></li><li><a>Paris, France</a></li></ul></div>
    <div class="ft-col"><h5 data-fr="Légal" data-en="Legal">Légal</h5><ul><li><a data-fr="Mentions légales" data-en="Legal notice">Mentions légales</a></li><li><a data-fr="Confidentialité" data-en="Privacy">Confidentialité</a></li></ul></div>
  </div>
  <div class="ft-bottom"><p>© 2026 Leabyva Digital Works.</p><span class="ft-badge">Leabyva <b>♥</b></span></div>
</footer>
