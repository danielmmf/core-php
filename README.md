# core-php
Esse é o core basico em php , a ideia é medir o tempo das demandas em cima dos testes. nenhum codigo deve ser criado sem demanda



#lumen

composer global require "laravel/lumen-installer"

~/.config/composer/vendor/laravel/lumen-installer/lumen core-php


cd core-php


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


        
