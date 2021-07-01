<?php namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'good' => 1,
            'admin' => 1,
            'role_id' => 1,
            'email' => 'admin@corrosion.kz',
            'surname' => 'Администратор',
            'name' => 'corrosion.kz',
            'password' => bcrypt('111'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

    }
}
