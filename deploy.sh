cp .env.example .env

composer update

npm install

php artisan key:generate

touch database/database.sqlite

php artisan migrate

npm run watch
