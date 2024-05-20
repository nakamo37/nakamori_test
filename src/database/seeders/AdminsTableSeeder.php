<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '山田　太郎',
            'gender' => '男性',
            'email' => 'test@example.com',
            'select' => '商品の交換について',
        ];
        DB::table('contacts')->insert($param);
        // factory(User::class,35)->create();
    }
}
