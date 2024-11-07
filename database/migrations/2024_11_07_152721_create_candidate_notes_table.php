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
        Schema::create('candidate_notes', function (Blueprint $table) {
            $table->id('note_id');
            $table->foreignId('candidate_id')->constrained('candidates', 'candidate_id');
            $table->foreignId('created_by')->constrained('users', 'user_id');
            $table->text('note_content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_notes');
    }
};
