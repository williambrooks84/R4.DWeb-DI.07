<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\LegoController::home'], [], [['text', '/']], [], [], []],
    'filter_by_collection' => [['id'], ['_controller' => 'App\\Controller\\LegoController::filter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/collections']], [], [], []],
    'App\Controller\LegoController::home' => [[], ['_controller' => 'App\\Controller\\LegoController::home'], [], [['text', '/']], [], [], []],
    'App\Controller\LegoController::filter' => [['id'], ['_controller' => 'App\\Controller\\LegoController::filter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/collections']], [], [], []],
];
