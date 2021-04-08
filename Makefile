#docker-compose run --rm -u 1000:1000 composer create-project symfony/skeleton app

start:
	docker-composer up -d

stop:
	docker-compose down -v