# Development Deploy
prepare-dev-env:
	@if [ -f .env ]; then \
		echo "\n⚠️  .env already exists — skipping copy from .env.dev.example."; \
	else \
		echo "📄 Copying .env.dev.example → .env..."; \
		cp .env.dev.example .env; \
	fi

up-dev: prepare-dev-env
	docker compose -f docker-compose.yaml -f docker-compose.dev.yaml up -d --build


# Production Deploy
warn-if-prod-db-exists:
	@if docker volume ls | grep -q 'mysql-data'; then \
		echo "\n⚠️  WARNING: A MySQL volume already exists."; \
		echo "\n🚨 If you've updated DB credentials, they will NOT take effect unless you remove the volume."; \
	fi

prepare-prod-env: warn-if-prod-db-exists
	@if [ -f .env ]; then \
		echo "\n⚠️  .env already exists. Skipping copy."; \
	else \
		cp .env.prod.example .env && echo "📄 .env copied from .env.prod.example"; \
	fi

validate-prod-env:
	@if [ ! -f .env ]; then \
		echo "\n❌ ERROR: .env file not found."; \
		echo "\n⚠️ INFO: Run 'make prepare-prod-env' to copy .env.prod.example file."; \
		exit 1; \
	fi
	@if grep -q '!!SET_' .env; then \
		echo "\n❌ ERROR: .env contains unresolved placeholders."; \
		exit 1; \
	fi
	@echo "✅ .env is present and valid."

# Standard Production Deployment (No Reverse Proxy)
# For deploying directly to a server accessible by IP (e.g., http://domain.com:8000)
up-prod: prepare-prod-env validate-prod-env
	docker compose -f docker-compose.yaml -f docker-compose.prod.yaml up -d --build

# Reverse Proxy Deployment (For Custom Subdomain-based Routing)
# For deploying behind a shared nginx-proxy (e.g., https://sub.domain.com)
up-prod-proxy: prepare-prod-env validate-prod-env
	docker compose -f docker-compose.yaml -f docker-compose.proxy.yaml up -d --build


# General Actions
down:
	docker compose down
