<?php
class UserSeeder
extends DatabaseSeeder
{
    public function run()
    {
        $users = [
            [
                "username" => "Nick",
                "password" => Hash::make("admin"),
                "email"    => "nick@jdslabs.com"
            ]
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}