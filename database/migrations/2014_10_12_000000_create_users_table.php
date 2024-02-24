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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('code')->nullable();
            $table->string('lang')->default('ar');
            $table->enum('status' , ['Active' , 'Inactive'])->default('Inactive');
            $table->enum('gender' , ['Male' , 'Female'])->default('Male');
            $table->date('date_of_birth')->nullable();
            $table->boolean('verified')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('fcm_token')->nullable();
            $table->string('provider_id')->nullable();
            $table->text('extension')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
