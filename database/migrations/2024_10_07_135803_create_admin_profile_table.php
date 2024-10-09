<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('admin_profile', function (Blueprint $table) {
        $table->id();
        $table->string('username');
        $table->string('email');
        $table->string('admin_phone');
        $table->string('school_name');
        $table->string('school_address');
        $table->string('password');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_profile');
    }
};
