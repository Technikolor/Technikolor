# The Technikolor Framework

[![Software License][ico-license]](LICENSE.md)

The easiest, most advanced, PHP Framework

## Install

```bash
$ docker run --rm --interactive --tty --volume $PWD:/app \
    composer create-project technikolor/technikolor
```

## Startup
Run dev environment

```bash
$ docker-compose up -d
```

Install dependencies

```bash
$ docker exec -it technikolor-app composer install
```

Visit [localhost:8080](http://localhost:8080)

## Docs

Wiki in [this repository](https://github.com/Technikolor/Technikolor/wiki)

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
