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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            // Nullable — guest boleh komentar (name + email wajib diisi di form)
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            // Untuk reply / nested comment
            $table->foreignId('parent_id')
                  ->nullable()
                  ->constrained('comments')
                  ->cascadeOnDelete();

            // Polymorphic: posts | serambi_pengasuh | galleries
            $table->morphs('commentable');

            // Kolom guest
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent')->nullable();

            $table->text('body');
            $table->boolean('is_approved')->default(true);
            $table->boolean('is_pinned')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['commentable_type', 'commentable_id', 'is_approved']);
            $table->index('parent_id');
            $table->index('is_approved');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
