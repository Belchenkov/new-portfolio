init: docker-clear docker-up

up: docker-up

docker-clear:
	docker-compose down --remove-orphans

docker-up:
	docker-compose up --build -d

migrate-seed:
	docker-compose exec api-php-cli php artisan migrate:refresh --seed
