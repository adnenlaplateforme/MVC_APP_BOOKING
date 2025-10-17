<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc_app_booking');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

// Configuration générale de l'application
define('BASE_URL', '/');
define('APP_NAME', 'MVC APP BOOKING');
define('APP_VERSION', '1.0.0');

// Configuration des chemins
define('ROOT_PATH', dirname(__DIR__));
define('CONFIG_PATH', ROOT_PATH . '/config');
define('CONTROLLER_PATH', ROOT_PATH . '/controllers');
define('MODEL_PATH', ROOT_PATH . '/models');
define('VIEW_PATH', ROOT_PATH . '/views');
define('INCLUDE_PATH', ROOT_PATH . '/includes');
define('CORE_PATH', ROOT_PATH . '/core');
define('PUBLIC_PATH', ROOT_PATH . '/public');
define("LOG_PATH", ROOT_PATH . '/logs');

define('CRENEAUX', array(
    (object) ['name' => '8-9h', 'debut' => '08:00:00', 'fin' => '09:00:00'],
    (object) ['name' => '9-10h', 'debut' => '09:00:00', 'fin' => '10:00:00'],
    (object) ['name' => '10-11h', 'debut' => '10:00:00', 'fin' => '11:00:00'],
    (object) ['name' => '11-12h', 'debut' => '11:00:00', 'fin' => '12:00:00'],
    (object) ['name' => '12-13h', 'debut' => '12:00:00', 'fin' => '13:00:00'],
    (object) ['name' => '13-14h', 'debut' => '13:00:00', 'fin' => '14:00:00'],
    (object) ['name' => '14-15h', 'debut' => '14:00:00', 'fin' => '15:00:00'],
    (object) ['name' => '15-16h', 'debut' => '15:00:00', 'fin' => '16:00:00'],
    (object) ['name' => '16-17h', 'debut' => '16:00:00', 'fin' => '17:00:00'],
    (object) ['name' => '17-18h', 'debut' => '17:00:00', 'fin' => '18:00:00'],
    (object) ['name' => '18-19h', 'debut' => '18:00:00', 'fin' => '19:00:00'],
));
