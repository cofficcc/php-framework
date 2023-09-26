<?php

return [

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'profile/{id:\d+}' => [
        'controller' => 'account',
        'action' => 'profile',
    ],

];