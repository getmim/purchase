<?php

return [
    'Purchase\\Model\\Purchase' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'status' => [
                'comment' => '0 Canceled, 1 Draft, 2 Checkout, 3 Paid, 4 Delivering, 5 Delivered',
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 1
                ],
                'index' => 3000
            ],
            'items' => [
                'comment' => 'Total product item',
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 4000
            ],
            'quantity' => [
                'comment' => 'Total product quantity',
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 5000
            ],
            'courier' => [
                'comment' => '{provider, package, info}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 6000
            ],
            'courier_fee' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true
                ],
                'index' => 7000
            ],
            'courier_receipt' => [
                'comment' => 'Courier RESI number',
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'unique' => true
                ],
                'index' => 8000
            ],
            'destination' => [
                'comment' => '{province, city, district, subdistrict, street, zipcode, recipient, phone}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 9000
            ],
            'price' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 9000
            ],
            'total' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 10000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 12000
            ]
        ]
    ],
    'Purchase\\Model\\PurchaseDelivery' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'purchase' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'info' => [
                'type' => 'VARCHAR',
                'length' => 200,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ],
    'Purchase\\Model\\PurchasePayment' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'purchase' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'status' => [
                'comment' => '0 Canceled, 1 Pending, 2 Paid',
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 1
                ],
                'index' => 3000
            ],
            'method' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 4000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ],
    'Purchase\\Model\\PurchaseProduct' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'purchase' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'product' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 3000
            ],
            'quantity' => [
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 4000
            ],
            'price' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 5000
            ],
            'total' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 6000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];
