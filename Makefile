up:
	docker-compose up -d
down:
	docker-compose down -v
exec:
	docker exec -it app bash
rebuild-app:
	docker-compose up -d --build app
