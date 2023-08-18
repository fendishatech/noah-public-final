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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('father_name');
            $table->string('last_name');
            $table->string('title')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->dateTime('dob');
            $table->enum('martial_status', ['married', 'single', 'divorced', 'widow']);
            $table->integer('family_no');
            $table->integer('family_males');
            $table->integer('family_females');
            $table->string('phone_no')->unique();
            $table->string('email')->nullable();
            $table->string('will_list');
            $table->string('password');
            $table->string('refreshToken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
