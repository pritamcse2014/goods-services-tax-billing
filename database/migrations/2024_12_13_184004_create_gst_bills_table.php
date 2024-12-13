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
        Schema::create('gst_bills', function (Blueprint $table) {
            $table->id();
            $table->integer('parties_type_id')->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('invoice_no', 255)->nullable();
            $table->text('item_description')->nullable();
            $table->string('total_amount', 255)->nullable();
            $table->string('cgst_rate', 255)->nullable();
            $table->string('sgst_rate', 255)->nullable();
            $table->string('igst_rate', 255)->nullable();
            $table->string('cgst_amount', 255)->nullable();
            $table->string('sgst_amount', 255)->nullable();
            $table->string('igst_amount', 255)->nullable();
            $table->string('tax_amount', 255)->nullable();
            $table->string('net_amount', 255)->nullable();
            $table->text('declaration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gst_bills');
    }
};
