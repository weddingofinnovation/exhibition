# COIS — The Exhibition Network

India's B2B exhibition platform. Browse 500+ verified trade shows, book stalls, and commission stall design & fabrication — all in one place.

## Pages

| File | Description |
|------|-------------|
| `index.html` | Homepage — hero, featured events, booking CTA |
| `events.html` | Browse & filter 517 verified trade shows across India |
| `event-detail.html` | Individual event page with stall booking |
| `design_fabrication.html` | Stall design & fabrication services |
| `blog.html` | Blog — articles, case studies, and industry insights |

## Features

- **Event discovery** — filter by industry, city, date range, and stall size
- **Live availability** — real-time stall availability with visual indicators
- **Instant booking** — contact modal with callback request flow
- **11 industry categories** — Automotive, Pharma, Food & Bev, Electronics, Textiles, Logistics, Renewables, Construction, Jewellery, Travel & Hospitality, and more
- **7 major cities** — Delhi/NCR, Mumbai, Bengaluru, Hyderabad, Chennai, Ahmedabad, Pune
- **Stall design studio** — integrated design & fabrication booking

## Tech Stack

- **HTML5** — semantic, no build step required
- **Tailwind CSS** — loaded via CDN
- **Vanilla JavaScript** — modal, mobile nav, filter toggles
- **Google Fonts** — Onest, Instrument Serif, JetBrains Mono
- **`components.js`** — shared module that injects the site-wide header, footer, and contact modal into every page; pages opt in via `<div id="site-header">` / `<div id="site-footer">` placeholders and a `data-page` attribute on `<body>` for active nav highlighting

## Getting Started

No build tools needed. Open any HTML file directly in a browser, or serve locally:

```bash
# Python
python -m http.server 8000

# Node (npx)
npx serve .
```

Then open `http://localhost:8000`.

## Assets

- `logo.png` — COIS brand logo
- `Imageframe.png` — placeholder event image
- `styles.css` — supplementary global styles
- `components.js` — shared header, footer, and contact modal

## Contact

- **Phone:** +91 11 4000 0000
- **Email:** concierge@cois.in
- **Offices:** Delhi · Mumbai · Bengaluru

---

© 2010–2026 COIS — The Exhibition Network Pvt. Ltd.
