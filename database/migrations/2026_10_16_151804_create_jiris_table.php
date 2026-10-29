<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jiris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name_project');
            $table->string('description');
            $table->date('date_jiri');
            $table->string('hours_start');
            $table->string('hours_end');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jiris');
    }
};
