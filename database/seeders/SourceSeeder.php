<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $source = [

            [
                'id' => 1,
                'libelle' => 'djolof sport',
                'description' => 'Une boutique specialisee dans la vente de accessoire sportif',
                'photo_source' => null,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

        ];

        DB::table('sources')->insert($source);
    }
}
