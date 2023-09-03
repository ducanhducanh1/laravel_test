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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();// tu dong tao truong id
            $table->string('name');
            $table->string('slug');
            $table->string('brand_id');
            $table->string('price');
            $table->string('img')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->text('depscription')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
