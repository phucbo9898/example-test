<?php
return [
    //button back + save + apply + search + export + logout
    'button' => [
        'back' => 'Back',
        'save' => 'Save',
        'apply' => 'Apply',
        'search' => 'Search',
        'export' => 'Export excel',
        'logout' => 'Logout',
        'cancel' => 'Cancel',
        'done' => 'Done',
        'change' => 'Change',
        'new' => 'New',
        'in_progress' => 'In progress',
        'buyer_cancel' => 'Buyer Cancel',
        'admin_cancel' => 'Admin Cancel',

    ],

    // sidebar name
    'user' => 'User Management',
    'category' => 'Category Management',
    'product' => 'Product Management',
    'order' => 'Order Management',
    'name' => [
        'dashboard' => 'Dashboard',
        'users' => 'User list',
        'category' => 'Category list',
        'product' => 'Product list',
        'order' => 'Order list',
    ],

    // order_by
    'sort' => [
        'asc' => 'Sort by Ascending',
        'desc' => 'Sort by Descending',
    ],

    // search dashboard + user + category + product + order
    'search' => [
        'dashboard' => [
            'from_date' => 'From date',
            'to_date' => 'To date',
        ],
        'user' => [
            'name' => 'Name/ Email',
            'field' => 'Search name or email',
            'type' => 'Choose type',
        ],
        'category' => [
            'name' => 'Name',
            'field' => 'Search name',
        ],
        'product' => [
            'name' => 'Name',
            'category' => 'Category',
            'sort_price' => 'Sort by price',
            'sort_sold' => 'Sort by sold number',
            'field' => [
                'name' => 'Search name',
                'category' => 'None',
                'sort' => 'Choose sort by',
            ],
        ],
        'order' => [
            'name' => 'Product name',
            'status' => 'Choose type',
            'from_date' => 'From',
            'to_date' => 'To',
            'field' => [
                'name' => 'Search name',
                'status' => 'Choose status'
            ],
        ],
    ],

    // table user + category + product + order
    'table' => [
        'user' => [
            'no' => 'No',
            'name' => 'User Name',
            'email' => 'User Email',
            'type' => 'Type',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
            'action' => 'Action'
        ],
        'category' => [
            'no' => 'No',
            'name' => 'Category Name',
            'created_by' => 'Created by',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
        'product' => [
            'no' => 'No',
            'image' => 'Product Image',
            'name' => 'Product Name',
            'category' => 'Category',
            'price' => 'Price',
            'sold' => 'Sold',
            'status' => 'Status',
            'updated_at' => 'Updated at',
            'action' => 'Action'
        ],
        'order' => [
            'no' => 'No',
            'image' => 'Product image',
            'name' => 'Product Name',
            'buyer' => 'Buyer',
            'qty' => 'Quantity',
            'status' => 'Status',
            'buy_at' => 'Buy at',
            'updated_at' => 'Updated at',
            'action' => 'Action'
        ],
    ],

    // create new user + category + product
    'create' => [
        'user' => [
            'name' => 'Create new user',
            'form' => [
                'name' => 'Create user',
                'user_name' => [
                    'name' => 'User Name',
                    'text' => 'Enter user name'
                ],
                'user_image' => 'User image',
                'user_email' => [
                    'name' => 'User Email',
                    'text' => 'Enter user email',
                ],
                'user_password' => [
                    'name' => 'Password',
                    'text' => 'Enter password',
                ],
                'type' => 'Choose type',
            ],
        ],
        'category' => [
            'name' => 'Create new category',
            'form' => [
                'name' => 'Create category',
                'category_name' => [
                    'name' => 'Category Name',
                    'text' => 'Enter category name',
                ],
            ],
        ],
        'product' => [
            'name' => 'Create new product',
            'form' => [
                'name' => 'Create product',
                'product_name' => 'Product name',
                'product_image' => 'Product image',
                'category' => 'Category',
                'price' => 'Price',
                'description' => 'Description',
                'status' => 'Status',
                'field' => [
                    'name' => 'Enter product name',
                    'category' => 'Choose category',
                    'price' => 'Enter product price',
                    'description' => 'Enter product description',
                    'status' => 'Choose status',
                ],
            ],
        ],
    ],

    // name update user + category + product
    'update' => [
        'user' => 'Update user',
        'category' => 'Update category',
        'product' => ' Update product',
    ],

    // name info
    'info' => [
        'name' => 'Infomation',
        'order' => [
            'id' => 'Order ID',
            'buyer' => 'Buyer',
            'amount' => 'Amount',
            'buy_at' => 'Buy at',
            'updated_at' => 'Updated at',
            'name_change' => 'Change status order',
            'change' => 'Change',
        ],
        'product' => [
            'name' => 'Product name',
            'category' => 'Category',
            'price' => 'Unit Price',
            'qty' => 'Quantity',
        ],
    ],

    // cms dashboard
    'dashboard' => [
        'statistic' => [
            'month' => [
                'name' => 'Statistics by month',
                'order' => [
                    'name' => 'Total number of orders in',
                    'property' => 'orders'
                ],
                'total' => [
                    'name' => 'Total amount in September',
                    'property' => 'VND'
                ],
                'user' => [
                    'name' => 'Total number of User',
                    'property' => 'users'
                ],
                'product' => [
                    'name' => 'Total number of Product',
                    'property' => 'products'
                ],
                'category' => [
                    'name' => 'Total number of categories',
                    'property' => 'categories'
                ],
            ],
            'year' => [
                'name' => 'Statistics by year',
                'name_order' => 'Statistic of order',
                'name_total' => 'Statistics of total order earning'
            ],
        ],
    ],

];
