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
        Schema::table('skills', function (Blueprint $table) {

            $table->foreignId('skill_category_id')
                 ->nullable()
                ->after('id')
                ->constrained()
                ->nullOnDelete();

            $table->integer('percentage')
                ->default(80)
                ->after('name');

            $table->dropColumn('category');
            $table->dropColumn('icon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::table('skills', function (Blueprint $table) {

            $table->string('category')->nullable();

            $table->string('icon')->nullable();

            $table->dropForeign(['skill_category_id']);

            $table->dropColumn('skill_category_id');

            $table->dropColumn('percentage');
        });
    }
};
