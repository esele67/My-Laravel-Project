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
    Schema::create('results', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('student_id');
        $table->unsignedBigInteger('teacher_id');
        $table->string('subject');
        $table->string('term');
        $table->decimal('test_score', 5, 2);
        $table->decimal('exam_score', 5, 2);
        $table->decimal('total_score', 5, 2);
        $table->unsignedBigInteger('class_id');
        $table->decimal('marks_percentage', 5, 2);
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
        Schema::dropIfExists('results');
    }
};
