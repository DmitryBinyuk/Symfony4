docker-symfony
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
