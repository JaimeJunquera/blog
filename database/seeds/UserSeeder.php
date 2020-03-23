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

        $professionId = Profession::where('title','Back-end developer')->value('id');

        factory(User::class)->create([
            'name' => 'Jaime Junquera',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId
        ]);

        factory(User::class, 48)->create();

    }
}
