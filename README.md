# 📘 Enrollment Platform Demo

A Dockerized Laravel + Livewire app showcasing dev, direct prod, and reverse proxy deployment workflows.


## 🚀 Tech Stack

- Laravel 12
- Livewire 3
- MySQL 8
- Docker (Dev, Prod, Proxy deploy support)

## 📂 File Overview

- `.env.*.example`: Example environment files for each target
- `docker-compose.*.yaml`: Separate configs for dev, prod, and proxy flows
- `Dockerfile.*`: Custom images for optimized environments
- `Makefile`: Single-command workflows for dev and deploy

## 🧰 Local Development

```bash
make up-dev   # Build and run with .env.dev.example, no changes required
```

App runs at: `http://localhost:8000`


## 🔐 Production Deployment Options

### First-Time Deployment Notes

- Set your production `.env` values **before** deployment
- MySQL credentials must match Laravel's DB config

```bash
# Copies .env.pro.example to .env
make prepare-prod-env

# ⚠️ `.env` must NOT contain any !!SET_!! placeholders
make validate-prod-env

# Standard Production Deployment (No Reverse Proxy)
# For deploying directly to a server accessible by IP (e.g., http://domain.com:8000)
make up-prod

# Or...
# Reverse Proxy Deployment (For Custom Subdomain-based Routing)
# For deploying behind a shared nginx-proxy (e.g., https://sub.domain.com)
make up-prod-proxy
```

- First deploy requires running migrations manually:

```bash
# From inside container
php artisan migrate
```

## 🌍 Domain + Proxy Support

- Designed to work with [infra-reverse-proxy](https://github.com/callmeishmel/infra-reverse-proxy)
- Supports subdomain-based SSL routing (e.g. `sub.domain.com`)


## 🪪 License

MIT — feel free to clone, adapt, and deploy.
