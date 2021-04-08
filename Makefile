USER_ID?=1000
GROUP_ID?=1000

#docker-compose run --rm -u 1000:1000 composer create-project symfony/skeleton app

composer.lock: composer.json
	docker-compose run --rm composer update

vendor: composer.lock
	docker-compose run --rm composer install

start: vendor
	docker-compose up -d

stop:
	docker-compose down -v