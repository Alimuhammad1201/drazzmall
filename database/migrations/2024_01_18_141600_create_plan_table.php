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
        Schema::create('plan', function (Blueprint $table) {
            $table->id();
            $table->string('plan_type', 100);
            $table->string('plan_img', 100);
            $table->string('daily_earning', 300);
            $table->string('total_product', 800);
            $table->string('price', 200);
            $table->string('perday_balance', 200);
            $table->string('status', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan');
    }
};
