<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentColumnsToEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->decimal('amount', 10, 2)->default(0);
            $table->string('payment_method')->default('cash');
            $table->string('payment_proof')->nullable();
            $table->date('payment_date')->default(now()->toDateString());
        });
    }

    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn(['amount', 'payment_method', 'payment_proof', 'payment_date']);
        });
    }
}