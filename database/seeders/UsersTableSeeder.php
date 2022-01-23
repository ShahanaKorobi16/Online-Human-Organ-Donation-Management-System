<?php

namespace Database\Seeders;
use App\Models\User;
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
        User::create(
            [
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123'),
                'date_of_birth'=>'1999-11-28',
                'weight'=>'62',
                'blood_group'=>'A+',
                'gender'=>'Female',
                'nid'=>'8832689428',
                'contact'=>'01600000095',
                'address'=>'Uttara, Dhaka',
                'role'=>'admin'
            ]
        );
    }
}
