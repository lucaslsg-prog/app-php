<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@email.com',
                'password' => '12345678',
                'admin' => true
            ],
            [
                'name' => 'User',
                'email' => 'user@email.com',
                'password' => '12345678',
                'admin' => false
            ]
        ];

        foreach($users as $u) {
            User::firstOrCreate(
                [
                    'email' => $u['email']
                ],
                [
                    'name' => $u['name'],
                    'email' => $u['email'],
                    'password' => $u['password'],
                    'admin' => $u['admin']
                ]
            );
        }
    }
}
