<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jiri_project', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('jiri_id')->constrained('jiris');
            $table->foreignUuid('project_id')->constrained('projects');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jiri_project');
    }
};
