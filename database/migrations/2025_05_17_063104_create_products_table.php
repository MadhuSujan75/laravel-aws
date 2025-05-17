<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Step 1: Create the table without the array column
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->jsonb('metadata')->nullable();
            $table->timestamps();
        });

        // Step 2: Add the 'tags' column as a PostgreSQL text array
        DB::statement("ALTER TABLE products ADD COLUMN tags TEXT[]");
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
