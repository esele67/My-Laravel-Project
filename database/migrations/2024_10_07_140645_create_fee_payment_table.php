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
    Schema::create('fee_payment', function (Blueprint $table) {
        $table->id();
        $table->string('p_name');
        $table->string('email');
        $table->string('phone');
        $table->string('s_name');
        $table->string('s_class');
        $table->string('remark')->nullable();
        $table->decimal('amount', 10, 2);
        $table->decimal('total_amount', 10, 2);
        $table->string('payment_type');
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
        Schema::dropIfExists('fee_payment');
    }
};
