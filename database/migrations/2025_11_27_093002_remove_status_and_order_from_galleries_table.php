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
        Schema::table('galleries', function (Blueprint $table) {
            // Hapus kolom
            if (Schema::hasColumn('galleries', 'is_active')) {
                $table->dropColumn('is_active');
            }
            if (Schema::hasColumn('galleries', 'order')) {
                $table->dropColumn('order');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            // Tambahkan kembali kolom
            if (!Schema::hasColumn('galleries', 'is_active')) {
                $table->boolean('is_active')->default(1);
            }
            if (!Schema::hasColumn('galleries', 'order')) {
                $table->integer('order')->default(0);
            }
        });
    }
};
