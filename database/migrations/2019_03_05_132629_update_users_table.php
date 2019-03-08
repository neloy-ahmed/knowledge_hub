<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 15)->after('name');
            $table->string('facebook_profile_id')->after('phone');
            $table->string('linkedin_profile_id')->after('facebook_profile_id');
            $table->string('designation')->after('linkedin_profile_id');
            $table->string('work_at')->after('designation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('facebook_profile_id');
            $table->dropColumn('linkedin_profile_id');
            $table->dropColumn('designation');
            $table->dropColumn('work_at');
        });
    }
}
