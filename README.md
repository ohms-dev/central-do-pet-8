# Central do Pet :dog:
Sistema web com objetivo de centralizar o funcionamento de ONG's de adoção de animais.

## Como utilizar?
Após clonar o projeto:

    cd diretório_do_projeto
    composer install
    cp .env.example .env

Após isso, seguir com as configurações comuns de um projeto Laravel e do servidor Apache 2.

## Como popular o banco?
    php artisan migrate
    php artisan db:seed

## Mais informações:
Para mais informações consulte o diretório `docs` no presente repositório.
