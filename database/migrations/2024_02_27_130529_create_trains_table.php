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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',50);
            $table->string('arrival',100);
            $table->string('departure',100);
            $table->dateTime('arrival_time');
            $table->dateTime('departure_time');
            $table->integer('train_code')->unsigned();
            $table->smallInteger('carriages')->unsigned();
            $table->tinyInteger('on_time')->default('1');
            $table->tinyInteger('ereased')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
