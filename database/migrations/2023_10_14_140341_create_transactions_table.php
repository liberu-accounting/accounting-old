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
            $table->integer('transaction_id', true);
            $table->date('transaction_date');
            $table->text('transaction_description');
            $table->decimal('amount', 10, 2);
            $table->unsignedBigInteger('debit_account_id');
            $table->unsignedBigInteger('credit_account_id'); 
            $table->timestamps();

            $table->foreign('debit_account_id')->references('account_id')->on('accounts');
            $table->foreign('credit_account_id')->references('account_id')->on('accounts');
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
