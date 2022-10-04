<?php

return [
    'paginate' => [
        'paginate_admins' => '10',
        'paginate_home' => '12',
        'paginate_relate_products' => '8',
    ],
    'role' => [
        'cms_user' => 0,
        'fe_user' => 1,
    ],
    // order status
    'status' => [
        'new' => 0,
        'in_progress' => 1,
        'buyer_cancel' => 2,
        'admin_cancel' => 3,
        'done' => 4,
    ],
    'sort' => [
        'asc' => 1,
        'desc' => 2,
    ],
    'product' => [
        'status' => [
            'active' => 1,
            'inactive' => 0,
        ],
    ],
];
