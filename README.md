## Setup
composer install
cp .env.example .env
php artisan key:generate
mkdir /public/img/events
php artisan migrate
npm install && npm run dev
## Sqlite
Se você quiser usar o database.sqlite, fazer o seguinte passo a passo:
1. criar o arquivo database.sqlite dentro da pasta /database
2. mudar o .env aonde tiver todas as DBs Connections e passar: DB_CONNECTION=sqlite
## Node version
Eu utilizei a versão 16.18.1 do Node e a 8.19.2 do npm