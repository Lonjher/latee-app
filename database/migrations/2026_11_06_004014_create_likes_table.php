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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            // Polymorphic: posts | serambi_pengasuh | galleries
            $table->morphs('likeable');

            $table->timestamps();

            // 1 user hanya bisa like sekali per target
            $table->unique(
                ['user_id', 'likeable_type', 'likeable_id'],
                'likes_user_likeable_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
