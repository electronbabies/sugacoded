# Repository Guide

## Toolchain

- This is a single-package Nuxt 4 site, not a workspace monorepo. Use pnpm 11.20.0; CI uses Node 22.23.2.
- Install with `pnpm install --frozen-lockfile`. The `postinstall` hook runs `nuxt prepare` and creates `.nuxt`, which is required because ESLint and TypeScript configs import generated files. If dependencies already exist but `.nuxt` does not, run `pnpm exec nuxt prepare`.
- There is no automated test runner or test script. Verify changes in CI order with `pnpm lint`, `pnpm typecheck`, then `pnpm build`.

## Application Wiring

- Nuxt uses the Nuxt 4 `app/` source directory. `app/app.vue` owns site-wide SEO/head data, `app/layouts/default.vue` owns header/footer navigation, and `app/pages/index.vue` contains the single-page site content.
- Header/footer links target section IDs in `app/pages/index.vue`. Keep `work`, `services`, `about`, and `contact` IDs synchronized when changing navigation or sections.
- Site styling is global and split intentionally: `app/assets/css/main.css` loads Tailwind CSS 4 and its theme; `app/assets/scss/main.scss` contains the custom site layout and responsive rules. Both are loaded by `nuxt.config.ts`.
- `@nuxt/ui` is installed, but its Nuxt module and CSS import are not enabled. Do not assume `U*` components work because the unused template component `app/components/TemplateMenu.vue` contains them.
- Icons come from `@nuxt/icon` with remote providers disabled and client bundle scanning enabled. Use statically detectable names from the installed Lucide or Simple Icons collections; dynamic icon names may not be included in the client bundle.

## Deployment

- `.github/workflows/deploy.yml` runs only for pushes to `redesign`. It installs from the frozen lockfile, runs lint -> typecheck -> build, uploads the complete `.output`, restarts the production systemd service, and health-checks `https://sugacoded.app`.
- `/` is explicitly prerendered by `nuxt.config.ts`, but deployment still ships the full Nuxt `.output`; do not replace deployment output with a static directory without changing the server workflow.
