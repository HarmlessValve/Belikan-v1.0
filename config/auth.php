<?php

return [

    'defaults' => [
        'guard' => 'admin',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [  // Tambahkan guard admin
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],

    'providers' => [
        'admins' => [  // Tambahkan provider admin
            'driver' => 'eloquent',
            'model' => App\Models\ModelAdmin::class,  // Sesuaikan dengan model admin yang kamu gunakan
        ],
    ],

    'passwords' => [

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
