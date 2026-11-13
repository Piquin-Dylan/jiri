<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_project', function (Blueprint $table) {
            $table->primary(['project_id', 'contact_id']);
            $table->foreignUuid('project_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('contact_id')->constrained()->cascadeOnDelete();
            $table->string('link_github')->nullable();
            $table->string('link_website')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_project');
    }
};
