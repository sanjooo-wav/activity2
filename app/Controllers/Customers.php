<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'IV of Spades', 'email' => 'ivofspades@example.test', 'phone' => '+63 917 555 0101'],
            ['full_name' => 'Queen', 'email' => 'queen@example.test', 'phone' => '+63 917 555 0102'],
            ['full_name' => 'Eraserheads', 'email' => 'eraserheads@example.test', 'phone' => '+63 917 555 0103'],
            ['full_name' => 'The Beatles', 'email' => 'thebeatles@example.test', 'phone' => '+63 917 555 0104'],
            ['full_name' => 'Ben&Ben', 'email' => 'benandben@example.test', 'phone' => '+63 917 555 0105'],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}
