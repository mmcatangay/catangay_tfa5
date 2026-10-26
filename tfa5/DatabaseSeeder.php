<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('activity_records')->insert([
            ['record_type' => 'customer', 'record_name' => 'Maria Angela M. Catangay', 'email' => 'mariaangela@example.com', 'role_or_phone' => '09171234567', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'customer', 'record_name' => 'Cristine Joy Mendoza', 'email' => 'cristine@example.com', 'role_or_phone' => '09181234567', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'customer', 'record_name' => 'Kenneth Mantes', 'email' => 'kenneth@example.com', 'role_or_phone' => '09191234567', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'customer', 'record_name' => 'Gabriel Pelotenia', 'email' => 'gabriel@example.com', 'role_or_phone' => '09201234567', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'customer', 'record_name' => 'Juliana Alverio', 'email' => 'juliana@example.com', 'role_or_phone' => '09211234567', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'user', 'record_name' => 'Maria Angela M. Catangay', 'email' => 'mariaangela@example.com', 'role_or_phone' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'user', 'record_name' => 'Cristine Joy Mendoza', 'email' => 'cristine@example.com', 'role_or_phone' => 'Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'user', 'record_name' => 'Kenneth Mantes', 'email' => 'kenneth@example.com', 'role_or_phone' => 'Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'user', 'record_name' => 'Gabriel Pelotenia', 'email' => 'gabriel@example.com', 'role_or_phone' => 'Manager', 'created_at' => now(), 'updated_at' => now()],
            ['record_type' => 'user', 'record_name' => 'Juliana Alverio', 'email' => 'juliana@example.com', 'role_or_phone' => 'Staff', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
