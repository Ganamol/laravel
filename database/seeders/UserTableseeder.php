<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableseeder extends Seeder
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
                'name'=>'anu',
                'email'=>'a@g.c'
            ]);
            User::create(
                [
                    'name'=>'minnu',
                    'email'=>'b@g.c'
                ]);
                User::create(
                    [
                        'name'=>'vinu',
                        'email'=>'bn@g.c'
                    ]);
    }
}
