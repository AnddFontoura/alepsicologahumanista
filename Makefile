down:
	docker compose down -v --remove-orphans

up:
	docker compose up -d

restart:
	docker compose down -v --remove-orphans
	docker compose up -d

set-database:
	docker exec -it ale_psicologa_humanista php artisan migrate
	docker exec -it ale_psicologa_humanista php artisan db:seed

reset-database:
	docker exec -it ale_psicologa_humanista php artisan migrate:fresh

build-js:
	npm run build
