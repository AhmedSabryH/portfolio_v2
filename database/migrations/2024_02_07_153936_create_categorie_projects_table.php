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
        Schema::create('categorie_projects', function (Blueprint $table) {
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();
            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->foreign('project_id')
            ->references('id')
            ->on('projects')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorie_projects');
    }
};
