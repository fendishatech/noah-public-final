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
        Schema::create('loans', function (Blueprint $table) {

            $table->id();

            // Member that took this loan
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members');

            $table->decimal('amount', 10, 2);
            $table->decimal('interest_rate');
            $table->integer('term_months');

            $table->date('start_date');
            $table->date('end_date')->nullable();

            // Loan status
            $table->enum('status', ['active', 'closed', 'failed'])->default('active');

            // User IDs who executed key actions  
            // $table->foreignId('created_by')->nullable(); // Admin who created loan
            // $table->foreignId('approved_by')->nullable(); // Admin who approved 
            // $table->foreignId('closed_by')->nullable(); // Admin who closed loan
            // $table->foreignId('written_off_by')->nullable(); // Admin who wrote off loan

            // Timestamps for status changes
            // $table->timestamp('status_updated_at')->nullable();
            // $table->timestamp('closed_at')->nullable();
            // $table->timestamp('written_off_at')->nullable();

            // Payment tracking
            // $table->integer('payment_failures')->default(0); // Missed payments
            $table->date('next_payment_due')->nullable();
            $table->date('last_payment_date')->nullable();

            // Logging and notes
            $table->text('remark')->nullable();
            // $table->text('collections_notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
