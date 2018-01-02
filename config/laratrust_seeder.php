<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'author' => [
            'profile' => 'r,u'
        ],
        'teacher' => [
            'profile' => 'r,u'
        ],
        'student' => [
            'profile' => 'r,u'
        ],
        'supporter' => [
            'profile' => 'r,u'
        ],
        'visitor' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
