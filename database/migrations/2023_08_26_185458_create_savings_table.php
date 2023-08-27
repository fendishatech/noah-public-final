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
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')
                ->references('id')->on('members')
                ->onDelete('CASCADE'); // Foreign key

            $table->string('account_number')->unique();
            $table->enum('account_type', ['regular', 'special']);
            $table->decimal('interest_rate');
            $table->decimal('balance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
