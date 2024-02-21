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
        Schema::create('admin_headers', function (Blueprint $table) {
            $table->id();
            $table->string('logo_path');
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            // Thêm các trường khác nếu cần thiết
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_headers');
    }
};
