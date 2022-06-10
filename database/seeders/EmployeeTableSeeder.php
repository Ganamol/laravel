<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name'=>'manu',
            'email'=>'manu@g.c',
            'age'=>'54',
            'price'=>'100',
            'username'=>'ma',
            'password'=>'ma',
            'status'=>'true'
        ]);
    }
}
