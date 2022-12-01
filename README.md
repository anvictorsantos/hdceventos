## Setup
composer install
cp .env.example .env
php artisan key:generate
mkdir /public/img/events
php artisan migrate
## Sqlite
Se você quiser usar o database.sqlite, fazer o seguinte passo a passo:
1. criar o arquivo database.sqlite dentro da pasta /database
2. mudar o .env aonde tiver todas as DBs Connections e passar: DB_CONNECTION=sqlite