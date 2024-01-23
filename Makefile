pull:
	docker-compose pull

stop:
	docker-compose stop

start:
	docker-compose up --detach

destroy:
	docker-compose down --volumes

build:
	docker-compose build

down:
	docker-compose exec -T laravel_redis_publisher_php php artisan down

up:
	docker-compose exec -T laravel_redis_publisher_php php artisan up

optimize:
	docker-compose exec -T laravel_redis_publisher_php php artisan optimize

migrate:
	docker-compose exec -T laravel_redis_publisher_php php artisan migrate --force

composer-update:
	docker-compose exec -T laravel_redis_publisher_php composer update -n -o --no-dev

unused-images-remove:
	docker image prune -af