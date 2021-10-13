<?php

return [
    '__name' => 'purchase',
    '__version' => '0.1.0',
    '__git' => 'git@github.com:getmim/purchase.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/purchase' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-enum' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'product' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Purchase\\Model' => [
                'type' => 'file',
                'base' => 'modules/purchase/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'purchase.status' => [
                'Canceled',
                'Draft',
                'Checkout',
                'Paid',
                'Delivering',
                'Delivered',
                'Returning',
                'Returned'
            ],
            'purchase-payment.status' => [
                'Canceled',
                'Pending',
                'Paid'
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'purchase' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'invoice' => [
                    'type' => 'text'
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'purchase.status'
                ],
                'items' => [
                    'type' => 'number'
                ],
                'quantity' => [
                    'type' => 'number'
                ],
                'courier' => [
                    'type' => 'json'
                ],
                'courier_fee' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'courier_receipt' => [
                    'type' => 'text'
                ],
                'destination' => [
                    'type' => 'json'
                ],
                'price' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'total' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'purchase-delivery' => [
                'id' => [
                    'type' => 'number'
                ],
                'purchase' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Purchase\\Model\\Purchase',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'purchase'
                ],
                'data' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'purchase-payment' => [
                'id' => [
                    'type' => 'number'
                ],
                'purchase' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Purchase\\Model\\Purchase',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'purchase'
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'purchase-payment.status'
                ],
                'fee' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'total' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'method' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'purchase-product' => [
                'id' => [
                    'type' => 'number'
                ],
                'purchase' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Purchase\\Model\\Purchase',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'purchase'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product'
                ],
                'quantity' => [
                    'type' => 'number'
                ],
                'price' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'total' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
