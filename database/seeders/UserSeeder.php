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
                  'password' => bcrypt(config('admin.admin_password')),
              ]
            );
        }
        //User::factory()->count(10)->create();
    }
}
