<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jiri_contact', function (Blueprint $table) {
            $table->foreignUuid('jiri_id')->constrained('jiris');
            $table->foreignUuid('contact_id')->constrained('contacts');
            $table->primary(['jiri_id', 'contact_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jiri_contact');
    }
};
