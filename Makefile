USER_ID?=1000
GROUP_ID?=1000

#docker-compose run --rm -u 1000:1000 composer create-project symfony/skeleton app

composer.lock: composer.json
	docker-compose run --rm php composer update --prefer-source

vendor: composer.lock
	docker-compose run --rm php composer install --prefer-source

start: vendor
	docker-compose up -d

stop:
	docker-compose down -v

behat:
	docker-compose run --rm php vendor/bin/behat