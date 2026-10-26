<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Maria Angela M. Catangay', 'email' => 'mariaangela@example.com', 'phone' => '09171234567'],
            ['id' => 2, 'full_name' => 'Cristine Joy Mendoza', 'email' => 'cristine@example.com', 'phone' => '09181234567'],
            ['id' => 3, 'full_name' => 'Kenneth Mantes', 'email' => 'kenneth@example.com', 'phone' => '09191234567'],
            ['id' => 4, 'full_name' => 'Gabriel Pelotenia', 'email' => 'gabriel@example.com', 'phone' => '09201234567'],
            ['id' => 5, 'full_name' => 'Juliana Alverio', 'email' => 'juliana@example.com', 'phone' => '09211234567'],
        ];

        return view('customers.index', compact('customers'));
    }
}
