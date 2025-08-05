<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'news' => 'c,r,u,d',
            'products' => 'r,u,d',
            'profile' => 'r,u',
            'umkm' => 'c,r,u,d',
            'contacts' => 'c,r,u,d',
            'events' => 'c,r,u,d',
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'news' => 'c,r,u,d',
            'products' => 'r,u,d',
            'contacts' => 'c,r,u,d',
            'events' => 'c,r,u,d',
            'profile' => 'r,u',
            'umkm' => 'c,r,u,d',
        ],
        'umkm' => [
            'products' => 'c,r,u,d',
            'profile' => 'r,u',
            'umkm' => 'r,u',
        ],
        'user' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
