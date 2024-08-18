<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /**
         *--------------------------------------------------------------------------
         * Delete all users except admin
         *--------------------------------------------------------------------------
         *
         **/

        DB::table('users')->where('id', '>', 1)->delete();

        /**
         *--------------------------------------------------------------------------
         * Get role id having name = 'admin'
         *--------------------------------------------------------------------------
         *
         **/

        $role = Role::query()->where('name', '=', 'admin')->where('status', '=', 'active')->first();

        /**
         *--------------------------------------------------------------------------
         * Check whether role id is null or not
         *--------------------------------------------------------------------------
         *
         **/

        if (isset($role)) {
            $roleId = $role->id;
        } else {
            $roleId = null;
        }

        /**
         *--------------------------------------------------------------------------
         * Insert user having role admin to users table
         *--------------------------------------------------------------------------
         *
         **/

        DB::table('users')->insert([
            'id' => 1,
            'role_id' => $roleId,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminadmin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
    }
}