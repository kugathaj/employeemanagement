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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();   //Autoincrement "id"  auto increment
            $table->string('name', 255);
            $table->string('description', 255);
            $table->date('start_date')->nullable();
            $table->date('end_date');
            $table->string('status', 50);
            $table->unsignedBigInteger('project_manager_id');
            $table->decimal('budget', 8, 2);
            $table->decimal('actual_cost', 8, 2)->nullable();
            $table->string('priority', 50);
            $table->string('comments', 255)->nullable()->default('No Comments');
            $table->timestamps();   // created_at , updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
