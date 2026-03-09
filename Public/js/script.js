/* ── CURSOR ── */
const dot = document.getElementById('dot'), ring = document.getElementById('ring');
let mx = 0, my = 0, rx = 0, ry = 0;
document.addEventListener('mousemove', e => {
  mx = e.clientX; my = e.clientY;
  dot.style.left = mx - 4 + 'px'; dot.style.top = my - 4 + 'px';
});
(function loop() { rx += (mx - rx) * .13; ry += (my - ry) * .13; ring.style.left = rx - 18 + 'px'; ring.style.top = ry - 18 + 'px'; requestAnimationFrame(loop) })();
document.querySelectorAll('a,button,input,select,textarea,label,[onclick]').forEach(el => {
  el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
  el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
});

/* ── THEME ── */
let theme = localStorage.getItem('ldw-theme') || 'dark';
function applyTheme(t) {
  theme = t;
  document.documentElement.setAttribute('data-theme', t);
  localStorage.setItem('ldw-theme', t);
  const i = document.getElementById('tico');
  if (t === 'dark') { i.innerHTML = '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>'; }
  else { i.innerHTML = '<circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>'; }
}
function toggleTheme() { applyTheme(theme === 'dark' ? 'light' : 'dark') }
applyTheme(theme);

/* ── LOCALIZATION & LANG DROPDOWN ── */
let lang = localStorage.getItem('lang') || 'fr';

window.toggleLangDropdown = function() {
  document.querySelector('.nav-end .lang-dropdown').classList.toggle('open');
}

window.toggleLangDropdownMobile = function() {
  document.querySelector('.drawer .lang-dropdown').classList.toggle('open');
}

// Close dropdowns if clicking outside
document.addEventListener('click', (e) => {
  if (!e.target.closest('.lang-dropdown')) {
    document.querySelectorAll('.lang-dropdown.open').forEach(el => el.classList.remove('open'));
  }
});

function setLang(l) {
  lang = l;
  localStorage.setItem('lang', l);
  document.documentElement.lang = l;
  
  // Update dropdown trigger texts
  const tDesktop = document.getElementById('current-lang');
  const tMobile = document.getElementById('current-lang-mobile');
  if (tDesktop) tDesktop.textContent = l.toUpperCase();
  if (tMobile) tMobile.textContent = l.toUpperCase();

  // Update active states on buttons
  document.querySelectorAll('.lbtn').forEach(btn => {
    btn.classList.toggle('on', btn.textContent.toLowerCase().startsWith(l));
  });

  // Apply translations
  document.querySelectorAll('[data-fr]').forEach(el => {
    const val = el.getAttribute('data-' + l);
    if (val) el.innerHTML = val;
  });
  
  // Specific input placeholders
  const pl = {
    'cf-prenom': { fr: 'Prénom', en: 'First name' },
    'cf-nom': { fr: 'Nom', en: 'Last name' },
    'cf-email': { fr: 'Email', en: 'Email' }
  };
  for (let id in pl) {
    const el = document.getElementById(id);
    if (el) el.placeholder = pl[id][l];
  }
}
setLang(lang);

/* ── CINEMATIC PAGE TRANSITION ── */
let busy = false, curPage = 'home';
const curtain = document.getElementById('curtain');
function nav_go(id) {
  if (busy || id === curPage) return;
  busy = true;
  
  if (window.location.hash.replace('#', '') !== id) {
    window.location.hash = id;
  }
  
  // OUT
  curtain.className = 'leaving';
  setTimeout(() => {
    // SWITCH
    document.querySelectorAll('.pg').forEach(p => p.classList.remove('on'));
    document.getElementById('pg-' + id).classList.add('on');
    document.querySelectorAll('.npill[data-p]').forEach(p => p.classList.toggle('on', p.getAttribute('data-p') === id));
    curPage = id;
    window.scrollTo({ top: 0, behavior: 'instant' });
    setTimeout(() => checkReveal(), 50);
    setLang(lang);
    // IN
    curtain.className = 'entering';
    setTimeout(() => { curtain.className = ''; busy = false; }, 900);
  }, 450);
}

// Handle browser back/forward and initial load
function handleHash() {
  const hash = window.location.hash.replace('#', '');
  if (hash && document.getElementById('pg-' + hash)) {
    if (hash !== curPage) nav_go(hash);
  } else if (!hash && curPage !== 'home') {
    nav_go('home');
  } else if (hash && !document.getElementById('pg-' + hash)) {
    // If we have a hash but no page exists, default to home
    nav_go('home');
  }
}

window.addEventListener('hashchange', handleHash);

// Handle initial load directly without animation if it's not home
window.addEventListener('DOMContentLoaded', () => {
    const hash = window.location.hash.replace('#', '');
    if (hash && hash !== 'home' && document.getElementById('pg-' + hash)) {
        // Instant switch on first load
        document.querySelectorAll('.pg').forEach(p => p.classList.remove('on'));
        document.getElementById('pg-' + hash).classList.add('on');
        document.querySelectorAll('.npill[data-p]').forEach(p => p.classList.toggle('on', p.getAttribute('data-p') === hash));
        curPage = hash;
        setTimeout(() => checkReveal(), 50);
    }
});
let drawerOpen = false;
function toggleDrawer() {
  drawerOpen = !drawerOpen;
  document.getElementById('drawer').classList.toggle('open', drawerOpen);
  const s = document.querySelectorAll('.hbg span');
  if (drawerOpen) { s[0].style.transform = 'rotate(45deg) translate(5px,5px)'; s[1].style.opacity = '0'; s[2].style.transform = 'rotate(-45deg) translate(5px,-5px)'; }
  else { s[0].style.transform = ''; s[1].style.opacity = ''; s[2].style.transform = ''; }
}

/* ── SCROLL REVEAL ── */
const io = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
}, { threshold: .1, rootMargin: '0px 0px -24px 0px' });
function checkReveal() {
  document.querySelectorAll('.pg.on .rv:not(.in)').forEach(el => io.observe(el));
}
checkReveal();
new MutationObserver(() => checkReveal()).observe(document.body, { attributes: true, attributeFilter: ['class'], subtree: true });

/* ── PORTFOLIO FILTER ── */
function pfFilter(cat, btn) {
  document.querySelectorAll('.pfb').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  document.querySelectorAll('.pjc').forEach(c => {
    const show = cat === 'all' || c.getAttribute('data-cat') === cat;
    c.style.opacity = show ? '1' : '0.15';
    c.style.pointerEvents = show ? 'all' : 'none';
  });
}

/* ── CONTACT FORM ── */
function cfSubmit() {
  const p = document.getElementById('cf-prenom').value;
  const e = document.getElementById('cf-email').value;
  if (!p || !e) { showToast(lang === 'fr' ? 'Veuillez remplir les champs requis.' : 'Please fill in the required fields.', 'err'); return; }
  showToast(lang === 'fr' ? `Message envoyé ! On vous répond sous 24h, ${p}.` : `Message sent! We'll reply within 24h, ${p}.`);
  ['cf-prenom', 'cf-nom', 'cf-email', 'cf-co', 'cf-msg'].forEach(id => { const el = document.getElementById(id); if (el) el.value = ''; });
}

/* ── TOAST ── */
function showToast(msg, type) {
  const t = document.getElementById('toast'), txt = document.getElementById('toast-t');
  txt.textContent = msg;
  t.style.borderColor = type === 'err' ? 'var(--m)' : 'var(--line2)';
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 4000);
}

/* ── NAV SCROLL SHADOW ── */
window.addEventListener('scroll', () => {
  document.getElementById('nav').style.boxShadow = window.scrollY > 40 ? '0 4px 40px rgba(0,0,0,.2)' : 'none';
}, true);

/* ── DRAG TO SCROLL (TESTIMONIALS) ── */
document.querySelectorAll('.testi-track').forEach(track => {
  let isDown = false;
  let startX;
  let scrollLeft;

  track.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - track.offsetLeft;
    scrollLeft = track.scrollLeft;
    // Disable scroll snap while dragging for smooth experience
    track.style.scrollSnapType = 'none'; 
  });
  track.addEventListener('mouseleave', () => {
    isDown = false;
    track.style.scrollSnapType = 'x mandatory';
  });
  track.addEventListener('mouseup', () => {
    isDown = false;
    track.style.scrollSnapType = 'x mandatory';
  });
  track.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - track.offsetLeft;
    const walk = (x - startX) * 1.5; 
    track.scrollLeft = scrollLeft - walk;
  });
});