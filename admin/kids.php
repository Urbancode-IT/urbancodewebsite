<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
  /* =========================================================
   Urbancode Kids Design System - Professional + Child-Friendly
   Complete styles.css
   ========================================================= */

/* ------------------------------
   CSS Variables (Design Tokens)
-------------------------------*/
:root {
  /* Urbancode Brand Colors */
  --background: hsl(0, 0%, 100%);
  --foreground: hsl(222.2, 84%, 4.9%);

  --card: hsl(0, 0%, 100%);
  --card-foreground: hsl(222.2, 84%, 4.9%);

  /* Urbancode Teal Primary */
  --primary: hsl(168, 76%, 42%);
  --primary-foreground: hsl(0, 0%, 100%);
  --primary-light: hsl(168, 76%, 52%);
  --primary-glow: hsl(168, 86%, 65%);

  /* Kids-friendly Secondary Colors */
  --secondary: hsl(210, 40%, 96.1%);
  --secondary-foreground: hsl(222.2, 47.4%, 11.2%);

  --kids-orange: hsl(30, 100%, 60%);
  --kids-orange-light: hsl(30, 100%, 70%);
  --kids-purple: hsl(270, 60%, 65%);
  --kids-blue: hsl(210, 100%, 60%);
  --kids-yellow: hsl(48, 100%, 67%);

  --muted: hsl(210, 40%, 96.1%);
  --muted-foreground: hsl(215.4, 16.3%, 46.9%);

  --accent: hsl(168, 76%, 52%);
  --accent-foreground: hsl(0, 0%, 100%);

  --border: hsl(214.3, 31.8%, 91.4%);
  --input: hsl(214.3, 31.8%, 91.4%);
  --ring: hsl(168, 76%, 42%);

  /* Design System Tokens */
  --radius: 0.75rem;
  --radius-lg: 1rem;
  --radius-xl: 1.5rem;

  /* Gradients */
  --gradient-primary: linear-gradient(135deg, var(--primary), var(--primary-light));
  --gradient-kids: linear-gradient(135deg, var(--primary), var(--kids-orange));
  --gradient-hero: linear-gradient(135deg, hsla(168, 76%, 42%, 0.1), hsla(30, 100%, 60%, 0.1));

  /* Shadows */
  --shadow-card: 0 4px 20px hsla(168, 76%, 42%, 0.1);
  --shadow-hover: 0 8px 30px hsla(168, 76%, 42%, 0.15);
  --shadow-glow: 0 0 30px hsla(168, 86%, 65%, 0.3);

  /* Animations */
  --transition-all: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  --transition-bounce: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

/* ------------------------------
   Base / Reset
-------------------------------*/
* { margin: 0; padding: 0; box-sizing: border-box; }

html, body { height: 100%; }

body {
  font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  background-color: var(--background);
  color: var(--foreground);
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Improve default focus visibility */
:focus-visible {
  outline: 2px solid var(--ring);
  outline-offset: 2px;
}

/* Anchor target offset for sticky header */
[id] { scroll-margin-top: calc(4rem + 12px); }

/* ------------------------------
   Layout Container
-------------------------------*/
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1rem;
}
@media (min-width: 640px) { .container { padding: 0 1.5rem; } }
@media (min-width: 1024px) { .container { padding: 0 2rem; } }

/* ------------------------------
   Typography
-------------------------------*/
h1, h2, h3, h4, h5, h6 { font-weight: 700; line-height: 1.2; }

/* Fluid type suggestions for nicer scaling */
.hero-title { font-size: clamp(2rem, 1.2rem + 3vw, 3.75rem); }
.section-title { font-size: clamp(1.875rem, 1.2rem + 2vw, 2.5rem); }

/* Gradient Text */
.text-gradient {
  background: var(--gradient-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  color: transparent;
}
@supports not (background-clip: text) {
  .text-gradient { color: var(--foreground); }
}

/* Generic vertical rhythm for hero text */
.hero-text > * + * { margin-top: 1rem; }

/* ------------------------------
   Buttons & Links
-------------------------------*/
.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  white-space: nowrap;
  border-radius: var(--radius);
  font-size: 0.875rem;
  font-weight: 500;
  transition: var(--transition-all);
  border: none;
  cursor: pointer;
  text-decoration: none;
  padding: 0.5rem 1rem;
  position: relative;
  overflow: hidden; /* for ripple */
}

.btn-primary {
  background: var(--gradient-primary);
  color: var(--primary-foreground);
  box-shadow: hsl(168, 76%, 52%);
}
.btn-primary:hover { transform: translateY(-2px); box-shadow: var(--shadow-glow); }

.btn-outline {
  border: 1px solid var(--border);
  background: transparent;
  color: var(--foreground);
}
.btn-outline:hover { background: var(--secondary); }

.btn-lg { padding: 0.75rem 1.5rem; font-size: 1rem; }
.btn-full { width: 100%; }

.btn-arrow { width: 1rem; height: 1rem; margin-left: 0.5rem; transition: var(--transition-all); }
.btn:hover .btn-arrow { transform: translateX(0.25rem); }

.play-icon { width: 1rem; height: 1rem; margin-right: 0.5rem; }

.link-button {
  background: none;
  border: none;
  color: var(--primary);
  font-weight: 600;
  cursor: pointer;
  text-decoration: none;
  transition: var(--transition-all);
}
.link-button:hover { text-decoration: underline; }

/* Focus styles for common interactive elements */
.btn:focus-visible,
.nav-link:focus-visible,
.nav-link-mobile:focus-visible,
.link-button:focus-visible,
.newsletter-btn:focus-visible,
.newsletter-input:focus-visible {
  outline: 2px solid var(--ring);
  outline-offset: 2px;
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--ring) 30%, transparent);
}

/* Ripple element (JS creates <span class="ripple">) */
.ripple {
  position: absolute;
  border-radius: 50%;
  background: rgba(255,255,255,.35);
  transform: scale(0);
  pointer-events: none;
  animation: uc-ripple .6s ease-out forwards;
}
@keyframes uc-ripple { to { transform: scale(2); opacity: 0; } }

/* ------------------------------
   Header & Navigation
-------------------------------*/
.header {
  background: hsla(0, 0%, 100%, 0.95);
  backdrop-filter: blur(8px);
  border-bottom: 1px solid var(--border);
  position: sticky;
  top: 0;
  z-index: 50;
  transition: background .2s ease, backdrop-filter .2s ease;
}
.header--scrolled {
  background: hsla(0, 0%, 100%, 0.98);
  backdrop-filter: blur(12px);
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 4rem;
}

.logo { display: flex; align-items: center; gap: 0.5rem; }
.logo-icon {
  width: 2rem; height: 2rem;
  background: var(--gradient-primary);
  border-radius: var(--radius);
  display: flex; align-items: center; justify-content: center;
  color: var(--primary-foreground);
  font-weight: 700; font-size: 0.875rem;
}
.logo-text { font-size: 1.25rem; font-weight: 700; }
.logo-highlight { color: var(--primary); }

.nav-desktop { display: none; gap: 2rem; }
@media (min-width: 768px) { .nav-desktop { display: flex; } }

.nav-link {
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--muted-foreground);
  text-decoration: none;
  transition: var(--transition-all);
  position: relative;
  padding-bottom: 0.25rem;
}
.nav-link:hover { color: var(--primary); }
.nav-link.active { color: var(--primary); border-bottom: 2px solid var(--primary); }

.cta-desktop { display: none; }
@media (min-width: 768px) {
  .cta-desktop { display: flex; align-items: center; gap: 1rem; }
}

.mobile-menu-btn {
  display: flex; align-items: center; justify-content: center;
  width: 2.5rem; height: 2.5rem;
  background: none; border: none; cursor: pointer;
}
@media (min-width: 768px) { .mobile-menu-btn { display: none; } }

.hamburger {
  display: block; width: 1.25rem; height: 2px; background: var(--foreground);
  position: relative; transition: var(--transition-all);
}
.hamburger::before,
.hamburger::after {
  content: ''; display: block; width: 1.25rem; height: 2px; background: var(--foreground);
  position: absolute; transition: var(--transition-all);
}
.hamburger::before { top: -6px; }
.hamburger::after { bottom: -6px; }
.hamburger.is-open { transform: rotate(90deg); }

.nav-mobile {
  display: block;
  padding: 1rem 0.5rem;
  border-top: 1px solid var(--border);
  background: var(--background);
}
.nav-mobile[hidden] { display: none !important; } /* a11y-friendly toggle */

.nav-link-mobile {
  display: block; padding: 0.75rem;
  color: var(--muted-foreground); text-decoration: none;
  font-size: 0.875rem; font-weight: 500; transition: var(--transition-all);
}
.nav-link-mobile:hover, .nav-link-mobile.active { color: var(--primary); }
.mobile-cta { margin-top: 0.5rem; width: 100%; }

/* ------------------------------
   Hero Section
-------------------------------*/
.hero {
  margin-top :5.8% !important;
  position: relative;
  background: var(--gradient-hero);
  overflow: hidden;
  padding: 3rem 0;
  min-height: 90vh;
  display: flex; align-items: center;
}
.hero-bg-elements { position: absolute; inset: 0; overflow: hidden; }
.hero-bg-circle { position: absolute; border-radius: 50%; filter: blur(3rem); }
.hero-bg-circle-1 { top: -10rem; right: -10rem; width: 20rem; height: 20rem; background: hsla(168, 76%, 42%, 0.1); }
.hero-bg-circle-2 { bottom: -10rem; left: -10rem; width: 20rem; height: 20rem; background: hsla(30, 100%, 60%, 0.1); }

.hero-content { display: grid; gap: 3rem; align-items: center; position: relative; z-index: 1; }
@media (min-width: 1024px) { .hero-content { grid-template-columns: 1fr 1fr; } }

.hero-description {
  font-size: 1.125rem; color: var(--muted-foreground);
  max-width: 32rem; margin-bottom: 2rem;
}
@media (min-width: 768px) { .hero-description { font-size: 1.25rem; } }

.hero-buttons { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2rem; }
@media (min-width: 640px) { .hero-buttons { flex-direction: row; } }

.hero-stats {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;
  padding-top: 2rem; border-top: 1px solid var(--border);
}
.stat { text-align: center; }
.stat-number { font-size: 1.875rem; font-weight: 700; color: var(--primary); }
@media (min-width: 768px) { .stat-number { font-size: 2.25rem; } }
.stat-label { font-size: 0.875rem; color: var(--muted-foreground); }

.hero-image { position: relative; }
@media (min-width: 1024px) { .hero-image { margin-left: 2rem; } }
.hero-image-wrapper { position: relative; }

.hero-img {
  width: 100%; height: auto; border-radius: var(--radius-xl);
  box-shadow: var(--shadow-hover); object-fit: cover;
}

.floating-element {
  position: absolute; display: flex; align-items: center; justify-content: center;
  border-radius: 50%; font-weight: 700; box-shadow: var(--shadow-card);
  animation: float 3s ease-in-out infinite;
}
.floating-element-1 { top: -1.5rem; left: -1.5rem; width: 3rem; height: 3rem; background: var(--kids-orange); color: #fff; }
.floating-element-2 { bottom: -1.5rem; right: -1.5rem; width: 4rem; height: 4rem; background: var(--primary); color: var(--primary-foreground); font-size: 1.125rem; animation-delay: 1s; }
.floating-element-3 { top: 50%; right: -2rem; width: 2.5rem; height: 2.5rem; background: var(--kids-purple); color: #fff; animation: bounce-gentle 2s infinite; }

.online-badge {
  position: absolute; top: 1rem; right: 1rem;
  background: hsla(0, 0%, 100%, 0.9); backdrop-filter: blur(8px);
  padding: 0.5rem 1rem; border-radius: 9999px; box-shadow: var(--shadow-card);
  display: flex; align-items: center; gap: 0.5rem;
}
.online-indicator { width: 0.5rem; height: 0.5rem; background: #10b981; border-radius: 50%; animation: pulse 2s infinite; }
.online-badge span { font-size: 0.875rem; font-weight: 500; color: var(--foreground); }

/* Hero animations */
@keyframes float { 0%,100%{ transform: translateY(0); } 50%{ transform: translateY(-20px); } }
@keyframes bounce-gentle { 0%,100%{ transform: translateY(0); } 50%{ transform: translateY(-10px); } }
@keyframes pulse { 0%,100%{ opacity: 1; } 50%{ opacity: .5; } }

/* ------------------------------
   Courses Section
-------------------------------*/
.courses { padding: 5rem 0; background: hsla(210, 40%, 96.1%, 0.2); }

.section-header { text-align: center; margin-bottom: 4rem; }
.section-title { margin-bottom: 1rem; }
.section-description {
  font-size: 1.125rem; color: var(--muted-foreground);
  max-width: 32rem; margin: 0 auto;
}

.courses-grid { display: grid; gap: 2rem; margin-bottom: 3rem; }
@media (min-width: 768px) { .courses-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .courses-grid { grid-template-columns: repeat(3, 1fr); } }

.course-card {
  background: var(--card); border-radius: var(--radius-lg); overflow: hidden;
  box-shadow: var(--shadow-card); transition: var(--transition-all);
  height: 100%; display: flex; flex-direction: column; will-change: transform, box-shadow;
}
.course-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-hover); }
.course-card.is-raised { transform: translateY(-8px) scale(1.02); } /* optional JS hover */

.course-image { position: relative; }

/* Prefer aspect-ratio for CLS-friendly cards (if your sources vary) */
.course-image img {
  width: 100%;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  height: auto;
}

.course-badge {
  position: absolute; top: 0.75rem; right: 0.75rem;
  background: var(--primary); color: var(--primary-foreground);
  padding: 0.25rem 0.75rem; border-radius: var(--radius);
  font-size: 0.75rem; font-weight: 600;
}

.course-content {
  padding: 1.5rem; flex: 1; display: flex; flex-direction: column; gap: 1rem;
}
.course-title { font-size: 1.25rem; font-weight: 600; color: var(--card-foreground); line-height: 1.4; }
.course-description { color: var(--muted-foreground); font-size: 0.875rem; line-height: 1.6; flex: 1; }

.course-meta { display: flex; align-items: center; justify-content: space-between; }
.course-rating { display: flex; align-items: center; gap: 0.5rem; }
.stars { display: flex; gap: 0.125rem; }
.star { color: #d1d5db; font-size: 1rem; }
.star.filled { color: var(--kids-yellow); }
.rating-text { font-size: 0.875rem; color: var(--muted-foreground); }

.course-students { display: flex; align-items: center; gap: 0.25rem; font-size: 0.875rem; color: var(--muted-foreground); }
.users-icon { width: 1rem; height: 1rem; }

.course-footer { display: flex; align-items: center; justify-content: space-between; }
.course-duration { display: flex; align-items: center; gap: 0.25rem; font-size: 0.875rem; color: var(--muted-foreground); }
.clock-icon { width: 1rem; height: 1rem; }
.course-price { font-size: 1.125rem; font-weight: 700; color: var(--primary); }

.course-cta { padding: 1.5rem; padding-top: 0; }

.courses-more { text-align: center; }
.courses-more p { color: var(--muted-foreground); margin-bottom: 1.5rem; }

/* ------------------------------
   Why Choose Section
-------------------------------*/
.why-choose { padding: 5rem 0; background: hsla(210, 40%, 96.1%, 0.2); }

.features-grid { display: grid; gap: 2rem; margin-bottom: 4rem; }
@media (min-width: 768px) { .features-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .features-grid { grid-template-columns: repeat(4, 1fr); } }

.feature-card {
  background: var(--card); padding: 2rem; border-radius: var(--radius-lg);
  text-align: center; box-shadow: var(--shadow-card); transition: var(--transition-all);
  will-change: transform, box-shadow;
}
.feature-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-hover); }

.feature-icon {
  width: 4rem; height: 4rem; margin: 0 auto 1rem; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
}
.feature-icon svg { width: 2rem; height: 2rem; }
.feature-icon-orange { background: hsla(30, 100%, 71%, 0.1); color: var(--primary); }
.feature-icon-primary { background: hsla(168, 76%, 42%, 0.1); color: var(--primary); }
.feature-icon-purple { background: hsla(270, 60%, 65%, 0.1); color: var(--primary); }
.feature-icon-blue { background: hsla(210, 100%, 60%, 0.1); color: var(--primary); }

.feature-title { font-size: 1.25rem; font-weight: 600; color: var(--card-foreground); margin-bottom: 1rem; }
.feature-description { color: var(--muted-foreground); line-height: 1.6; }

.cta-section {
  background: linear-gradient(135deg, hsla(168, 76%, 42%, 0.05), hsla(30, 100%, 60%, 0.05));
  border-radius: var(--radius-xl); padding: 3rem 2rem;
}
@media (min-width: 768px) { .cta-section { padding: 4rem 3rem; } }

.cta-content { display: grid; gap: 2rem; align-items: center; }
@media (min-width: 768px) { .cta-content { grid-template-columns: 1fr 1fr; } }

.cta-title { font-weight: 700; color: var(--foreground); margin-bottom: 1rem; }
.cta-description { color: var(--muted-foreground); margin-bottom: 1.5rem; }

.cta-buttons { display: flex; flex-direction: column; gap: 1rem; }
@media (min-width: 640px) { .cta-buttons { flex-direction: row; } }

.cta-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
.cta-stat { text-align: center; padding: 1rem; background: hsla(0, 0%, 100%, 0.5); border-radius: var(--radius); }
.cta-stat-number { font-size: 1.5rem; font-weight: 700; color: var(--primary); }
.cta-stat-label { font-size: 0.875rem; color: var(--muted-foreground); }

/* ------------------------------
   Testimonials
-------------------------------*/
.testimonials { padding: 5rem 0; background: var(--background); }

.testimonials-grid {
  display: grid; gap: 2rem; margin-bottom: 4rem;
  max-width: 80rem; margin-left: auto; margin-right: auto;
}
@media (min-width: 768px) { .testimonials-grid { grid-template-columns: repeat(2, 1fr); } }

.testimonial-card {
  background: var(--card); padding: 1.5rem; border-radius: var(--radius-lg);
  box-shadow: var(--shadow-card); transition: var(--transition-all); position: relative;
  will-change: transform, box-shadow;
}
.testimonial-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-hover); }

.quote-icon { width: 2rem; height: 2rem; color: hsla(168, 76%, 42%, 0.2); margin-bottom: 1rem; }
.quote-icon svg { width: 100%; height: 100%; }
.testimonial-content { color: var(--card-foreground); line-height: 1.6; margin-bottom: 1rem; }
.testimonial-rating { margin-bottom: 1rem; }

.testimonial-author {
  display: flex; align-items: center; gap: 0.75rem;
  padding-top: 1rem; border-top: 1px solid var(--border);
}
.author-avatar {
  width: 3rem; height: 3rem; background: var(--gradient-primary);
  border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;
}
.author-name { font-weight: 600; color: var(--card-foreground); }
.author-role { font-size: 0.875rem; color: var(--muted-foreground); }

.trust-indicators {
  display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;
  max-width: 32rem; margin: 0 auto;
}
@media (min-width: 768px) { .trust-indicators { grid-template-columns: repeat(4, 1fr); } }
.trust-stat { text-align: center; }
.trust-number { font-size: 1.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem; }
.trust-label { font-size: 0.875rem; color: var(--muted-foreground); }

/* ------------------------------
   Footer
-------------------------------*/
.footer { background: var(--foreground); color: var(--background); }
.footer-main { padding: 4rem 0; }

.footer-grid { display: grid; gap: 2rem; }
@media (min-width: 768px) { .footer-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .footer-grid { grid-template-columns: 1fr repeat(3, 0.8fr); } }

.footer-company { margin-bottom: 1.5rem; }
.footer-logo { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1.5rem; }
.footer-logo .logo-icon { width: 2.5rem; height: 2.5rem; }
.footer-logo .logo-text { font-size: 1.5rem; }

.footer-description { color: hsla(0, 0%, 100%, 0.8); line-height: 1.6; margin-bottom: 1.5rem; }

.contact-info { display: flex; flex-direction: column; gap: 0.75rem; }
.contact-item { display: flex; align-items: flex-start; gap: 0.75rem; }
.contact-icon { width: 1.25rem; height: 1.25rem; color: var(--primary); margin-top: 0.125rem; flex-shrink: 0; }
.contact-item span { color: hsla(0, 0%, 100%, 0.9); }

.footer-title { font-size: 1.125rem; font-weight: 600; margin-bottom: 1.5rem; color: var(--background); }

.footer-list { list-style: none; display: flex; flex-direction: column; gap: 0.75rem; }
.footer-list a { color: hsla(0, 0%, 100%, 0.8); text-decoration: none; transition: var(--transition-all); }
.footer-list a:hover { color: var(--primary); }

.footer-social {
  padding: 2rem 0; border-top: 1px solid hsla(0, 0%, 100%, 0.2);
  display: flex; flex-direction: column; gap: 1rem;
}
@media (min-width: 768px) {
  .footer-social { flex-direction: row; justify-content: space-between; align-items: center; }
}

.social-section { display: flex; align-items: center; gap: 1.5rem; }
.social-label { font-size: 0.875rem; color: hsla(0, 0%, 100%, 0.8); }
.social-links { display: flex; gap: 1rem; }
.social-link { color: hsla(0, 0%, 100%, 0.6); transition: var(--transition-all); }
.social-link:hover { color: var(--primary); }
.social-link svg { width: 1.25rem; height: 1.25rem; }

.newsletter-section { display: flex; align-items: center; gap: 1rem; }
.newsletter-label { font-size: 0.875rem; color: hsla(0, 0%, 100%, 0.8); white-space: nowrap; }
.newsletter-form { display: flex; }

.newsletter-input {
  padding: 0.5rem 1rem;
  background: hsla(0, 0%, 100%, 0.1);
  border: 1px solid hsla(0, 0%, 100%, 0.2);
  border-radius: var(--radius) 0 0 var(--radius);
  color: var(--background);
  outline: none; transition: var(--transition-all);
}
.newsletter-input::placeholder { color: hsla(0, 0%, 100%, 0.6); }
.newsletter-input:focus { border-color: var(--primary); box-shadow: 0 0 0 2px hsla(168, 76%, 42%, 0.2); }
.newsletter-input:invalid {
  border-color: #ef4444;
  box-shadow: 0 0 0 2px color-mix(in srgb, #ef4444 25%, transparent);
}

.newsletter-btn {
  padding: 0.5rem 1.5rem; background: var(--primary); color: var(--primary-foreground);
  border: none; border-radius: 0 var(--radius) var(--radius) 0; font-weight: 500;
  cursor: pointer; transition: var(--transition-all);
}
.newsletter-btn:hover { background: var(--primary-light); }
.newsletter-input:disabled, .newsletter-btn:disabled { opacity: .6; cursor: not-allowed; }

.footer-bottom {
  padding: 1.5rem 0; border-top: 1px solid hsla(0, 0%, 100%, 0.2);
  display: flex; flex-direction: column; gap: 0.5rem;
}
@media (min-width: 768px) {
  .footer-bottom { flex-direction: row; justify-content: space-between; align-items: center; }
}
.copyright { font-size: 0.875rem; color: hsla(0, 0%, 100%, 0.6); }
.footer-legal { display: flex; gap: 1.5rem; }
.legal-link { font-size: 0.875rem; color: hsla(0, 0%, 100%, 0.6); text-decoration: none; transition: var(--transition-all); }
.legal-link:hover { color: var(--primary); }

/* ------------------------------
   Scroll reveal animations
-------------------------------*/
.slide-up { opacity: 0; transform: translateY(30px); transition: all 0.6s ease-out; }
.slide-up.visible { opacity: 1; transform: translateY(0); }

/* ------------------------------
   Notification (for newsletter, etc.)
-------------------------------*/
.notification {
  position: fixed; top: 20px; right: 20px;
  z-index: 1000; max-width: 320px;
  color: #fff; border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0,0,0,.15);
  background: #ef4444; /* default = error */
  translate: 120% 0; opacity: .95;
  transition: translate .25s ease;
}
.notification-success { background: var(--primary); }
.notification--in { translate: 0 0; }

.notification-content {
  display: flex; align-items: center; justify-content: space-between; gap: .75rem;
  padding: .9rem 1rem;
  font: 500 14px/1.3 Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
}
.notification-close {
  background: transparent; border: 0; color: inherit;
  font-size: 1.25rem; cursor: pointer; line-height: 1;
}
.notification-close:hover { opacity: .85; }

/* ------------------------------
   Responsive tweaks
-------------------------------*/
@media (max-width: 767px) {
  .courses-grid,
  .features-grid,
  .testimonials-grid { grid-template-columns: 1fr; }

  /* Slightly smaller hero title below 768px; already fluid via clamp */
  .hero-title { font-size: clamp(2rem, 5vw + 1rem, 3rem); }
}

/* ------------------------------
   Performance hints
-------------------------------*/
.course-card,
.feature-card,
.testimonial-card { will-change: transform, box-shadow; }

/* ------------------------------
   Reduced motion preference
-------------------------------*/
@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
  .floating-element,
  .online-indicator { animation: none !important; }
}
/* Crisp, rounded-outline icons inside your feature badges */
.feature-icon svg{
  width: 38px;
  height: 38px;
  stroke: currentColor;
  fill: none;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
}

.stat-number {
  font-size: 2rem;
  font-weight: 700;
  color: var(--primary);
  transition: all 0.3s ease;
}


/* typing effect */
.text-gradient {
  background: linear-gradient(
    90deg, 
    #01af6a, 
    hsl(168, 76%, 42%), 
    black
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-size: 200% auto;
  animation: shine 3s linear infinite;
}

@keyframes shine {
  to {
    background-position: 200% center;
  }
}
.btn-primary{
  background : hsl(168, 76%, 42%) !important;
  border-color : hsl(168, 76%, 42%) !important;
}

.btn-primary:focus{
  background : hsl(168, 76%, 42%) !important;
  border-color : hsl(168, 76%, 42%) !important;
  box-shadow: 0 0 0 .25rem hsl(168, 76%, 42%) !important;
}
</style>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-elements">
            <div class="hero-bg-circle hero-bg-circle-1"></div>
            <div class="hero-bg-circle hero-bg-circle-2"></div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        <span>Empowering Kids with</span><br>
                        <span class="">Creative Learning</span>
                    </h1>
                    
                    <p class="hero-description">
                        We embrace every step with ingenuity and resilience, building tomorrow's 
                        innovators through hands-on coding, creativity, and critical thinking.
                    </p>

                    <div class="hero-buttons">
                        <button class="btn btn-primary btn-lg">
                            Explore Courses
                            <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18 6-6-6-6"/>
                            </svg>
                        </button>
                        
                        <button class="btn btn-outline btn-lg">
                            <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            Watch Demo
                        </button>
                    </div>

                    <!-- Stats -->
                <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Happy Kids</div>
                </div>
                <div class="stat">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
                <div class="stat">
                    <div class="stat">
                    <div class="stat-number">6+</div>
                    <div class="stat-label">Courses</div>
                    </div>
                </div>
                </div>

                </div>

                <!-- Hero Image -->
                <div class="hero-image">
                    <div class="hero-image-wrapper">
                        <img  style ="height: 350px;"src="image/hero.webp" alt="Kids learning with technology" class="hero-img">
                        
                        <!-- Floating elements -->
                        <div class="floating-element floating-element-1">🚀</div>
                        <div class="floating-element floating-element-2">💡</div>
                        <div class="floating-element floating-element-3">⭐</div>
                    </div>

                    <!-- Online Support Badge -->
                    <div class="online-badge">
                        <div class="online-indicator"></div>
                        <span>Online Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Our <span class="text-gradient">Kids Courses</span>
                </h2>
                <p class="section-description">
                    Discover amazing courses designed specifically for young minds. 
                    Each course combines fun activities with professional learning outcomes.
                </p>
            </div>

                <div class="courses-grid">
                <!-- Junior Web Developer -->
                    <div class="course-card">
                    <div class="course-image">
                        <img src="image/web.webp" alt="Junior Web Developer">
                        <div class="course-badge">3 Months</div>
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">Junior Web Developer</h3>
                        <p class="course-description">
                        Kickstart your journey as a developer! Learn HTML, CSS, and JavaScript together to design interactive websites and gain the skills needed for real-world web projects.
                        </p>
                        <div class="course-meta">
                        <div class="course-rating">
                            <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                        <div class="course-students">
                            <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            42
                        </div>
                        </div>
                    </div>
                    <div class="course-cta">
                        <button class="btn btn-primary btn-full">Enroll Now</button>
                    </div>
                    </div>

                    <!-- Scratch Programming -->
                    <div class="course-card">
                    <div class="course-image">
                        <img src="image/scratch-kids.webp" alt="Scratch Programming">
                        <div class="course-badge">1 Month</div>
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">Scratch Programming</h3>
                        <p class="course-description">
                        Learn coding the fun way! Use colorful blocks to build games, animations, and stories while mastering problem-solving and logical thinking skills.
                        </p>
                        <div class="course-meta">
                        <div class="course-rating">
                            <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                        <div class="course-students">
                            <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            55
                        </div>
                        </div>
                    </div>
                    <div class="course-cta">
                        <button class="btn btn-primary btn-full">Enroll Now</button>
                    </div>
                    </div>


                <!-- Python Core -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image/python01.webp" alt="Python Core Course">
                    <div class="course-badge">2 Months</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">Python Core</h3>
                    <p class="course-description">
                        Start from zero and build strong coding fundamentals—variables, loops, functions, OOP—and complete mini-projects with confidence.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                        </div>
                        <span class="rating-text">5.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        58
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>

                <!-- Advanced Python -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image/python02.webp" alt="Advanced Python Course">
                    <div class="course-badge">2 Months</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">Advanced Python</h3>
                    <p class="course-description">
                        Level up with file handling, modules, virtual envs, APIs, testing, and best practices—prepare for automation, data, and AI tracks.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span>
                        </div>
                        <span class="rating-text">4.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        39
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>

                <!-- C Programming -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image/c.webp" alt="C Programming Course">
                    <div class="course-badge">2 Months</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">C Programming</h3>
                    <p class="course-description">
                        Understand how computers really work. Learn memory, pointers, arrays, and problem-solving that sharpens logic for any language.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span>
                        </div>
                        <span class="rating-text">4.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        47
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>

                <!-- C++ -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image\C++.webp" alt="C++ Course">
                    <div class="course-badge">2 Months</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">C++</h3>
                    <p class="course-description">
                        Build high-performance apps with OOP, STL, and problem patterns used in competitive programming and real systems.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                        </div>
                        <span class="rating-text">5.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        34
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>

                <!-- SQL -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image/sql.webp" alt="SQL Course">
                    <div class="course-badge">1 Month</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">SQL</h3>
                    <p class="course-description">
                        Speak the language of data. Learn queries, joins, aggregations, and real datasets to build dashboards and insights with confidence.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span>
                        </div>
                        <span class="rating-text">4.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        41
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>

                <!-- Graphic Designing -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image/G.design.webp" alt="Graphic Designing Course">
                    <div class="course-badge">2 Months</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">Graphic Designing</h3>
                    <p class="course-description">
                        Create eye-catching posters, thumbnails, and brand image. Learn color, typography, and composition with hands-on creative projects.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                        </div>
                        <span class="rating-text">5.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        37
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>

                <!-- AI & ML -->
                <div class="course-card">
                    <div class="course-image">
                    <img src="image\AIML.webp" alt="AI & ML Course">
                    <div class="course-badge">3 Months</div>
                    </div>
                    <div class="course-content">
                    <h3 class="course-title">AI & ML</h3>
                    <p class="course-description">
                        Step into the future. Learn data prep, models, and predictions—build smart apps that recognize patterns and make decisions.
                    </p>
                    <div class="course-meta">
                        <div class="course-rating">
                        <div class="stars">
                            <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                        </div>
                        <span class="rating-text">5.0</span>
                        </div>
                        <div class="course-students">
                        <svg class="users-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        29
                        </div>
                    </div>
                    </div>
                    <div class="course-cta"><button class="btn btn-primary btn-full">Enroll Now</button></div>
                </div>
                </div>


            <div class="courses-more">
                <p>Can't find the right course? We have more options!</p>
                <button class="link-button">View All Courses →</button>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section id="about" class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Why Choose <span class="text-gradient">Urbancode for Kids?</span>
                </h2>
                <p class="section-description">
                    We're not just another coding school. We create experiences that inspire, 
                    engage, and empower the next generation of innovators.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
<div class="feature-icon feature-icon-orange">
  <svg viewBox="0 0 24 24" aria-hidden="true">
    <rect x="3" y="3" width="7" height="7" rx="1" stroke="currentColor" fill="none" stroke-width="2"/>
    <rect x="14" y="3" width="7" height="7" rx="1" stroke="currentColor" fill="none" stroke-width="2"/>
    <rect x="3" y="14" width="7" height="7" rx="1" stroke="currentColor" fill="none" stroke-width="2"/>
    <rect x="14" y="14" width="7" height="7" rx="1" stroke="currentColor" fill="none" stroke-width="2"/>
  </svg>
</div>



                    <h3 class="feature-title">Fun Learning</h3>
                    <p class="feature-description">We make learning exciting through games, interactive projects, and hands-on activities that keep kids engaged and motivated.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon feature-icon-primary">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="9.5" cy="8.5" r="3"></circle>
                        <path d="M4 20v-1a5.5 5.5 0 0 1 11 0v1"></path>
                        <circle cx="17" cy="9.5" r="2.5"></circle>
                        <path d="M14.5 20v-1a4.5 4.5 0 0 1 5-4.2"></path>
                    </svg>
                    </div>


                    <h3 class="feature-title">Expert Mentors</h3>
                    <p class="feature-description">Our experienced instructors specialize in teaching kids, understanding how young minds learn best and adapting to each child's pace.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon feature-icon-purple">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8 11a4 4 0 1 1 8 0c0 1.9-1.2 2.8-2 4H10c-.8-1.2-2-2.1-2-4z"></path>
                        <path d="M9 18h6"></path>
                        <path d="M10 21h4"></path>
                    </svg>
                    </div>

                    <h3 class="feature-title">Hands-On Projects</h3>
                    <p class="feature-description">Every course includes real projects that kids can show off to friends and family, building confidence and practical skills.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon feature-icon-blue">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" fill="none" stroke-width="2"/>
                        <path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </div>
                    <h3 class="feature-title">Future-Ready Skills</h3>
                    <p class="feature-description">We prepare kids for tomorrow's digital world with coding, creativity, and critical thinking skills they'll use throughout their lives.</p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <div class="cta-content">
                    <div class="cta-text">
                        <h3 class="cta-title">
                            Ready to Start Your Child's <span class="text-gradient">Tech Journey?</span>
                        </h3>
                        <p class="cta-description">
                            Join hundreds of families who trust Urbancode to provide quality, 
                            engaging, and age-appropriate tech education for their children.
                        </p>
                        <div class="cta-buttons">
                            <button class="btn btn-primary">Book Free Demo Class</button>
                            <button class="link-button">Speak with Counselor →</button>
                        </div>
                    </div>
                    
                    <div class="cta-stats">
                        <div class="cta-stat">
                            <div class="cta-stat-number">2-12</div>
                            <div class="cta-stat-label">Age Range</div>
                        </div>
                        <div class="cta-stat">
                            <div class="cta-stat-number">6+</div>
                            <div class="cta-stat-label">Course Options</div>
                        </div>
                        <div class="cta-stat">
                            <div class="cta-stat-number">Live</div>
                            <div class="cta-stat-label">Interactive Classes</div>
                        </div>
                        <div class="cta-stat">
                            <div class="cta-stat-number">1:4</div>
                            <div class="cta-stat-label">Student Ratio</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      /* -----------------------------------------------------------
   Urbancode Kids - script.js (improved, accessible, lean)
----------------------------------------------------------- */

(() => {
  // ===== Utilities =====
  const $ = (sel, root = document) => root.querySelector(sel);
  const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const header = $('.header');
  const mobileNav = $('#mobileNav');
  const mobileBtn = $('.mobile-menu-btn');
  const hamburger = $('.hamburger');

  // Guard if critical nodes are missing
  if (!header || !mobileNav || !mobileBtn || !hamburger) {
    console.warn('[Urbancode] Some header/mobile elements not found.');
  }

  // ===== Mobile Menu (Accessible) =====
  function setMenuState(open) {
    if (!mobileBtn || !mobileNav || !hamburger) return;

    mobileBtn.setAttribute('aria-expanded', String(open));
    mobileBtn.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');

    if (open) {
      mobileNav.removeAttribute('hidden');
      mobileNav.classList.add('show');
      hamburger.classList.add('is-open'); // style via CSS (rotate, etc.)
      // Trap focus start (optional: focus first link)
      const firstLink = mobileNav.querySelector('a, button');
      if (firstLink) firstLink.focus({ preventScroll: true });
      document.documentElement.style.overflow = 'hidden'; // prevent body scroll
    } else {
      mobileNav.classList.remove('show');
      mobileNav.setAttribute('hidden', '');
      hamburger.classList.remove('is-open');
      document.documentElement.style.overflow = '';
      mobileBtn.focus({ preventScroll: true });
    }
  }

  function toggleMobileMenu() {
    const expanded = mobileBtn.getAttribute('aria-expanded') === 'true';
    setMenuState(!expanded);
  }

  // Wire the button
  if (mobileBtn) {
    mobileBtn.setAttribute('aria-controls', 'mobileNav');
    mobileBtn.setAttribute('aria-expanded', 'false');
    mobileBtn.addEventListener('click', toggleMobileMenu);
  }

  // Close on mobile link click
  if (mobileNav) {
    mobileNav.addEventListener('click', (e) => {
      const target = e.target.closest('a');
      if (target && target.classList.contains('nav-link-mobile')) {
        setMenuState(false);
      }
    });
  }

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileBtn?.getAttribute('aria-expanded') === 'true') {
      setMenuState(false);
    }
  });

  // ===== Smooth Scrolling with Header Offset =====
  function scrollWithOffset(targetEl) {
    const headerHeight = header ? header.offsetHeight : 0;
    const targetY = Math.max(0, targetEl.getBoundingClientRect().top + window.pageYOffset - headerHeight);

    if (prefersReducedMotion) {
      window.scrollTo(0, targetY);
    } else {
      window.scrollTo({ top: targetY, behavior: 'smooth' });
    }

    // Move focus for a11y (without messing with layout)
    targetEl.setAttribute('tabindex', '-1');
    targetEl.focus({ preventScroll: true });
    targetEl.addEventListener('blur', () => targetEl.removeAttribute('tabindex'), { once: true });
  }

  // Same-page hash links only
  function isSamePageHashLink(a) {
    const href = a.getAttribute('href');
    if (!href || !href.startsWith('#') || href === '#') return false;
    // ignore links that explicitly opt out
    if (a.dataset.noSmooth === 'true') return false;
    return true;
  }

  // Delegate clicks for smooth-scroll
  document.addEventListener('click', (e) => {
    const a = e.target.closest('a[href^="#"]');
    if (!a || !isSamePageHashLink(a)) return;

    const id = a.getAttribute('href');
    const target = document.querySelector(id);
    if (!target) return;

    e.preventDefault();
    scrollWithOffset(target);
    history.pushState(null, '', id);
  }, { passive: false });

  // Handle loading with hash (direct link to section)
  window.addEventListener('load', () => {
    if (location.hash) {
      const target = document.querySelector(location.hash);
      if (target) scrollWithOffset(target);
    }
  });

  // ===== Header background on scroll (passive) =====
  const setHeaderBg = () => {
    if (!header) return;
    const scrolled = window.scrollY > 50;
    header.classList.toggle('header--scrolled', scrolled);
    // Style in CSS:
    // .header { background: rgba(255,255,255,.95); backdrop-filter: blur(8px); }
    // .header--scrolled { background: rgba(255,255,255,.98); backdrop-filter: blur(12px); }
  };
  setHeaderBg();
  window.addEventListener('scroll', setHeaderBg, { passive: true });

  // ===== IntersectionObserver: reveal on scroll =====
  const io = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible'); // animate via CSS
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.12,
    rootMargin: '0px 0px -10% 0px'
  });

  // Add slide-up class + stagger
  const revealSelectors = [
    '.section-header',
    '.course-card',
    '.feature-card',
    '.testimonial-card',
    '.cta-section',
    '.trust-indicators'
  ];
  revealSelectors.forEach((sel) => {
    $$(sel).forEach((el, i) => {
      el.classList.add('slide-up');
      el.style.setProperty('--reveal-delay', `${i * 100}ms`);
      io.observe(el);
    });
  });

  // ===== Newsletter form handling =====
  const newsletterForm = $('.newsletter-form');
  const newsletterInput = $('.newsletter-input');

  function isValidEmail(email) {
    // simple and safe
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function showNotification(message, type = 'info') {
    // Remove existing
    const existing = $('.notification');
    if (existing) existing.remove();

    const n = document.createElement('div');
    n.className = `notification notification-${type}`;
    n.setAttribute('role', 'status');
    n.setAttribute('aria-live', 'polite');
    n.innerHTML = `
      <div class="notification-content">
        <span>${message}</span>
        <button class="notification-close" aria-label="Dismiss">×</button>
      </div>
    `;

    document.body.appendChild(n);

    // Animate in via CSS class
    requestAnimationFrame(() => n.classList.add('notification--in'));

    // Close interactions
    n.querySelector('.notification-close')?.addEventListener('click', () => n.remove());

    // Auto close
    setTimeout(() => {
      n.classList.remove('notification--in');
      setTimeout(() => n.remove(), 250);
    }, 5000);
  }

  if (newsletterForm && newsletterInput) {
    // Submit via click or Enter
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = newsletterInput.value.trim();
      if (isValidEmail(email)) {
        showNotification('Thank you for subscribing! 🎉', 'success');
        newsletterInput.value = '';
      } else {
        showNotification('Please enter a valid email address.', 'error');
      }
    });

    // If there's a button that wasn’t type="submit", fix via delegation:
    const btn = $('.newsletter-btn');
    if (btn && btn.type !== 'submit') {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        newsletterForm.dispatchEvent(new Event('submit', { cancelable: true, bubbles: true }));
      });
    }
  }

  // ===== CTA ripple (event delegation + cleanup) =====
  // Style ripples in CSS for better perf; we still compute position here.
  document.addEventListener('pointerdown', (e) => {
    const btn = e.target.closest('.btn-primary, .btn.btn-primary');
    if (!btn) return;

    const rect = btn.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = e.clientX - rect.left - size / 2;
    const y = e.clientY - rect.top - size / 2;

    const ripple = document.createElement('span');
    ripple.className = 'ripple';
    ripple.style.width = ripple.style.height = `${size}px`;
    ripple.style.left = `${x}px`;
    ripple.style.top = `${y}px`;

    // Ensure positioning context once
    if (getComputedStyle(btn).position === 'static') {
      btn.style.position = 'relative';
    }
    btn.style.overflow = 'hidden';
    btn.appendChild(ripple);

    // Remove after animation
    ripple.addEventListener('animationend', () => ripple.remove());
  }, { passive: true });

  // Inject minimal CSS needed for ripple / notification if not present
  (function injectRuntimeCSS() {
    const id = 'uc-runtime-css';
    if (document.getElementById(id)) return;
    const style = document.createElement('style');
    style.id = id;
    style.textContent = `
      /* Reveal animation */
      .slide-up { opacity: 0; transform: translateY(16px); transition: opacity .5s ease, transform .5s ease; transition-delay: var(--reveal-delay, 0ms); }
      .visible  { opacity: 1; transform: translateY(0); }

      /* Header states (match classes used in JS) */
      .header { transition: background .2s ease, backdrop-filter .2s ease; }

      /* Ripple */
      .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255,255,255,.35);
        transform: scale(0);
        pointer-events: none;
        animation: uc-ripple .6s ease-out forwards;
      }
      @keyframes uc-ripple {
        to { transform: scale(2); opacity: 0; }
      }

      /* Notification */
      .notification {
        position: fixed;
        top: 20px; right: 20px;
        z-index: 1000;
        max-width: 320px;
        translate: 120% 0;
        opacity: .9;
        color: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,.15);
        background: #ef4444; /* error default */
      }
      .notification-success { background: var(--primary, #6d28d9); }
      .notification--in { translate: 0 0; transition: translate .25s ease; }

      .notification-content {
        display: flex; align-items: center; justify-content: space-between; gap: .75rem;
        padding: .9rem 1rem;
        font: 500 14px/1.3 Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      }
      .notification-close {
        background: transparent; border: 0; color: inherit; font-size: 1.25rem; line-height: 1; cursor: pointer;
      }

      /* Mobile hamburger helper */
      .hamburger.is-open { rotate: 90deg; transition: rotate .2s ease; }
    `;
    document.head.appendChild(style);
  })();

  // ===== Floating elements random delays (kept) =====
  $$('.floating-element').forEach((el) => {
    el.style.animationDelay = `${(Math.random() * 2).toFixed(2)}s`;
  });

  // ===== Course card hover via classes (no inline transforms) =====
  // Prefer CSS: .course-card { transition: transform .2s ease; } .course-card:hover { transform: translateY(-8px) scale(1.02); }
  // If you still want JS for touch devices:
  $$('.course-card').forEach((card) => {
    card.addEventListener('mouseenter', () => card.classList.add('is-raised'));
    card.addEventListener('mouseleave', () => card.classList.remove('is-raised'));
  });
  // minimal CSS is injected above; add this in your styles.css:
  // .course-card { transition: transform .2s ease; }
  // .course-card.is-raised { transform: translateY(-8px) scale(1.02); }

  console.log('🚀 Urbancode Kids enhanced script loaded.');
})();

///  ================================number Animation spped==========================



(function () {
  const prefersReducedMotion = window.matchMedia?.('(prefers-reduced-motion: reduce)')?.matches;

  // Easing for a smooth finish
  const easeOutCubic = t => 1 - Math.pow(1 - t, 3);

  // Format numbers (no decimals by default)
  function formatNumber(value, decimals = 0) {
    const factor = Math.pow(10, decimals);
    const rounded = Math.round(value * factor) / factor;
    return rounded.toLocaleString(undefined, {
      minimumFractionDigits: decimals,
      maximumFractionDigits: decimals
    });
  }

  // Parse "500+", "98%", "1,234.5k", or use data-target
  function parseTarget(el) {
    if (el.dataset.target) {
      const n = parseFloat(String(el.dataset.target).replace(/,/g, '')) || 0;
      // If a suffix is provided explicitly, use it; else try to detect from text
      const m = String(el.textContent).trim().match(/^[-+]?[\d.,]+(\D+)?$/);
      const suffix = el.dataset.suffix ?? (m ? (m[1] || '') : '');
      return { target: n, suffix };
    }
    const raw = String(el.textContent).trim();
    const match = raw.match(/^([-+]?[\d.,]+)(.*)$/); // number + any trailing text
    if (!match) return { target: 0, suffix: '' };
    const num = parseFloat(match[1].replace(/,/g, '')) || 0;
    const suffix = match[2] ? match[2].trim() : '';
    return { target: num, suffix };
  }

  // Animate one element
  function animateCounter(el, { duration = 1600, decimals = 0 } = {}) {
    const { target, suffix } = parseTarget(el);

    // If reduced-motion, just snap to end
    if (prefersReducedMotion) {
      el.textContent = formatNumber(target, decimals) + (suffix ? suffix : '');
      return;
    }

    const startValue = 0;
    const startTime = performance.now();

    function frame(now) {
      const elapsed = now - startTime;
      const t = Math.min(1, elapsed / duration);
      const eased = easeOutCubic(t);
      const current = startValue + (target - startValue) * eased;
      el.textContent = formatNumber(current, decimals) + (suffix ? suffix : '');

      if (t < 1) {
        requestAnimationFrame(frame);
      } else {
        // Snap exactly to final value
        el.textContent = formatNumber(target, decimals) + (suffix ? suffix : '');
      }
    }
    requestAnimationFrame(frame);
  }

  // Observe when .stat-number becomes visible
  document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.stat-number');

    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;

        const el = entry.target;
        if (el.dataset.counted === '1') return; // run once

        // Decide decimals: if original text had a decimal point, preserve 1
        const hadDecimal = /\d+\.\d+/.test(el.textContent);
        animateCounter(el, { duration: 1600, decimals: hadDecimal ? 1 : 0 });

        el.dataset.counted = '1';
        obs.unobserve(el);
      });
    }, { threshold: 0.5 });

    counters.forEach(el => io.observe(el));
  });
})();


//  typing style for KINDS 


document.addEventListener("DOMContentLoaded", function () {
  const typingEl = document.querySelector(".typing");
  const text = "Kids?";
  let i = 0;

  function typeWriter() {
    if (i < text.length) {
      typingEl.textContent += text.charAt(i);
      i++;
      setTimeout(typeWriter, 200); // typing speed (ms)
    }
  }

  typeWriter();
});


    </script>


<?php 
include 'inc/footer.php';
?>
