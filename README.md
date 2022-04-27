# Project Installation Instruction

`git clone git@github.com:saqijaan/laravel-editor-builder.git LaravelCms`

`cd LaravelCms`

`cp docker .docker -r`

`cd .docker`

`docker-compose up -d`

`docker exec -it editor_app bash`

`php artisan migrate && php artisan db:seed`

`git clone git@github.com:saqijaan/lara-editor.git Editor`

`composer install`

`cd Editor && npm install && composer install`
