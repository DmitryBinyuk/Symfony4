
Trainee project
==============

This is a complete stack for running Symfony 4 (latest version: Flex) 
into Docker containers using docker-compose tool.

# Installation

Next, put your Symfony application into `symfony` folder 
and do not forget to add `symfony.localhost` in your `/etc/hosts` file.

Make sure you adjust `database_host` in `parameters.yml` to the database 
container alias "db"

Then, run:

```bash
$ docker-compose up -d
```

You are done, you can visit your Symfony application 
on the following URL:
`http://symfony.localhost`

_Note :_ you can rebuild all Docker images by running:

```bash
$ docker-compose build
```

docker exec -it container_id /bin/sh

php bin/console cache:clear

Generate a blank migration class:
php bin/console doctrine:migrations:generate

Create migration for new entity:
php bin/console doctrine:migrations:diff

run the migration to add the table to your database:

php bin/console doctrine:migrations:migrate

Load fixtures by running: 
php bin/console doctrine:fixtures:load

Create User Class:
php bin/console make:user

If you prefer to add new properties manually, the make:entity command can generate the getter & setter methods for you:

php bin/console make:entity --regenerate

If you make some changes and want to regenerate all getter/setter methods, also pass --overwrite.

Run tests:
./bin/phpunit