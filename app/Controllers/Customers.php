<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Dan Dela Cruz',
                'email' => 'Dan@gmail.com',
                'phone' => '0917123124'
            ],
            [
                'full_name' => 'Momo Santos',
                'email' => 'momo@gmail.com',
                'phone' => '091124124567'
            ],
            [
                'full_name' => 'Cyrus Manalili',
                'email' => 'cyrus@gmail.com',
                'phone' => '09191212321'
            ],
            [
                'full_name' => 'Lance Famoleras',
                'email' => 'lance@gmail.com',
                'phone' => '0920712124'
            ],
            [
                'full_name' => 'Marc DeLa Cruz',
                'email' => 'marck@gmail.com',
                'phone' => '09211231231'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}