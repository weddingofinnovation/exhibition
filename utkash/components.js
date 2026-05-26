;(function () {
  'use strict';

  var PAGE = document.body.dataset.page || '';

  var NAV = [
    { href: 'index.html',              key: 'home',   label: 'Home'           },
    { href: 'events.html',             key: 'events', label: 'Browse events' },
    { href: 'design_fabrication.html', key: 'design', label: 'Design &amp; Fabrication'  },
    { href: 'blog.html',               key: 'blog',   label: 'Blog'           }
  ];

  /* ── build header string ── */
  var desktopLinks = NAV.map(function(n) {
    var cls = n.key === PAGE ? 'text-green font-medium' : 'hover:text-green';
    return '<a class="' + cls + '" href="' + n.href + '">' + n.label + '</a>';
  }).join('');

  var mobileLinks = NAV.map(function(n) {
    var active = n.key === PAGE ? ' text-green' : '';
    return '<a href="' + n.href + '" class="py-3 border-b hairline flex items-center justify-between' + active + '">'
      + n.label + ' <span style="color:#60655F;">&#8594;</span></a>';
  }).join('');

  var HEADER =
    '<div class="bg-ink text-white/85 text-[12.5px]">'
    + '<div class="mx-auto max-w-[1320px] px-4 lg:px-8 h-9 flex items-center justify-between gap-6">'
    + '<div class="flex items-center gap-3"><span class="pulse-dot"></span>'
    + '<span class="hidden md:inline"><span class="text-white font-medium">Live:</span> 7 shows on the floor today across 5 cities</span>'
    + '<span class="md:hidden"><span class="text-white font-medium">Live:</span> 7 shows &middot; 5 cities</span></div>'
    + '<div class="hidden md:flex items-center gap-5">'
    + '<a href="tel:+911140000000" class="hover:text-white">+91 11 4000 0000</a>'
    + '<span class="opacity-30">&middot;</span>'
    + '<a href="mailto:concierge@cois.in" class="hover:text-white">concierge@cois.in</a>'
    + '</div></div></div>'
    + '<header class="sticky top-0 z-40 bg-white/95 backdrop-blur rule-b">'
    + '<div class="mx-auto max-w-[1320px] px-4 lg:px-8 h-[72px] flex items-center justify-between gap-6">'
    + '<a href="index.html" class="flex items-center" aria-label="COIS"><img src="logo.png" alt="COIS" class="h-9 md:h-10 w-auto"/></a>'
    + '<nav class="hidden lg:flex items-center gap-8 text-[14.5px]">' + desktopLinks + '</nav>'
    + '<div class="flex items-center gap-2">'
    + '<button type="button" class="open-contact hidden md:inline-flex items-center gap-2 h-10 px-5 btn-primary rounded-full text-[14px] font-semibold group">Contact us <span class="arrow">&#8594;</span></button>'
    + '<button id="mnav-btn" class="flex lg:hidden items-center justify-center h-10 w-10 rounded-full border hairline cursor-pointer" aria-label="Menu" aria-expanded="false">'
    + '<svg id="mnav-icon-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0A0E0C" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h16"/></svg>'
    + '<svg id="mnav-icon-close" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0A0E0C" stroke-width="1.8" style="display:none"><path d="M6 6l12 12M18 6L6 18"/></svg>'
    + '</button></div></div></header>'
    + '<div id="mnav-panel" style="display:none;background:#fff;border-top:1px solid #E6E4DC;border-bottom:1px solid #E6E4DC;">'
    + '<nav class="mx-auto max-w-[1320px] px-5 py-4 flex flex-col text-[16px] font-medium">'
    + mobileLinks
    + '<button type="button" class="open-contact mt-3 h-11 px-5 btn-primary rounded-full text-[14px] font-semibold flex items-center justify-center">Contact us &#8594;</button>'
    + '</nav></div>';

  var BADGES = ['UFI Member','IEIA Certified','ISO 9001:2015','FICCI Affiliate'].map(function(b) {
    return '<span class="chip text-[11.5px]"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="#0B7A36" stroke-width="1.5"><path d="M2 6l3 3 5-6"/></svg>' + b + '</span>';
  }).join('');

  var FOOTER =
    '<section class="bg-ink text-white">'
    + '<div class="mx-auto max-w-[1320px] px-4 lg:px-8 py-20 lg:py-28">'
    + '<div class="grid grid-cols-12 gap-10 items-end">'
    + '<div class="col-span-12 lg:col-span-7">'
    + '<div class="small-caps" style="color:#8A8F87">Need help choosing?</div>'
    + '<h2 class="mt-3 text-[40px] md:text-[56px] lg:text-[64px] font-semibold leading-[1.04] tracking-[-0.02em]">Talk to a <span class="serif italic font-normal" style="color:#10973F;">producer</span> &#8212; free.</h2>'
    + '</div><div class="col-span-12 lg:col-span-5">'
    + '<p class="text-[16px] leading-relaxed max-w-[44ch]" style="color:rgba(255,255,255,.7);">15-minute concierge call. We\'ll shortlist 3 shows that fit your industry, budget and audience.</p>'
    + '<form class="mt-6 bg-white text-ink rounded-full p-2 flex items-center gap-2" onsubmit="return false">'
    + '<div class="pl-5 flex items-center gap-2 text-muted"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 8l9 6 9-6"/><rect x="3" y="5" width="18" height="14" rx="2"/></svg></div>'
    + '<input type="email" placeholder="you@company.com" class="bg-transparent outline-none flex-1 h-12 text-[15px] placeholder:text-muted"/>'
    + '<button class="btn-green rounded-full h-12 px-6 text-[14px] font-semibold inline-flex items-center gap-2 group">Book call <span class="arrow">&#8594;</span></button>'
    + '</form>'
    + '<div class="mt-5 flex flex-wrap gap-5 text-[13px]" style="color:rgba(255,255,255,.65);">'
    + '<span class="inline-flex items-center gap-1.5"><svg width="13" height="13" viewBox="0 0 12 12" fill="none" stroke="#10973F" stroke-width="1.6"><path d="M2 6l3 3 5-6"/></svg>No credit card</span>'
    + '<span class="inline-flex items-center gap-1.5"><svg width="13" height="13" viewBox="0 0 12 12" fill="none" stroke="#10973F" stroke-width="1.6"><path d="M2 6l3 3 5-6"/></svg>15-min response</span>'
    + '<span class="inline-flex items-center gap-1.5"><svg width="13" height="13" viewBox="0 0 12 12" fill="none" stroke="#10973F" stroke-width="1.6"><path d="M2 6l3 3 5-6"/></svg>Curated shortlist</span>'
    + '</div></div></div></div></section>'
    + '<footer style="background:#F7F5EC;border-top:1px solid #E6E4DC;">'
    + '<div class="mx-auto max-w-[1320px] px-4 lg:px-8 pt-16 pb-8">'
    + '<div class="grid grid-cols-12 gap-10">'
    + '<div class="col-span-12 lg:col-span-5">'
    + '<img src="logo.png" alt="COIS" class="h-11 w-auto"/>'
    + '<p class="mt-5 text-[15px] leading-relaxed max-w-[42ch]" style="color:#343B37;">India\'s B2B exhibition network. Book verified trade shows, commission stall design &amp; build &#8212; in one platform, since 2010.</p>'
    + '<div class="mt-6 flex flex-wrap items-center gap-2">' + BADGES + '</div></div>'
    + '<div class="col-span-6 lg:col-span-3"><div class="small-caps">Explore</div>'
    + '<ul class="mt-4 space-y-2.5 text-[14.5px]">'
    + '<li><a href="index.html" class="hover:text-green">Home</a></li>'
    + '<li><a href="events.html" class="hover:text-green">Browse events</a></li>'
    + '<li><a href="#" class="open-contact hover:text-green">Contact us</a></li>'
    + '<li><a href="design_fabrication.html" class="hover:text-green">Stall design &amp; fabrication</a></li>'
    + '<li><a href="blog.html" class="hover:text-green">Blog</a></li>'
    + '</ul></div>'
    + '<div class="col-span-6 lg:col-span-4"><div class="small-caps">Offices</div>'
    + '<ul class="mt-4 space-y-3 text-[14.5px]">'
    + '<li><span class="font-semibold">Delhi</span> &middot; C-12, Nehru Place &middot; +91 11 4000 0000</li>'
    + '<li><span class="font-semibold">Mumbai</span> &middot; BKC &middot; +91 22 6000 0000</li>'
    + '<li><span class="font-semibold">Bengaluru</span> &middot; Indiranagar &middot; +91 80 4100 0000</li>'
    + '</ul>'
    + '<div class="mt-5 flex items-center gap-3">'
    + '<a href="#" aria-label="LinkedIn" class="h-9 w-9 rounded-full bg-white border hairline flex items-center justify-center hover:border-ink transition"><svg width="14" height="14" viewBox="0 0 24 24" fill="#0A0E0C"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg></a>'
    + '<a href="#" aria-label="Instagram" class="h-9 w-9 rounded-full bg-white border hairline flex items-center justify-center hover:border-ink transition"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#0A0E0C" stroke-width="1.7"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#0A0E0C"/></svg></a>'
    + '<a href="#" aria-label="X" class="h-9 w-9 rounded-full bg-white border hairline flex items-center justify-center hover:border-ink transition"><svg width="12" height="12" viewBox="0 0 24 24" fill="#0A0E0C"><path d="M18 2h3l-7.5 8.5L22 22h-6.5l-5-6.5L5 22H2l8-9L2 2h6.5l4.5 6z"/></svg></a>'
    + '</div></div></div>'
    + '<div class="mt-12 pt-6 flex flex-wrap items-center justify-between gap-4 text-[12.5px]" style="border-top:1px solid #E6E4DC;color:#60655F;">'
    + '<div>&#169; 2010&#8211;2026 COIS &#8212; The Exhibition Network Pvt. Ltd.</div>'
    + '<div class="flex items-center gap-2"><span class="pulse-dot"></span>All systems operational</div>'
    + '</div></div></footer>';

  /* ── inject ── */
  function inject(id, html) {
    var el = document.getElementById(id);
    if (!el) return;
    var wrap = document.createElement('div');
    wrap.style.display = 'contents';
    el.replaceWith(wrap);
    wrap.outerHTML = html;
  }

  inject('site-header', HEADER);
  inject('site-footer', FOOTER);

  /* ── global contact modal (injected on pages that don't have their own) ── */
  if (!document.getElementById('contact-modal')) {
    document.body.insertAdjacentHTML('beforeend',
      '<div id="contact-modal" class="fixed inset-0 z-[80] hidden items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="contact-modal-title">'
      + '<div class="absolute inset-0 bg-ink/60 backdrop-blur-sm contact-close cursor-pointer"></div>'
      + '<div class="relative bg-white w-full max-w-[480px] rounded-2xl shadow-2xl overflow-hidden">'
      + '<button type="button" class="contact-close absolute top-3.5 right-3.5 h-9 w-9 rounded-full hover:bg-bone flex items-center justify-center transition" aria-label="Close">'
      + '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0A0E0C" stroke-width="1.8"><path d="M6 6l12 12M18 6L6 18"/></svg>'
      + '</button>'
      + '<div class="p-7 lg:p-9">'
      + '<div class="small-caps">Get in touch</div>'
      + '<h3 id="contact-modal-title" class="mt-2 text-[24px] md:text-[28px] font-semibold leading-tight tracking-[-0.015em]">Contact us</h3>'
      + '<p class="mt-2 text-[14px] leading-relaxed" style="color:#343B37;">Share your details and our team will call you back within 15 minutes (IST work hours).</p>'
      + '<form id="contact-form" class="mt-6 space-y-4" novalidate>'
      + '<div><label class="block text-[12px] font-semibold mb-1.5" style="color:#343B37;">Full name</label>'
      + '<input name="name" type="text" required placeholder="Your name" style="border-color:#E6E4DC;" class="w-full h-11 px-3.5 rounded-lg border text-[14px] transition focus:border-black" /></div>'
      + '<div><label class="block text-[12px] font-semibold mb-1.5" style="color:#343B37;">Email</label>'
      + '<input name="email" type="email" required placeholder="you@company.com" style="border-color:#E6E4DC;" class="w-full h-11 px-3.5 rounded-lg border text-[14px] transition focus:border-black" /></div>'
      + '<div><label class="block text-[12px] font-semibold mb-1.5" style="color:#343B37;">Phone</label>'
      + '<input name="phone" type="tel" required placeholder="+91 ..." style="border-color:#E6E4DC;" class="w-full h-11 px-3.5 rounded-lg border text-[14px] transition focus:border-black" /></div>'
      + '<button type="submit" class="btn-primary rounded-full w-full h-12 inline-flex items-center justify-center gap-2 text-[14px] font-semibold group mt-2">Request callback <span class="arrow">&#8594;</span></button>'
      + '<p class="text-[11.5px] text-center leading-relaxed" style="color:#60655F;">By submitting you agree to our <a href="privacy.html" class="underline">privacy notice</a>. No spam.</p>'
      + '</form>'
      + '<div id="contact-success" class="hidden text-center py-6">'
      + '<div class="h-14 w-14 rounded-full mx-auto flex items-center justify-center" style="background:#E8F3ED;">'
      + '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0B7A36" stroke-width="2"><path d="M5 12l5 5L20 7"/></svg>'
      + '</div>'
      + '<h4 class="mt-4 text-[20px] font-semibold">Request received.</h4>'
      + '<p class="mt-2 text-[14px]" style="color:#343B37;">Our team will call you back within 15 minutes during IST work hours.</p>'
      + '<button type="button" class="contact-close mt-5 btn-outline rounded-full h-11 px-6 inline-flex items-center gap-2 text-[13.5px] font-medium">Close</button>'
      + '</div>'
      + '</div></div></div>'
    );

    (function () {
      var modal   = document.getElementById('contact-modal');
      var form    = document.getElementById('contact-form');
      var success = document.getElementById('contact-success');
      var lastFocus = null;
      function openModal() {
        lastFocus = document.activeElement;
        form.classList.remove('hidden');
        success.classList.add('hidden');
        form.reset();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        setTimeout(function () { form.querySelector('input[name="name"]').focus(); }, 30);
      }
      function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
        if (lastFocus) lastFocus.focus();
      }
      document.addEventListener('click', function (e) {
        var trigger = e.target.closest('.open-contact');
        if (trigger) { e.preventDefault(); openModal(); return; }
        if (e.target.closest('.contact-close')) { closeModal(); }
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
      });
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        form.classList.add('hidden');
        success.classList.remove('hidden');
      });
    })();
  }

  /* ── mobile menu ── */
  document.addEventListener('click', function (e) {
    var btn   = document.getElementById('mnav-btn');
    var panel = document.getElementById('mnav-panel');
    if (!btn || !panel) return;
    if (btn.contains(e.target)) {
      var open = panel.style.display !== 'none';
      panel.style.display = open ? 'none' : 'block';
      document.getElementById('mnav-icon-open').style.display  = open ? '' : 'none';
      document.getElementById('mnav-icon-close').style.display = open ? 'none' : '';
      btn.setAttribute('aria-expanded', String(!open));
    } else if (panel.style.display !== 'none' && !panel.contains(e.target)) {
      panel.style.display = 'none';
      document.getElementById('mnav-icon-open').style.display  = '';
      document.getElementById('mnav-icon-close').style.display = 'none';
      btn.setAttribute('aria-expanded', 'false');
    }
  });

})();