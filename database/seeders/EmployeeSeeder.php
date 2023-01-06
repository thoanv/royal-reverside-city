<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => 'Quản trị cấp cao',
            'username' => 'super_admin',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('@'),
            'is_admin' => 1,
        ]);

    }
}
