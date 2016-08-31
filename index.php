<?php

/**
 * Start
 */

define('GAOPHP',  realpath('./'));
define('CORE', GAOPHP.'/core');
define('APP', GAOPHP.'/app');

define('DEBUG', true);

if(DEBUG) {
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE.'/common/function.php';

include CORE.'/gaophp.php';

spl_autoload_register('\core\gaophp::load');

\core\gaophp::run();
