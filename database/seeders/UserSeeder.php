<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [

            [
                'id' => 1,
                'nom_user' => 'ndiaye',
                'prenom_user' => 'ibrahima',
                'email' => 'ndiayeibrahima411@gmail.com',
                'role_id' => 2,
                'password' => bcrypt('matydiop1234'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'id' => 2,
                'nom_user' => 'diop',
                'prenom_user' => 'maty',
                'email' => 'diopmaty@gmail.com',
                'role_id' => 1,
                'password' => bcrypt('matydiop1234'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

        ];

        DB::table('users')->insert($user);
    }
}
