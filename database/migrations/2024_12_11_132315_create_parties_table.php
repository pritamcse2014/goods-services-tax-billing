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
        Schema::create('parties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parties_type_id')->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('phone_no', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('account_holder_name', 255)->nullable();
            $table->string('account_no', 255)->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->string('ifsc_code', 255)->nullable();
            $table->string('branch_address', 255)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
