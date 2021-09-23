<?php

return [
    '__name' => 'purchase',
    '__version' => '0.0.1',
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
                'Delivered'
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
                    'type' => 'json',
                    'format' => 'purchase.courier'
                ],
                'courier_fee' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'courier_receipt' => [
                    'type' => 'text'
                ],
                'destination' => [
                    'type' => 'json',
                    'format' => 'purchase.destination'
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
            'purchase.courier' => [
                'provider' => [
                    'type' => 'text'
                ],
                'package' => [
                    'type' => 'text'
                ],
                'info' => [
                    'type' => 'text'
                ]
            ],
            'purchase.destination' => [
                'province' => [
                    'type' => 'text'
                ],
                'city' => [
                    'type' => 'text'
                ],
                'district' => [
                    'type' => 'text'
                ],
                'subdistrict' => [
                    'type' => 'text'
                ],
                'street' => [
                    'type' => 'text'
                ],
                'zipcode' => [
                    'type' => 'text'
                ],
                'recipient' => [
                    'type' => 'text'
                ],
                'phone' => [
                    'type' => 'text'
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
                'info' => [
                    'type' => 'text'
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
