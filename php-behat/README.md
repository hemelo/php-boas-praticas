# Projeto MVC com práticas de BDD e TDD

Uso de [Behat](https://docs.behat.org/en/latest/) com a extensão [Mink](https://mink.behat.org/en/latest/) nos testes

[BDD - Behavior Driven Development](https://pt.wikipedia.org/wiki/Behavior_Driven_Development)
[TDD - Test Driven Development](https://pt.wikipedia.org/wiki/Test-driven_development)

## Ambiente necessário

Para executar este sistema é necessário ter instalado:

- Composer
- PHP (>= 7.3)
    - PDO SQLite


### Iniciar o sistema

[X] Instalação

```
$ docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) composer install --ignore-platform-reqs
```

[X] Banco de Dados 

```
$ docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) php:latest php vendor/bin/doctrine orm:schema-tool:create
```
[X] Novo usuário - email: `email@example.com`; senha: `123456`

```
$ docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) php:latest php vendor/bin/doctrine dbal:run-sql "INSERT INTO usuarios (email, senha) VALUES ('email@example.com', '\$argon2i\$v=19\$m=65536,t=4,p=1\$WHpBb1FzTDVpTmQubU55bA\$jtZiWSSbmw1Ru4tYEq1SzShrMu0ap2PjblRQRubNPgo');"
```

[X] Servidor de testes

```
docker run -itv $(pwd):/app -w /app -u $(id -u):$(id -g) -p 8080:8080 php:latest php -S 0.0.0.0:8080 -t public
```

[X] Acesso

```
http://localhost:8080/
```

### Execução de testes

```
$ vendor/bin/behat
```

Perfis de teste

- unidade
- integracao
- e2e

```
$ vendor/bin/behat --profile=unidade
```

Adicionando features 

```
$ vendor/bin/behat features/new.feature --dry-run --append-snippets
```

Mais informações [aqui](https://docs.behat.org/en/v2.5/guides/6.cli.html)
