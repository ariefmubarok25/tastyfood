<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {

            if (Schema::hasColumn('news', 'slug')) {
                $table->dropColumn('slug');
            }

            if (Schema::hasColumn('news', 'excerpt')) {
                $table->dropColumn('excerpt');
            }

            if (Schema::hasColumn('news', 'is_featured')) {
                $table->dropColumn('is_featured');
            }

            if (Schema::hasColumn('news', 'author')) {
                $table->dropColumn('author');
            }

            if (Schema::hasColumn('news', 'status')) {
                $table->dropColumn('status');
            }

            if (Schema::hasColumn('news', 'published_at')) {
                $table->dropColumn('published_at');
            }
        });
    }

    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {

            if (!Schema::hasColumn('news', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }

            if (!Schema::hasColumn('news', 'excerpt')) {
                $table->text('excerpt')->nullable()->after('slug');
            }

            if (!Schema::hasColumn('news', 'is_featured')) {
                $table->boolean('is_featured')->default(false);
            }

            if (!Schema::hasColumn('news', 'author')) {
                $table->string('author')->default('Admin');
            }

            if (!Schema::hasColumn('news', 'status')) {
                $table->enum('status', ['draft', 'published'])->default('draft');
            }

            if (!Schema::hasColumn('news', 'published_at')) {
                $table->timestamp('published_at')->nullable();
            }
        });
    }
};
