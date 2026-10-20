<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('status', ['Planejando', 'Ativo', 'Em espera', 'Completo', 'Cancelado']);
            $table->foreignId('created_by')->constrained('users');
            $table->date('start_date')->default(null);
            $table->date('due_date')->nullable();
            $table->timestamp('completed_at');
            $table->timestamp('archived_at');
            $table->timestamps();
            $table->boolean('soft_del')->default(false);

        });
        DB::statement('ALTER TABLE projects ADD CONSTRAINT chk_due_date CHECK (due_date IS NULL OR due_date >= start_date)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
