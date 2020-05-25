<?php

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => '2005 - 2006',
        ]);
        DB::table('teams')->insert([
            'name' => '2007- 2008',
        ]);
        DB::table('teams')->insert([
            'name' => '2009',
        ]);
        DB::table('teams')->insert([
            'name' => '2010 - 2011',
        ]);
        DB::table('teams')->insert([
            'name' => '2012 - 2014',
        ]);
    }
}
