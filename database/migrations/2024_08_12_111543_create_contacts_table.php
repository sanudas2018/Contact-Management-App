<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Data base Table and column Create with condition.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table -> id();
            $table -> string('name', 50);
            $table -> string('email', 50) -> unique();
            $table -> string('phone')->nullable();
            $table -> string('address')->nullable();
            
            $table -> timestamp('created_at') -> useCurrent();
            $table -> timestamp('updated_at') -> useCurrent() -> useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
