# core-php
Esse é o core basico em php , a ideia é medir o tempo das demandas em cima dos testes. nenhum codigo deve ser criado sem demanda



#lumen

composer global require "laravel/lumen-installer"

~/.config/composer/vendor/laravel/lumen-installer/lumen core-php //corephp é um nome generico pro projeto facil de trocar depois


cd core-php //nome qualquer do projeto


composer init

composer require codeception/codeception

./vendor/bin/codecept bootstrap

./vendor/bin/codecept run


#essa hora deve ter executado o minimo de testes.


composer require behat/behat behat/mink behat/mink-extension


coloquei esses testes ...

Feature: Create Game
    In order to play a new game
    As a player
    I need to able to create a new game

    Scenario: Cerate a new game
        Given I am a player
        And I have some data to send
        | username | foo |
        When I send a POST request to "/games"
        Then the response status code should be 201
        And the response should contain a "message" entry
        And the response entry "message" should be "created"
        
       
       
       
agora precisa fazer passar
a ideia é que cada card no trello seja uma feature dessa
alterando o trello e commitando o gerente recebe notificação e verifica pra colocar no ar.

----------

agora vamos configurar os ambientes diferentemente.

cp .env.example .env
cp .env.example testing.env


vamos usar um gerador de codigos padrão que deve vir montado em cima de uma documentação generica qualquer.
entenda que devemos ter um dicionario onde o cliente deve escrever aquelas regras acima e devemos ter como extrair alguns campos


composer require wn/lumen-generators //https://github.com/webNeat/lumen-generators



em app/Providers/AppServiceProvider.php modificar a função register:

public function register()
    {
        if ($this->app->environment() == 'local') {
	        $this->app->register('Wn\Generators\CommandsServiceProvider');
	    }
    }



em bootstrap/app.php

adicionar essa linha na area de register services providers

$app->register('Wn\Generators\CommandsServiceProvider');

-----------------------------------------
vamos rodar o codigo do gerador pra criar os arquivos e tudo mais do usuario e um grupo , começaremos pelo grupo

php artisan wn:resource group "name;string;required;fillable" --add=timestamps --has-many=players --force

php artisan wn:resource player "name;string;required;fillable group_id;integer:unsigned;numeric;fillable,key baithday;date;;date" --add=timestamps


isso vai gerar os seguintes arquivos que vamos chamar nos nossos testes

Player model

players migration

REST actions trait

PlayersController

player routes

App\Player factory

php artisan migrate vai subir as migrations em nossas tabelas

-------------------------------------
para criar o codigo de novo player , não podemos fazer sem testes

vendor/bin/codecept generate:test unit Player


isso vai gerar um teste unitario pra player dentro da suite de testes unitarios


---------------------------------


rodar o codesniffer

vendor/bin/phpcs --standard=PSR2 app/

vendor/bin/phpcbf --standard=PSR2 app/

        
