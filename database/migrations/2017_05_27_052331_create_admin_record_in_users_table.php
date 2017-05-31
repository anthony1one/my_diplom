<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRecordInUsersTable extends Migration
{
    public function up()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'knbarkova@gmail.com',
            'password' => bcrypt('fubppHwd'),
        ]);
    }

    public function down()
    {
        DB::table('users')->where('name', '=' ,'admin')->delete();
    }
}
