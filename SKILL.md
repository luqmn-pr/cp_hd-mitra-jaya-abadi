---
description: Redesign and implement the public-facing website of CV. HD
  Mitra Jaya Abadi as a polished, modern corporate service and portfolio
  showcase. Use when modifying the homepage, service pages, portfolio
  pages, about page, contact page, navigation, visual system, or
  responsive frontend.
name: hd-mitra-jaya-website-redesign
---

# SKILL: HD Mitra Jaya Abadi --- Professional Website Redesign

## 1. Role and mission

Act as a senior product designer, UX/UI designer, and senior Laravel +
Blade + Tailwind frontend engineer.

Your mission is to redesign the existing public website of **CV. HD
Mitra Jaya Abadi** so it feels like a credible, established Indonesian
B2B service and procurement company---not a generic AI-generated SaaS
landing page.

The redesign must be:

-   Professional and credible for universities, educational
    institutions, government/other institutions, and business clients.
-   Fresh, modern, clean, and visually distinctive.
-   Portfolio-led: actual work and deliverables must be prominent.
-   Clear about the company's four active service areas.
-   Easy to navigate and easy to contact.
-   Responsive, accessible, performant, and maintainable.
-   Fully integrated with the existing Laravel + Filament content model.

Do not merely change colors, add gradients, or round every card. Rework
visual hierarchy, content composition, spacing, image strategy,
typography, page rhythm, and reusable components.

## 2. Read project context first

Before changing code:

1.  Read the repository's `CLAUDE.md` if it exists.
2.  Inspect the current Laravel project, routes, Blade views, layouts,
    Tailwind setup, assets, Models, and Filament Resources.
3.  Identify which pages and components already exist.
4.  Identify the installed Laravel, Filament, Tailwind, and frontend
    build versions from the actual project files.
5.  Inspect the four user-provided screenshots if they are available in
    the repository or current task context.
6.  Inspect the real company logo and portfolio images before choosing
    final brand colors or image treatments.

Do not assume file paths, package versions, or component names. Do not
replace working backend functionality just to achieve a visual redesign.

### Existing screenshots to use as redesign input

The supplied screenshots show these areas of the current AI-generated
implementation:

-   Screenshot 1: navigation and hero section.
-   Screenshot 2: statistics strip and four service cards.
-   Screenshot 3: about section and beginning of portfolio section.
-   Screenshot 4: CTA and footer.

Treat these as **the current implementation to improve**, not as the
desired visual reference.

## 3. Company and business context

### 3.1 Company

-   Company name: **CV. HD Mitra Jaya Abadi**
-   Existing website: https://hd-mjabadi.com/
-   Business audience: universities, colleges, educational institutions,
    agencies/institutions, and organizations.
-   Website purpose: corporate profile, service explanation, work
    showcase, and contact/inquiry.
-   The project uses Laravel + Filament.
-   Public frontend is expected to use Laravel Blade and the frontend
    stack already installed in the repository.

### 3.2 Current active services --- authoritative list

The client has confirmed that **only these four services are active for
the new website**:

1.  **Percetakan**
2.  **Konveksi**
3.  **Pengadaan Barang/Jasa Lainnya**
4.  **Sistem Informasi**

Do not reintroduce inactive categories from the older 2022 company
profile (ATK, Fotografi, Desain Interior, or Meubeler) as active
services.

The service list must remain database-driven. Do not hardcode the four
services in the Blade templates. The four are the initial active
records, not a permanent hard limit in the application.

### 3.3 Service descriptions and content direction

Use the following client-provided service descriptions as the current
baseline. The client may refine the copy later.

**Percetakan**

> Kami melayani pengadaan dan pemesanan pencetakan seperti brosur, map,
> kwitansi, buku wisuda, dan jenis percetakan lainnya yang ada di
> perguruan tinggi maupun instansi.

Visual direction: real printed materials, brochures, folders,
certificates, graduation books, printed stationery, close-up
paper/material details, and finished print products.

**Konveksi**

> Kami melayani pengadaan dan pemesanan konveksi seperti toga wisuda,
> jas almamater, jaket, jersey, baju, dan jenis konveksi lainnya yang
> ada di perguruan tinggi maupun instansi.

Visual direction: real garments, graduation gowns, academic jackets,
uniforms, jerseys, textile details, stitching, fabric, and finished
apparel.

**Pengadaan Barang/Jasa Lainnya**

> Kami melayani pengadaan barang/jasa di perguruan tinggi maupun
> instansi.

The client has supplied actual example imagery described as **piagam
wisuda and cenderamata**. The image collage shows graduation
awards/plaque-like items, graduation-related textile items, a branded
commemorative item, and a branded tumbler-like item.

Visual direction: real institutional merchandise, graduation awards,
plaques, cenderamata, branded merchandise, and varied procurement
deliverables. This service must support many product types; do not
visually restrict it to one product category.

**Sistem Informasi**

> Kami melayani pengadaan dan pemesanan sistem informasi seperti SIAKAD,
> persuratan, atau sistem lainnya sebagai optimalisasi kinerja di
> perguruan tinggi maupun instansi.

Visual direction: actual application screenshots, dashboards, academic
information systems, correspondence workflows, desktop/mobile
interfaces, and software product mockups based on real supplied
screenshots. Do not invent an application UI and present it as a real
delivered system.

### 3.4 Company facts and content integrity

The older company profile (2022) mentions that the company was
established in August 2021 and contains historical
identity/contact/vision/mission information. Treat it as a historical
reference, not as automatic confirmation of current facts.

The following details are **not confirmed as current** and must not be
published without confirmation:

-   Current phone and WhatsApp number.
-   Current address.
-   Current director/management details.
-   Current legal status and permits.
-   Current vision and mission.
-   Current tagline.
-   Current client/partner list and permission to display logos.
-   Current project counts, partner counts, satisfaction percentages,
    capacity, or guarantees.

The old profile contains conflicting phone numbers. The generated
screenshot also displays a different phone number. Do not copy any of
these numbers into the redesigned website without confirmation.

Use the phrase **"Service Excellent"** only if the client confirms it
remains an approved tagline/brand phrase.

## 4. Diagnosis: why the current design feels AI-generated

The supplied screenshots reveal several patterns that must be corrected.

### 4.1 Hero section: fake SaaS dashboard visual

Current problem: - The hero's right side contains a floating
dashboard-like mockup with four miniature service cards, browser dots, a
satisfaction score, and project-count badges. - This looks like a
generic AI SaaS landing page. - It does not show the company's actual
work. - Floating badges and decorative geometry add visual noise without
proving business capability.

Required correction: - Replace the fake dashboard with real company work
photography. - Use one strong editorial image or a carefully composed
image collage of two or three real deliverables. - The hero should
communicate the company's business in seconds. - Use natural image
crops, considered negative space, and a restrained caption if needed. -
Do not invent a project counter, rating, guarantee, or satisfaction
badge.

### 4.2 Unsupported statistics

The current screenshots show: - `+50 Mitra & Instansi` -
`+500 Proyek Selesai` - `+10 Tahun Pengalaman` -
`+98.9% Kepuasan Pelanggan` - `500+ Pekerjaan Selesai` -
`100% Garansi Kualitas`

These figures and guarantees are not verified. The `+10 Tahun` claim
also conflicts with the 2022 profile's August 2021 establishment date
when viewed in November 2026.

Required correction: - Remove these metrics unless the client supplies
evidence and approves publication. - Never create fake counters to fill
a section. - Never animate unsupported statistics. - If a trust strip is
useful, use factual non-numeric statements such as the four service
areas or the stated audience (perguruan tinggi dan instansi), subject to
client approval. - Prefer real project evidence, approved partner logos,
and accurate company information over decorative numbers.

### 4.3 Generic service cards

Current problem: - Four identical cards with generic icons, text, and
"Lihat Detail" links look like a default component library. - The cards
do not communicate what the company actually produces or delivers. -
Long descriptions make the row visually dense.

Required correction: - Make services visual and editorial. - Use real
service-specific images as the primary visual anchor. - Use a clear
hierarchy: small index/eyebrow, service title, concise description, and
understated link. - Keep the four services visually related but do not
make every section feel like an identical dashboard card. - Use a 2x2
editorial grid or a balanced four-column layout on large screens,
depending on the image assets and available width. - On smaller screens,
stack naturally or use a two-column grid where comfortable. - Do not use
an icon as a substitute for a meaningful product image when a real image
is available.

### 4.4 About section: fabricated feature claims

Current problem: - The current About section uses blocks such as
"Bandung Workshop", "100% Garansi Kualitas", "Legalitas Lengkap",
"Kapasitas Produksi Besar", and "Akuntabilitas & LPJ Transparan". - Some
statements are unsupported by the confirmed brief. - A grid of statistic
tiles does not tell the company's story.

Required correction: - Use an editorial two-column section: authentic
company image on one side, concise company narrative on the other. - Use
verified company information only. - If no approved current company
description is available, use a restrained provisional summary based on
the four confirmed services and clearly keep it editable through CMS. -
Do not claim production capacity, quality guarantees, legal
completeness, workshop facilities, or specific administrative
commitments without evidence. - Use a short list of approved service
values only after confirmation.

### 4.5 Portfolio section is underdeveloped

Current problem: - The screenshot shows a portfolio heading, but the
section does not yet demonstrate a compelling visual portfolio. - The
business needs actual proof of delivery, not only claims.

Required correction: - Give the portfolio section strong visual weight
on the homepage. - Show actual portfolio cover images from the
database. - Each item should include a clear title and service
category. - Use varied image crops and a deliberate grid, not four
generic icon cards. - Provide a clear "Lihat Semua Portofolio" link. -
If there are no published portfolios, do not show fabricated sample
projects. Use a polished empty state in the development environment or
hide the section until real data is available.

### 4.6 CTA and footer

Current problem: - The current CTA is a large green panel with generic
copy. - The footer includes contact information that has not been
reconfirmed. - "Portal Admin" appears in the public navigation and
competes with customer-facing navigation.

Required correction: - Keep one clear primary conversion action: **Minta
Penawaran** or **Hubungi Kami**, using the confirmed contact method. -
Use a concise CTA section with good contrast and enough breathing
room. - The secondary action can link to the contact page or service
catalogue. - Do not promise "estimasi biaya transparan" or "penawaran
terbaik" unless approved by the client. - Remove "Portal Admin" from the
public navigation. The admin panel can remain accessible at the actual
Filament panel path (commonly `/admin`, but inspect the project
configuration). - Footer should contain confirmed company identity,
public navigation, and confirmed contact details only. - Do not invent
social media links, address, phone, or email.

### 4.7 Repetition and visual rhythm

Current problem: - The same white background, card shape, rounded
corners, icon treatment, and green buttons are repeated in every
section. - The result looks assembled from a generic AI template.

Required correction: - Create a varied page rhythm using a restrained
mix of white/off-white backgrounds, editorial image sections, subtle
separators, and one or two dark/primary sections where useful. - Do not
put every content block inside a card. - Use cards only when they
improve grouping or interaction. - Vary section composition while
preserving a consistent design system.

------------------------------------------------------------------------

## 5. Art direction and design principles

### 5.1 Overall direction

Use this design direction:

**Modern Corporate Editorial + Real Portfolio Showcase**

The site should feel like a contemporary Indonesian B2B company with a
clear service offering and credible work documentation.

Visual qualities: - Calm, confident, precise. - Modern but not trendy
for its own sake. - Clean and editorial. - Strong photography. - Clear
hierarchy. - Generous but controlled whitespace. - Subtle details
instead of excessive decoration. - Professional and approachable.

Avoid: - Generic SaaS dashboard mockups in the hero. - Excessive
gradients and glowing orbs. - Random floating badges. - Large quantities
of rounded cards. - Excessive pill-shaped labels. - Random icons in
every section. - Overly dramatic animations. - Fake counters, fake
ratings, fake testimonials, fake client logos. - Stock photos presented
as company work. - Dense text walls. - Unnecessary decorative shapes and
grid patterns.

### 5.2 Brand color approach

The current generated design uses emerald/teal green. This can be
retained as a **provisional direction**, but inspect the real company
logo before finalizing the palette.

Suggested provisional tokens:

``` css
:root {
  --color-primary: #087F68;
  --color-primary-dark: #066653;
  --color-primary-soft: #E8F5F1;

  --color-ink: #14211F;
  --color-body: #53635F;
  --color-muted: #788681;

  --color-background: #FFFFFF;
  --color-background-soft: #F6F8F7;
  --color-surface: #FFFFFF;

  --color-border: #E4EBE8;
  --color-border-strong: #D3DEDA;

  --color-footer: #14211F;
  --color-footer-text: #DCE7E2;
}
```

Rules: - Verify the primary color against the real logo. - Use primary
green for key actions, active states, small highlights, and selected
visual details. - Use dark ink for headings. - Use neutral backgrounds
for most sections. - Do not make the whole site green. - Do not add a
second accent color without a clear reason. - Maintain WCAG AA contrast
for text and interactive elements.

### 5.3 Typography

Use a clean modern sans-serif type system.

Preferred: - A single well-chosen family such as **Manrope**, **Plus
Jakarta Sans**, or the project's existing approved font. - Use one
family consistently unless there is a compelling brand reason to pair
fonts. - If using a remote font, provide a sensible system fallback and
avoid blocking rendering. - Do not use too many font weights.

Suggested hierarchy: - H1: 52--68px desktop, 38--46px tablet, 34--40px
mobile; line-height around 1.0--1.12. - H2: 36--46px desktop, 28--34px
mobile. - H3: 21--26px. - Body: 16--18px with 1.6--1.75 line-height. -
Small labels: 11--13px with moderate tracking; use sparingly.

Headings should be expressive but not oversized to the point of
dominating the content.

### 5.4 Layout and spacing

Use a consistent container: - Max width: approximately 1200--1280px. -
Desktop side padding: 32--48px. - Tablet side padding: 24px. - Mobile
side padding: 18--22px.

Suggested spacing scale: - 4, 8, 12, 16, 24, 32, 48, 64, 88, 112px.

Section vertical spacing: - Desktop: approximately 88--120px depending
on section density. - Mobile: approximately 56--76px.

Do not use excessive blank space merely to make a section feel premium.
Whitespace must support hierarchy and content.

### 5.5 Borders, radius, and shadows

-   Prefer subtle 1px borders for grouping.
-   Use small-to-medium corner radii (8--16px) for most components.
-   Use larger radii only for large image frames where appropriate.
-   Avoid applying the same large radius to every element.
-   Shadows should be subtle and rare.
-   Avoid floating-card stacks and heavy drop shadows.
-   Use separators and spacing instead of enclosing everything in a
    card.

------------------------------------------------------------------------

## 6. Global navigation

### Desktop

Create a clean, restrained navigation bar:

-   Company logo/wordmark on the left.
-   Main links: Beranda, Tentang Kami, Layanan, Portfolio, Kontak.
-   One primary CTA: Minta Penawaran.
-   Do not show Portal Admin in the public navigation.
-   Header height approximately 72--80px.
-   Use a subtle bottom border.
-   Sticky header is optional; if sticky, keep it compact and avoid
    excessive shadows.

Navigation behavior: - Active page state must be clear but restrained. -
All links must work. - CTA must point to the real contact/inquiry
route. - Avoid excessive pill backgrounds on every menu item.

### Mobile

-   Use a clear mobile menu button.
-   Keep logo and CTA/menu accessible.
-   Mobile navigation must be keyboard accessible.
-   Close the menu after navigation.
-   Prevent horizontal overflow.
-   Do not shrink desktop navigation until it becomes unreadable.

------------------------------------------------------------------------

## 7. Homepage: required design and section order

The homepage should tell a coherent story from first impression to
contact.

Recommended section order:

1.  Header.
2.  Hero.
3.  Compact proof/service strip.
4.  Services overview.
5.  About/company introduction.
6.  Featured portfolio.
7.  How the company supports client needs (optional, only if the
    workflow is confirmed).
8.  Partner/client logos (only approved and verified).
9.  CTA.
10. Footer.

### 7.1 Hero section

Goal: communicate the company's role, services, and next action
immediately.

Recommended composition: - Two-column editorial layout on desktop. -
Text block on the left. - Real portfolio photography on the right. - Use
one strong image or a carefully composed collage of two/three real
images. - On mobile, stack text first and image second. - Hero height
should feel spacious but not consume the entire first screen
unnecessarily.

Suggested content direction (editable, subject to client approval):

Eyebrow: `MITRA PENGADAAN & SOLUSI INSTITUSI`

Headline:
`Mendukung Kebutuhan Institusi, dari Pengadaan hingga Solusi Digital`

Alternative shorter headline:
`Solusi Pengadaan untuk Kebutuhan Institusi`

Supporting copy:
`Melayani kebutuhan percetakan, konveksi, pengadaan barang/jasa, dan sistem informasi bagi perguruan tinggi maupun instansi.`

Primary CTA: `Jelajahi Layanan`

Secondary CTA: `Hubungi Kami`

Important: - These are copy suggestions, not locked company-approved
slogans. - Use the current active service list. - Do not claim project
volume, satisfaction score, years of experience, or client count. - Do
not place a fake dashboard mockup in the hero. - Do not create a fake
browser window with miniature service cards. - Prefer actual supplied
images from the company's work. - If no approved hero photo exists, use
a simple, elegant image area with a neutral branded placeholder during
development; do not source random stock photography and imply it is the
company's work.

### 7.2 Proof strip

The current four-number metrics strip must be removed unless verified.

Preferred alternative: - A simple horizontal statement such as
`Empat bidang layanan untuk kebutuhan perguruan tinggi dan instansi`. -
Or a restrained set of service labels. - Or a thin strip of verified
company facts once the client supplies them.

Do not turn this into another set of four cards.

### 7.3 Services overview

Heading direction: - Eyebrow: `LAYANAN KAMI` - Heading:
`Solusi untuk Berbagai Kebutuhan Institusi` - Short explanatory
paragraph.

Show the four active services: 1. Percetakan. 2. Konveksi. 3. Pengadaan
Barang/Jasa Lainnya. 4. Sistem Informasi.

Design: - Prefer image-led editorial tiles or a 2x2 visual grid. - Each
service needs a real image, name, concise description, and clear link. -
Use consistent image ratios (for example 4:3 or 5:4) within the same
group. - Give each card a strong image region and calm text area. -
Avoid excessive card decoration. - Avoid using four identical generic
icons as the main visual. - A small icon may support the title but must
not replace the photo. - The full service title should remain
accessible; if shortened visually, preserve the full wording in detail
pages and data.

Suggested concise card descriptions (editable, based on client copy): -
Percetakan:
`Kebutuhan cetak untuk dokumen, publikasi, dan keperluan institusi.` -
Konveksi:
`Toga, jas almamater, seragam, dan kebutuhan pakaian institusi.` -
Pengadaan Barang/Jasa Lainnya:
`Pengadaan berbagai kebutuhan barang dan jasa untuk institusi.` - Sistem
Informasi:
`Solusi sistem akademik, persuratan, dan kebutuhan digital institusi.`

Each card links to its dynamic service detail page.

### 7.4 About section

Use an editorial split layout: - One side: real company/workshop/team
photo only if supplied and approved. - Other side: section label,
heading, concise description, and one clear link to About page.

Possible heading: `Mitra Andal untuk Kebutuhan Institusi`

Copy must be based on approved company information. If current profile
copy is not confirmed, describe only the four confirmed service areas
and the stated institutional audience.

Do not use fabricated feature tiles such as: - `100% Garansi Kualitas` -
`Legalitas Lengkap` - `Kapasitas Produksi Besar` - `Bandung Workshop`
unless the client confirms each statement.

Avoid using an arbitrary number as the visual centerpiece.

### 7.5 Featured portfolio section

This section is a priority. It should provide tangible evidence of the
company's work.

Heading direction: - Eyebrow: `PORTOFOLIO` - Heading:
`Hasil Pekerjaan Kami` - Supporting copy: short, factual, and
non-exaggerated.

Design: - Use a considered editorial grid with two or three columns on
desktop. - Use larger lead project imagery where suitable. - Mix image
sizes only if the grid remains balanced. - Each item should show: -
Cover image. - Portfolio title. - Service category. - Optional short
excerpt. - Link to detail. - Use real published portfolio records from
the database. - Do not use fake sample projects. - Do not display
placeholder images as real completed work. - Provide
`Lihat Semua Portofolio`.

Initial client-supplied example for Pengadaan Barang/Jasa Lainnya: -
Piagam/plakat wisuda. - Cenderamata. - Branded institutional
merchandise, including a tumbler-like item visible in the supplied
collage.

Use the original supplied photo files if available. Do not recreate
these images using generic stock images.

### 7.6 Partners

Show partner logos only when: - The logo file is available. - The
partner name is correct. - The company has permission/approval to
display the logo.

Use a restrained logo strip or grid. Do not fabricate logos or partner
names. If the list is not yet approved, hide this section or use a
non-specific statement without implying specific partnerships.

### 7.7 CTA

Use one clear, focused CTA section.

Suggested copy direction: - Eyebrow: `DISKUSIKAN KEBUTUHAN ANDA` -
Heading: `Ada Kebutuhan untuk Institusi Anda?` - Body:
`Hubungi kami untuk mendiskusikan kebutuhan percetakan, konveksi, pengadaan, atau sistem informasi.`

Primary CTA: `Hubungi Kami`

Secondary CTA: `Lihat Layanan`

Use a strong primary background or subtle tint, but do not rely on a
giant generic green gradient. Keep the section visually connected to the
rest of the page.

Only add a WhatsApp deep link after the current number is confirmed.

### 7.8 Footer

Use a structured, understated footer: - Company logo/name. - Short
company description. - Navigation links. - Four service links. -
Confirmed contact details. - Approved social links, if available. -
Copyright.

Do not display unverified phone numbers, address, legal details, or
social URLs.

Avoid: - "Dibuat dengan ❤️" if it does not add value. - Fake social
buttons. - Excessive footer columns. - Public admin login link.

------------------------------------------------------------------------

## 8. Service listing and service detail pages

### 8.1 Service listing page

The `/layanan` page should: - Have a clear page intro. - Display all
active services from the database. - Use the same visual language as the
homepage service section. - Include real service imagery. - Link to each
service detail. - Avoid repeating long descriptions. - Keep enough
whitespace between sections.

### 8.2 Service detail page

All services must use one reusable dynamic template. Do not create four
hardcoded Blade pages with duplicated structure.

Suggested layout:

1.  Breadcrumb.
2.  Service hero with service title, concise description, and actual
    image.
3.  Service overview/description.
4.  Capabilities or features (if populated).
5.  Related published portfolio.
6.  CTA.

Service-specific visual direction:

**Percetakan** - Prioritize close-up printed material and finished
products. - Use a balanced image gallery. - Show paper, print finish,
document, brochure, folder, or certificate details where real images
exist.

**Konveksi** - Use garment photography. - Show full product and
fabric/detail shots. - Avoid generic fashion-model stock photos unless
they genuinely represent actual work and are approved.

**Pengadaan Barang/Jasa Lainnya** - Use a flexible gallery for mixed
product types. - Do not force every image into the same product
category. - Show the supplied piagam/plakat and cenderamata examples
when the original files are available.

**Sistem Informasi** - Use real software screenshots or approved mockups
based on real applications. - Ensure text in screenshots is legible. -
Use device frames only if they improve presentation. - Do not invent
product features, customer names, or delivered systems.

### 8.3 Related portfolio behavior

On a service detail page: - Query only portfolios related to that
service. - Only show published items whose publication time has
arrived. - Apply the agreed visibility rule for inactive services. -
Paginate if the list becomes long. - Show an appropriate empty state if
no published portfolio exists. - Do not hardcode portfolio items in
Blade.

------------------------------------------------------------------------

## 9. Portfolio listing and detail pages

### 9.1 Portfolio listing

The `/portofolio` page should: - Have a clear title and short intro. -
Show actual published portfolio records. - Provide service filters for
the four active services. - Keep filter behavior understandable on
mobile. - Use a visual grid with strong image quality. - Use pagination
when necessary. - Show a clear empty state if no records match a filter.

Each portfolio card: - Image. - Service category label. - Project
title. - Optional excerpt. - Link to detail.

### 9.2 Portfolio detail

The `/portofolio/{slug}` page should include: - Breadcrumb. - Portfolio
title. - Service category. - Cover image. - Project description. -
Gallery. - Client name only if approved and non-empty. - Project date
only if known and approved. - Related portfolios. - Link back to the
relevant service. - Contact CTA.

Do not invent project scope, client identity, dates, results, or
performance claims.

------------------------------------------------------------------------

## 10. Contact page and conversion behavior

The contact experience should be simple: - Confirmed phone/WhatsApp. -
Confirmed email. - Confirmed address and map link if approved. -
Optional inquiry form if client approves the workflow.

Do not show unverified contact information.

If a form exists: - Use clear labels. - Validate server-side. - Provide
success and error feedback. - Protect against spam appropriately. -
Store messages only if the system is designed to do so. - Do not imply
an email was sent unless mail delivery is configured and tested.

------------------------------------------------------------------------

## 11. UI component rules

Build reusable Blade components or existing project components for: -
Header/navigation. - Footer. - Section heading. - Primary/secondary
buttons. - Service card. - Portfolio card. - Breadcrumb. - Image
gallery. - CTA block. - Empty state. - Mobile navigation.

Component guidelines: - Keep component APIs small and explicit. - Use
semantic HTML. - Use consistent spacing and type scales. - Avoid deeply
nested wrappers without purpose. - Avoid one-off styles duplicated
across pages. - Use Tailwind utility classes consistently or the
project's established CSS approach. - Use CSS variables/design tokens
for brand colors and recurring values. - Do not add a UI library solely
to make basic cards and buttons.

### Button hierarchy

-   Primary: filled brand color, used for the main action.
-   Secondary: outline or subtle surface, used for the next action.
-   Text link: for low-emphasis navigation.

Avoid multiple competing primary buttons in one viewport.

### Icon rules

-   Use one consistent icon library already installed in the project.
-   Keep icon stroke/weight consistent.
-   Use icons as supporting cues, not as substitutes for portfolio
    photography.
-   Do not use emoji as interface icons.
-   Do not add icons to every heading or every card by default.

### Image rules

-   Prefer original company images supplied by the client.
-   Use consistent object-fit and deliberate focal points.
-   Use descriptive alt text.
-   Avoid stretching images.
-   Use lazy loading below the fold.
-   Provide width/height or aspect-ratio to reduce layout shift.
-   Use responsive image sizes when supported.
-   Do not hotlink random image URLs.
-   Do not use generated or stock imagery as if it were actual company
    work.
-   If a real asset is missing, use an honest placeholder in development
    or hide that visual slot until content is supplied.

------------------------------------------------------------------------

## 12. Responsive behavior

Design mobile-first or verify every desktop design at mobile widths.

Minimum target widths to test: - 360px mobile. - 390px mobile. - 768px
tablet. - 1024px laptop/tablet landscape. - 1280px desktop. - 1440px
wide desktop.

Rules: - No horizontal overflow. - No clipped headings. - No tiny
navigation labels. - Buttons must be easy to tap (target about 44px
minimum height). - Image grids must reflow logically. - Hero image must
not dominate or push all key copy below the fold on mobile. - Long
service names such as "Pengadaan Barang/Jasa Lainnya" must wrap
cleanly. - Avoid fixed heights for content cards where text length
varies. - Do not hide essential content on mobile just to preserve the
desktop composition.

------------------------------------------------------------------------

## 13. Motion and interaction

Use motion sparingly: - Subtle hover transitions. - Small image zoom on
hover only if appropriate. - Gentle reveal transitions only when they do
not delay content. - Mobile interactions must not depend on hover. -
Respect `prefers-reduced-motion`.

Avoid: - Scroll-jacking. - Excessive parallax. - Constant floating
animation. - Animated counters for unverified statistics. - Overly
bouncy transitions. - Intro animations that delay access to content.

All interactive elements must work. Do not add decorative controls that
look clickable but do nothing.

------------------------------------------------------------------------

## 14. Laravel + Blade + Tailwind implementation constraints

1.  Preserve the existing Laravel + Filament architecture.
2.  Focus this skill on the **public frontend** unless the task
    explicitly includes Filament UI.
3.  Keep public page data sourced from Eloquent models and existing CMS
    records.
4.  Do not hardcode service names or portfolio records in Blade.
5.  Use controllers or appropriate view-model/composition patterns to
    prepare page data; avoid complex queries directly inside Blade.
6.  Use eager loading to avoid N+1 queries.
7.  Keep routes named and consistent with the existing project
    conventions.
8.  Preserve route model binding and slug behavior if already
    implemented.
9.  Use existing image storage conventions and Filament upload paths.
10. Do not change database schema or model relationships for a
    visual-only task.
11. If a new field is truly required, explain why and propose the
    migration before implementing it.
12. Do not bypass draft/published visibility rules.
13. Do not expose admin-only routes or data publicly.
14. Do not break Filament admin routes or authentication.
15. Do not add a new CSS framework if Tailwind is already configured.
16. Do not rewrite the whole application in React/Vue/Next.js.
17. Keep JavaScript minimal and compatible with the current build setup.
18. Run the project's available formatter, linter, tests, and build
    commands after changes.

### Suggested public page structure

Adapt to the actual repository, but a maintainable structure may look
like:

``` text
resources/views/
├── layouts/
│   └── app.blade.php
├── components/
│   ├── site-header.blade.php
│   ├── site-footer.blade.php
│   ├── section-heading.blade.php
│   ├── service-card.blade.php
│   ├── portfolio-card.blade.php
│   ├── breadcrumb.blade.php
│   └── cta-section.blade.php
└── pages/
    ├── home.blade.php
    ├── about.blade.php
    ├── contact.blade.php
    ├── services/
    │   ├── index.blade.php
    │   └── show.blade.php
    └── portfolios/
        ├── index.blade.php
        └── show.blade.php
```

This is a suggestion only. Inspect and follow the actual project
conventions before creating folders.

------------------------------------------------------------------------

## 15. Content management integration

The public frontend should reflect the CMS data.

Expected content sources: - Site identity and contact: site settings. -
Hero and homepage copy: homepage section/settings records. - Services:
services table. - Service features: service features relation. -
Portfolio: portfolio table. - Portfolio gallery: portfolio images
relation. - Partners: partners table. - Static company profile copy:
pages or an approved content structure.

Requirements: - If a section is inactive, do not render it. - If
optional content is empty, gracefully hide the relevant element. - If an
image is missing, do not render a broken image. - Do not display empty
labels, empty links, or `null` values. - Preserve sort order from the
database. - Respect publication status and publication timestamp. - Keep
fallback content factual and minimal.

------------------------------------------------------------------------

## 16. Accessibility and SEO

Accessibility: - Use semantic landmarks: header, nav, main, section,
footer. - Use a single meaningful H1 per page. - Maintain heading
hierarchy. - Ensure keyboard navigation. - Provide visible focus
states. - Use descriptive link text. - Add alt text to meaningful
images. - Mark decorative images appropriately. - Ensure adequate color
contrast. - Label all form fields. - Ensure mobile menu works with
keyboard and screen readers.

SEO: - Unique title and meta description for each service and
portfolio. - Clean readable slugs. - Correct canonical URLs where
appropriate. - Open Graph metadata. - XML sitemap. - Meaningful image
alt text. - Internal links between services and related portfolio. -
Avoid duplicate titles and descriptions. - Do not add structured data
with unverified business claims.

Performance: - Optimize images. - Use modern formats where practical. -
Lazy-load below-the-fold images. - Avoid layout shift. - Keep JavaScript
bundle small. - Avoid unnecessary animation libraries. - Cache public
content appropriately if the application already supports it.

------------------------------------------------------------------------

## 17. Required implementation workflow

Do not make broad changes blindly. Work in small, reviewable steps.

### Step 1 --- Audit current implementation

Report: - Existing routes and pages. - Existing Blade
layouts/components. - Current CSS/Tailwind setup. - Existing
images/assets. - Existing database-backed data sources. - Any hardcoded
fake metrics/content. - Existing responsive issues.

Do not modify files during the audit unless explicitly asked.

### Step 2 --- Establish design tokens

Create or update: - Brand color variables. - Typography scale. -
Container width. - Spacing scale. - Border/radius/shadow rules. - Button
variants. - Image aspect-ratio conventions.

Verify the palette against the real logo before finalizing.

### Step 3 --- Redesign global shell

Implement: - Header/navigation. - Mobile navigation. - Footer. - Base
layout. - Buttons and shared components.

Verify desktop and mobile before moving on.

### Step 4 --- Redesign homepage

Implement in this order: 1. Hero with real image strategy. 2.
Proof/service strip without unsupported metrics. 3. Four service
showcase. 4. About section. 5. Portfolio showcase. 6. Approved partners
(if data exists). 7. CTA. 8. Footer.

Use database content. Do not insert fake portfolio data to make the page
look full.

### Step 5 --- Redesign internal pages

Implement: - Services listing. - Dynamic service detail. - Portfolio
listing and filters. - Portfolio detail. - About. - Contact.

Keep visual consistency while varying page composition appropriately.

### Step 6 --- Responsive and quality review

Test: - All target viewport widths. - All navigation links. - All
CTAs. - Service detail routes. - Portfolio filters. - Empty states. -
Long service names. - Missing images. - Draft/published visibility. -
Console and Laravel logs. - Production asset build.

### Step 7 --- Report completion

At the end, provide: - Files changed. - Main design decisions. -
Features/pages completed. - Any missing client assets/content. -
Tests/build commands run and results. - Known issues and next steps.

------------------------------------------------------------------------

## 18. Acceptance checklist

The redesign is not complete until all applicable checks pass.

### Visual quality

-   [ ] The website no longer resembles a generic SaaS dashboard
    template.
-   [ ] Hero uses real company work imagery or an honest temporary
    placeholder.
-   [ ] No fake dashboard mockup in the hero.
-   [ ] No unverified counters, ratings, guarantees, or statistics.
-   [ ] Services are visually distinct and image-led.
-   [ ] Portfolio has meaningful visual prominence.
-   [ ] About section contains authentic, approved company information.
-   [ ] CTA is clear and not overloaded.
-   [ ] Footer contains only verified contact and identity details.
-   [ ] Spacing, typography, colors, and image crops feel consistent.
-   [ ] The page has visual rhythm; not every section is a row of
    identical cards.

### Business correctness

-   [ ] Only the four confirmed active services are shown by default.
-   [ ] All service content is database-driven.
-   [ ] Every service links to its own detail page.
-   [ ] Each service page displays only related published portfolios.
-   [ ] Portfolio details and galleries use real CMS records.
-   [ ] No invented client names, partner logos, projects, or claims.
-   [ ] Unconfirmed contact details are not published.

### Technical quality

-   [ ] Existing Laravel and Filament functionality remains intact.
-   [ ] No unnecessary schema changes were made.
-   [ ] Responsive layout works at 360px, 390px, 768px, 1024px, 1280px,
    and 1440px.
-   [ ] No horizontal overflow.
-   [ ] Navigation and buttons work.
-   [ ] Images have appropriate alt text and loading behavior.
-   [ ] No broken image links.
-   [ ] No obvious N+1 queries.
-   [ ] Production frontend build succeeds.
-   [ ] No critical errors in browser console or Laravel logs.

------------------------------------------------------------------------

## 19. Final design decision

The target is **not** a flashy startup landing page, not a SaaS
dashboard, and not an e-commerce catalogue.

The target is a **modern, editorial corporate website for an Indonesian
B2B services and procurement company**, with real work photography and a
clear portfolio system.

The most important design principle:

> Show what the company actually delivers. Use design to make the work
> feel clear, credible, and valuable---not to manufacture credibility
> through fake numbers, fake dashboards, or unsupported promises.

When in doubt: 1. Prefer authentic content over decoration. 2. Prefer a
real project image over a generic icon. 3. Prefer clear information over
marketing jargon. 4. Prefer a restrained layout over excessive effects.
5. Prefer verified facts over impressive but unsupported claims.
