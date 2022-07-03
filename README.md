# Blog

1) composer install 
2) configure your database in the .env file
3) php bin/console make:migration
4) cd migrations and delete all the file except for the newest version
5) php bin/console doctrine:migrations:migrate
6) symfony serve 
and navigate to yur localhost and your database to see the changes 
