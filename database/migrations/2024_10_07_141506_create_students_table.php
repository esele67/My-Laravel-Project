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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('firstname');
        $table->string('lastname');
        $table->string('student_id');
        $table->string('profile_photo')->nullable();
        $table->string('gender');
        $table->string('class');
        $table->date('enrollment_date');
        $table->string('email')->unique();
        $table->string('address');
        $table->string('parent_name');
        $table->string('phone');
        $table->string('health_state')->nullable();
        $table->decimal('school_fees', 10, 2);
        $table->text('content')->nullable();
        $table->decimal('total_amount', 10, 2);
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
        Schema::dropIfExists('students');
    }
};
