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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("invoice_code", 20)->uniqid;;
            $table->unsignedBigInteger('item_master_id');
            $table->foreign('item_master_id')->references('id')->on('item_masters');
            $table->date('date');
            $table->string('information', 100);
            $table->decimal('price', 10, 2); 
            $table->integer('qty',);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
