prepare-dev-env:
	@if [ -f .env ]; then \
		echo "\n⚠️  .env already exists — skipping copy from .env.dev.example."; \
	else \
		echo "📄 Copying .env.dev.example → .env..."; \
		cp .env.dev.example .env; \
	fi

up-dev: prepare-dev-env
	docker compose -f docker-compose.yaml -f docker-compose.dev.yaml up -d --build



prepare-prod-env:
	@if [ -f .env ]; then \
		echo "\n⚠️  .env already exists — skipping copy from .env.prod.example."; \
	else \
		echo "📄 Copying .env.prod.example → .env..."; \
		cp .env.prod.example .env; \
	fi

validate-env:
	@if grep -q '!!SET_' .env; then \
		echo "\n❌ ERROR: .env contains unresolved placeholders like '!!SET_'."; \
		echo "👉 Please update .env before running a production build.\n"; \
		exit 1; \
	fi

up-prod: prepare-prod-env validate-env
	docker compose -f docker-compose.yaml -f docker-compose.prod.yaml up -d --build


down:
	docker compose down

migrate:
	docker compose exec app php artisan migrate

bash:
	docker compose exec app bash

composer-install:
	docker compose exec app composer install
