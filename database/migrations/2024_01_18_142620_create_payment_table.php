<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->string('full_name', 300);
            $table->string('card_no', 300);
            $table->string('date', 300);
            $table->string('cvc', 300);
            $table->string('address', 300);
            $table->string('state', 300);
            $table->string('zip', 300);
            $table->string('fullname', 300);
            $table->string('phone_no', 300);
            $table->timestamps();
        });
    }
    // $table->string('total', 300);

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
