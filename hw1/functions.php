<?php

function __autoload($className) {
    require
        __DIR__ . '/models/' .
        $className . '.php';
}
