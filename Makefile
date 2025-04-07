up:
	docker compose up -d --build

down:
	docker compose down

migrate:
	docker compose exec app php artisan migrate

bash:
	docker compose exec app bash

deploy:
	docker compose --env-file .env.production up -d --build

