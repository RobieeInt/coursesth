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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //slug
            $table->string('slug')->unique();
            $table->string('uuid')->unique();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('active');
            $table->string('profession')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
