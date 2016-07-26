<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'Julien',
                    'password' => Hash::make('sophie'),
                    'role' => 'teacher',
                ],
                [
                    'username' => 'Sophie',
                    'password' => Hash::make('sophie'),
                    'role' => 'first_class',
                ],
                [
                    'username' => 'Dalouny',
                    'password' => Hash::make('dalouny'),
                    'role' => 'first_class',
                ],
                [
                    'username' => 'David',
                    'password' => Hash::make('david'),
                    'role' => 'final_class',
                ],
                [
                    'username' => 'Jim',
                    'password' => Hash::make('jim'),
                    'role' => 'final_class',
                ],
            ]
        );
    }
}
