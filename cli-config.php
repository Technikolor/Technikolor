<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$bootstrap = require_once 'bootstrap.php';

$em = $bootstrap->entityManager();

return ConsoleRunner::createHelperSet($em);
