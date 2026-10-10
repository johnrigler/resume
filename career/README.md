# Career search workspace

This directory is the working index for a methodical remote IT job search. It complements the legacy PHP resume generator; it does not replace it.

## Target
- Remote-first US employment, eligible for New Mexico residents.
- Onsite travel preferred no more than 1–2 times a year; verify before applying.
- Roles: enterprise/technical support engineer, Linux/cloud support, technical operations, developer support, and infrastructure engineering.
- Primary strengths: telephone-based AIX technical support, enterprise Linux/Unix operations, troubleshooting, networking, cloud, incident response, automation, JavaScript and API tooling.

## Workflow
1. Review a posting against `role-scorecard.md`.
2. Create a GitHub Issue using `application-template.md`. One opportunity per issue.
3. Record public job URL, company, location restrictions, travel/on-call requirements, and whether compensation is base pay.
4. Choose a resume variant: enterprise support, infrastructure/DevOps, or customer service.
5. Submit through the employer's official channel. Record the submission date and next action in the issue.
6. Close issues after rejection, withdrawal, offer, or expiration. Never imply application was sent until confirmed.

## Resume strategy
- Maintain a truthful master career history separately from tailored one- or two-page presentations.
- Current employment: Acoma Business Enterprises, cashier/food service, December 2025–present.
- Earlier IBM work includes remote telephone-bank AIX support. Show relevant experience on targeted versions; full dates belong on background-check forms when requested.
- Avoid unverifiable claims, inflated titles, and misstated employment dates.
- Keep GitHub-hosted material free of private data.

## Private information
This repository is public-facing unless its visibility changes. Do not commit home addresses, Social Security numbers, identity documents, references' private details, background-check records, personally identifying recruiter emails, or private offer letters.

## Starting point
Search roles that actually use enterprise troubleshooting and customer communication before searching generic front-end JavaScript openings.

## Browser interface

Open [`career/index.html`](index.html) in a browser. It is a self-contained static app; no build step and no PHP runtime. When GitHub Pages is configured for the repository and the `career` path is published, the same file can be served there. The public sections are employer-readable, while the job pipeline remains in the local browser only. Export the JSON to back it up or move devices.

Note: `localStorage` is scoped to the origin. A local `file://` copy and a hosted copy do not automatically share data. This app is not an encrypted vault; avoid sensitive notes.
