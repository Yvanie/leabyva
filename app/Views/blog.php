<?php
$logo  = 'Public/logo_LeabYva-removebg-preview.png';
$proj1 = 'Public/projet1.png';
$proj2 = 'Public/projet2.png';
$proj3 = 'Public/projet3.png';
?>

<div class="port-hd">
  <div class="chip" data-fr="Actualités" data-en="News">Actualités</div>
  <h1><em data-fr="Le Blog" data-en="Our Blog">Le Blog</em><br><span data-fr="&amp; Tendances" data-en="&amp; Trends">&amp; Tendances</span></h1>
  <p data-fr="Insights, stratégies numériques et études de cas pour nourrir votre transformation digitale." data-en="Insights, digital strategies, and case studies to fuel your digital transformation.">Insights, stratégies numériques et études de cas pour nourrir votre transformation digitale.</p>
</div>

<!-- Blog Grid -->
<div class="blog-grid" style="padding: 48px 80px;">
  
  <!-- Article 1 -->
  <div class="bcard rv">
    <div class="bcard-img"><img src="<?= $proj1 ?>" alt="L'Intelligence Artificielle en 2026"></div>
    <div class="bcard-info">
      <div class="bcard-meta"><span data-fr="10 Mars 2026" data-en="March 10, 2026">10 Mars 2026</span> • <span data-fr="Intelligence Artificielle" data-en="Artificial Intelligence">Intelligence Artificielle</span></div>
      <h3 data-fr="L'impact de l'IA générative sur les entreprises africaines" data-en="The impact of generative AI on African businesses">L'impact de l'IA générative sur les entreprises africaines</h3>
      <p data-fr="Découvrez comment l'intégration de RAG et des LLMs locaux transforme les processus métiers et offre un avantage compétitif inédit." data-en="Discover how the integration of RAG and local LLMs transforms business processes and offers an unprecedented competitive advantage.">Découvrez comment l'intégration de RAG et des LLMs locaux transforme les processus métiers et offre un avantage compétitif inédit.</p>
      <a class="bcard-link" href="#single-blog" onclick="nav_go('single-blog');return false" data-fr="Lire l'article" data-en="Read article">Lire l'article</a>
    </div>
  </div>

  <!-- Article 2 -->
  <div class="bcard rv" style="transition-delay: .1s">
    <div class="bcard-img"><img src="<?= $proj2 ?>" alt="Stratégie UI/UX"></div>
    <div class="bcard-info">
      <div class="bcard-meta"><span data-fr="28 Février 2026" data-en="February 28, 2026">28 Février 2026</span> • UI / UX Design</div>
      <h3 data-fr="Créer des expériences utilisateur inclusives en 2026" data-en="Building inclusive user experiences in 2026">Créer des expériences utilisateur inclusives en 2026</h3>
      <p data-fr="Pourquoi l'accessibilité (WCAG) et le design mobile-first ne sont plus des options mais des piliers essentiels pour toute application." data-en="Why accessibility (WCAG) and mobile-first design are no longer optional but essential pillars for any application.">Pourquoi l'accessibilité (WCAG) et le design mobile-first ne sont plus des options mais des piliers essentiels.</p>
      <a class="bcard-link" href="#single-blog" onclick="nav_go('single-blog');return false" data-fr="Lire l'article" data-en="Read article">Lire l'article</a>
    </div>
  </div>

  <!-- Article 3 -->
  <div class="bcard rv" style="transition-delay: .2s">
    <div class="bcard-img"><img src="<?= $proj3 ?>" alt="Stratégie Digitale"></div>
    <div class="bcard-info">
      <div class="bcard-meta"><span data-fr="15 Janvier 2026" data-en="January 15, 2026">15 Janvier 2026</span> • <span data-fr="Stratégie" data-en="Strategy">Stratégie</span></div>
      <h3 data-fr="Comment réussir sa migration vers le cloud AWS ?" data-en="How to succeed in your AWS cloud migration?">Comment réussir sa migration vers le cloud AWS ?</h3>
      <p data-fr="Étude de cas détaillée : les étapes incontournables, les pièges à éviter et les bonnes pratiques DevOps pour une migration sans coupure." data-en="Detailed case study: key steps, pitfalls to avoid, and DevOps best practices for a seamless migration.">Étude de cas détaillée : les étapes incontournables, les pièges à éviter et les bonnes pratiques DevOps.</p>
      <a class="bcard-link" href="#single-blog" onclick="nav_go('single-blog');return false" data-fr="Lire l'article" data-en="Read article">Lire l'article</a>
    </div>
  </div>

</div>

<!-- Newsletter CTA -->
<div class="cta-band" style="border-top:1px solid var(--line); background: var(--p2)">
  <h2 data-fr="Ne manquez aucune tendance digital" data-en="Don't miss a single digital trend">Ne manquez aucune<br>tendance digital</h2>
  <div class="cta-right">
    <p data-fr="Inscrivez-vous à notre newsletter mensuelle pour recevoir nos meilleurs articles directement dans votre boîte mail." data-en="Subscribe to our monthly newsletter to receive our best articles straight to your inbox.">Inscrivez-vous à notre newsletter mensuelle pour recevoir nos meilleurs articles directement dans votre boîte mail.</p>
    <div style="display:flex; gap: 12px; margin-top:20px;">
        <input type="email" placeholder="Votre adresse email" style="padding: 12px 20px; border-radius: 8px; border: 1px solid var(--line); background: var(--p3); color: var(--ink); flex: 1; min-width: 250px;">
        <a class="btn-a" href="#" onclick="showToast('Inscription réussie !'); return false;" data-fr="S'abonner" data-en="Subscribe">S'abonner</a>
    </div>
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
