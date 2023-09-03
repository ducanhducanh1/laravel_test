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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();// tu dong tao truong id
            $table->string('name');
            $table->string('slug');
            $table->string('img')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->string('depscription')->nullable();
            $table->timestamps();// tu dong tao 2 truong creat_at update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
