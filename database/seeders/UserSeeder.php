<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name ='Ricardo Couoh';
        $user->email ='21890233@ittizimin.edu.mx';
        $user->password =bcrypt('123456789');
        $user->save();
    }
}
