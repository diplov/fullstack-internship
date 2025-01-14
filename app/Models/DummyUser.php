<?php

namespace App\Models;

class DummyUser
{
    public static function getUsers()
    {
        return [
            [
                'username' => 'adminUser',
                'password' => 'adminPass123',  // In real-world applications, passwords should be hashed
                'role' => 'admin'
            ],
            [
                'username' => 'employeeUser',
                'password' => 'employeePass123',  // Same as above, passwords should be hashed
                'role' => 'employee'
            ]
        ];
    }
}