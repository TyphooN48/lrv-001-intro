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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->string('surname');
            $table->string('name');
            //$table->dateTime('created_at')->default(date("Y-m-d H:i:s"));
            //$table->dateTime('updated_at')->default(date("Y-m-d H:i:s"));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
