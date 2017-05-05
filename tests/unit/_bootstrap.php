<?php
// Here you can initialize variables that will be available to your tests
//\Dotenv::setEnvironmentVariable('APP_ENV', 'testing');
// Bootstrap Laravel


putenv('APP_ENV=testing');
putenv('DB_CONNECTION=testing');
putenv('DB_DATABASE=testing');
