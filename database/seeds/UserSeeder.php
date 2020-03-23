<?php

use \App\Profession;
use App\User;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = ? LIMIT 0,1', ['Back-end developer']);

        $professionID = Profession::where('title','Back-end developer')->value('id');

        User::create([
            'name' => 'Jaime Junquera',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'profession_id' => $professionID
        ]);
    }
}
