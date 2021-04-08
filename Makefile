app:
	mkdir app

start: app
	docker-compose run --rm -u 1000:1000 composer create-project symfony/skeleton app