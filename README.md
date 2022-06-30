# finan
Tema da atividade prática de GERÊNCIA DE CONFIGURAÇÃO DE SOFTWARE: controle de despesas pessoais (receitas e despesas, entradas e saídas)

Aplicação construída com base em:
- PHP 7.3.7
- Laravel 4.2.10
- Bootstrap 4
- PHPUnit 9.5
- Composer 2.3.5
- XAMPP 7.3.7
- Node.js 12.6.0

$ composer require laravel/ui

$ php artisan ui vue --auth

Sobre os Testes Unitários:
https://docs.google.com/document/d/1LGZvws3Teo6oTD33k-9b8m1AscoOrMdaHrfzsk5Snhk/edit?usp=sharing

Sobre a Utilização do Git:
https://rogerdudler.github.io/git-guide/index.pt_BR.html

Jenkins presente na VM (ip fixo):
http://177.44.248.105:8082/

Docker:

- Ver imagens Docker existentes
$ docker images

- Ver containers iniciados
$ docker ps

- Acessar um container (diretórios e arquivos)
$ docker exec -it CONTAINER_ID bash

- Executar scripts Compose.yml
$ docker-compose up -d


1. Stop/Remover container Jenkins do docker
2. Instalar Jenkins direto na VM Linux
3. nova job com Jenkinsfile executando com sucesso o sh 'docker --version'
4. através da job, git pull na vm linux

Instalar Jenkins no Ubuntu 20.4:
- https://www.digitalocean.com/community/tutorials/how-to-install-jenkins-on-ubuntu-20-04-pt

sudo apt-get update

sudo apt install php-curl

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

Permissão geral para funcionamento com Sail:
- Com usuário root:root você tenta com o comando: sudo chmod -R 777 storage/

sudo chmod -R 777 storage/

sudo chmod -R 777 ./bootstrap/cache/

sudo ./vendor/bin/sail up -d
