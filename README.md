# <center>OpenLaravelWeek - [Beer And Code](https://github.com/beerandcodeteam)</center>

### Framework:

- [**Laravel 10.22**](https://laravel.com/)

### API do GATEWAY

- [**Link do gateway](https)


### Requerimenos minimos

- [**Docker**](https://docs.docker.com/engine/install/)
- [**Git**](https://git-scm.com/)


<hr>

### Projeto

Consumindo o gateway de pagamento do mercado pago em um checkout transparente(sem necessidade de login) e enviando email para informar situação do pagamento.
<hr>

### Como rodar a aplicação:

Cópie o repositório:

```
git clone git@github.com:Elivandro/olw3-beerAndCode.git
cd olw3-beerAndcode
```

renomeie arquivo de variaveis env

```
cp .env.example .env
```

Para instalar as dependências do composer com o docker:

```
docker run --rm -it\
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Inicie o sail
```
./vendor/bin/sail up -d
```

Gere uma chave para aplicação

```
./vendor/bin/sail artisan key:generate
```

Para instalar as dependências do npm:
```
./vendor/bin/sail npm install
```

configure no arquivo .env

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

QUEUE_CONNECTION=redis

REDIS_HOST=redis

```

rode as migrações com alguns dados

```
./vendor/bin/sail artisan migrate --seed

```

rodar o vite

```
./vendor/bin/sail npm run dev
```

coloque um apelido ao sail

[Shell alias](
https://laravel.com/docs/10.x/sail#configuring-a-shell-alias)