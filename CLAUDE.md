# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

**Norvexa Logistics** — a demo marketing website for a logistics / freight
forwarding company. Plain PHP (no framework), vanilla JS and CSS. All
company-specific data is centralized so the site can be rebranded for any
company by editing a single file.

## Commands

- **Run locally:** `php -S localhost:8000` from the repo root, then open
  `http://localhost:8000/`. (Apache with `mod_rewrite` is used in production
  via `.htaccess`; the PHP built-in server serves existing files directly and
  routes the rest through `index.php`.)
- **Lint a file:** `php -l path/to/file.php`
- No build step, package manager or test suite.

## Architecture

Front-controller pattern with clean URLs (ЧПУ):

- `.htaccess` rewrites every non-file request to `index.php`.
- `index.php` parses the request path (`current_route()`), maps it to a view,
  and renders `includes/header.php` + `pages/{view}.php` + `includes/footer.php`.
- `config.php` holds **all** company data (name, legal name, EIN, phone,
  address, social links) plus site content arrays (`$SERVICES`, `$STATS`,
  `$FEATURES`, `$FAQS`, `$TESTIMONIALS`, `$NAV`). **To rebrand the site, edit
  only this file.** Services are keyed by URL slug → `/services/{slug}`.
- `includes/functions.php` provides helpers: `url()`, `asset()` (mtime cache
  busting), `e()` (HTML escaping), `current_route()`, `is_active()`,
  `company_address()`, and an inline SVG `icon()` set.
- `pages/_form-handler.php` validates the shared Contact/Quote POST (honeypot +
  server-side checks); wire real email/CRM sending there.
- `assets/css/style.css` (design system via CSS custom properties) and
  `assets/js/main.js` (mobile nav, scroll reveals, animated counters, FAQ
  accordion).

Adding a page: add a route case in `index.php` and a matching file in `pages/`.

## Роль и стиль разработки

Ты профессиональный веб-разработчик с опытом работы 10 лет. Ты пишешь на PHP,
JavaScript, CSS и HTML.

Принципы работы над проектами:

- **Изображения** — используешь картинки из бесплатных фотостоков.
- **Качество** — все проекты лёгкие, быстрые, функциональные и современные.
- **Целевая аудитория** — сайты ориентированы на коммерческие компании,
  занимающиеся логистикой.
- **Язык сайтов** — весь контент на английском языке.
- **Юридические страницы** — чётко прописываешь Terms и Privacy на сайтах.
