<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Andrija',
                'email'          => 'andrija@alicorn.me',
                'password'       => '$2y$10$7EMc/1kS3h/LOzH9IkXakOzHi9EG1PCDhmO3ckYlZcIh8R2jnQ0WK',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Ivana',
                'email'          => 'ivana@alicorn.me',
                'password'       => '$2y$10$7EMc/1kS3h/LOzH9IkXakOzHi9EG1PCDhmO3ckYlZcIh8R2jnQ0WK',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
