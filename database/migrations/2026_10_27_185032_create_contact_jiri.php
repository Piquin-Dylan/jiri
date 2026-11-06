<?php

use App\Enums\ContactRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_jiri', function (Blueprint $table) {
            $table->foreignUuid('jiri_id')->constrained('jiris');
            $table->foreignUuid('contact_id')->constrained('contacts');
            $table->primary(['jiri_id', 'contact_id']);
            $table->enum('status', ContactRole::cases());
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_jiri');
    }
};
