.PHONY: migrate reset build

migrate:
	php artisan migrate

reset:
	php artisan migrate:refresh --seed

build:
	php artisan migrate && php artisan serve &
	npm run dev

queue:
	php artisan queue:work

debug:
	php artisan debug
