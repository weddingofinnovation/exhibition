<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>The Blog — COIS · Trade show insights, stall design & exhibitor resources</title>
<meta name="description" content="Industry insights, stall design inspiration, event planning guides and exhibitor case studies from India's leading B2B exhibition network." />

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Onest:wght@300;400;500;600;700;800&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            ink:'#0A0E0C', char:'#1C211F', slate:'#343B37', muted:'#60655F', mutedL:'#8A8F87',
            line:'#E6E4DC', hair:'#EFEDE4', paper:'#FFFFFF', bone:'#F7F5EC', cream:'#F1EEDE',
            mint:'#E8F3ED', green:'#0B7A36', greenL:'#10973F', greenD:'#064D22', amber:'#C97B1F',
          },
          fontFamily:{ sans:['Onest','ui-sans-serif','system-ui'], serif:['Instrument Serif','serif'], mono:['JetBrains Mono','ui-monospace'] },
        }
      }
    }
  </script>

  <style>
    html,body{ background:#FFFFFF; color:#0A0E0C; }
    body{ font-family:'Onest',sans-serif; -webkit-font-smoothing:antialiased; font-feature-settings:"ss01"; }
    .serif{ font-family:'Instrument Serif',serif; font-weight:400; }
    .mono{ font-family:'JetBrains Mono',monospace; }

    .hairline{ border-color:#E6E4DC; }
    .rule-t{ border-top:1px solid #E6E4DC; }
    .rule-b{ border-bottom:1px solid #E6E4DC; }
    input:focus, select:focus{ outline:none; }

    .btn-primary{ background:#0A0E0C; color:#fff; transition:background .25s, transform .2s; }
    .btn-primary:hover{ background:#0B7A36; }
    .btn-primary:active{ transform:translateY(1px); }
    .btn-green{ background:#0B7A36; color:#fff; transition:background .25s; }
    .btn-green:hover{ background:#064D22; }
    .btn-ghost{ background:transparent; color:#0A0E0C; transition:background .2s; }
    .btn-ghost:hover{ background:#F7F5EC; }
    .btn-outline{ border:1px solid #0A0E0C; color:#0A0E0C; transition:all .25s; }
    .btn-outline:hover{ background:#0A0E0C; color:#fff; }

    .chip{ border:1px solid #E6E4DC; background:#fff; padding:.45rem .95rem; font-size:13px; border-radius:999px; transition:all .25s; color:#1C211F; display:inline-flex; align-items:center; gap:.4rem; }
    .chip:hover{ border-color:#0A0E0C; background:#F7F5EC; }
    .chip.active{ background:#0A0E0C; color:#fff; border-color:#0A0E0C; }

    .card{ border:1px solid #E6E4DC; background:#fff; border-radius:18px; overflow:hidden; transition:border-color .25s, transform .35s, box-shadow .35s; }
    .card:hover{ border-color:#0A0E0C; transform:translateY(-2px); box-shadow:0 16px 40px -24px rgba(10,14,12,.18); }

    .arrow{ display:inline-block; transition:transform .3s ease; }
    a:hover .arrow, button:hover .arrow, .group:hover .arrow{ transform:translateX(4px); }

    .pulse-dot{ width:8px; height:8px; border-radius:999px; background:#10973F; box-shadow:0 0 0 0 rgba(16,151,63,.6); animation:pulse 2s infinite; }
    @keyframes pulse{ 0%{box-shadow:0 0 0 0 rgba(16,151,63,.5)} 70%{box-shadow:0 0 0 10px rgba(16,151,63,0)} 100%{box-shadow:0 0 0 0 rgba(16,151,63,0)} }

    .badge-live{ display:inline-flex; align-items:center; gap:.4rem; padding:.25rem .55rem; border-radius:999px; background:#E8F3ED; color:#064D22; font-size:11.5px; font-weight:500; }
    .tag-cat{ display:inline-block; padding:.2rem .55rem; border-radius:6px; background:#F1EEDE; color:#343B37; font-size:11.5px; font-weight:500; }

    .cat-tabs{ display:flex; align-items:center; gap:6px; overflow-x:auto; scrollbar-width:none; padding-bottom:2px; }
    .cat-tabs::-webkit-scrollbar{ display:none; }
    .cat-tab{ flex-shrink:0; display:inline-flex; align-items:center; gap:8px; padding:10px 16px; border-radius:999px; font-size:13.5px; font-weight:500; color:#343B37; transition:all .25s; cursor:pointer; white-space:nowrap; border:1px solid transparent; }
    .cat-tab:hover{ background:#F7F5EC; }
    .cat-tab.on{ background:#0A0E0C; color:#fff; }

    .sidebar{ position:sticky; top:136px; align-self:start; }

    .sort-dropdown{ border:1px solid #E6E4DC; border-radius:999px; padding:8px 14px; background:#fff; font-size:13.5px; color:#0A0E0C; cursor:pointer; }

    .blog-search{ border:1px solid #E6E4DC; background:#fff; border-radius:12px; display:flex; align-items:center; padding:0 14px; gap:8px; height:44px; transition:border-color .2s; }
    .blog-search:focus-within{ border-color:#0A0E0C; }
    .blog-search input{ flex:1; border:0; background:transparent; font-size:14px; color:#0A0E0C; }
    .blog-search input::placeholder{ color:#8A8F87; }

    .article-img img{ transition:transform .5s ease; }
    .card:hover .article-img img{ transform:scale(1.04); }

    .featured-card{ position:relative; border-radius:18px; overflow:hidden; border:1px solid #E6E4DC; display:block; transition:border-color .25s, box-shadow .35s; }
    .featured-card:hover{ border-color:#0A0E0C; box-shadow:0 20px 50px -24px rgba(10,14,12,.24); }
    .featured-card:hover .feat-img img{ transform:scale(1.03); }
    .feat-img{ overflow:hidden; }
    .feat-img img{ transition:transform .6s ease; }

    .mr-num{ font-size:30px; font-weight:700; color:#E6E4DC; font-variant-numeric:tabular-nums; line-height:1; flex-shrink:0; width:44px; }

    .social-stat{ text-align:center; padding:14px 0; }
    .social-stat .val{ font-size:22px; font-weight:700; letter-spacing:-0.02em; }
    .social-stat .lbl{ font-size:10.5px; text-transform:uppercase; letter-spacing:.08em; color:#8A8F87; font-weight:600; margin-top:2px; }

    .small-caps{ font-size:11.5px; letter-spacing:.1em; text-transform:uppercase; font-weight:600; color:#60655F; }
    .num{ font-variant-numeric:tabular-nums lining-nums; }

    details > summary::-webkit-details-marker{ display:none; }
    details > summary{ list-style:none; }
    details[open] summary .faq-plus{ transform:rotate(45deg); }
    .faq-plus{ display:inline-block; transition:transform .25s; }

    .topbar-long{ display:inline; }
    .topbar-short{ display:none; }
    .mnav-btn{ display:none; }
    .mnav-panel{ display:none; }
    .mnav-toggle:checked ~ .mnav-panel{ display:block; }
    .mnav-toggle:checked ~ header .mnav-open{ display:none !important; }
    .mnav-toggle:checked ~ header .mnav-close{ display:inline !important; }
    .sticky-mobile{ position:fixed; left:0; right:0; bottom:0; z-index:50; background:#fff; border-top:1px solid #E6E4DC; padding:10px 14px; display:none; gap:8px; align-items:center; justify-content:space-between; box-shadow:0 -10px 30px -10px rgba(10,14,12,.15); }

    @keyframes rise{ from{opacity:0; transform:translateY(10px)} to{opacity:1; transform:translateY(0)} }
    .rise{ opacity:0; animation:rise .7s cubic-bezier(.2,.7,.2,1) forwards; }

    @media (max-width:767px){
      .topbar-long{ display:none; } .topbar-short{ display:inline; }
      .mnav-btn{ display:inline-flex !important; }
      .mnav-panel{ position:sticky; top:60px; z-index:39; }
      .sticky-mobile{ display:flex; }
      body{ padding-bottom:74px; }

      header.sticky > div{ height:60px; padding-left:14px; padding-right:14px; }
      header.sticky img[alt^="COIS"]{ height:30px; }
      header.sticky a.btn-primary{ height:40px; padding:0 16px; font-size:13px; }
      header.sticky a.btn-primary .arrow{ display:none; }

      section h2{ font-size:26px !important; line-height:1.15 !important; letter-spacing:-0.015em; }
      section > div.mx-auto.max-w-\[1320px\]{ padding-top:2.5rem !important; padding-bottom:2.5rem !important; }

      .main-grid{ grid-template-columns:1fr !important; gap:16px !important; }
      aside.sidebar{ position:static !important; display:none; }
      .results-grid{ grid-template-columns:1fr !important; gap:14px !important; }
      .featured-card .feat-meta{ padding:20px !important; }
      .featured-card h2{ font-size:20px !important; }
      .most-read-grid{ grid-template-columns:1fr !important; }

      footer .col-span-6{ width:50%; }
      footer .mt-12.pt-6{ flex-direction:column; align-items:flex-start; gap:10px; font-size:11.5px; }
      footer img[alt^="COIS"]{ height:38px; }

      section.bg-ink.text-white:last-of-type h2{ font-size:34px !important; line-height:1.06 !important; }
      section.bg-ink.text-white:last-of-type > div{ padding-top:2.5rem !important; padding-bottom:2.5rem !important; }
      section.bg-ink.text-white:last-of-type form input{ height:44px; font-size:14px; }
      section.bg-ink.text-white:last-of-type form button{ height:44px !important; padding:0 14px !important; font-size:13px; }
      section.bg-ink.text-white:last-of-type form > div:first-child{ display:none; }
    }
  </style>

</head>

<body data-page="blog">
 
 {{$slot}}     


<script>
  // FAQ accordion: rotate + on open
  document.querySelectorAll('details').forEach(d => {
    d.addEventListener('toggle', () => {
      const plus = d.querySelector('.faq-plus');
      if (plus) plus.style.transform = d.open ? 'rotate(45deg)' : 'rotate(0deg)';
    });
  });

  // Category tab switching
  document.querySelectorAll('.cat-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.cat-tab').forEach(t => t.classList.remove('on'));
      tab.classList.add('on');
    });
  });
</script>

<script src="components.js"></script>

</body>
</html>