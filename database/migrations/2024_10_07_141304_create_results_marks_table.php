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
    Schema::create('results_marks', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('result_id');
        $table->unsignedBigInteger('subject_id');
        $table->decimal('mark', 5, 2);
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
        Schema::dropIfExists('results_marks');
    }
};
