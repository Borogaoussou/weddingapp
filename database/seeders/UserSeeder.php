<?php

namespace Database\Seeders;

use App\Models\User;
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
        if(config('admin.admin_name')){
            $admin = User::firstOrCreate(
              ['email'=>config('admin.admin_email')],
              [
                  'name' => config('admin.admin_name'),
                  'pseudo' => config('admin.admin_pseudo'),
                  'key'=>config('admin.admin_key'),
                  'password' => bcrypt(config('admin.admin_password')),
                  'Telephone'=> '777127842'
              ]
            );
        }
        User::factory()->count(10)->create();
    }
}
