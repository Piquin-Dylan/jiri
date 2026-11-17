<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evaluator_emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_jiri_id')
                ->constrained('contact_jiri')
                ->cascadeOnDelete();

            $table->string('subject');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluator_emails');
    }
};
