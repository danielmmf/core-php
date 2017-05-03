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
