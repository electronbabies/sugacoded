<template>
  <div class="home">
    <section class="hero">
      <div class="site-container hero__inner">
        <div class="hero__content">
          <span class="hero__eyebrow">Independent software studio</span>

          <h1 class="hero__title">
            Software should solve problems,
            <em>not create new ones.</em>
          </h1>

          <p class="hero__description">
          SugaCoded designs and builds thoughtful software around real
          problems — with a focus on clarity, usefulness, and the people
          actually using it.
          </p>

          <div class="hero__actions">
            <a href="#work" class="button button--primary">
              See the work
            </a>

            <a href="#contact" class="button button--text">
              Get in touch
              <span aria-hidden="true">→</span>
            </a>
          </div>
        </div>

        <div class="hero__mark" aria-hidden="true">
          <img
              src="/brush-stroke-s.png"
              alt=""
              >
        </div>
      </div>
    </section>
    <section id="work" class="work">
      <div class="site-container">
        <header class="section-heading">
          <span class="section-heading__eyebrow">Selected work</span>

          <h2 class="section-heading__title">
            Built around the problem,
            <em>not the pitch.</em>
          </h2>
        </header>

        <article class="featured-project">
          <div class="featured-project__visual">
            <div class="featured-project__mark">
              <span>LL</span>
            </div>

            <span class="featured-project__number">01</span>
          </div>

          <div class="featured-project__content">
            <div class="featured-project__meta">
              <span>Language Learning</span>
              <span>2025–Present</span>
            </div>

            <h3>LangLife</h3>

            <p class="featured-project__lead">
            Turn the Japanese you encounter in real life into something
            you can actually learn from.
            </p>

            <p class="featured-project__description">
            LangLife captures Japanese from the world around you, identifies
            useful vocabulary, preserves the original context, and turns those
            encounters into material you can study later.
            </p>

            <div class="featured-project__tags">
              <span>Laravel</span>
              <span>Nuxt</span>
              <span>Android</span>
              <span>OCR</span>
              <span>Japanese NLP</span>
            </div>

            <a href="#" class="project-link">
              View project
              <span aria-hidden="true">→</span>
            </a>
          </div>
        </article>
        <div class="project-list">
          <article class="project-card">
            <div class="project-card__meta">
              <span>02</span>
              <span>SaaS</span>
            </div>

            <h3>Reviewly.ai</h3>

            <p>
            A review management platform built to help businesses turn customer
            interactions into meaningful online feedback.
            </p>

            <div class="project-card__footer">
              <div class="project-card__tags">
                <span>Laravel</span>
                <span>Vue</span>
                <span>Stripe</span>
              </div>

              <a href="#" aria-label="View Reviewly.ai project">
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__meta">
              <span>03</span>
              <span>Social Media</span>
            </div>

            <h3>Social Rotation</h3>

            <p>
            Social media automation software designed to make managing recurring
            content simpler and less repetitive.
            </p>

            <div class="project-card__footer">
              <div class="project-card__tags">
                <span>Laravel</span>
                <span>JavaScript</span>
                <span>Social APIs</span>
              </div>

              <a href="#" aria-label="View Social Rotation project">
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="site-container about__inner">
        <div class="about__heading">
          <span class="section-heading__eyebrow">About SugaCoded</span>

          <h2>
            Good software gets
            <em>out of the way.</em>
          </h2>
        </div>

        <div class="about__content">
          <p class="about__lead">
          SugaCoded is an independent software studio built around a simple
          idea: understand the problem first, then write the software.
          </p>

          <p>
          For more than a decade, I've built and maintained products ranging
          from SaaS platforms and automation tools to mobile applications and
          the infrastructure behind them.
          </p>

          <p>
          I care about software that's understandable, maintainable, and useful.
          No unnecessary complexity. No technology chosen because it's
          fashionable. Just thoughtful engineering around what the product
          actually needs.
          </p>
        </div>
      </div>
    </section>
    <section id="services" class="capabilities">
      <div class="site-container">
        <div class="capabilities__header">
          <span class="section-heading__eyebrow">Capabilities</span>
        </div>

        <div class="capabilities__grid">
          <div class="capability">
            <span class="capability__number">01</span>
            <h3>Backend</h3>
            <p>
            Laravel, PHP, APIs, MySQL, authentication, integrations, and the
            infrastructure behind production applications.
            </p>
          </div>

          <div class="capability">
            <span class="capability__number">02</span>
            <h3>Frontend</h3>
            <p>
            Vue, Nuxt, TypeScript, JavaScript, responsive interfaces, and
            application-focused UI.
            </p>
          </div>

          <div class="capability">
            <span class="capability__number">03</span>
            <h3>Products</h3>
            <p>
            SaaS platforms, automation tools, mobile applications, OCR,
            language processing, and third-party integrations.
            </p>
          </div>

          <div class="capability">
            <span class="capability__number">04</span>
            <h3>Long-term Work</h3>
            <p>
            Maintenance, debugging, performance work, feature development,
            and keeping mature software understandable.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="site-container contact__inner">
        <div>
          <span class="contact__eyebrow">Have something to build?</span>

          <h2>
            Let's make something
            <em>useful.</em>
          </h2>
        </div>

        <div class="contact__action">
          <p>
          Available for contract work, product development, and
          long-term engineering projects.
          </p>

          <a href="mailto:hello@sugacoded.app" class="contact__link">
            Get in touch
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </div>
    </section>
  </div>
</template>
