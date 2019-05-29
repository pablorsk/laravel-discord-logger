<?php

return [

    /*
     * A set of colors to associate to the different log levels
     */
    'colors' => [
        'DEBUG'     => 0x607d8b,
        'INFO'      => 0x4caf50,
        'NOTICE'    => 0x2196f3,
        'WARNING'   => 0xff9800,
        'ERROR'     => 0xf44336,
        'CRITICAL'  => 0xe91e63,
        'ALERT'     => 0x673ab7,
        'EMERGENCY' => 0x9c27b0,
    ],

    /*
     * The default
     */
    'from'   => [
        'name'   => env('APP_NAME', 'Discord Logger'),
        'avatar_url' => null,
    ],
];
