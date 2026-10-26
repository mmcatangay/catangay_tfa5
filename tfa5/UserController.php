<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Maria Angela M. Catangay', 'email' => 'mariaangela@example.com', 'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Cristine Joy Mendoza', 'email' => 'cristine@example.com', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Kenneth Mantes', 'email' => 'kenneth@example.com', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Gabriel Pelotenia', 'email' => 'gabriel@example.com', 'role' => 'Manager'],
            ['id' => 5, 'name' => 'Juliana Alverio', 'email' => 'juliana@example.com', 'role' => 'Staff'],
        ];

        return view('users.index', compact('users'));
    }
}
