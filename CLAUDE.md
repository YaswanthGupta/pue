# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a static HTML website for **PowerUp Solar Engineering** (`powerupsolarengineering.com`), deployed via GitHub Pages. There is no build system, package manager, or framework — changes are made directly to HTML/CSS/JS files and pushed to the `master` branch.

## Architecture

- **Pages**: Each page is a standalone `.html` file at the root (e.g., `index.html`, `about.html`, `contact.html`, `services.html`, `gallery.html`, `careers.html`, `clients.html`, `faq.html`, `prices.html`, `safety.html`, `blog.html`).
- **Custom styles**: `css/custom.css` — the only file to edit for styling changes. Organized by section (see table of contents at the top).
- **Custom scripts**: `js/custom.js` — jQuery-based; initializes all plugin behaviors (sliders, carousels, isotope gallery, contact form, Google Maps, mobile menu).
- **Third-party plugins** (vendored locally, do not modify):
  - `css/plugins/` and `js/plugins/` — Bootstrap, Slick, Nivo Slider, Magnific Popup, Isotope, Pace loader, Font Awesome 4.7
  - `js/jquery.js` — jQuery
  - `iconfont/` — custom icon font (edit via IcoMoon using `iconfont/selection.json`)

## Key Implementation Details

- **Navigation and layout** are duplicated across every HTML page — when updating the header/footer/nav, all pages must be updated.
- **Google Maps**: Initialized in `js/custom.js` (`createMap()`), centered at coordinates `17.002718, 81.803609`. The Maps API key is embedded in `index.html` and `contact.html`.
- **Contact form**: Submits via AJAX POST to `process-contact.php` (not present in this repo — handled server-side separately).
- **Gallery**: Uses Isotope masonry layout with category filtering. Gallery images live in `images/gallery/`.
- **Responsive carousels**: Mobile (<768px) uses Slick in carousel mode; desktop displays as grid. This logic is in `js/custom.js` (`startCarousel()`).

## Deployment

Push to `master` branch — GitHub Pages serves the site automatically via the `CNAME` record pointing to `powerupsolarengineering.com`.
