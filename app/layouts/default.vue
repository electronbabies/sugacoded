<template>
  <div class="site-shell">
    <header class="site-header">
      <div class="site-container site-header__inner">
        <NuxtLink
          to="/"
          class="site-brand"
        >
          <img
            src="/brush-stroke-s-1200.webp"
            alt=""
            class="site-brand__logo"
          >

          <span>SugaCoded</span>
        </NuxtLink>

        <nav
          class="site-nav"
          aria-label="Primary navigation"
        >
          <NuxtLink to="#work">Work</NuxtLink>
          <NuxtLink to="#services">Services</NuxtLink>
          <NuxtLink to="#about">About</NuxtLink>
          <NuxtLink to="#contact">Contact</NuxtLink>
        </nav>
      </div>
    </header>

    <main>
      <slot />
    </main>

    <footer class="site-footer">
      <div class="site-container">
        <div class="site-footer__main">
          <div class="site-footer__identity">
            <NuxtLink
              to="/"
              class="site-footer__brand"
            >
              <img
                src="/brush-stroke-s-1200.webp"
                alt=""
                class="site-footer__logo"
              >

              <span>SugaCoded</span>
            </NuxtLink>

            <p class="site-footer__tagline">
              Independent software studio building thoughtful software.
            </p>
          </div>

          <nav
            class="site-footer__nav"
            aria-label="Footer navigation"
          >
            <a href="#work">Work</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#mailto:hello@sugacoded.app">Contact</a>
          </nav>

          <div class="site-footer__social">
            <a
              href="https://github.com/electronbabies"
              aria-label="GitHub"
              target="_blank"
            >GitHub</a>
            <a
              href="https://www.linkedin.com/company/sugacoded-llc"
              aria-label="LinkedIn"
              target="_blank"
            >LinkedIn</a>
          </div>
        </div>

        <div class="site-footer__bottom">
          <span>© {{ new Date().getFullYear() }} SugaCoded LLC</span>
          <span>Software built with care.</span>
        </div>
      </div>
    </footer>
  </div>
</template>
