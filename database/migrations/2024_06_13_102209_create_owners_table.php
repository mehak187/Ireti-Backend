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
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('ownerName');
            $table->string('ownerCountry');
            $table->string('ownerAddress');
            $table->string('ownerCity');
            $table->string('ownerPostcode');
            $table->string('ownerDOB');
            $table->string('ownerPassport');
            $table->string('ownerExp');
            $table->string('ownerNationality');
            $table->string('ownerShare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
