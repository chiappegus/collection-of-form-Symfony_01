# gitSinfomy4.3

https://symfonycasts.com/screencast/api-platform/swagger#play



symfony serve -d

composer require api

.env
DATABASE_URL=mysql://root:@127.0.0.1:3306/cheese_whiz

composer require maker --dev


php bin/console make:entity

composer require migrations

php bin/console doctrine:database:create


php bin/console make:migration

php bin/console doctrine:migrations:migrate

php bin/console debug:router

curl -X GET 'https://localhost:8000/api' -H "accept: application/ld+json"


si hay bd :

composer require doctrine/doctrine-fixtures-bundle --dev
php bin/console doctrine:fixtures:load


