<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin 1',
                'full_name' => 'Dan Dela Cruz',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier 1',
                'full_name' => 'Momo Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff 1',
                'full_name' => 'Cyrus Manalili',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager 1',
                'full_name' => 'Lance Famoleras',
                'role' => 'Manager'
            ],
            [
                'username' => 'cashier 2',
                'full_name' => 'Marc DeLa Cruz',
                'role' => 'Cashier'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}