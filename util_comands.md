# Comandos utiles Api-Platform Buletech
** Update schema of tables

docker-compose exec php bin/console doctrine:schema:update --force

** Clear cache ** 
docker-compose exec php bin/console cache:clear --env=prod


docker-compose exec php bin/console doctrine:database:drop --force && docker-compose exec php bin/console doctrine:database:create && docker-compose exec php bin/console doctrine:schema:update --force
