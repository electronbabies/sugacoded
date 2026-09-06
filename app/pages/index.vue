<template>
  <div class="home">
    <section class="hero">
      <div class="site-container hero__inner">
        <div class="hero__content">
          <span class="hero__eyebrow">Independent senior software engineer</span>

          <h1 class="hero__title">
            Software should solve problems,
            <em>not create new ones.</em>
          </h1>

          <p class="hero__description">
            SugaCoded builds and maintains SaaS products, focused applications,
            and practical business websites — with a focus on clarity,
            usefulness, and the people actually using them.
          </p>

          <div class="hero__actions">
            <a
              href="#work"
              class="button button--primary"
            >
              See the work
            </a>

            <a
              href="#contact"
              class="button button--text"
            >
              Get in touch
              <span aria-hidden="true">→</span>
            </a>
          </div>
        </div>

        <div
          class="hero__mark"
          aria-hidden="true"
        >
          <img
            src="/brush-stroke-s.png"
            alt=""
          >
        </div>
      </div>
    </section>
    <section
      id="work"
      class="work"
    >
      <div class="site-container">
        <header class="section-heading">
          <span class="section-heading__eyebrow">Selected work</span>

          <h2 class="section-heading__title">
            Built around the problem,
            <em>not the pitch.</em>
          </h2>
        </header>

        <article class="featured-project">
          <div class="featured-project__visual featured-project__visual--image">
            <img
              src="/langlife_main_pic.png"
              alt="LangLife OCR capture and Japanese study interface"
              width="1448"
              height="1086"
              class="featured-project__image"
            >

            <span class="featured-project__number">01</span>
          </div>

          <div class="featured-project__content">
            <div class="featured-project__meta">
              <span>Contextual Japanese Learning</span>
              <span>2026–Present</span>
            </div>

            <h3>LangLife</h3>

            <p class="featured-project__lead">
              Turn the Japanese you encounter in real life into something
              you can actually learn from.
            </p>

            <p class="featured-project__description">
              An OCR-based Japanese learning product that turns real-world
              encounters into personalized study. Captured sentences, vocabulary,
              and comprehension gaps shape future review around what the learner
              actually needs.
            </p>

            <div class="featured-project__tags">
              <span>
                <Icon name="i-simple-icons-laravel" />
                Laravel
              </span>

              <span>
                <Icon name="i-simple-icons-nuxtdotjs" />
                Nuxt
              </span>

              <span>
                <Icon name="i-simple-icons-android" />
                Android
              </span>

              <span>
                <Icon name="i-lucide-scan-text" />
                OCR
              </span>

              <span>
                <Icon name="i-lucide-languages" />
                Japanese NLP
              </span>
            </div>

            <div class="project-status">
              <Icon name="i-lucide-rocket" />
              <strong>In active development</strong>
            </div>

            <a
              href="https://langlife.sugacoded.app"
              target="_blank"
              rel="noopener noreferrer"
              class="project-link"
              aria-label="View the LangLife product preview"
            >
              View product preview
              <span aria-hidden="true">→</span>
            </a>
          </div>
        </article>
        <div class="project-list">
          <article class="project-card">
            <div class="project-card__meta">
              <span>02</span>
              <span>Social Media Automation</span>
            </div>

            <h3>Social Rotation</h3>

            <p>
              A long-running SaaS product for scheduling and rotating recurring content
              across multiple social platforms, with automated branded and watermarked
              image processing built into the publishing workflow.
            </p>

            <div class="project-card__footer">
              <div class="project-card__tags">
                <span>
                  <Icon name="i-simple-icons-laravel" />
                  Laravel
                </span>

                <span>
                  <Icon name="i-lucide-share-2" />
                  Social APIs
                </span>

                <span>
                  <Icon name="i-lucide-repeat-2" />
                  Automation
                </span>

                <span>
                  <Icon name="i-lucide-image" />
                  Image Processing
                </span>
              </div>

              <a
                href="https://socialrotation.com/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Visit Social Rotation"
              >
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__meta">
              <span>03</span>
              <span>Review Management SaaS</span>
            </div>

            <h3>Reviewly</h3>

            <p>
              A review-management product that helps businesses collect feedback through
              QR and messaging flows, manage review and response workflows, and use
              operational analytics to track performance.
            </p>

            <div class="project-card__footer">
              <div class="project-card__tags">
                <span>
                  <Icon name="i-simple-icons-laravel" />
                  Laravel
                </span>

                <span>
                  <Icon name="i-lucide-message-square-text" />
                  Twilio
                </span>

                <span>
                  <Icon name="i-simple-icons-google" />
                  Google Business
                </span>

                <span>
                  <Icon name="i-lucide-qr-code" />
                  QR Collection
                </span>
              </div>

              <a
                href="https://reviewly.ai"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Visit Reviewly"
              >
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section
      id="about"
      class="about"
    >
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
            SugaCoded is the independent full-stack practice of a senior software
            engineer, built around a simple idea: understand the problem first,
            then write the software.
          </p>

          <p>
            With 20 years of professional experience, the work spans Laravel and PHP
            backends, Nuxt and Vue frontends, APIs, automation, third-party integrations,
            background processing, and the infrastructure that keeps products running.
          </p>

          <p>
            The approach is straightforward: build software that's understandable, maintainable, and useful. Avoid unnecessary complexity. Choose technology because it fits the problem, not because it's fashionable.
          </p>
        </div>
      </div>
    </section>
    <section
      id="services"
      class="capabilities"
    >
      <div class="site-container">
        <div class="capabilities__header">
          <span class="section-heading__eyebrow">Capabilities</span>
        </div>

        <div class="capabilities__grid">
          <div class="capability">
            <span class="capability__number">01</span>
            <h3>Product Development</h3>
            <p>
              From initial ideas to production applications — architecture, backend
              systems, interfaces, APIs, integrations, deployment, and the pieces
              required to turn a concept into software people can actually use.
            </p>
          </div>

          <div class="capability">
            <span class="capability__number">02</span>
            <h3>Systems Integration</h3>
            <p>
              APIs, authentication, messaging, payments, third-party platforms,
              background processing, automation, and the infrastructure connecting
              them — built with security, reliability, and maintainability in mind.
            </p>
          </div>

          <div class="capability">
            <span class="capability__number">03</span>
            <h3>Existing Software</h3>
            <p>
              Feature development, debugging, modernization, performance work, and
              extending mature applications without introducing unnecessary
              complexity.
            </p>
          </div>

          <div class="capability">
            <span class="capability__number">04</span>
            <h3>Focused Business Sites</h3>
            <p>
              Polished responsive websites for service businesses that need to explain
              their offer, establish trust, and turn visits into useful inquiries
              without unnecessary product complexity.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section
      id="contact"
      class="contact"
    >
      <div class="site-container contact__inner">
        <div>
          <span class="contact__eyebrow">Have something to build?</span>

          <h2>
            Build something
            <em>useful.</em>
          </h2>
        </div>

        <div class="contact__action">
          <p>
            SugaCoded is available for contract product development, feature work,
            maintenance and cleanup, and focused business websites.
          </p>

          <a
            href="mailto:hello@sugacoded.app"
            class="contact__link"
          >
            Get in touch
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </div>
    </section>
  </div>
</template>
