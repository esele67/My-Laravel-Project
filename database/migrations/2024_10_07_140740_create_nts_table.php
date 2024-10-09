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
    Schema::create('nts', function (Blueprint $table) {
        $table->id();
        $table->string('firstname');
        $table->string('lastname');
        $table->string('role');
        $table->string('gender');
        $table->string('alt_contact_p')->nullable();
        $table->date('employment_date');
        $table->string('email');
        $table->string('address');
        $table->string('phone');
        $table->string('health_state')->nullable();
        $table->decimal('salary', 10, 2);
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
        Schema::dropIfExists('nts');
    }
};
