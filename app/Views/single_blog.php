<?php
$logo  = 'Public/logo_LeabYva-removebg-preview.png';
$bImage = 'Public/projet1.png';
?>

<div class="pg-hero" style="min-height: 60vh; position: relative; display: flex; align-items: flex-end; padding-bottom: 60px;">
  <!-- Background Image with Overlay -->
  <div style="position: absolute; inset: 0; background: url('<?= $bImage ?>') center/cover; opacity: 0.3; z-index: -2;"></div>
  <div style="position: absolute; inset: 0; background: linear-gradient(to top, var(--bg), transparent); z-index: -1;"></div>

  <div style="max-width: 900px; margin: 0 auto; width: 100%; position: relative; z-index: 1;">
    <div style="font-family: 'Syne', sans-serif; font-size: 13px; color: var(--m); font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
      <span style="display:inline-block;width:6px;height:6px;background:var(--c);border-radius:50%;"></span>
      <span data-fr="10 Mars 2026 • Intelligence Artificielle" data-en="March 10, 2026 • Artificial Intelligence">10 Mars 2026 • Intelligence Artificielle</span>
    </div>
    
    <h1 style="font-size: clamp(36px, 5vw, 64px); font-weight: 800; line-height: 1.1; margin-bottom: 24px; letter-spacing: -0.02em;" data-fr="L'impact de l'IA générative sur les entreprises africaines" data-en="The impact of generative AI on African businesses">L'impact de l'IA générative sur les entreprises africaines</h1>
    
    <div style="display: flex; align-items: center; gap: 16px;">
      <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--c), var(--m)); display: flex; align-items: center; justify-content: center; font-weight: 700;">YA</div>
      <div>
        <div style="font-weight: 700; font-size: 15px;">Yves Abi</div>
        <div style="color: var(--ink2); font-size: 13px;" data-fr="CEO & Stratège Digital" data-en="CEO & Digital Strategist">CEO & Stratège Digital</div>
      </div>
    </div>
  </div>
</div>

<div style="max-width: 800px; margin: 0 auto; padding: 60px 24px 100px; font-size: 17px; line-height: 1.8; color: var(--ink2);">
  
  <p style="font-size: 20px; font-weight: 300; line-height: 1.6; color: var(--ink); margin-bottom: 40px;" data-fr="Découvrez comment l'intégration de RAG (Retrieval-Augmented Generation) et des LLMs locaux transforme les processus métiers et offre un avantage compétitif inédit aux entreprises du continent." data-en="Discover how the integration of RAG (Retrieval-Augmented Generation) and local LLMs transforms business processes and offers an unprecedented competitive advantage to companies on the continent.">Découvrez comment l'intégration de RAG (Retrieval-Augmented Generation) et des LLMs locaux transforme les processus métiers et offre un avantage compétitif inédit aux entreprises du continent.</p>

  <h2 style="font-family: 'Syne', sans-serif; font-size: 32px; font-weight: 700; color: var(--ink); margin: 48px 0 24px;" data-fr="1. Un changement de paradigme" data-en="1. A paradigm shift">1. Un changement de paradigme</h2>
  <p data-fr="L'intelligence artificielle n'est plus une technologie de demain, c'est une réalité opérationnelle aujourd'hui." data-en="Artificial intelligence is no longer a technology of tomorrow, it's an operational reality today.">L'intelligence artificielle n'est plus une technologie de demain, c'est une réalité opérationnelle aujourd'hui.</p>
  <p data-fr="Dans de nombreux secteurs comme la logistique, la finance ou l'agriculture, l'IA générative permet désormais d'automatiser le service client, de générer des rapports complexes en quelques secondes et d'analyser d'immenses bases de données sans effort humain prolongé." data-en="In many sectors like logistics, finance or agriculture, generative AI now allows for automating customer service, generating complex reports in seconds, and analyzing huge databases without prolonged human effort.">Dans de nombreux secteurs comme la logistique, la finance ou l'agriculture, l'IA générative permet désormais d'automatiser le service client, de générer des rapports complexes en quelques secondes et d'analyser d'immenses bases de données sans effort humain prolongé.</p>

  <div style="margin: 48px 0; padding: 32px; border-left: 4px solid var(--c); background: var(--p2); border-radius: 0 12px 12px 0;">
    <div style="font-size: 22px; font-style: italic; color: var(--ink); font-weight: 300;" data-fr="« Les entreprises qui adopteront l'IA générative dans leurs opérations quotidiennes verront leur productivité augmenter de 40% d'ici 2026. »" data-en="« Companies that adopt generative AI in their daily operations will see their productivity increase by 40% by 2026. »">« Les entreprises qui adopteront l'IA générative dans leurs opérations quotidiennes verront leur productivité augmenter de 40% d'ici 2026. »</div>
  </div>

  <h2 style="font-family: 'Syne', sans-serif; font-size: 32px; font-weight: 700; color: var(--ink); margin: 48px 0 24px;" data-fr="2. Le RAG : La clé de données fiables" data-en="2. RAG: The key to reliable data">2. Le RAG : La clé de données fiables</h2>
  <p data-fr="L'un des défis majeurs des IA comme ChatGPT est le phénomène d'hallucination (inventer des faits). Avec le RAG, l'IA est forcée de chercher ses réponses exclusivement dans la base de connaissances interne de votre entreprise, offrant des réponses 100% justes et contextualisées." data-en="One of the major challenges of AIs like ChatGPT is the phenomenon of hallucination (inventing facts). With RAG, the AI is forced to find its answers exclusively in your company's internal knowledge base, offering 100% accurate and contextualized answers.">L'un des défis majeurs des IA comme ChatGPT est le phénomène d'hallucination (inventer des faits). Avec le RAG, l'IA est forcée de chercher ses réponses exclusivement dans la base de connaissances interne de votre entreprise, offrant des réponses 100% justes et contextualisées.</p>

  <div style="margin-top: 60px; display: flex; justify-content: space-between; align-items: center; padding-top: 32px; border-top: 1px solid var(--line);">
    <a href="#" onclick="nav_go('blog');return false" style="display: inline-flex; align-items: center; gap: 8px; color: var(--c); font-weight: 700; text-decoration: none; font-size: 14px;" data-fr="← Retour aux articles" data-en="← Back to articles">← Retour aux articles</a>
    <div style="display: flex; gap: 12px;">
      <a href="#" style="width: 36px; height: 36px; border-radius: 50%; background: var(--p3); border: 1px solid var(--line); display: flex; align-items: center; justify-content: center; color: var(--ink); text-decoration: none; transition: all 0.2s;">in</a>
      <a href="#" style="width: 36px; height: 36px; border-radius: 50%; background: var(--p3); border: 1px solid var(--line); display: flex; align-items: center; justify-content: center; color: var(--ink); text-decoration: none; transition: all 0.2s;">𝕏</a>
    </div>
  </div>
</div>

<!-- Newsletter CTA -->
<div class="cta-band" style="border-top:1px solid var(--line); background: var(--p2)">
  <h2 data-fr="Ne manquez aucune tendance digital" data-en="Don't miss a single digital trend">Ne manquez aucune<br>tendance digital</h2>
  <div class="cta-right">
    <p data-fr="Inscrivez-vous à notre newsletter mensuelle pour recevoir nos meilleurs articles." data-en="Subscribe to our monthly newsletter to receive our best articles.">Inscrivez-vous à notre newsletter mensuelle pour recevoir nos meilleurs articles directement dans votre boîte mail.</p>
    <div style="display:flex; gap: 12px; margin-top:20px;">
        <input type="email" placeholder="Votre adresse email" style="padding: 12px 20px; border-radius: 8px; border: 1px solid var(--line); background: var(--p3); color: var(--ink); flex: 1; min-width: 250px;">
        <a class="btn-a" href="#" onclick="showToast('Inscription réussie !'); return false;" data-fr="S'abonner" data-en="Subscribe">S'abonner</a>
    </div>
  </div>
</div>

<footer>
  <div class="ft">
    <div class="ft-brand"><div class="fl"><img src="<?= $logo ?>" alt="Leabyva"></div><p data-fr="Votre partenaire stratégique pour une transformation." data-en="Your strategic partner for a successful digital transformation.">Votre partenaire stratégique pour une transformation digitale réussie.</p><div class="ft-socs"><a class="ft-soc">in</a><a class="ft-soc">𝕏</a><a class="ft-soc">ig</a><a class="ft-soc">fb</a></div></div>
    <div class="ft-col"><h5>Pages</h5><ul><li><a href="#" onclick="nav_go('home');return false" data-fr="Accueil" data-en="Home">Accueil</a></li><li><a href="#" onclick="nav_go('svc');return false">Services</a></li><li><a href="#" onclick="nav_go('about');return false" data-fr="À propos" data-en="About">À propos</a></li><li><a href="#" onclick="nav_go('port');return false" data-fr="Réalisations" data-en="Portfolio">Réalisations</a></li></ul></div>
    <div class="ft-col"><h5>Contact</h5><ul><li><a href="mailto:hello@leabyva.com">hello@leabyva.com</a></li><li><a>Abidjan, CI</a></li><li><a>Paris, France</a></li></ul></div>
    <div class="ft-col"><h5 data-fr="Légal" data-en="Legal">Légal</h5><ul><li><a data-fr="Mentions légales" data-en="Legal notice">Mentions légales</a></li><li><a data-fr="Confidentialité" data-en="Privacy">Confidentialité</a></li></ul></div>
  </div>
  <div class="ft-bottom"><p>© 2026 Leabyva Digital Works.</p><span class="ft-badge">Leabyva <b>♥</b></span></div>
</footer>
