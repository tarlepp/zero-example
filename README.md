# What is this?

Just a quick demo how to use Doctrine with group by clauses

## Question

Someone asked help on #php channel of Symfony Slack workspace

https://symfony-devs.slack.com/archives/C3FQPE6LE/p1612020133190300

So this repository contains simple example about that.

## Usage

Just clone this repository, run composer install and start the application with
`symfony serve` command.

```
./bin/console doctrine:schema:create
./bin/console doctrine:schema:update --force
```

Open `http://localhost/8000`, see `src/Controller/IndexController.php` for detailed 
instructions.

## Authors

* [Tarmo Leppänen](https://github.com/tarlepp)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2021 Tarmo Leppänen
