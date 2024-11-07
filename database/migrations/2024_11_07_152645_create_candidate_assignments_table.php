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
        Schema::create('candidate_assignments', function (Blueprint $table) {
            $table->id('assignment_id');
            $table->foreignId('candidate_id')->constrained('candidates', 'candidate_id');
            $table->foreignId('recruiter_id')->constrained('users', 'user_id');
            $table->timestamp('assigned_at')->useCurrent();
            $table->timestamp('end_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_assignments');
    }
};
