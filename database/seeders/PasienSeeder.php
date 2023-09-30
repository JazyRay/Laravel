<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasiens')->insert([
            'Nama' => 'Jazy',
            'JenisKelamin' => 'Laki-laki',
            'NomorTelepon' => '085298214101',     
            
        ]);
        
        
    }
}
